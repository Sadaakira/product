<?php

namespace App\Http\Controllers;

// use App\Http\Requests\BookRequest;
use App\Http\Requests\WordRequest;
use App\Book;
use App\Word;
use App\Language;
use App\User;

class WordController extends Controller
{
    
    public function show(Book $book, Word $word)
    {
        return view('Words.show')->with(['book' => $book, 'word' => $word]);
    }
    
    public function store(WordRequest $request, Book $book, Word $word)
    {
        // dd($request->all());
        $input = $request['word'];
        $word = $book->words()->create($input);
        return redirect('/books/' . $word->id . '/words');
       
    }
    
    public function create(Book $book)
    {
        return view('Words.create')->with(['book' => $book]);
    }
    
    public function edit(Book $book, Word $word)
    {
        return view('Words.edit')->with(['book' => $book, 'word' => $word]);
    }
    
    public function update(WordRequest $request,Book $book, Word $word)
    {
        $input = $request['word'];
        $word->fill($input)->save();
        return redirect('/books/' . $book->id . '/words/' . $word->id);
       
    }
    
    
    // public function worddestroy(Book $book, Word $word)
    // {
    //     $book->delete();
    //     return redirect('/books/' . $book->id . '/words/');
    // }
    // 変数2つ？
    
}
