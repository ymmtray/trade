<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='products'>
            @foreach ($products as $product)
                <div class='products'>
                    <h2 class='title'>{{ $product->title }}</h2>
                    <p class='body'>{{ $product->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>