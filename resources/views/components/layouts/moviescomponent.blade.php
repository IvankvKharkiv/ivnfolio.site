<div class="pl-5 pr-5 md:pl-28 md:pr-28">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5  gap-8 ">

        @forelse ($movies as $movie)
            <div class="mt-8">
                <a href=" {{ url('movies/'.$movie->slug) }} ">
                    <img src="{{ asset('storage/'.$movie->poster_path) }}" alt="movie poster" class="w-full">
                </a>
                <div class="flex justify-between">
                    <div>
                        <p class="text-xl">{{ $movie->title }}</p>
                        <p class="text-xs text-orange-500">{{ $movie->ganre }}</p>
                    </div>
                    <div>
                        <x-ratingroundbarsmall :rating="$movie->rating" />
                    </div>
                </div>
            </div>
        @empty 
            <p>No movies to show</p>
        @endforelse
    </div>
</div>