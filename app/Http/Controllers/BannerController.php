<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::query()->latest('id')->paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required',
            'image_path' => 'required', // Ensure it's an image file
            'device_type' => 'nullable',
        ]);
        // Check if a banner for the selected device type already exists
        $existingBanner = Banner::where('device_type', $request->device_type)->first();
        if ($existingBanner) {
            return redirect()->back()->withErrors([
                'device_type' => 'A banner for ' . $request->device_type . ' already exists.',
            ]);
        }
        // Handle file upload
        if ($request->hasFile('image_path')) {
            $filePath = $request->file('image_path')->store('banners', 'public'); // Store in 'storage/app/public/banners'
        }

        // Create banner with the uploaded file path
        Banner::create([
            'title' => $request->title,
            'image_path' => $filePath, // Save the file path to the database
            'device_type' => $request->device_type,
            'is_active' => $request->boolean('is_active'), // Safely handle checkbox for 'is_active'
        ]);

        return redirect()->route('banners.index')
            ->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        // Validate input data
        $request->validate([
            'title' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image validation
            'device_type' => 'nullable',
        ]);
        // Check if a banner for the selected device type already exists (excluding the current banner)
        $existingBanner = Banner::where('device_type', $request->device_type)
            ->where('id', '!=', $banner->id)
            ->first();
        if ($existingBanner) {
            return redirect()->back()->withErrors([
                'device_type' => 'A banner for ' . $request->device_type . ' already exists.',
            ]);
        }
        // Handle file upload if a new file is provided
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if ($banner->image_path) {
                Storage::disk('public')->delete($banner->image_path);
            }

            // Store the new image and update the file path
            $filePath = $request->file('image_path')->store('banners', 'public');
        } else {
            // Keep the old path if no new file is uploaded
            $filePath = $banner->image_path;
        }

        // Update the banner with the new data
        $banner->update([
            'title' => $request->title,
            'image_path' => $filePath, // Update with new or existing file path
            'device_type' => $request->device_type,
            'is_active' => $request->boolean('is_active'), // Default to false if not checked
        ]);

        return redirect()->route('banners.index')
            ->with('success', 'Banner updated successfully.');
    }


    public function destroy(Banner $banner)
    {
        // Delete the file from storage
        if ($banner->image_path) {
            Storage::disk('public')->delete($banner->image_path);
        }

        // Delete the banner record
        $banner->delete();

        return redirect()->route('banners.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
