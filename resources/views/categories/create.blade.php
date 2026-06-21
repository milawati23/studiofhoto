<x-layouts::app :title="__('Tambah Kategori')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        ➕ Tambah Kategori
    </h1>

    <form action="{{ route('categories.store') }}" method="POST">

        @csrf

        <label class="block mb-2">
            Nama Kategori
        </label>

        <input 
            type="text"
            name="nama"
            class="border p-2 rounded w-full mb-4"
            placeholder="Nama kategori">


        <label class="block mb-2">
            Deskripsi
        </label>

        <textarea
            name="deskripsi"
            class="border p-2 rounded w-full mb-4"></textarea>


        <button 
            class="bg-green-500 text-white px-4 py-2 rounded">

            Simpan

        </button>

    </form>

</div>

</x-layouts::app>