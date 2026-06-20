<?php

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Payment;

new class extends Component
{
    public $harga = 0;
    public $jumlah = 1;
    public $total = 0;
    public $metode = 'Cash';

    public function updated()
    {
        $this->total = (int) $this->harga * (int) $this->jumlah;
    }

    public function simpan()
    {
        $transaksi = Transaction::create([
            'kode_transaksi' => 'TRX-' . rand(1000,9999),
            'total' => $this->total,
            'status' => 'Selesai',
        ]);

        Payment::create([
            'transaction_id' => $transaksi->id,
            'metode' => $this->metode,
            'jumlah' => $this->total,
        ]);

        $this->reset();

        $this->harga = 0;
        $this->jumlah = 1;
        $this->total = 0;
        $this->metode = 'Cash';

        session()->flash('success', 'Transaksi berhasil disimpan');
    }
};
?>

<div>

    <h2 class="text-xl font-bold mb-4">
        Form Transaksi
    </h2>

    <input
        type="number"
        wire:model="harga"
        placeholder="Harga"
        class="border p-2 rounded">

    <input
        type="number"
        wire:model="jumlah"
        placeholder="Jumlah"
        class="border p-2 rounded">

    <select wire:model="metode" class="border p-2 rounded">
        <option>Cash</option>
        <option>Transfer</option>
    </select>

    <p>Harga: {{ $harga }}</p>
    <p>Jumlah: {{ $jumlah }}</p>

    <p class="mt-3">
        Total: Rp {{ number_format($total) }}
    </p>

    <button
        wire:click="simpan"
        class="bg-green-500 text-white px-4 py-2 rounded">
        Simpan Transaksi
    </button>

    @if(session()->has('success'))
        <p class="mt-3 text-green-600">
            {{ session('success') }}
        </p>
    @endif

</div>