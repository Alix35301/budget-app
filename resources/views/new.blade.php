<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Entry') }}
        </h2>
    </x-slot>



    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- @if ($errors->any())
    <div div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <form class="w-full max-w-lg" method="POST" action='/new-entry'>
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-item-name">
                                    Item Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                     type="text" placeholder="What did you buy?" id ="searchProduct" name="product" class="@error('product') is-invalid @enderror" value="{{ old('product') }}">
                                
                                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";

        $('#searchProduct').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    console.log(process(data));
                    return process(data);
                });
            }
        });
    </script>

                                
                                
                                    @error('product')
                                <p class="text-red-600 text-xs italic">{{$message}}</p>

                                @enderror
                                
                            </div>
                        </div>
                        <div class="w-full max-w-lg">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-category">
                                Category
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-category" name= 'category_id' class="@error('category_id') is-invalid @enderror">
                                    <option value="none" selected disabled hidden>
                                    Select a Category
                                     </option>
                                    @foreach ($cats as $cat)
                                    <option value ="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('category_id')
                                <p class="text-red-600 text-xs italic">{{$message}}</p>

                            @enderror
                        </div>
                        <br />
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-item-qty">
                                    Quantity
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-item-qty" type="number"  pattern="\d*" placeholder="How much did you buy?" name = 'qty' class="@error('qty') is-invalid @enderror">
                                    @error('qty')
                                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                                    @enderror
                                </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-item-price">
                                    Price
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-item-price" type="number" placeholder="What was the price?" name = 'price' class="@error('price') is-invalid @enderror">
                                    @error('price')
                                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                                    @enderror
                                </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-shop-name">
                                    Shop
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-shop-name" type="text" placeholder="What was the name of the shop?" name ='shop_id' class="@error('shop_id') is-invalid @enderror">
                                    @error('shop_id')
                                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                                    @enderror                            </div>
                        </div>


                        <div class="w-full max-w-lg">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-location">
                                Location
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-location" name= 'location' class="@error('location') is-invalid @enderror">
                                    <option value="none" selected disabled hidden>
                                    Select the location
                                     </option>
                                    @foreach ($locs as $loc)
                                    <option value ="{{$loc->id}}">{{$loc->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('category_id')
                                <p class="text-red-600 text-xs italic">{{$message}}</p>

                            @enderror
                        </div>
                        <br>

                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded">
                            Save
                        </button>
                </div>
            </div>
            </form>
        </div>
    </div>


</x-app-layout>
