<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class SosialMediaManagement extends Component
{
    #[Title('Sosial Media Management')]
    public function render()
    {
        return view('livewire.sosial-media-management');
    }
}
