<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Entry') }}
        </h2>
    </x-slot>



    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                                    id="grid-item-name" type="text" placeholder="What did you buy?" name="item-name">
                                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
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
                                    id="grid-category" name= 'category' >
                                    <option>Food</option>
                                    <option>Other</option>
                                    <option>College</option>
                                </select>
                            </div>
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
                                    id="grid-item-qty" type="text" placeholder="How much did you buy?" name = 'item-qty'>
                                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
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
                                    id="grid-item-price" type="number" placeholder="What was the price?" name = 'price'>
                                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
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
                                    id="grid-shop-name" type="text" placeholder="What was the name of the shop?" name ='shop_name'>
                                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
                            </div>
                        </div>


                        <div class="mt-4">
                            <span class="text-gray-700">Location</span>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="male">
                                    <span class="ml-2">Male'</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="hulhumale">
                                    <span class="ml-2">Hulhumale</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="other">
                                    <span class="ml-2">Other</span>
                                </label>
                            </div>
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
