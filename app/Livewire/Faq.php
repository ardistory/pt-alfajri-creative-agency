<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Faq extends Component
{
    #[Title('Faq')]
    public function render()
    {
        return view('livewire.faq');
    }
}
