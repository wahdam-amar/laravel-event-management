<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <header class="body-font text-gray-600">
        <div class="container mx-auto flex flex-col flex-wrap items-center p-5 md:flex-row">
            <a class="title-font mb-4 flex items-center font-medium text-gray-900 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="h-10 w-10 rounded-full bg-indigo-500 p-2 text-white"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            </nav>
            <button
                class="mt-4 inline-flex items-center rounded border-0 bg-gray-100 py-1 px-3 text-base hover:bg-gray-200 focus:outline-none md:mt-0">Button
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="ml-1 h-4 w-4" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>

    <div class="bg-white py-16">
        <div class="container m-auto space-y-8 px-6 text-gray-500 md:px-12 lg:px-20">
            <div class="justify-center gap-6 text-center md:flex md:text-left lg:items-center lg:gap-16">
                <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                    <h1 class="text-4xl font-bold text-gray-700 md:text-5xl">Buy now and benefit up to <span
                            class="text-blue-500">30% off</span></h1>
                    <p class="text-lg">Be part of millions people around the world using tailus in modern User
                        Interfaces.</p>
                    <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:justify-end md:gap-6">
                        <button type="button" title="Start buying"
                            class="w-full rounded-xl bg-gray-700 py-3 px-6 text-center shadow-xl transition hover:bg-gray-600 focus:bg-gray-600 active:bg-gray-700 sm:w-max">
                            <span class="block font-semibold text-white">
                                Start buying
                            </span>
                        </button>
                        <button type="button" title="more about"
                            class="order-first w-full rounded-xl bg-gray-100 py-3 px-6 text-center transition hover:bg-gray-200 focus:bg-gray-200 active:bg-gray-300 sm:w-max">
                            <span class="block font-semibold text-gray-600">
                                More about
                            </span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                    <div class="col-span-2 row-span-4">
                        <img src="https://tailus.io/sources/blocks/ecommerce-site/preview/images/products/kushagra.webp"
                            class="rounded-full" width="640" height="960" alt="shoes" loading="lazy">
                    </div>
                    <div class="col-span-2 row-span-2">
                        <img src="https://unsplash.com/photos/U7HLzMO4SIY/download?ixid=MnwxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjYxNjAzNTg5&force=true&w=640"
                            class="h-full w-full rounded-xl object-cover object-top" width="640" height="640"
                            alt="shoe" loading="lazy">
                    </div>
                    <div class="col-span-3 row-span-3">
                        <img src="https://unsplash.com/photos/JNuKyKXLh8U/download?ixid=MnwxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjYxNjAyNjY5&force=true&w=640"
                            class="h-full w-full rounded-xl object-cover object-top" width="640" height="427"
                            alt="shoes" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
