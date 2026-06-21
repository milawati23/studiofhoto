<x-layouts::app :title="__('Transaksi')">

<div class="p-6">

<h1 class="text-3xl font-bold mb-2">
    Halaman Transaksi
</h1>

<p class="text-gray-500 mb-6">
    Sprint 3 - Sistem Transaksi dan Pembayaran
</p>


<div class="bg-white p-6 rounded shadow text-black">


<h2 class="text-xl font-bold mb-4">
    Form Transaksi
</h2>


<form action="/transactions" method="POST">

@csrf


<label>Harga</label>

<input
type="number"
name="harga"
placeholder="Harga"
class="border p-2 rounded block mb-3 w-full">


<label>Jumlah</label>

<input
type="number"
name="jumlah"
placeholder="Jumlah"
class="border p-2 rounded block mb-3 w-full">


<label>Metode Pembayaran</label>

<select
name="metode_pembayaran"
class="border p-2 rounded block mb-3 w-full">

<option value="Cash">
Cash
</option>

<option value="Transfer">
Transfer
</option>

</select>


<button
type="submit"
class="bg-green-500 text-white px-4 py-2 rounded">

Simpan Transaksi

</button>


</form>


<h2 class="text-xl font-bold mt-8">
Data Transaksi
</h2>


@foreach($transactions as $trx)

<p>
Kode: {{ $trx->kode_transaksi }}
</p>

<p>
Total: Rp {{ $trx->total }}
</p>

<p>
Status: {{ $trx->status }}
</p>

<hr>

@endforeach


</div>

</div>

</x-layouts::app>