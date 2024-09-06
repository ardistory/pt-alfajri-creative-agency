<?php

namespace App\Livewire;

use App\Models\OrderProduct;
use Carbon\Carbon;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

// #[Lazy()]
class StatusOrder extends Component
{
    use Toast;

    public bool $isValid = false;
    #[Validate('required', as: 'Nomor Invoice')]
    public string $noInvoice = '';
    #[Validate('required', as: 'Nomor Handphone')]
    public string $noHandphone = '';
    public $orderProduct = [];

    public function checkOrder()
    {
        $dataValid = $this->validate();

        $orderProduct = OrderProduct::query()
            ->where('no_invoice', '=', $dataValid['noInvoice'])
            ->where('no_hp', '=', $dataValid['noHandphone'])
            ->get();

        if (count($orderProduct) > 0) {
            $this->success('Proses ambil data');
            $this->isValid = true;
            $this->orderProduct = $orderProduct[0];

            Carbon::setLocale('id');

            $date1 = Carbon::parse($orderProduct[0]['tgl_order1']);
            $formattedDate1 = $date1->translatedFormat('l, j F Y');
            $formattedTime1 = $date1->format('H.i');
            $this->orderProduct['formattedDate1'] = $formattedDate1;
            $this->orderProduct['formattedTime1'] = $formattedTime1;

            $date2 = Carbon::parse($orderProduct[0]['tgl_order2']);
            $formattedDate2 = $date2->translatedFormat('l, j F Y');
            $formattedTime2 = $date2->format('H.i');
            $this->orderProduct['formattedDate2'] = $formattedDate2;
            $this->orderProduct['formattedTime2'] = $formattedTime2;

            $date3 = Carbon::parse($orderProduct[0]['tgl_order3']);
            $formattedDate3 = $date3->translatedFormat('l, j F Y');
            $formattedTime3 = $date3->format('H.i');
            $this->orderProduct['formattedDate3'] = $formattedDate3;
            $this->orderProduct['formattedTime3'] = $formattedTime3;

            $date4 = Carbon::parse($orderProduct[0]['tgl_order4']);
            $formattedDate4 = $date4->translatedFormat('l, j F Y');
            $formattedTime4 = $date4->format('H.i');
            $this->orderProduct['formattedDate4'] = $formattedDate4;
            $this->orderProduct['formattedTime4'] = $formattedTime4;

            $date5 = Carbon::parse($orderProduct[0]['tgl_order5']);
            $formattedDate5 = $date5->translatedFormat('l, j F Y');
            $formattedTime5 = $date5->format('H.i');
            $this->orderProduct['formattedDate5'] = $formattedDate5;
            $this->orderProduct['formattedTime5'] = $formattedTime5;
        } else {
            $this->error('Data yang anda masukan salah');
            $this->reset(['noInvoice', 'noHandphone']);
        }
    }

    public function resetPage()
    {
        $this->isValid = false;
        $this->reset(['noInvoice', 'noHandphone']);
    }

    #[Title('Status Order')]
    public function render()
    {
        return view('livewire.status-order');
    }
}
