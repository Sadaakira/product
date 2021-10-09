<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>登録一覧</h1>
        <div class='menu'>
            <h3>新規作成</h3>
            <h3>編集</h3>
            <h3>削除</h3>
        </div>
        <div class='books'>
            @foreach ($books as $book)
            <div class='book'>
                <h2 class='title'>{{ $book->title }}</h2>
                <p class='author'>{{ $book->author }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
