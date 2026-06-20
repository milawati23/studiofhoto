<x-layouts::app :title="__('Dashboard')">

<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

    <h1 class="text-2xl font-bold">
        Dashboard Studio Foto
    </h1>

    <div class="grid gap-4 md:grid-cols-3">

    <a href="/categories" class="block rounded-xl border p-5 bg-blue-500">
        <h2 class="font-bold text-white">Kategori</h2>
        <p class="text-white">Kelola kategori foto</p>
    </a>

    <a href="/transactions" class="block rounded-xl border p-5 bg-green-500">
        <h2 class="font-bold text-white">Transaksi</h2>
        <p class="text-white">Kelola transaksi</p>
    </a>

    <a href="/customers" class="block rounded-xl border p-5 bg-purple-500">
        <h2 class="font-bold text-white">Pelanggan</h2>
        <p class="text-white">Data pelanggan</p>
    </a>

</div>