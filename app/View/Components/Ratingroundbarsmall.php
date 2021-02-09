<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ratingroundbarsmall extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $rating = 0;
    public $ark;

    public function __construct($rating)
    {
        $this->rating=$rating;
        $this->ark = ((100-$this->rating)/100)*95.456;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ratingroundbarsmall');
    }
}
