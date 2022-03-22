<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            @include('layouts.nav')
        </x-slot>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Vous avez oublié votre mot de passe ? Aucun problème. Il suffit de nous communiquer votre email et nous  enverrons un lien de réinitialisation du mot de passe qui vous permettra d\'en choisir un nouveau.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autofocus />
                        </div>

                        <div class="flex items-center justify-end my-4">
                            <x-button class="btn btn-success">
                                {{ __('Envoi du mot de passe') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </x-auth-card>
</x-guest-layout>
