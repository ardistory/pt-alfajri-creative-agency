<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy()]
class Fallback extends Component
{
    #[Title('Error')]
    public function render()
    {
        return view('livewire.fallback');
    }
}
