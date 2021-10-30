<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>追加</h1>
        <form action="/books/{{ $book->id }}/words" method="POST">
            {{ csrf_field() }}
            <div class='add'>
                <h3>原文</h3>
                <input type="text" name="word[content]" placeholder="原文" value="{{ old('word.content') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('word.content') }}</p>
                <h3>翻訳</h3>
                <input type="text" name="word[Japanese]" placeholder="翻訳" value="{{ old('word.Japanese') }}"/>
                <p class="author__error" style="color:red">{{ $errors->first('word.Japanese') }}</p>
                <div class='language'>
                    <h3>言語</h3>
                    <select class="language" name="word[language_id]">
                        <option value="1" selected>英語</option>
                        <option value="2">中国語</option>
                        <option value="3">韓国語</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="登録">
            <div class='back'>[<a href='/books/{{ $book->id }}/words'>戻る</a>]</div>
        </form>

    </body>
</html>
