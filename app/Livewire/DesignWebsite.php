<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class DesignWebsite extends Component
{
    #[Title('Design Website')]
    public function render()
    {
        return view('livewire.design-website');
    }
}
