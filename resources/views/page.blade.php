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
            <a class="navbar-brand" href="/">Ghibli-studio</a>
            
                <form  method="GET" action=" {{('/dashboard')}}" class="d-flex">
                    <button class="btn btn-outline-dark mx-2" type="submit">Se connecter</button>
                </form>
                <form  method="GET" action=" {{('/register')}}" class="d-flex">
                    <button class="btn btn-outline-dark mx-2" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('films')



</body>

</html>
