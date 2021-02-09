<div class="md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 sm:p-6 bg-gray-300">
                {{ $content }}
            </div>
        @if (isset($actions))
            <div class="flex items-center justify-end px-4 py-3 bg-gray-400 text-right sm:px-6">
                {{ $actions }}
            </div>
        @endif

        </div>

    </div>
    

</div>
