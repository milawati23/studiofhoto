<div>

    <h2 class="text-xl font-bold mb-4">
        Form Transaksi
    </h2>

    @if(session()->has('success'))
        <p class="text-green-600 mb-3">
            {{ session('success') }}
        </p>
    @endif

    <input
        type="number"
        wire:model.live="harga"
        placeholder="Harga"
        class="border p-2 rounded">

    <input
        type="number"
        wire:model.live="jumlah"
        placeholder="Jumlah"
        class="border p-2 rounded">

    <div class="mt-3">

        <label class="font-bold block mb-1">
            Durasi Foto
        </label>

        <input
            type="number"
            wire:model.live="duration"
            min="1"
            class="border p-2 rounded">

        <select
            wire:model.live="duration_unit"
            class="border p-2 rounded">

            <option value="menit">
                Menit
            </option>

            <option value="jam">
                Jam
            </option>

        </select>

    </div>

    <div class="mt-3">

        <select
            wire:model.live="metode"
            class="border p-2 rounded">

            <option value="Cash">
                Cash
            </option>

            <option value="Transfer">
                Transfer
            </option>

        </select>

    </div>

    <p class="mt-3">
        Harga: {{ $harga }}
    </p>

    <p>
        Jumlah: {{ $jumlah }}
    </p>

    <p>
        Durasi: {{ $duration }} {{ $duration_unit }}
    </p>

    <p class="font-bold mt-3">
        Total: Rp {{ number_format($total) }}
    </p>

    <button
        wire:click="simpan"
        wire:loading.attr="disabled"
        class="bg-green-500 text-white px-4 py-2 rounded">

        <span wire:loading>
            Menyimpan...
        </span>

        <span wire:loading.remove>
            Simpan Transaksi
        </span>

    </button>

</div>