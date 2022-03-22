<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

    </style>
</head>
@include('layouts.nav')
<body>
@foreach ($posts as $post)
    <h1 class="row flex justify-content-center my-2"> {{$post->title}}</h1> </h1>
    <section class="container my-3">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <img src="images/princesse-mononoke.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h2> <strong>Tritre:</strong> </h2>
                        <p class="card-text">{{$post->content}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach 
</body>
</html>