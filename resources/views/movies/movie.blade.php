<x-app-layout>

    <x-slot name="header">
        <h2>
            {{ __($movie->title) }}
        </h2>
    </x-slot>

    <div class="pl-8 pr-8 sm:pl-15 sm:pr-15 md:pl-20 md:pr-20  lg:pl-28 lg:pr-28">

        <div class="mt-8 flex flex-col md:flex-row">
            
            <div class="flex-shrink-0" >
                <img class="" style="width: 300px;" src="{{ asset('storage/'.$movie->poster_path) }}" alt="movie poster" >
            </div>
            
            <div class=" md:ml-10">
                <p class="text-3xl text-orange-500 text-bold">{{ $movie->title.' ('.$year.')' }}</p>
                <p class="m-2 ">{{ $movie->description }}</p>
                <div class=" m-2">
                    <x-ratingroundbar :rating="$movie->rating" />
                    <p class="font-bold text-gray-300">Movie rating</p>
                </div>
                <div class="m-2 flex flex-row">
                    <p class="font-bold text-gray-300 mr-2">Movie ganre:</p><div class="text-orange-500"> {{ $movie->ganre }} </div>
                </div>
                <div class="m-2 flex flex-row">
                    <p class="font-bold text-gray-300 mr-2">Release Date:</p><div class="text-orange-500"> {{ $movie->release_date }} </div>
                </div>
                
            </div>
        </div>

        <script>
            
        </script>

        <div class="-ml-4 -mr-4 sm:m-3 md:m-5 lg:m-15">
            <div x-data="{ tab: 'movie'}">
                <button class="text-xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="tab = 'movie', document.getElementById('videoplayer').src = '{{ asset('storage/'.$movie->video_path) }}'">Movie</button>
                <button class="text-xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="tab = 'treiler' , document.getElementById('videoplayer').src = '{{ asset('storage/'.$movie->video_trailer_path) }}'">Treiler</button>
            
                <div x-show="tab === 'movie'" class="text-xl pl-4 text-gray-600 font-bold bg-indigo-200  rounded border">Movie</div>
                <div x-show="tab === 'treiler'" class="text-xl pl-4 text-gray-600 font-bold bg-indigo-200  rounded border">Treiler</div>
                
                <x-layouts.videoplayer src="{{asset('storage/'.$movie->video_path)}}" poster="{{asset('storage/'.$movie->poster_path)}}" />
                
            </div>
        </div>

    </div>

    <br>
    <br>
    <br>


</x-app-layout>