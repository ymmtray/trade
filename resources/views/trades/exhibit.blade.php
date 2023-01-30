<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>trade</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>exhibit</h1>
        <form action="/exhibit" method="POST">
            @csrf
            <div class="name">
                <h2>product name</h2>
                <input type="text" name="exhibit[name]" placeholder="商品名"/>
            </div>
            <div class="body">
                <h2>detail</h2>
                <textarea name="exhibit[detail]" placeholder="商品詳細"></textarea>
            </div>
            <div class="name">
                <h2>group id</h2>
                <input type= "number" name="exhibit[group_id]" placeholder="group_id"/>
            </div>
              <div class="name">
                <h2>category id</h2>
                <input type= "number" name="exhibit[category_id]" placeholder="category_id"/>
            </div>
            <input type="submit" value="store"/>
        </form>
    </body>
</html>