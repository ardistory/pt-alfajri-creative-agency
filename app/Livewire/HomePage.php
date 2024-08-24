<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;
use Mary\Traits\Toast;

#[Lazy()]
class HomePage extends Component
{
    use Toast;

    public function getCarousel(): array
    {
        return [
            [
                'image' => '/assets/img/advertising-banner.png',
                'title' => 'ADVERTISING',
                'description' => 'Kami mengkomunikasikan pesan untuk mempromosikan produk dan layanan. Dengan menggunakan STORY yang relevan, dapat membangun ikatan emosional dengan konsumen yang potensial.',
                'url' => '/advertising'
            ],
            [
                'image' => '/assets/img/graphic-design-banner.png',
                'title' => 'GRAPHIC DESIGN',
                'description' => 'Kami memahami setiap desain memiliki tujuan untuk mengkomunikasikan STORY yang mendalam melalui gambar, grafik, dan layout.',
                'url' => '/graphic-design'
            ],
            [
                'image' => '/assets/img/digital-marketing-banner.png',
                'title' => 'DIGITAL MARKETING',
                'description' => 'Kami memanfaatkan platform digital untuk membangun STORY branding yang menarik. Melalui konten visual, naratif, dan strategi pemasaran.',
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
