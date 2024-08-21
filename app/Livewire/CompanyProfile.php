<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy()]
class CompanyProfile extends Component
{
    #[Title('Company Profile')]
    public function render()
    {
        return view('livewire.company-profile');
    }
}
