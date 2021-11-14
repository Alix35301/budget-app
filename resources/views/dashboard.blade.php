<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <!--Card 1-->
                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <div class="px-6 py-4 m-4">
                            <div class=" text-2xl py-2 text-blue-500  font-semibold tracking-wide text-left">Savings
                            </div>
                            <p class="text-gray-700  font-bold text-3xl py-1">
                                <span class=" text-xl text-gray-600">MVR </span>
                                19,000.00
                            </p>
                            <p class="text-sm text-gray-600">Goal <span><i class="fas fa-arrow-right"></i></span> 19,000
                                (100%) <span> <i class="fas fa-check" style="color:green"></i></span> </p>
                            <!-- <i class="fas fa-times"></i> -->
                        </div>

                    </div>

                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <div class="px-6 py-4 m-4">
                            <div class="text-2xl py-2 text-red-400  font-semibold tracking-wide text-left">Expenses
                            </div>
                            <p class="text-gray-700 text-base text-center">
                                <p class="text-gray-700  font-bold text-3xl py-1">
                                    <span class=" text-xl text-gray-600">MVR </span>
                                    {{ number_format( $curMonExp,2) }}
                                    @if(number_format( $perChange,2) == 0)
                                        <p class="text-sm text-gray-600"> In
                                            {{ Carbon\Carbon::now()->format('F') }}</p>

                                    @elseif(number_format( $perChange,2) > 0)
                                        <p class="text-sm text-gray-600"> {{ number_format( $perChange,2) }} % <i
                                                class="fas fa-arrow-up" style="color:red"></i></span> in
                                            {{ Carbon\Carbon::now()->format('F') }}</p>



                                    @else

                                        <p class="text-sm text-gray-600"> {{ number_format( $perChange,2) }} % <i
                                                class="fas fa-arrow-down" style="color:green"></i></i></span> </p>
                                    @endif
                                </p>
                        </div>

                    </div>

                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <div class="px-6 py-4 m-4">
                            <div class="text-2xl py-2 text-green-300  font-semibold tracking-wide text-left">Balance
                            </div>
                            <p class="text-gray-700  font-bold text-3xl py-1">
                                <span class=" text-xl text-gray-600">MVR </span>
                                {{ $balance }} </p>

                        </div>
                    </div>





                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <livewire:category-pie-chart/>
                    </div>

                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <livewire:daily-chart/>
                    </div>

                    <div class="rounded-xl border-opacity-50 border-2 overflow-hidden shadow-sm">
                        <livewire:product-word-cloud/>
                    </div>
                </div>


            </div>

        </div>

    </div>
    </div>
    </div>






</x-app-layout>
