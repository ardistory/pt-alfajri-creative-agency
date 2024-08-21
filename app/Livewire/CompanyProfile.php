<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class CompanyProfile extends Component
{
    #[Title('Company Profile')]
    public function render()
    {
        return view('livewire.company-profile');
    }
}
