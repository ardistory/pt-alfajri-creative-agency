<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Fallback extends Component
{
    #[Title('Error')]
    public function render()
    {
        return view('livewire.fallback');
    }
}
