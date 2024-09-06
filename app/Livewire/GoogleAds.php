<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class GoogleAds extends Component
{
    #[Title('Google Ads')]
    public function render()
    {
        return view('livewire.google-ads');
    }
}
