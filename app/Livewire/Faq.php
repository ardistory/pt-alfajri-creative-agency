<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class Faq extends Component
{
    #[Title('Faq')]
    public function render()
    {
        return view('livewire.faq');
    }
}
