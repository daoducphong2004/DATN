<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Element\Image;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\Element\Paragraph;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class DocxController extends Controller
{
    public function readWordFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:docx',
        ]);

        $filePath = $request->file('file')->getPathname();
        $zip = new ZipArchive;
        $content = [];

        if ($zip->open($filePath) === TRUE) {
            // Load the Word file
            $phpWord = IOFactory::load($filePath);
            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {
                    if ($element instanceof TextRun) {
                        $content[] = $this->getTextRunContent($element, $zip);
                    } elseif ($element instanceof Table) {
                        $content[] = $this->getTableContent($element, $zip);
                    } elseif ($element instanceof Paragraph) {
                        // Detect headers by checking the style of the paragraph
                        $content[] = $this->getHeaderContent($element, $zip);
                    }
                }
            }
            $zip->close();
        } else {
            return response()->json(['error' => 'Unable to open the file.'], 500);
        }

        return response()->json($content);
    }

    private function getTextRunContent(TextRun $textRun, ZipArchive $zip)
    {
        $textContent = '';
        $lineStyle = null;

        foreach ($textRun->getElements() as $element) {
            if ($element instanceof Image) {
                // Return the image as an HTML <img> tag
                $imageContent = $this->getImageContent($element, $zip);
                $textContent .= $imageContent['content']; // Append the image HTML
            } elseif (method_exists($element, 'getText')) {
                $textContent .= $element->getText();
                if (!$lineStyle) {
                    $lineStyle = $element->getFontStyle();
                }
            }
        }

        // Get style details for text if available
        $styleDetails = $this->getFontStyleDetails($lineStyle);

        return [
            'text' => $textContent,
            'style' => is_array($styleDetails) ? json_encode($styleDetails) : $styleDetails,
        ];
    }

    private function getFontStyleDetails($fontStyle)
    {
        if (!$fontStyle) {
            return null;
        }

        $styleDetails = [
            'bold' => $fontStyle->isBold(),
            'italic' => $fontStyle->isItalic(),
            'underline' => $fontStyle->getUnderline(),
            'font_size' => $fontStyle->getSize(),
            'font_color' => $fontStyle->getColor(),
            'font_family' => $fontStyle->getName(),
        ];

        return $styleDetails;
    }

    private function getImageContent(Image $image, ZipArchive $zip)
    {
        $imagePath = 'word/' . $image->getSource();
        $imageName = basename($imagePath);
        $imageStoragePath = 'chapters/' . $imageName;
    
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $stat = $zip->statIndex($i);
            if (basename($stat['name']) == $imageName) {
                // Extract the image data from the ZIP file
                $imageData = $zip->getFromIndex($i);
    
                // Save the image to public storage and create a URL
                Storage::disk('public')->put($imageStoragePath, $imageData);
                $imageUrl = Storage::url($imageStoragePath);
    
                // Get the dimensions of the saved image
                $imagePathOnDisk = storage_path('app/public/' . $imageStoragePath);
                $imageSize = getimagesize($imagePathOnDisk); // Get image size
    
                // Return image as <img> tag with style for width and height
                return [
                    'type' => 'image',
                    'url' => $imageUrl,
                    'content' => '<img src="' . $imageUrl . '" style="width:' . $imageSize[0] . 'px; height:' . $imageSize[1] . 'px;" />',
                    'style' => [
                        'width' => $imageSize[0],
                        'height' => $imageSize[1],
                    ],
                ];
            }
        }

        return [
            'type' => 'image',
            'url' => null,
            'content' => null,
            'error' => 'Image not found in archive: ' . $imagePath
        ];
    }

    private function getTableContent(Table $table, ZipArchive $zip)
    {
        $tableContent = '<table border="1" style="border-collapse: collapse;">';

        foreach ($table->getRows() as $row) {
            $tableContent .= '<tr>';

            foreach ($row->getCells() as $cell) {
                $cellContent = '';
                foreach ($cell->getElements() as $element) {
                    if ($element instanceof TextRun) {
                        $textContent = $this->getTextRunContent($element, $zip);
                        $cellContent .= $textContent['text'];
                    } elseif ($element instanceof Image) {
                        $imageContent = $this->getImageContent($element, $zip);
                        $cellContent .= $imageContent['url'];
                    }
                }

                $tableContent .= '<td>' . $cellContent . '</td>';
            }

            $tableContent .= '</tr>';
        }

        $tableContent .= '</table>';

        return [
            'type' => 'table',
            'content' => $tableContent,
        ];
    }
    private function getHeaderContent(Paragraph $paragraph, ZipArchive $zip)
    {
        // Check if the paragraph is a header (Heading 1, Heading 2, etc.)
        $style = $paragraph->getStyle();
        $headingLevel = null;

        if ($style) {
            $headingLevel = $style->getName();
        }

        if (strpos($headingLevel, 'Heading') !== false) {
            // Determine header level (Heading 1, Heading 2, etc.)
            $headerTag = 'h' . substr($headingLevel, -1);

            // Get the text content of the paragraph
            $textRunContent = $this->getTextRunContent($paragraph, $zip);

            return [
                'type' => 'header',
                'content' => "<{$headerTag}>{$textRunContent['text']}</{$headerTag}>",
                'style' => $textRunContent['style'],
            ];
        }

        return null;
    }
}
