<x-app-layout>

    <x-slot name="header">
        <h2>
            {{ __('Welcome Page') }}
        </h2>
    </x-slot>

    <x-moviescomponent :movies="$movies"/>
    
</x-app-layout>