<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>登録一覧</h1>
        <div class='menu'>
            <h3>[<a href='/create'>新規作成</a>]</h3>
            </div>
        <div class='books'>
            @foreach ($books as $book)
            <div class='book'>
                <a href='/books/{{ $book->id }}/words'><h2 class='title'>{{ $book->title }}</h2></a>
                <p class='author'>{{ $book->author }}</p>
               {{ $book->words }}
            </div>
            @endforeach
        </div>
    </body>
</html>
