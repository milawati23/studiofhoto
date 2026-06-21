<x-layouts::app :title="__('Edit Pelanggan')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-4">
        Edit Pelanggan
    </h1>


    <form action="/customers/{{ $customer->id }}" method="POST">

        @csrf
        @method('PUT')


        <input
        type="text"
        name="nama"
        value="{{ $customer->nama }}"
        class="border p-2 rounded block mb-3">


        <input
        type="text"
        name="alamat"
        value="{{ $customer->alamat }}"
        class="border p-2 rounded block mb-3">


        <input
        type="text"
        name="no_hp"
        value="{{ $customer->no_hp }}"
        class="border p-2 rounded block mb-3">


        <button
        type="submit"
        class="bg-green-500 text-white px-4 py-2 rounded">
            Update
        </button>


    </form>

</div>

</x-layouts::app>