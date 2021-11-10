<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Income') }}
        </h2>
    </x-slot>



    <div class="py-5">
        @if(session()->has('message'))


            <div class="text-center w-full bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3"
                role="alert">
                <p class="font-bold">Yay! It's saved ;) </p>

            </div>
        @endif
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 w-4/12 h-96 m-4">
                <form class="w-full max-w-lg" method="POST" action='/add-income'>
                    @csrf
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-income-type">
                        Income Type
                    </label>


                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight fo:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-income-type" name='income-type' class="@error('income-type') is-invalid @enderror">
                            <option value="none" selected disabled hidden>
                                Select the location
                            </option>
                            @foreach($types as $type )
                                <option value="{{ $type->id }}">
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-amount">
                        Amount
                    </label>


                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="Enter the amount.." id="amount" name="amount">


                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-remarks">
                        Remarks
                    </label>

                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        rows="4" id="remarks" name="remarks">
                    </textarea>

                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded">
                        Add
                    </button>
                </form>

            </div>
            <div class="bg-white overflow-y-auto shadow-sm sm:rounded-lg p-4 w-4/12 h-96 m-4 ">

                    @foreach ($incomes as $income )
                    <div class="rounded-lg bg-gray-100 py-3 m-3">
                        <p class="text-center text-green-400">Income: Salary {{number_format( $income->amount,2)}} - {{Carbon\Carbon::parse($income->created_at)->format('M d Y')}}</p>
                    </div>
                    @endforeach



        </div>


    </div>



</x-app-layout>
