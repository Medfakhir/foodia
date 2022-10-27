<x-guest-layout>

    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
        @foreach ($category->menus as $menu)
        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg ">
            <div class="flex relative">
                <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />

                <span class="p-8 absolute bottom-4 right-2 inline-flex items-center justify-center h-14 w-14 rounded-full bg-green-800 text-white border border-2">
                    <span class="font-medium leading-none text-white">{{$menu->price}}$</span>
                </span>
            </div>

          

            <div class="px-6 py-4 uppercase">
            
                    <span class="text-green-900 font-bold hover:text-sky-700">{{$menu->name}}</span>
                
                    
            </div>

            <div class="px-6 py-4">
                <p class="text-gray-400">
                    {{$menu->description }}
                </p>
            </div>

           
        </div>
        @endforeach
        </div>
        </div>
    


</x-guest-layout>