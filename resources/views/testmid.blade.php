<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('TestMid') }}
        </h2>
    </x-slot>

    <div class="pl-28 pr-28">

        <h1 class="text-4xl">Full productio circle test</h1>
        <h1 class="text-4xl">Another deployment test</h1>

        <br>
        <br>

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, repellendus numquam! Corporis dolorum quo repudiandae, libero esse corrupti vero. Consequuntur ipsum amet accusantium eius placeat odio dignissimos suscipit id accusamus!
        

        <br>
        <br>

        <div class="text-4xl">
            <livewire:testwire />
        </div>
        
        <br>
        <br>
        <h1>SVG Circle Progress</h1>    
        <h2>Based off of CSS3 circle progress bars</h2>
        
        



       

        <br>
        <br>
        <x-ratingroundbarsmall :rating=95 />


        <br>
        <br>
        <br>

 


    </div>
</x-app-layout>