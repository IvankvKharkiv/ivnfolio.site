<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Moviescomponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $movies;
    public function __construct($movies)
    {
        $this->movies=$movies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.moviescomponent');
    }
}
