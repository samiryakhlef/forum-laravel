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
    <nav class="navbar navbar-expand-lg navbar-light bg-success fs-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ghibli-Studio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <h1 class="row flex justify-content-center"> Titre du film  </h1>
    <section class="container my-3">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <img src="images/princesse-mononoke.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h2> <strong>Tritre:</strong> </h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            officiis eveniet ratione suscipit, ullam accusamus maiores quasi et. Porro nisi enim
                            veritatis. Cumque quia accusamus veritatis illo nam laudantium esse? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Temporibus alias nisi amet incidunt optio enim ratione
                            modi aliquam expedita at vero ea, qui, hic, ab aspernatur magni assumenda obcaecati nulla.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>
