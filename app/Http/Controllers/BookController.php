<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {

        $books = Book::paginate(2);
        return view('library', compact('books'));

    }
    
        
    public function show($id){
        $book = Book::find($id);
        return view('book.show',['book'=>$book]);
    } 
    public function create(){
        return view('book.create');
    }

    public function store(Request $request, Book $book){

        $book = $request -> validate([
        'title'=>'required',
        'author'=>'required',
        'category'=>['required','email'],
        'year_of_publication'=>'required',
        'isbn'=>'required',
        ]);
        $book['user_id']= auth()->id();
        
        Book::create($book);
        Alert::success('Success', 'Book Created successful');
        return redirect('/');
    }
    public function edit(Book $book){
        return view('book.review', ['book'=>$book]);
    }

    public function delete(){
        return view('book.delete');
    }
}
