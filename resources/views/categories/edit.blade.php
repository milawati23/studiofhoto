<x-layouts::app :title="__('Edit Kategori')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        ✏ Edit Kategori
    </h1>


    <form action="/categories/{{ $category->id }}" method="POST">

        @csrf
        @method('PUT')


        <label class="block mb-2">
            Nama Kategori
        </label>

        <input 
            type="text"
            name="nama"
            value="{{ $category->nama }}"
            class="border p-2 rounded w-full mb-4">


        <label class="block mb-2">
            Deskripsi
        </label>

        <textarea
            name="deskripsi"
            class="border p-2 rounded w-full mb-4">{{ $category->deskripsi }}</textarea>


        <button 
            class="bg-blue-500 text-white px-4 py-2 rounded">

            Update

        </button>


    </form>

</div>

</x-layouts::app>