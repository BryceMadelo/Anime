<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 px-6 py-12">

        <div class="w-full max-w-md bg-gray-800 rounded-3xl shadow-2xl p-10">

            <!-- Heading -->
            <h1 class="text-3xl md:text-4xl text-white text-center mb-4 animate-pulse"
                style="font-family: 'Bangers', cursive;">
                Join Anime Club! ✨
            </h1>

            <!-- Subtitle -->
            <p class="text-gray-300 text-center mb-8" style="font-family: 'Press Start 2P', cursive;">
                Create your account and unite with fellow Otakus
            </p>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-white" />
                    <x-text-input id="name"
                                  class="block mt-1 w-full rounded-xl shadow-md border-2 border-purple-600 focus:ring-purple-500 focus:border-purple-500 bg-gray-900 text-white"
                                  type="text"
                                  name="name"
                                  :value="old('name')"
                                  required
                                  autofocus
                                  autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email"
                                  class="block mt-1 w-full rounded-xl shadow-md border-2 border-purple-600 focus:ring-purple-500 focus:border-purple-500 bg-gray-900 text-white"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required
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
                                  autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                    <x-text-input id="password_confirmation"
                                  class="block mt-1 w-full rounded-xl shadow-md border-2 border-purple-600 focus:ring-purple-500 focus:border-purple-500 bg-gray-900 text-white"
                                  type="password"
                                  name="password_confirmation"
                                  required
                                  autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <!-- Buttons & Login Link -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <a class="underline text-sm text-gray-400 hover:text-purple-300 transition-all duration-150"
                       href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="w-full md:w-auto bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-2xl shadow-lg transition-transform transform hover:scale-105">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
