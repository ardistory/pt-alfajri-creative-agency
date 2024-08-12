<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Faq extends Component
{
    public string $selectedTab = 'ketentuan';

    public function changeTab($tab)
    {
        $this->selectedTab = $tab;
    }

    #[Title('Faq')]
    public function render()
    {
        return view('livewire.faq');
    }
}
