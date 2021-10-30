<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Word</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>単語詳細</h1>
        <div class='menu'>
             
            <h3 class='edit'>[<a href='/books/{{ $book->id }}/words/{{ $word->id }}/edit'>編集</a>]</h3>
            <!--<form action='/books/{{ $book->id }}/words/{{ $word->id }}' id='form_delete' method='post'>-->
            <!--    {{ csrf_field() }}-->
            <!--    {{ method_field('delete') }}-->
            <!--    <input type='submit' style='display:none'>-->
            <!--    <h3 class='delete'>[<span onclick='return deletePost(this);'>削除</span>]</h3>-->
            <!--</form>-->

        </div>
        <div class='words'>
            <h4>原文</h4>
            <p class='original'>{{ $word->content }}</p>
            <h4>翻訳</h4>
            <p class='japanese'>{{ $word->Japanese }}</p>
            {{ $word->language }}
            {{ $word->book }}
            <!--{{ $word->user }}//表示できない-->
        </div>
        <div class='back'>[<a href='/books/{{ $book->id }}/words'>戻る</a>]</div>
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
