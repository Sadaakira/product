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
        <div class='create'>
            <h3>タイトル</h3>
            <input type="text" name="title" placefolder="タイトル" value="{{ old('post.title') }}"/>
            <h3>作者</h3>
            <input type="text" name="author" placefolder="作者" value="{{ old('post.author') }}"/>
        </div>
        <input type="button" value="登録">

    </body>
</html>
