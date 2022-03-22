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

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-success fs-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ghibli-studio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{('/')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form  method="GET" action=" {{('/dashboard')}}" class="d-flex">
                    <button class="btn btn-outline-dark mx-2" type="submit">Se connecter</button>
                </form>
                <form  method="GET" action=" {{('/register')}}" class="d-flex">
                    <button class="btn btn-outline-dark mx-2" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </nav>
@foreach ($posts as $post)
    <h1 class="row flex justify-content-center my-2"> {{$post->title}}</h1> </h1>
    <section class="container my-3">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <img src=  "{{ asset('/storage/'. $post ->picture)}} " >
                    <div class="card-body">

                        <h2> <strong>{{$post->created_at}}</strong> </h2>
                        <p class="card-text">{{$post->content}}
                        </p>
                        <form action="{{ url('users') }}" method="POST">
     
        <label for="nom">Modifié le poste </label>
        <input type="text" name="title" id="title">
        <input type="text" name="picture" id="picture">
        <input type="text" name="content" id="content">
        <input type="submit" value="Envoyer !">
    </form>


                    </div>
                </div>
            </div>
            @endforeach 
</body>