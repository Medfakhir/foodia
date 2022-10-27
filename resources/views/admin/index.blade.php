<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dashboard
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
            href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <i class="fa-sharp fa-solid fa-fire fa-2xl"></i>
                    <div
                        class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">New</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{$categoryCount}}</div>

                        <div class="mt-1 text-base text-gray-600">categories</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
            href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <i class="fa-sharp fa-solid fa-square-list fa-2xl"></i>
                    <div
                        class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{$menuCount}}</div>

                        <div class="mt-1 text-base text-gray-600">menus</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
            href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <i class="fa-sharp fa-solid fa-diagram-cells fa-2xl"></i>
                    <div
                        class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{$tableCount}}</div>

                        <div class="mt-1 text-base text-gray-600">Tables</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
            href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <i class="fa-sharp fa-solid fa-money-check-pen fa-2xl"></i>
                    <div
                        class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{$reserCount}}</div>

                        <div class="mt-1 text-base text-gray-600">Reservations</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    
</x-admin-layout>