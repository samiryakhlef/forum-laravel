<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
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
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
                    rel="stylesheet">

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
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                        aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form method="GET" action=" {{ '/dashboard' }}" class="d-flex">
                                <button class="btn btn-outline-dark mx-2" type="submit">Se connecter</button>
                            </form>
                            <form  method="GET" action=" {{('/register')}}" class="d-flex">
                                <button class="btn btn-outline-dark mx-2" type="submit">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </nav>
        </x-slot>
            <h1 class="text-center my-3">S'inscrire</h1>
            <section class="d-flex justify-content-center my-2">
                <div class="row">
                    <div class="col">
                        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer votre mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistrer') }}
                </a>

                <x-button class="btn btn-outline-dark mx-2 bg-success">
                    {{ __('S\'enregistrer') }}
                </x-button>
            </div>
        </form>
                    </div>
                </div>
            </section>


        
    </x-auth-card>
</x-guest-layout>
