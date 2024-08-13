<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Loading extends Component
{
    public function loadData()
    {
        true;
    }

    public function render()
    {
        return view('livewire.partials.loading');
    }
}
