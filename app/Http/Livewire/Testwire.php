<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Testwire extends Component
{
    public $testvar='Not Changed';
    public function TestFunction()
    {
        $this->testvar = 'Changed';
    }

    public function render()
    {
        return view('livewire.testwire');
    }
}
