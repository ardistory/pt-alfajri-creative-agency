<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Loading extends Component
{
    public function loadData()
    {
        sleep(1);
    }

    public function render()
    {
        return view('livewire.partials.loading');
    }
}
