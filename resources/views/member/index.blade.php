<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <x-card title="Member">
            <livewire:member-table />

            <div class="mb-4 w-full md:mb-0 md:w-auto">
                <div x-data="{ open: false }" @keydown.window.escape="open = false" x-on:click.away="open = false"
                    class="relative z-10 inline-block w-full rounded-lg text-left md:w-auto">
                    <div>
                        <span class="rounded-sm shadow-sm">
                            <button x-on:click="open = !open" type="button"
                                class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                                aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                                @lang('My Dropdown')

                                <svg class="ml-2 -mr-1 h-5 w-5" x-description="Heroicon name: chevron-down"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </span>
                    </div>

                    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 z-50 mt-2 w-full origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none md:w-48">
                        <div class="shadow-xs rounded-lg bg-white dark:bg-gray-700 dark:text-white">
                            <div class="py-1" role="menu" aria-orientation="vertical">
                                <button type="button"
                                    class="block flex w-full items-center space-x-2 px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-100 focus:text-gray-900 focus:outline-none dark:text-white dark:hover:bg-gray-600"
                                    role="menuitem">
                                    <span>My Action 1</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-app-layout>
