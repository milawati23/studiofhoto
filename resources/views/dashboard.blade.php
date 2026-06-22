<x-layouts::app :title="__('Dashboard')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        📸 Dashboard Studio Foto
    </h1>

    {{-- Statistik --}}
    <div class="grid gap-4 md:grid-cols-4 mb-8">

        <div class="bg-blue-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">Customer</h2>
            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Customer::count() }}
            </p>
        </div>

        <div class="bg-green-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">Kategori</h2>
            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Category::count() }}
            </p>
        </div>

        <div class="bg-purple-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">Transaksi</h2>
            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Transaction::count() }}
            </p>
        </div>

        <div class="bg-orange-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">Pendapatan</h2>
            <p class="text-2xl font-bold mt-2">
                Rp {{ number_format(\App\Models\Transaction::sum('total')) }}
            </p>
        </div>

    </div>

    {{-- Menu --}}
    <div class="grid gap-4 md:grid-cols-3 mt-6">

        <a href="/categories"
           class="block rounded-xl border p-5 bg-blue-500 text-center">

            <h2 class="font-bold text-xl text-white mb-2">
                Kategori
            </h2>

            <p class="text-white">
                Kelola kategori foto
            </p>

        </a>

        <a href="/transactions"
           class="block rounded-xl border p-5 bg-green-500 text-center">

            <h2 class="font-bold text-xl text-white mb-2">
                Transaksi
            </h2>

            <p class="text-white">
                Kelola transaksi
            </p>

        </a>

        <a href="/customers"
           class="block rounded-xl border p-5 bg-purple-500 text-center">

            <h2 class="font-bold text-xl text-white mb-2">
                Pelanggan
            </h2>

            <p class="text-white">
                Data pelanggan
            </p>

        </a>

    </div>

</div>

</x-layouts::app>