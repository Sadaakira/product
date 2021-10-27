<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;
use App\Word;
use App\Language;
use App\User;

class BooksController extends Controller
{
    public function index(Book $book)
    {
        return view('index')->with(['books' => $book->get()]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function add()
    {
        return view('add');
    }
    
    public function book(Word $word)
    {
        return view('book')->with(['words' => $word->get()]);
    }
    
    public function store(Request $request, Book $book)
    {
        dd($request->all());
        //$input = $request['books'];
        //$book->fill($input)->save();
        //return redirect('/books/' . $book->id);
    }
    
}
