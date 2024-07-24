<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;
use Mary\Traits\Toast;

class HomePage extends Component
{
    use Toast;

    public function getCarousel(): array
    {
        return [
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/03/Galveston_Federal_Building_2009.jpg',
                'title' => 'ADVERTISING',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/link/ke'
            ],
            [
                'image' => 'https://3.bp.blogspot.com/-KBoT-iZHeMk/Vwem3T3fyBI/AAAAAAAAF-I/IqBTYddZx9Q0Ixr9Z569079HamP6K2DMQ/s1600/shutterstock_71036287.jpg',
                'title' => 'GRAPHIC DESIGN',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/link/ke'
            ],
            [
                'image' => 'https://media.architecturaldigest.com/photos/59a838a9a8a79c392f89eba2/master/w_1600%2Cc_limit/GettyImages-481686221.jpg',
                'title' => 'DIGITAL MARKETING',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/link/ke'
            ]
        ];
    }

    #[Title('Home')]
    public function render()
    {
        return view(
            'livewire.home-page',
            [
                'slides' => $this->getCarousel()
            ]
        );
    }
}
