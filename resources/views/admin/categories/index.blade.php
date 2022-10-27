<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-wiht-500 hover: bg-slate-700 rounded-lg text-white	">New Category </a>
                </div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                               name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                descrption
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($categories as $Category)
                       
                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$Category->name}}
                        </th>

                        <td
                        lass="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ Storage::url($Category->image) }}" class="w-16 h-16 rounded">
                      
                        </td>

                        <td class="py-4 px-6">
                            {{$Category->description}}
                        </td>

                        <td class="py-4 px-6">
                          
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.categories.edit', $Category->id) }}"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                <form
                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                    method="POST"
                                    action="{{ route('admin.categories.destroy', $Category->id) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                           
                        </td>
                        
                    </tr>
                    
                       @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>