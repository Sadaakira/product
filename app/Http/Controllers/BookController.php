<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
// use App\Http\Requests\WordRequest;
use App\Book;
use App\Word;
use App\Language;
use App\User;

class BookController extends Controller
{
    public function index(Book $book)
    {
        return view('Books.index')->with(['books' => $book->get()]);
    }
    
    
    public function create()
    {
        return view('Books.create');
    }
    
    public function edit(Book $book, Word $word)
    {
        return view('Books.edit')->with(['book' => $book, 'word' => $word]);
    }
    
    public function update(BookRequest $request, Book $book)
    {
        $input = $request['book'];
        // dd($input);
        $book->fill($input)->save();
        return redirect('/books/' . $book->id . '/words');
       
    }
    
    // public function bookdestroy(Book $book)
    // {
    //     $book->delete();
    //     return redirect('/');
    // }
    
    
    
    public function show(Book $book, Word $word)
    {
        return view('Books.show')->with(['book' => $book, 'word'=>$word, 'words' => $book->words]);
    }
    
    public function store(BookRequest $request, Book $book)
    {
        // dd($request->all());
        $input = $request['book'];
        $book->fill($input)->save();
        return redirect('/books/' . $book->id . '/words');
        //リダイレクト、idの位置に注意
    }
    
    
    


}