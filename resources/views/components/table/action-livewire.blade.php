<div x-data="{ open: false }" class="rounded-sm">
    <button @click="open = ! open"
        class="text-gray-500 transition-colors duration-200 hover:text-gray-600 hover:outline-none focus:outline-none dark:hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots h-6 w-6" viewBox="0 0 16 16">
            <path
                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
            </path>
        </svg>
    </button>
    <div x-show="open" @click.away="open = false"
        class="absolute z-10 origin-top-right divide-y rounded border border-gray-200 bg-white ltr:right-10 rtl:left-0 dark:divide-slate-700 dark:border-gray-700 dark:bg-gray-800"
        style="min-width: 12rem;">
        <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
            href="#" @click.prevent="$wire.goHome()">
            {{ __('Detail') }}
        </a>
        <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
            href="#" @click.prevent="$wire.goHome()">
            {{ __('Edit') }}
        </a>
        <a class="block rounded-b-sm bg-red-600 px-3 py-2 text-red-200 hover:bg-red-400 focus:bg-red-100 dark:hover:bg-red-700 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
            href="#" @click.prevent="$wire.goHome()">
            {{ __('Delete') }}
        </a>
    </div>
</div>
