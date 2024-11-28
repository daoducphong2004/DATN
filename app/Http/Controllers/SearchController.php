<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->input('title');

        $data_book = Book::where('title','LIKE',"%{$title}%")->get();
        return view('home.search',compact('data_book','title'));
    }
    public function indexRe(Request $request){
        return view('home.search');
    }
    public function indexShow(Request $request)
    {
        $title = $request->get('title');

        $data_book = Book::where('title','LIKE',"%{$title}%")->get();
        return view('home.search_re',compact('data_book','title'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
