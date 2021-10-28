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
    
    public function store(BookRequest $request, Book $book)
    {
        //dd($request->all());
        $input = $request['post'];
        $book->fill($input)->save();
        return redirect('/books/' . $book->id . '/words');
        //リダイレクト、idの位置に注意
    }
    
    //public function edit(Post $post)
    //{
    //    return view('edit')->with(['post' => $post]);
    //}
    
    //public function update(PostRequest $request, Post $post)

    //{
    //    $input = $request['post'];
     //   $post->fill($input)->save();
     //   return redirect('/posts/' . $post->id);
    //}
    
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/');
    }

}