<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Advertising extends Component
{
    #[Title('Avertising')]
    public function render()
    {
        return view('livewire.advertising');
    }
}
