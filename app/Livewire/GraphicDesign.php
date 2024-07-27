<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class GraphicDesign extends Component
{
    #[Title('Graphic Design')]
    public function render()
    {
        return view('livewire.graphic-design');
    }
}
