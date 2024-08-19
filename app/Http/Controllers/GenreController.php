<?php

namespace App\Http\Controllers;

use App\Models\genre;
use App\Http\Requests\StoregenreRequest;
use App\Http\Requests\UpdategenreRequest;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregenreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategenreRequest $request, genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        //
    }
}
