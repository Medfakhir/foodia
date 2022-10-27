<x-guest-layout>
    <div class="bg-green-50 flex items-center justify-between rounded-2xl p-10 grid grid-cols-1 sm:grid-cols-3">

        <div class="sm:col-span-2 flex flex-col justify-start items-center space-y-8">
    
            <div class="flex flex-row justify-start items-start w-full">
                <div class="bg-gray-900 text-white py-1 px-4">50%</div>
                <div class="bg-gray-200 text-gray-900 py-1 px-4">for any online Reservation</div>
            </div>
    
            <div class="flex justify-start items-start w-full">
                <p class="text-gray-900 text-6xl tracking-wider font-bold">
                   Resere your Table anywhere anytime.
                </p>
            </div>
    
            <div class="flex justify-start items-start w-full">
                <p class="text-gray-400">
                    We Are Here Any time You want
                </p>
            </div>
    
            <div class="flex justify-start items-start w-full">
    
                
                    
                    <button class="rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full"
                            >
                    <a href="{{route('reservations.step.one')}}">Make Your Reservation</a>
                    </button>
                    
             
    
            </div>
    
        </div>
    
        <div class="hidden sm:block">
            <img src="https://pngimg.com/uploads/chef/chef_PNG195.png">
        </div>
    
    </div>
    <br>  <br>  <br>  <br>
    <!-- items -->
    <div class="space-y-8">
    
        <h1 class="text-4xl tracking-wider font-bold">
            <span class="border-b-4 border-orange-400">Menu</span> items
        </h1>
    
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-2">
           
                
            @foreach ($Menus as $menu)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                        {{ $menu->name }}</h4>
                    <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
                </div>
                <div class="flex items-center justify-between p-4">
                    <span class="text-xl text-green-600">{{ $menu->price }}</span>
                </div>
            </div>
        @endforeach

    
        </div>
    
    </div>
    <br>  <br>  <br>  <br>
    <!-- about -->
    <div class="flex grid grid-cols-1 sm:grid-cols-3 justify-center items-center">
        <div class="hidden sm:block col-span-2 flex justify-start items-start">
            <img src="https://pngimg.com/uploads/chef/chef_PNG11.png">
        </div>
    
        <div class="space-y-8">
            <h1 class="text-4xl tracking-wider font-bold">
                <span class="border-b-4 border-green-800">About</span> Foodie
            </h1>
    
            <p class="text-gray-400 text-left">
                Pellentesque habitant morbi tristique senectus et.
                morbi tristique senectus et.
            </p>
    
            <div>
                <ul class="space-y-4 flex flex-col items-start justify-start">
                    <li class="inline-flex items-center justify-center space-x-4">
                        <div class="bg-gray-200 p-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 text-gray-700"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-gray-900 text-left font-bold">Pellentesque</p>
                            <p class="text-gray-400 text-sm text-left">
                                Pellentesque habitant morbi tristique senectus et.
                            </p>
                        </div>
                    </li>
                    <li class="inline-flex items-center justify-center space-x-4">
                        <div class="bg-gray-200 p-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 text-gray-700"
                                 fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                            <p class="text-gray-400 text-sm text-left">
                                Consectetur adipisicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    
            <div>
                <div class="">
                    <a href="#"
                       class="inline-flex justify-between items-center rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                        See More
    
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-3 w-3 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>  <br>  <br>  <br>
    <!-- chef -->
    <div class="flex grid grid-cols-1 sm:grid-cols-3 justify-center items-center">
    
        <div class="col-span-2 space-y-8">
            <h1 class="text-4xl tracking-wider font-bold">
                <span class="border-b-4 border-green-800">About</span> Our Chef
            </h1>
    
            <p class="text-gray-400 text-left">
                Pellentesque habitant morbi tristique senectus et.
                morbi tristique senectus et.
            </p>
    
            <div>
                <ul class="space-y-4 flex flex-col items-start justify-start">
                    <li class="inline-flex items-center justify-center space-x-4">
                        <div class="bg-gray-200 p-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 text-gray-700"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-gray-900 text-left font-bold">Pellentesque</p>
                            <p class="text-gray-400 text-sm text-left">
                                Pellentesque habitant morbi tristique senectus et.
                            </p>
                        </div>
                    </li>
                    <li class="inline-flex items-center justify-center space-x-4">
                        <div class="bg-gray-200 p-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 text-gray-700"
                                 fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                            <p class="text-gray-400 text-sm text-left">
                                Consectetur adipisicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </li>
                    <li class="inline-flex items-center justify-center space-x-4">
                        <div class="bg-gray-200 p-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 text-gray-700"
                                 fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                            <p class="text-gray-400 text-sm text-left">
                                Consectetur adipisicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    
            <div>
                <div class="">
                    <a href="#"
                       class="inline-flex justify-between items-center rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                        See More
    
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-3 w-3 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="hidden sm:block flex justify-start items-start">
            <img src="https://pngimg.com/uploads/chef/chef_PNG66.png">
        </div>
    
    
    </div>
</x-guest-layout>