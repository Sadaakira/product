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
        //<form action="/" method="POST">
            {{ csrf_field() }}
            <div class='create'>
                <h3>原文</h3>
                <input type="text" name="post[original]" placeholder="原文" value="{{ old('post.original') }}"/>
                //<p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                <h3>翻訳</h3>
                <input type="text" name="post[translation]" placeholder="翻訳" value="{{ old('post.translation') }}"/>
                //<p class="author__error" style="color:red">{{ $errors->first('post.author') }}</p>
                <div class='language'>
                    <h3>言語</h3>
                    <select class="language" id="sel02" name="sel02[]">
                        <option value="ja" selected>英語</option>
                        <option value="kr">韓国語</option>
                        <option value="zh">中国語</option>
                     </select>
                </div>
            </div>
            <input type="submit" value="登録">
            <div class='back'>[<a href='/'>戻る</a>]</div>
        //</form>

    </body>
</html>
