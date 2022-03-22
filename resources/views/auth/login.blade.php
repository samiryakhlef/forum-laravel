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

            @include('layouts.nav')
        </x-slot>
        <h1 class="text-center fs-2 my-4">Connectez-vous</h1>
        <section class=" d-flex justify-content-center my-2">
            <div class="row">
                <div class="col ">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Mot de passe')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif

                            <x-button class="btn btn-outline-dark mx-2 bg-success">
                                {{ __('Se connecter') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </section>



    </x-auth-card>
</x-guest-layout>
