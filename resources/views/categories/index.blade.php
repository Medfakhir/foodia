<x-guest-layout>

    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
        @foreach ($categorise as $category)
        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg ">
            <div class="flex relative">
                <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />

                
            </div>

        

            <div class="px-6 py-4 uppercase">
                <a href="{{route('categories.show',$category->id)}}">
                    <span class="text-green-900 font-bold hover:text-sky-700">{{$category->name}}</span>
                </a>
            
            </div>

            <div class="px-6 py-4">
                <p class="text-gray-400 px-4 text-center">
                    {{$category->description }}
                </p>
            </div>

           
        </div>
        @endforeach
        </div>
        </div>
    


</x-guest-layout>