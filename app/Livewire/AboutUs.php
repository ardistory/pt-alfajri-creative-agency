<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy()]
class AboutUs extends Component
{
    #[Title('Tentang Kami')]
    public function render()
    {
        return view('livewire.about-us');
    }
}
