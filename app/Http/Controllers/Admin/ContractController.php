<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Book;
use App\Models\User;
use App\Http\Requests\ContractRequest;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the contracts.
     */
    public function index()
    {
        $contracts = Contract::with(['book', 'user'])->get();
        return view('admin.contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new contract.
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('admin.contracts.create', compact('books', 'users'));
    }

    /**
     * Store a newly created contract in storage.
     */
    public function store(ContractRequest $request)
    {
        Contract::create($request->validated());
        return redirect()->route('contracts.index')->with('success', 'Contract created successfully');
    }

    /**
     * Display the specified contract.
     */
    public function show(Contract $contract)
    {
        $contract->load(['book', 'user']);
        return view('admin.contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified contract.
     */
    public function edit(Contract $contract)
    {
        $books = Book::all();
        $users = User::all();
        return view('admin.contracts.edit', compact('contract', 'books', 'users'));
    }

    /**
     * Update the specified contract in storage.
     */
    public function update(ContractRequest $request, Contract $contract)
    {
        $contract->update($request->validated());
        return redirect()->route('contracts.index')->with('success', 'Contract updated successfully');
    }

    /**
     * Remove the specified contract from storage.
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return redirect()->route('contracts.index')->with('success', 'Contract deleted successfully');
    }
}
