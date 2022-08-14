<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="scroll-smooth font-sans text-base font-normal text-gray-600 antialiased dark:bg-gray-800 dark:text-gray-400">
    <div class="wrapper min-h-screen overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40"
        x-data="main()">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}


        <x-sidebar />

        <div x-bind:aria-expanded="open"
            :class="{
                'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open,
                'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64':
                    !(open)
            }"
            class="flex min-h-screen flex-col transition-all duration-500 ease-in-out ltr:ml-0 ltr:mr-0 rtl:mr-0 rtl:ml-0 md:ltr:ml-64 md:rtl:mr-64"
            aria-expanded="false">

            <x-nav />

            <main class="-mt-2 flex-grow pt-20">
                {{ $slot }}
            </main>

            <x-footer />
        </div>

        {{-- <x-nav />

        <!-- Page Content -->
        <main class="-mt-2 pt-20">
            {{ $slot }}
        </main> --}}
    </div>
</body>

</html>
