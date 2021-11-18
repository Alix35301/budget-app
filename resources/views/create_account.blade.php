<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Account') }}
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
                <form class="w-full max-w-lg" method="POST" action='/create-account'>
                    @csrf

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-amount">
                        Account Name
                    </label>


                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="What would you like to call it?" id="accName" name="accName">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-income-type">
                        Currency
                    </label>


                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight fo:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-currenyType" name='currencyType' class="@error('currenyType') is-invalid @enderror">
                            <option value="none" selected disabled hidden>
                                Select the Currency
                            </option>
                            @foreach($currencies as $currency )
                                <option value="{{ $currency->id }}">
                                    {{ $currency->name }}
                                </option>
                            @endforeach
                 
                        </select>
                    </div>





                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded">
                        Add
                    </button>
                </form>

            </div>
            <div class="bg-white overflow-y-auto shadow-sm sm:rounded-lg p-4 w-4/12 h-96 m-4 ">

            @foreach ($accounts as $account )
                    <div class="rounded-lg bg-gray-100 py-3 m-3">
                        <p class="text-center text-green-400"> {{$account->account_name}}({{$account->currency->name}}) - {{Carbon\Carbon::parse($account->created_at)->format('M d Y')}}</p>
                    </div>
                    @endforeach



        </div>


    </div>



</x-app-layout>
