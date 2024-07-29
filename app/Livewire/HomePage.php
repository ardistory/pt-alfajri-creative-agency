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
                'image' => '/assets/img/advertising-banner.png',
                'title' => 'ADVERTISING',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/advertising'
            ],
            [
                'image' => '/assets/img/graphic-design-banner.png',
                'title' => 'GRAPHIC DESIGN',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/graphic-design'
            ],
            [
                'image' => '/assets/img/digital-marketing-banner.png',
                'title' => 'DIGITAL MARKETING',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia voluptatum fugiat aliquid. Quo nobis ea quae sit praesentium iure repellendus ab natus perspiciatis, quidem tempore delectus rem dignissimos nisi laudantium provident accusamus commodi, cum minima.',
                'url' => '/digital-marketing'
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
