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
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->author }}</p>
        <div class='menu'>
             
            <h3 class='add'>[<a href='/books/{{ $book->id }}/words/add'>追加</a>]</h3>
            <h3 class='edit'>[<a href='/books/{{ $book->id }}/words/edit'>編集</a>]</h3>
            <!--<form action='/books/{{ $book->id }}/words' id='form_delete' method='post'>-->
            <!--    {{ csrf_field() }}-->
            <!--    {{ method_field('delete') }}-->
            <!--    <input type='submit' style='display:none'>-->
            <!--    <h3 class='delete'>[<span onclick='return deletePost(this);'>削除</span>]</h3>-->
            <!--</form>-->
            <h3>学習モード</h3>
        </div>
        <div class='words'>
            @foreach ($words as $word)
            <div class='book'>
                <p class='original'><a href='/books/{{ $book->id }}/words/{{ $word->id }}'>{{ $word->content }}</a></p>
                <p class='japanese'>{{ $word->Japanese }}</p>
               {{ $word->language }}
               {{ $word->book }}
               <!--{{ $word->user }}//表示できない-->
            </div>
            @endforeach
        </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
        <script>
            function deletePost(e) {
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>
