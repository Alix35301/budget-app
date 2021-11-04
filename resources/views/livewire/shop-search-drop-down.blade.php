<div class="w-full px-3">
    <script type="text/javascript">
        var result = {
            name: 'hello'
        };

        function getShopName(name) {
            // console.log(name);
            document.getElementById("searchShop").value = name;
            // hiding the resultsbox when result is clicked
            const targetDiv = document.getElementById("resultsbox");
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }

        }

    </script>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-item-name">
        Shop Name
    </label>
    <input wire:model.debounce.300ms="search"
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        type="text" placeholder="Where did you buy?" id="searchShop" name="shop_id"
        class="@error('shop') is-invalid @enderror" value="{{ old('shop') }}">
    @error('shop')
        <p class="text-red-600 text-xs italic">{{ $message }}</p>

    @enderror
    @if(strlen($search) >= 2)
        <div id="resultsbox"
            class="relative2 border rounded-md border-gray-200 shadow bg-white absolute z-50  h-100 divide-y">
            <!-- overflow-y-scroll divide-y -->
            <ul>

                @if($searchResults->count() > 0)

                    @foreach($searchResults as $searchResult )

                        <li class="border-b border-grey-100">
                            <a href="#" id="item"
                                class=" w-full block hover:bg-gray-100  px-4 py-1 text-sm text-gray-600 "
                                onclick="return getShopName('{{ $searchResult->name}}')">{{ $searchResult->name }}</a>
                        </li>
                    @endforeach
                @endif


            </ul>
        </div>
    @endif
</div>
