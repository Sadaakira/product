<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index(Book $book)
    {
        return view('index')->with(['books' => $book->get()]);
    }
}
