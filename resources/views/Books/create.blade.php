<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>新規作成</h1>
        <form action="/" method="POST">
            {{ csrf_field() }}
            <div class='create'>
                <h3>タイトル</h3>
                <input type="text" name="book[title]" placeholder="title" value="{{ old('book.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('book.title') }}</p>
                <h3>作者</h3>
                <input type="text" name="book[author]" placeholder="author" value="{{ old('book.author') }}"/>
                <p class="author__error" style="color:red">{{ $errors->first('book.author') }}</p>
            </div>
            <input type="submit" value="登録">
            <div class='back'>[<a href='/'>戻る</a>]</div>
        </form>

    </body>
</html>
