<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class Testimoni extends Component
{
    #[Title('Testimoni')]
    public function render()
    {
        return view('livewire.testimoni');
    }
}
