<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use App\Models\Transaction;

class TransactionForm extends Component
{
    public $harga = 0;
    public $jumlah = 1;
    public $total = 0;
    public $metode = 'Cash';

    public $duration = 1;
    public $duration_unit = 'jam';


    public function updatedHarga()
    {
        $this->hitungTotal();
    }


    public function updatedJumlah()
    {
        $this->hitungTotal();
    }


    public function hitungTotal()
    {
        $this->total = intval($this->harga) * intval($this->jumlah);
    }


    public function simpan()
    {
        Transaction::create([

            'kode_transaksi' => 'TRX'.time(),

            'total' => $this->total,

            'status' => 'paid',

            'duration' => $this->duration,

            'duration_unit' => $this->duration_unit

        ]);


        $this->harga = 0;
        $this->jumlah = 1;
        $this->total = 0;
        $this->metode = 'Cash';

        $this->duration = 1;
        $this->duration_unit = 'jam';


        session()->flash('success','Transaksi berhasil disimpan');
    }


    public function render()
    {
        return view('livewire.transactions.transaction-form');
    }
}