<x-layouts::app :title="__('Dashboard')">

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        📸 Dashboard Studio Foto
    </h1>


    {{-- Statistik --}}
    <div class="grid gap-4 md:grid-cols-4 mb-8">

        <div class="bg-blue-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">
                Customer
            </h2>

            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Customer::count() }}
            </p>
        </div>



        <div class="bg-green-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">
                Kategori
            </h2>

            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Category::count() }}
            </p>
        </div>



        <div class="bg-purple-500 text-white rounded-xl p-5 text-center">
            <h2 class="text-lg font-bold">
                Transaksi
            </h2>

            <p class="text-4xl font-bold mt-2">
                {{ \App\Models\Transaction::count() }}
            </p>
        </div>



        <div class="bg-orange-500 text-white rounded-xl p-5 text-center">

            <h2 class="text-lg font-bold">
                Pendapatan
            </h2>

            <p class="text-2xl font-bold mt-2">
                Rp {{ number_format(\App\Models\Transaction::sum('total')) }}
            </p>

        </div>


    </div>



    {{-- Grafik --}}
    <div class="mt-8 bg-gray-800 p-6 rounded-xl">


        <h2 class="text-xl text-white mb-4">
            📊 Grafik Pendapatan
        </h2>


        <div class="h-80">

            <canvas id="pendapatanChart"></canvas>

        </div>


    </div>




    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>

    const ctx = document.getElementById('pendapatanChart');


    new Chart(ctx, {


        type: 'bar',


        data: {


            labels: [

                'Jan',
                'Feb',
                'Mar',
                'Apr'

            ],



            datasets: [{

                label: 'Pendapatan',


                data: [

                    1000000,
                    2500000,
                    1500000,
                    3000000

                ],


                borderWidth: 1

            }]

        },



        options: {


            responsive: true,


            maintainAspectRatio: false,



            plugins: {


                legend: {


                    labels: {


                        color: 'white'


                    }


                }


            },



            scales: {


                x: {


                    ticks: {


                        color: 'white'


                    }


                },



                y: {


                    ticks: {


                        color: 'white'


                    }


                }


            }


        }


    });


    </script>






    {{-- Menu --}}
    <div class="grid gap-4 md:grid-cols-3 mt-8">



        <a href="/categories"
        class="rounded-xl border p-5 bg-blue-500 text-center">


            <h2 class="font-bold text-xl text-white mb-2">
                Kategori
            </h2>


            <p class="text-white">
                Kelola kategori foto
            </p>


        </a>





        <a href="/transactions"
        class="rounded-xl border p-5 bg-green-500 text-center">


            <h2 class="font-bold text-xl text-white mb-2">
                Transaksi
            </h2>


            <p class="text-white">
                Kelola transaksi
            </p>


        </a>





        <a href="/customers"
        class="rounded-xl border p-5 bg-purple-500 text-center">


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