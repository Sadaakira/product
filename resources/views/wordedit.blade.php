<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WordEdit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>編集</h1>
        <form action="/books/{{ $book->id }}/words/{{ $word->id }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class='edit'>
                <h3>原文</h3>
                <input type="text" name="post[content]" placeholder="原文" value="{{ $word->content }}"/>
                <h3>翻訳</h3>
                <input type="text" name="post[Japanese]" placeholder="翻訳" value="{{ $word->Japanese }}"/>
                <div class='language'>
                    <h3>言語</h3>
                    <!--<select class="language" name="post[language]">-->
                    <!--    <option value="1" selected>英語</option>-->
                    <!--    <option value="2">中国語</option>-->
                    <!--    <option value="3">韓国語</option>-->
                    <!--</select>-->
                </div>
            </div>
            <input type="submit" value="update">
            <div class='back'>[<a href='/books/{{ $book->id }}/words/{{ $word->id }}'>戻る</a>]</div>
        </form>

    </body>
</html>
