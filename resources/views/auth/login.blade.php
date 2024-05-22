<x-guest-layout>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        

    </x-auth-card> --}}

    <div class="row justify-content-center align-content-center login">
        <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-3">
            <form class="loginForm" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="row">
                    <div class="col-12 col-md-3">
                        <x-label for="email" :value="__('Email')" />
                    </div>
                    <div class="col-12 col-md-9">
                        <x-input id="email" class="block mt-1 w-full w-100" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>
                    <div class="col-12 col-md-3">
                        <x-label for="password" :value="__('Password')" />
                    </div>
                    <div class="col-12 col-md-9">
                        <x-input id="password" class="block mt-1 w-full w-100" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-2">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4 text-center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
