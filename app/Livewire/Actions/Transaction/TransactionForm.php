<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Payment;

class TransactionForm extends Component
{
    public $harga = 0;
    public $jumlah = 1;
    public $total = 0;
    public $metode = 'Cash';


    public function updated()
    {
        $harga = (int) $this->harga;
        $jumlah = (int) $this->jumlah;

        $this->total = $harga * $jumlah;
    }


    public function simpan()
    {
        $transaksi = Transaction::create([

            'kode_transaksi' => 'TRX'.time(),

            'total' => $this->total,

            'status' => 'paid'

        ]);


        Payment::create([

            'transaction_id' => $transaksi->id,

            'jumlah_bayar' => $this->total,

            'kembalian' => 0,

            'metode_bayar' => $this->metode

        ]);


        $this->harga = 0;
        $this->jumlah = 1;
        $this->total = 0;
        $this->metode = 'Cash';


        session()->flash('success','Transaksi berhasil disimpan');
    }


    public function render()
    {
        return view('livewire.transactions.transaction-form');
    }
}