<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Books;

class BookstoreAdminController extends Controller
{
    protected $books;
    public function __construct(){
        $this->books = new Books();
        
    }
    public function index()
    {
        return $this->books->all();
     
    }
    
    public function store(Request $request)
    {
        return $this->books->create($request->all());
    }
  
    public function show(string $id)
    {
        return $books = $this->books->find($id);  
    }

    public function update(Request $request, string $id)
    {
         $books = $this->books->find($id);
         $books->update($request->all());
         return $books;
    }
    public function destroy(string $id)
    {
        $books = $this->books->find($id);
        return $books->delete();   
    }
}