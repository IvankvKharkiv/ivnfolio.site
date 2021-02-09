<nav class="border-b-2 border-gray-600">
    <div class="flex flex-row">
        <div class="relative" x-data = "{ isOpen: false }">
            <x-button-indigo class="m-5 sm:hidden" @click="isOpen=true"  @keydown.escape="isOpen=false">
                Menu
             </x-button-indigo> 
            <ul class="absolute bg-gray-600 top-14 left-5 flex flex-col items-stretch" style="display: none;" {{-- inline style is added to prevent user from seen menu on page reload --}} x-show="isOpen" @click.away="isOpen = false">
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('welcome') }}" class="hover:text-gray-300 whitespace-no-wrap" >Home</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300 whitespace-no-wrap" >Movies</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('tvshows') }}" class="hover:text-gray-300 whitespace-no-wrap" >TV Shows</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('actors') }}" class="hover:text-gray-300 whitespace-no-wrap" >Actors</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 mr-5 md:mt-0">
                    <a href="{{ route('testpage') }}" class="hover:text-gray-300 whitespace-no-wrap" >Test Page</a>
                </li>
            </ul>
        </div>


        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 pt-4">

            <ul class="hidden sm:flex sm:flex-col items-stretch md:flex-row md:items-center">
                <li class="hidden md:block">
                    <a href="{{ route('welcome') }}">
                        <svg width="70" height="70" viewBox="0 0 160 140"> 
                            <g  stroke="none">
                            <path d="M110,70 h-50 a50,50 0 1,0 50-50z" fill="#6F4066"/>
                            <path d="M100,60 v-50 a50,50 0 0,0-50,50z" fill="#FDEC7B"/>
                            <circle r="5" cx="131" cy="52" fill="#FDEC7B" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    {{-- <a href="{{ route('movies') }}" class="hover:text-gray-300">Movies</a> --}}
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300 whitespace-no-wrap" >Movies</a>
    
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('tvshows') }}" class="hover:text-gray-300 whitespace-no-wrap" >TV Shows</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 md:mt-0">
                    <a href="{{ route('actors') }}" class="hover:text-gray-300 whitespace-no-wrap" >Actors</a>
                </li>
                <li class="ml-0 md:ml-5 lg:ml-10 mt-2 mr-5 md:mt-0">
                    <a href="{{ route('testpage') }}" class="hover:text-gray-300 whitespace-no-wrap" >Test Page</a>
                </li>
    
            </ul>
        

            <div class="flex flex-col md:flex-row items-right">
                <div>
                    <div class="absolute pin-r pin-t mt-2 pl-1 text-purple-lighter">
                        <svg version="1.1" class="h-4 text-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
                        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                        c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                        C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                        S32.459,40,21.983,40z"/>
                    </svg>
                    </div>

                    <form action="">
                        <input type="text" id="sitesearch" name="sitesearch" placeholder="Search" class="bg-gray-500 focus:outline-none pl-7 rounded-full py-1 sm:w-64 focus:shadow-outline">
                    </form>

                </div>

                @auth
                    <div class="flex items-center">
                        <div class="mx-2">
                            <a href="{{ url('/dashboard') }}" class="text-sm underline">Dashboard</a>
                        </div>            
                        <div>
                            @livewire('navigation-dropdown')    
                        </div>
                    </div>
                @endauth
        
                @guest
                    @if (Route::has('login'))
                        <div>
                            <a href="{{ route('login') }}" class="pl-5 text-sm underline">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-3 text-sm underline">Register</a>
                            @endif
                        </div>
                    @endif
                @endguest
            </div>
        </div>
    </div>
</nav>