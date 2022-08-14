<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="mx-auto p-2">
        <div class="mb-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white p-6">
                You're logged in!
            </div>
        </div>

        <x-card title="hallo" description="hallo all">
            <x-slot name="action">
                <x-card.action-link label="Daily" />
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non obcaecati accusamus dolore, cumque
            officiis modi perferendis ducimus a maiores dignissimos doloremque sint beatae! Voluptatibus modi nisi iste
            odio. Fugiat?
        </x-card>
    </div>



</x-app-layout>
