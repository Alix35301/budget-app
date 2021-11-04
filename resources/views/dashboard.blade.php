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
                    <div class="rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-center">Savings</div>
                            <p class="text-gray-700 text-base text-center">
                                MVR 19,000.00
                            </p>
                        </div>
    
                    </div>

                    <div class="rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-center">Expenses</div>
                            <p class="text-gray-700 text-base text-center">
                                You have spent <br> <strong> MVR {{number_format( $curMonExp,2)}} </strong> <br> in {{Carbon\Carbon::now()->format('F')}}
                                <br> {{number_format( $perChange,2)}} %
                        
                                @if(number_format( $perChange,2) > 0)
                                <i class="fas fa-arrow-up"></i>

                                @else

                                <i class="fas fa-arrow-down"></i>
                                @endif
                                
                                
                                
                            </p>
                        </div>

                    </div>

                    <div class="rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-center">Balance</div>
                            <p class="text-4xl text-gray-700 text-base text-center py-8">
                                MVR 25,000
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






</x-app-layout>
