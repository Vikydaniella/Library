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
        
        public function show($id){
        $book = Book::find($id);
        return view('book.show',['book'=>$book]);
    } 
    public function create(){
        return view('book.create');
    }

    public function store(Request $request, Book $registration){

        $book = $request -> validate([
        'title'=>'required',
        'author'=>'required',
        'category'=>['required','email'],
        'year_of_publication'=>'required',
        'isbn'=>'required',
        ]);
        $book['user_id']= auth()->id();
        
        Book::create($book);
        Alert::success('Success', 'Application successful');
        return redirect('/');
    }
    public function review(){
        return view('book.review');
    }

    public function delete(){
        return view('book.delete');
    }
}
