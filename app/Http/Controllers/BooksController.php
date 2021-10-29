<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\WordRequest;
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
    
    public function bookedit(Book $book, Word $word)
    {
        return view('bookedit')->with(['book' => $book, 'word' => $word]);
    }
    
    public function bookupdate(BookRequest $request, Book $book)
    {
        $input = $request['post'];
        $book->fill($input)->save();
        return redirect('/books/' . $book->id . '/words');
       
    }
    
    public function add(Book $book)
    {
        return view('add')->with(['book' => $book]);
    }
    
    public function book(Book $book, Word $word)
    {
        return view('book')->with(['book' => $book, 'word'=>$word, 'words' => $word->get()]);
    }
    
    public function store(BookRequest $request, Book $book)
    {
        //dd($request->all());
        $input = $request['post'];
        $book->fill($input)->save();
        return redirect('/books/' . $book->id . '/words');
        //リダイレクト、idの位置に注意
    }
    
    public function word(Book $book, Word $word)
    {
        return view('word')->with(['book' => $book, 'word' => $word]);
    }
    
    public function record(WordRequest $request, Word $word)
    {
        // dd($request->all());
        $input = $request['post'];
        $word->fill($input)->save();
        return redirect('/books/' . $word->id . '/words');
       
    }
    
    public function wordedit(Book $book, Word $word)
    {
        return view('wordedit')->with(['book' => $book, 'word' => $word]);
    }
    
    public function wordupdate(WordRequest $request,Book $book, Word $word)
    {
        $input = $request['post'];
        $word->fill($input)->save();
        return redirect('/books/' . $book->id . '/words/' . $word->id);
       
    }
    

}