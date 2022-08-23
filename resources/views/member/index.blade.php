<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <x-card title="Member">

            <div class="mb-3 flex justify-between">
                <a href="{{ route('member.create') }}"
                    class="mb-3 inline-block rounded border border-indigo-500 bg-indigo-500 py-2 px-4 text-center leading-5 text-gray-100 hover:border-indigo-600 hover:bg-indigo-600 hover:text-white hover:ring-0 focus:border-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-plus-lg inline-block ltr:mr-2 rtl:ml-2" viewBox="0 0 16 16">
                        <path
                            d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                        </path>
                    </svg>{{ __('Add Member') }}
                </a>
                <a href="#"
                    class="mb-3 inline-block rounded border border-pink-500 bg-pink-500 py-2 px-4 text-center leading-5 text-gray-100 hover:border-pink-600 hover:bg-pink-600 hover:text-white hover:ring-0 focus:border-pink-600 focus:bg-pink-600 focus:outline-none focus:ring-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-plus-lg inline-block ltr:mr-2 rtl:ml-2" viewBox="0 0 16 16">
                        <path
                            d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                        </path>
                    </svg><span class="xl:hidden">Add</span> Pages
                </a>
            </div>

            <livewire:member-table />


        </x-card>
    </div>
</x-app-layout>
