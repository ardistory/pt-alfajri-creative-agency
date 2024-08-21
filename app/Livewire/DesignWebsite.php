<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class DesignWebsite extends Component
{
    #[Title('Design Website')]
    public function render()
    {
        return view('livewire.design-website');
    }
}
