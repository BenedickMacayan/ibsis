<x-layout>

    <x-card class="p-10 mx-auto mt-24 shadow-xl w-5/12 text-2xl bg-green-200">

        <header class="text-center">
            <h1 class="text-3xl font-bold uppercase mb-6 text-green-900">CONTROL THE SYSTEM</h2>
        </header>

        <div class="flex flex-col items-center p-20 font-semibold text-4xl">

            <div class="flex flex-row justify-between w-full">

                <button class="flex flex-col items-center justify-center h-64 w-72 rounded-3xl bg-green-600">

                    <i class="fa-solid fa-droplet mb-5"></i>
                    <span>Turn on system</span>

                </button>

                <button class="flex flex-col items-center justify-center h-64 w-72 rounded-3xl bg-amber-500">

                    <i class="fa-solid fa-circle-stop mb-5"></i>
                    <span>Turn off system</span>
                    
                </button>

            </div>

            <div class="mt-10 w-full">

                <button class="flex flex-col items-center justify-center h-64 w-full rounded-3xl bg-amber-100">

                    <i class="fa-solid fa-chart-line mb-5"></i>
                    <span>View data</span>

                </button>

            </div>

        </div>

        


    </x-card>

</x-layout>