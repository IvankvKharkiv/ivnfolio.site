<x-app-layout>

    <x-slot name="header">
        <h2>
            {{ __('Alpine Test') }}
        </h2>
    </x-slot>


<div class="pl-28 pr-28">    
    <h1 class="text-4x1">Some data</h1>
</div>

    
<div
x-data="{onTop: false}"
@scroll.window = "onTop = document.querySelector('#OnTopElement').getBoundingClientRect().top <= 0"
id="OnTopElement"
>
    <div class="w-full pl-10 pr-10" :class="{ 'fixed top-0' : onTop===true }">
        <div class="bg-gray-600 rounded-lg" :class="{ 'bg-green-700' : onTop===true }">
            <h1 class="text-xl mx-5 py-2">This is going to be always on top!</h1>
        </div>
    </div>
</div>

<div class="pl-28 pr-28">

    <br>
    <br>
    <h1 class="text-4xl">JS code tests</h1>
    <input id="keyinput" type="text" class="text-black p-1 m-1 rounded-lg">
    <div id="keyshow" class="text-white bg-gray-600 p-1 m-1 text-2xl rounded-lg">Result</div>

    <script>
        var keyinput = document.getElementById('keyinput');
        var keyshow = document.getElementById('keyshow');

        keyinput.addEventListener('keydown', function(e){
            keyshow.innerHTML='e.code: ' + e.code + '  ' + 'e.keyCode: ' + e.keyCode + '  ' + 'e.ctrlKey: ' + e.ctrlKey + '  ' + 'e.key: ' + e.key ;
        });
    </script>

    <br>
    <br>
    <div x-data="{ buttonPresed: false }">
        <button
        x-on:mouseup="buttonPresed=false" 
        x-on:mousedown="buttonPresed = true"
        class="focus:outline-none hover:bg-gray-400 active:bg-white h-10 w-40 border rounded-lg bg-white text-black font-bold">Some Button</button>
        <div x-show=" buttonPresed === true " class="text-lg text-white font-bold">Button pressed</div>
    </div>


    <div class="pt-20">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate accusamus eaque ratione, eveniet, consequuntur vel minus numquam nobis assumenda, delectus illo eius sunt perferendis. Earum quae alias eos officia laborum!
    </div>

    <br>
    <br>
    <div x-data="imgFunc()"
    x-init = "startImg">
        <h1 class="text-xl py-3">Chosing the picture</h1>

        <div class="w-1/2">
            <img 
            x-show = "img === 'img1'" 
            src="{{ asset('images/training/img1.jpg') }}" 
            alt="Main Image"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            {{-- x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" --}}
            >
            <img x-show = "img === 'img2'" 
            src="{{ asset('images/training/img2.jpg') }}" 
            alt="Main Image"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            {{-- x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" --}}
            >
            <img x-show = "img === 'img3'" 
            src="{{ asset('images/training/img3.jpg') }}" 
            alt="Main Image"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            {{-- x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" --}}
            >
        </div>

        <div>
            <ul class="flex">
                <li class="w-1/6 p-3" :class="{ 'border' : img==='img1' }"><img src=" {{ asset('images/training/img1.jpg') }} " alt="image1" @click = "img='img1"></li>
                <li class="w-1/6 p-3" :class="{ 'border' : img==='img2' }"><img src=" {{ asset('images/training/img2.jpg') }} " alt="image2" @click = "img='img2'"></li>
                <li class="w-1/6 p-3" :class="{ 'border' : img==='img3' }"><img src=" {{ asset('images/training/img3.jpg') }} " alt="image3" @click = "img='img3'"></li>
            </ul>
        </div>



    </div>


    <br>
    <br>

    <div x-data="{ tab: 'tab1'}">
        <h1 class="text-xl py-3">Tabs example</h1>
        <ul class="flex border-b mt-6">
            <li class="mb-px mr-1">
                <a @click.prevent = "tab = 'tab1'" :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab1' }" class="inline-block py-2 px-4 font-semibold hover:text-blue-500" href="#">Tab1</a>
            </li>
            <li class="mb-px mr-1">
                <a @click.prevent = "tab = 'tab2'" :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab2' }" class="inline-block py-2 px-4 font-semibold hover:text-blue-500" href="#">Tab2</a>
            </li>
            <li class="mb-px mr-1">
                <a @click.prevent = "tab = 'tab3'" :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab3' }" class="inline-block py-2 px-4 font-semibold hover:text-blue-500" href="#">Tab3</a>
            </li>
        </ul>
        <div class="bg-white text-black px-4 py-4">
            <div x-show = "tab==='tab1'">
                Tab1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum consequatur quam soluta voluptate, nemo nobis libero minima, distinctio quasi nisi officiis! Suscipit optio ipsa, possimus distinctio et sit totam?
            </div>
            <div x-show = "tab==='tab2'">
                Tab2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum consequatur quam soluta voluptate, nemo nobis libero minima, distinctio quasi nisi officiis! Suscipit optio ipsa, possimus distinctio et sit totam?
            </div>
            <div x-show = "tab==='tab3'">
                Tab3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum consequatur quam soluta voluptate, nemo nobis libero minima, distinctio quasi nisi officiis! Suscipit optio ipsa, possimus distinctio et sit totam?
            </div>
        </div>
    </div>


    <br>
    <br>

    <br>
    <h1 class="text-xl py-3">Modal</h1>
    
    <div x-data = "{ isOpen: false }">
        <x-button-indigo @Click="isOpen = true">
                Modal 1
        </x-button-indigo>


        
        <div x-show ="isOpen" class="z-40 overflow-auto left-0Z top-0 bottom-0 right-0 w-full h-full fixed" style="display: none;">
            <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                    <div class="border-b ">

                        <button @Click = "isOpen = false" class="absolute right-0 top-0 text-black mt-2 mr-5 text-3xl font-bold" style="outline: none;">&times;</button>
                                
                        <div class="flex justify-center col-span-6 py-2 text-xl mr-5 font-bold text-black">Title of the modal</div>
                    </div>

                        
                    <div class="flex justify-center p-4 flex-grow text-black">
                        <p>You are watching this text in tailwind css model with alpine JS.</p>
                    </div>
                    <div class="px-6 py-3 border-t">
                        <div class="flex justify-end">
                            <button @Click = "isOpen = false" type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                            <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
        </div>




            {{-- <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                        <div class="px-6 py-3 text-xl border-b font-bold text-black">Title of the modal</div>
                        <div class="p-6 flex-grow text-black">
                            <p>You are watching this text in tailwind css model with alpine JS.</p>
                        </div>
                        <div class="px-6 py-3 border-t">
                            <div class="flex justify-end">
                                <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                                <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
            </div> --}}

        

       
    </div>



    <br>
    <br>
    <br>
    
    <div class="relative" x-data = "{ isOpen: false }">
        <button class="flex items-center" @click="isOpen=true"  @keydown.escape="isOpen=false">
            <img src="{{ asset('images/button1.png') }}" alt="button1">
        </button>
        <ul class=" absolute text-gray-600 font-bold bg-indigo-200 shadow overflow-hidden rounded w-20 border mt-2 py-1 right-300 z-20" x-show="isOpen" @click.away="isOpen = false">
            <li>Item1</li>
            <li>Item2</li>
            <li>Item3</li>
        </ul>
    </div>

    <br>

    <div class="relative" >
        <button class="flex items-center">
            <img src="{{ asset('images/button1.png') }}" alt="button1">
        </button>
        <div class="text-gray-600 font-bold bg-indigo-200 shadow overflow-hidden rounded border mt-2 py-1 right-0 z-20">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eum delectus explicabo animi ex non praesentium mollitia incidunt facilis, id quidem et doloribus error obcaecati, fugiat officia totam! Nulla, quia.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora voluptatem quis sequi, illum suscipit quisquam aspernatur corporis voluptas accusamus possimus ipsam porro? Eius placeat dolor earum eveniet fugit ullam eos!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt omnis saepe neque voluptas excepturi, eaque nam laudantium enim at expedita quae non, ad dolor, provident aliquam aliquid tenetur deserunt. Cum?
        </div>
    </div>

    <br>

    <div x-data="{ tab: 'foo' }" class="text-4xl">
        <button class=" text-4xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="tab = 'foo'">Foo</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="tab = 'bar'">Bar</button>
    
        <div x-show="tab === 'foo'" class="text-4xl text-gray-600 font-bold bg-indigo-200 shadow overflow-hidden rounded border mt-2 py-1 right-0 z-20">Tab Foo</div>
        <div x-show="tab === 'bar'" class="text-4xl text-gray-600 font-bold bg-indigo-200 shadow overflow-hidden rounded border mt-2 py-1 right-0 z-20">Tab Bar</div>
    </div>


    
    

   

</div>

<script>
    function imgFunc(){
            var i = 1;
            var img ='img'+i;
            
            return {
            i,
            img,
            // startImg(){
            //     var self=this;
            //     var myvar = window.setInterval(function(){
            //         self.img = 'img'+self.i;
            //         if(self.i<3){
            //             self.i++;
            //         }else{
            //             self.i=1;
            //         }    
            //     }, 1000);
            // },
            startImg(){
                var self=this;
                var myvar = window.setInterval(()=>{
                    this.img = 'img'+this.i;
                    if(this.i<3){
                        this.i++;
                    }else{
                        this.i=1;
                    }    
                }, 3000);
            },


        }
        
    }

</script>

</x-app-layout>