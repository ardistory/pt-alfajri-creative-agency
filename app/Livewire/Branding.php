<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy()]
class Branding extends Component
{
    #[Title('Branding')]
    public function render()
    {
        return view('livewire.branding');
    }
}
