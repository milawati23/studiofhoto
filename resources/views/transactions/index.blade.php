<x-layouts::app :title="__('Transaksi')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-2">
        💳 Halaman Transaksi
    </h1>

    <p class="text-gray-500 mb-6">
        Sprint 3 - Sistem Transaksi dan Pembayaran
    </p>


    <div class="mb-8">

        <livewire:transactions.transaction-form />

    </div>



    <h2 class="text-xl font-bold mb-4">
        Data Transaksi
    </h2>


    <div class="bg-white text-black rounded shadow">


        <table class="w-full border">


            <thead>

                <tr>

                    <th class="border p-2">
                        No
                    </th>

                    <th class="border p-2">
                        Kode Transaksi
                    </th>

                    <th class="border p-2">
                        Total
                    </th>

                    <th class="border p-2">
                        Status
                    </th>

                    <th class="border p-2">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>


            @foreach($transactions as $transaction)


                <tr>

                    <td class="border p-2 text-center">
                        {{ $loop->iteration }}
                    </td>


                    <td class="border p-2">
                        {{ $transaction->kode_transaksi }}
                    </td>


                    <td class="border p-2">
                        Rp {{ number_format($transaction->total) }}
                    </td>


                    <td class="border p-2 text-center">
                        {{ $transaction->status }}
                    </td>


                    <td class="border p-2 text-center">


                        <a href="/transactions/{{ $transaction->id }}/nota"
                        class="bg-blue-500 text-white px-3 py-1 rounded">

                            📄 Nota

                        </a>


                        <form action="/transactions/{{ $transaction->id }}"
                        method="POST"
                        class="inline">


                            @csrf
                            @method('DELETE')


                            <button
                            class="bg-red-500 text-white px-3 py-1 rounded">

                                🗑 Hapus

                            </button>


                        </form>


                    </td>


                </tr>


            @endforeach


            </tbody>


        </table>


    </div>


</div>


</x-layouts::app>