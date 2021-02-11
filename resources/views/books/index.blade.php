<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of books') }}
        </h2>
    </x-slot>

    <div class="max-w-9/12 mx-auto py-10 sm:px-6 lg:px-8">
        @if($user=='admin')
        <div class="block mb-8">
            <a href="{{ route('books.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Book</a>
        </div>
        @endif
        <div class="flex flex-col">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Author
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Genre
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Quantity
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($books as $book)
                                <tr>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap text-gray-900">
                                        {{$book->id}}
                                    </td> --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$book->author}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$book->title}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$book->genre}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$book->quantity}}
                                    </td>
                                   
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        <a href="{{route('books.show', $book->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">View</a>
                                            @if($user=='admin')
                                        <a href="{{route('books.edit', $book->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                        <form class="inline-block" action="{{ route('books.destroy', $book->id) }}"
                                            method="POST" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2"
                                                value="Delete">
                                        </form>
                                    </td>
                                    
                                </tr>   
                                @endif
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</x-app-layout>
<x-footer>
</x-footer>
