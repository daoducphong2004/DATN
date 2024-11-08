<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublishingCompanyRequest;
use App\Models\PublishingCompany;
use Exception;


class PublishingCompanyController extends Controller
{
    public function index()
    {
        $publishing_companys = PublishingCompany::paginate(10);
        // dd($publishing_company);
        try {
            return view('admin.publishing_company.index', compact('publishing_companys'));
        } catch (Exception $e) {
            // return back()->withErrors(['error' => 'Failed to load publishing_company: ' . $e->getMessage()]);
            $errorMessage = 'Failed to load publishing_company: ' . $e->getMessage();
            return view('admin.publishing_company.index', compact('errorMessage'));
        }
    }

    public function create()
    {
        try {
            return view('admin.publishing_company.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StorePublishingCompanyRequest $request)
    {
        try {
            PublishingCompany::create($request->validated());
            return redirect()->route('publishing_company_index')->with('success', 'publishing_company created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create publishing_company: ' . $e->getMessage()]);
        }
    }

    public function edit(PublishingCompany $id)
    {
        try {
            return view('admin.publishing_company.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StorePublishingCompanyRequest $request, PublishingCompany $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('publishing_company_index')->with('success', 'publishing_company updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update publishing_company: ' . $e->getMessage()]);
        }
    }

    public function destroy(PublishingCompany $id)
    {
        try {
            $id->delete();
            return redirect()->route('publishing_company_index')->with('success', 'publishing_company deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete publishing_company: ' . $e->getMessage()]);
        }
    }
}
