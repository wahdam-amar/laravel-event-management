<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>


            <div class="mt-0">
                <div class="mt-0 flex flex-col justify-center">
                    <a href="{{ route('auth.google') }}"
                        class="mt-4 rounded-md border-2 border-gray-500 bg-white px-6 py-3 font-semibold text-gray-900 shadow outline-none hover:border-blue-400 hover:bg-blue-50 focus:outline-none"><svg
                            xmlns="http://www.w3.org/2000/svg" class="mr-3 inline h-4 w-4 fill-current text-gray-900"
                            viewBox="0 0 48 48" width="48px" height="48px">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12 s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20 s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039 l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36 c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571 c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>Sign in with Google
                    </a>
                </div>
            </div>



            <div class="mt-4 flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif



                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
