<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Kontak')]
    public function render()
    {
        return view('livewire.contact');
    }
}
