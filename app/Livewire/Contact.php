<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class Contact extends Component
{
    #[Title('Kontak')]
    public function render()
    {
        return view('livewire.contact');
    }
}
