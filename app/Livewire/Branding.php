<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Branding extends Component
{
    #[Title('Branding')]
    public function render()
    {
        return view('livewire.branding');
    }
}
