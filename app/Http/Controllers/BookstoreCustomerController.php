<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BookstoreCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->books = new Books();
        
    }
    public function index()
    {
        //
        return $this->books->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $this->books->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $query)
    {
        //
        // return $books = $this->books->find($id);  
        return $books = $this->books->where('id', 'like', '%' . $query . '%')
                  ->orWhere('title', 'like', '%' . $query . '%')
                  ->orWhere('author', 'like', '%' . $query . '%')
                  ->orWhere('genre', 'like', '%' . $query . '%')
                  ->orWhere('description', 'like', '%' . $query . '%')
                  ->orWhere('isbn', 'like', '%' . $query . '%')
                  ->orWhere('image', 'like', '%' . $query . '%')
                  ->orWhere('published', 'like', '%' . $query . '%')
                  ->orWhere('publisher', 'like', '%' . $query . '%')
                  ->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $books = $this->books->find($id);
         $books->update($request->all());
         return $books;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $books = $this->books->find($id);
        return $books->delete();   
    }
}
