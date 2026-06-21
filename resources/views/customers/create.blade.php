<x-layouts::app :title="__('Tambah Pelanggan')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-4">
        Tambah Pelanggan
    </h1>

    <form action="/customers" method="POST">

        @csrf

        <input 
        type="text"
        name="nama"
        placeholder="Nama"
        class="border p-2 rounded block mb-3">

        <input 
        type="text"
        name="alamat"
        placeholder="Alamat"
        class="border p-2 rounded block mb-3">

        <input 
        type="text"
        name="no_hp"
        placeholder="No HP"
        class="border p-2 rounded block mb-3">

        <button 
        type="submit"
        class="bg-green-500 text-white px-4 py-2 rounded">
            Simpan
        </button>

    </form>

</div>

</x-layouts::app>