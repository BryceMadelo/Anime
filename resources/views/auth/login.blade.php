<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 px-6 py-12">

        <div class="w-full max-w-md bg-gray-800 rounded-3xl shadow-2xl p-10">
            
            <!-- Heading -->
            <h1 class="text-3xl text-white text-center mb-4 animate-pulse"
                style="font-family: 'Bangers', cursive;">
                Welcome Back, Otaku! ✨
            </h1>

            <!-- Subtitle -->
            <p class="text-gray-300 text-center mb-8" style="font-family: 'Press Start 2P', cursive;">
                Log in to your Anime Club account
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email"
                                  class="block mt-1 w-full rounded-xl shadow-md border-2 border-purple-600 focus:ring-purple-500 focus:border-purple-500 bg-gray-900 text-white"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required
                                  autofocus
                                  autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password"
                                  class="block mt-1 w-full rounded-xl shadow-md border-2 border-purple-600 focus:ring-purple-500 focus:border-purple-500 bg-gray-900 text-white"
                                  type="password"
                                  name="password"
                                  required
                                  autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <label for="remember_me" class="inline-flex items-center text-gray-300">
                        <input id="remember_me" type="checkbox" name="remember"
                               class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500">
                        <span class="ml-2" style="font-family: 'Press Start 2P', cursive;">Remember me</span>
                    </label>
                </div>

                <!-- Buttons & Forgot Password -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-400 hover:text-purple-300 transition-all duration-150"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="w-full md:w-auto bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-2xl shadow-lg transition-transform transform hover:scale-105">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
