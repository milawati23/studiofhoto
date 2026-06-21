<x-layouts::app :title="__('Kategori')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-2">
        📸 Halaman Kategori
    </h1>

    <p class="text-gray-500 mb-6">
        Kelola kategori foto
    </p>


    <a href="/categories/create"
    class="bg-green-500 text-white px-4 py-2 rounded inline-block mb-4">

        ➕ Tambah Kategori

    </a>


    <div class="bg-white text-black rounded shadow">


        <table class="w-full border">


            <thead>

                <tr>

                    <th class="border p-2">
                        No
                    </th>

                    <th class="border p-2">
                        Nama Kategori
                    </th>

                    <th class="border p-2">
                        Deskripsi
                    </th>

                    <th class="border p-2">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>


            @foreach($categories as $category)


                <tr>


                    <td class="border p-2 text-center">
                        {{ $loop->iteration }}
                    </td>


                    <td class="border p-2">
                        {{ $category->nama }}
                    </td>


                    <td class="border p-2">
                        {{ $category->deskripsi }}
                    </td>


                    <td class="border p-2 text-center">


                        <a href="/categories/{{ $category->id }}/edit"
                        class="bg-blue-500 text-white px-3 py-1 rounded">

                            ✏ Edit

                        </a>


                        <form action="/categories/{{ $category->id }}"
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