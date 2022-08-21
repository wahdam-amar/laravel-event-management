<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <x-card title="Member">
            <livewire:member-table />
        </x-card>
    </div>
</x-app-layout>
