<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class VideoProduction extends Component
{
    #[Title('Video Production')]
    public function render()
    {
        return view('livewire.video-production');
    }
}
