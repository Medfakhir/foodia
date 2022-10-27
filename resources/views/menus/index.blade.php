<x-guest-layout>
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

    

    


</x-guest-layout>