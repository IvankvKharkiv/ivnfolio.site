<div id="videocontainer" tabindex="-1" class="focus:outline-none relative bg-black bg-opacity-50 overflow-hidden {{ $attributes['class'] }} " >


    <video id="videoplayer" class="w-full p-1" {{ 'src='.$attributes['src'] }} {{ 'poster='.$attributes['poster'] }} ></video>

    <div id="videocontrols" class="bg-white bg-opacity-50 flex flex-grow absolute bottom-0 w-full">

        <button id="vidplay" class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white">
            <svg viewBox="-2 0 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke="rgba(70, 85, 117, 0.9)" d="M 0,0 0,10 6,5 0,0"></path>
            </svg>
        </button>        
    
        <button id="vidpause" class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white">
            <svg viewBox="-2 0 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke="rgba(70, 85, 117, 0.9)" d="M 1,2 1,8 2,8 2,2 0.5,2 
                M 4,2 4,8 5,8 5,2 3.5,2"></path>
            </svg>
        </button>        
    
        <button class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white" id="vidtimezero">
            <svg viewBox="-2 0 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke="rgba(70, 85, 117, 0.9)" d="M 0.5,2.5 5.5,2.5 5.5,7.5 0.5,7.5 0.5,2.0"></path>
            </svg>
        </button>

        <div id="progress" class="flex-grow flex bg-gray-700 bg-opacity-50 my-1">
            <div class="h-full bg-blue-900 bg-opacity-75" 
            id="progress_bar"></div>
            <div class="h-full bg-green-500 bg-opacity-75" 
            id="buffer_bar"></div>

        </div>

        <div id="time" class="mx-1 text-gray-700"></div>

        <button id="unmutevol" 
        class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white">
            <svg viewBox="-2 0 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke="rgba(70, 85, 117, 0.9)" d="M 0 4 L 2 4 L 4 1 L 5 1 L 5 9 L 4 9 L 2 6 L 0 6 L 0 4 M 0 1 L 6 9"></path>
            </svg>
        </button> 

        <button id="mutevol"
        class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white">
            <svg viewBox="-2 0 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke="rgba(70, 85, 117, 0.9)" d="M 0 4 L 2 4 L 4 1 L 5 1 L 5 9 L 4 9 L 2 6 L 0 6 L 0 4"></path>
            </svg>
        </button> 

        <div  class="relative" >
            <div class="absolute bottom-13" style="right: -25px;">
                <div class="w-20 " >
                    <input type="range" id="volume_bar" title="volume" min="0" max="1" step="0.05" value="1" class="videoplayervolume2">
                </div>
            </div>
        </div>

        <button id="fullscreen" class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 active:bg-white">
            <svg viewBox="-0.5 -0.5 10 10" >
                <path fill="rgba(225, 225, 225, 0.5)" stroke-width="5%" stroke="rgba(70, 85, 117, 0.9)" d="M 0.75,1 3.5,1 3.5,2 2,2 2,3.5 1,3.5 1,1
                M 5.5,0.75 5.5,2 7,2 7,3.5 8,3.5 8,1 5.5,1 
                M 0.75,8 3.5,8 3.5,7 2,7 2,5.5 1,5.5 1,8
                M 8,8 8,5.5 7,5.5 7,7 5.5,7 5.5,8 8.25,8"></path>
            </svg>
        </button>
        
        <button class="bg-none w-7 h-7 focus:outline-none hover:bg-black hover:bg-opacity-50 text-gray-600 hover:text-white active:bg-white active:text-gray-600">CC</button>

    </div>
</div>
