<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class DigitalMarketing extends Component
{
    #[Title('Digital Marketing')]
    public function render()
    {
        return view('livewire.digital-marketing');
    }
}
