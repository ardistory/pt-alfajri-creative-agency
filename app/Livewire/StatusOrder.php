<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class StatusOrder extends Component
{
    #[Title('Status Order')]
    public function render()
    {
        return view('livewire.status-order');
    }
}
