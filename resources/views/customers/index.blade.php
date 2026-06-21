<x-layouts::app :title="__('Pelanggan')">

    <div class="p-6">

        <h1 class="text-3xl font-bold mb-2 text-gray-900">
            Halaman Pelanggan
        </h1>

        <p class="text-gray-500 mb-6">
            Data pelanggan
        </p>

        <a href="/customers/create"
class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">
    + Tambah Pelanggan
</a>
        <div class="bg-white text-black rounded-lg shadow overflow-hidden">

            <table class="w-full border border-gray-300">

    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
</thead>



                <tbody class="text-gray-900">

@foreach($customers as $customer)

<tr>
    <td class="p-3 border">
        {{ $loop->iteration }}
    </td>

    <td class="p-3 border">
        {{ $customer->nama }}
    </td>

    <td class="p-3 border">
        {{ $customer->alamat }}
    </td>

    <td class="p-3 border">
        {{ $customer->no_hp }}
    </td>

    <td class="p-3 border text-center">

        <a href="/customers/{{ $customer->id }}/edit"
class="bg-blue-500 text-white px-3 py-1 rounded">
    Edit
</a>


<form action="/customers/{{ $customer->id }}" method="POST" class="inline">

    @csrf
    @method('DELETE')

    <button class="bg-red-500 text-white px-3 py-1 rounded">
        Hapus
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