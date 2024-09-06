<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class Advertising extends Component
{
    #[Title('Avertising')]
    public function render()
    {
        return view('livewire.advertising');
    }
}
