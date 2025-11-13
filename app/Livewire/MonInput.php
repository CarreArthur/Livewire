<?php

namespace App\Livewire;

use Livewire\Component;

class MonInput extends Component
{
    public $texte = '';
    public function render()
    {
        return view('livewire.mon-input');
    }
}
