<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add a book
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('books.store') }}">
                    @csrf
                    @method('POST')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="author" class="block font-medium text-sm text-gray-700">Author</label>
                            <input type="text" name="author" id="auhtor" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('author', '') }}" />
                            @error('author')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('title', '') }}" />
                            @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="genre" class="block font-medium text-sm text-gray-700">Genre</label>
                            <input type="text" name="genre" id="genre" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('genre', '') }}" />
                            @error('genre')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="quantity" class="block font-medium text-sm text-gray-700">Quantity</label>
                            <input type="number" name="quantity" id="quantity" 
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('quantity', '') }}" />
                            @error('quantity')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <textarea type="text" name="description" id="description  " 
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('description', '') }}"></textarea>
                            @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="px-4 py-5 bg-white sm:p-6"> 
                            <span class="block font-medium text-sm text-gray-700">Add Book Image</span>
                            <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                <div class="absolute">
                                    <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                                </div> 
                                <input type="file" class="h-full w-full opacity-0" name="file" onload="previewFile(this)">
                            </div>
                          
                        </div> --}}
                      

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <input type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                               
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-app-layout>
