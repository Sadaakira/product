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
        <h1>詳細</h1>
        <div class='menu'>
            <h3>[<a href='/words/create'>新規作成</a>]</h3>
            <h3>編集</h3>
            <h3>削除</h3>
            <h3>学習モード</h3>
        </div>
        <div class='words'>
            @foreach ($words as $word)
            <div class='book'>
                <p class='original'>{{ $word->content }}</p>
                <p class='japanese'>{{ $word->Japanese }}</p>
               {{ $word->language }}
               {{ $word->book }}
               {{ $word->user }}//表示できない
            </div>
            @endforeach
        </div>
    </body>
</html>
