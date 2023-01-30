<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>trade</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Product Pege</h1>
        <div class='products'>
            @foreach ($products as $product)
                <div class='products'>
                    <h2 class='name'>{{ $product->name }}</h2>
                    <img src='{{ $product->image_path}}'>
                </div>
            @endforeach
        </div>
        <a href='/exhibit'>出品</a>
    </body>
</html>