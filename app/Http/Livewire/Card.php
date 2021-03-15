<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{

    public $valors=300000;
    public function render()
    {
        return view('livewire.card');
    }
}
