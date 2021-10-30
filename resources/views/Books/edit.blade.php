<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BookEdit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>新規作成</h1>
        <form action="/books/{{ $book->id }}/words" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class='edit'>
                <h3>タイトル</h3>
                <input type="text" name="post[title]" placeholder="title" value="{{ $book->title }}"/>
                <h3>作者</h3>
                <input type="text" name="post[author]" placeholder="author" value="{{ $book->author }}"/>
            </div>
            <input type="submit" value="更新">
            <div class='back'>[<a href='/books/{{ $book->id }}/words'>戻る</a>]</div>
        </form>

    </body>
</html>
