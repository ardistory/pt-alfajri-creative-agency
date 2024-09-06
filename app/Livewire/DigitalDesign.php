<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class DigitalDesign extends Component
{
    #[Title('Digital Design')]
    public function render()
    {
        return view('livewire.digital-design');
    }
}
