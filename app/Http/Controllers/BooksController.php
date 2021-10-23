<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
    public function book(Word $word)
    {
        return view('book')->with(['words' => $word->get()]);
    }
    
}
