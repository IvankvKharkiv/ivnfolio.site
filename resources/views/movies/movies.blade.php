<x-app-layout>

    <x-slot name="header">
        <h2>
            {{ __('Movies') }}
        </h2>
    </x-slot>

    <x-moviescomponent :movies="$movies"/>


</x-app-layout>