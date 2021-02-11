<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex items-center ">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <main class="flex direction-center items-center  mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                  <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Welcome to Axel's library</span>
                    <span class="block whitespace-nowrap  text-indigo-600 xl:inline">Best books in the world</span>
                  </h1>
                  <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                  </p>
                  <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                      <a href="{{ route('books.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        See all books
                      </a>
                    </div>
                   
                  </div>
                </div>
              </main>
            </div>
          </div>
            
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:top-56  lg:left-2/3 lg:w-1/2">
            <img class="h-28 w-28 object-cover sm:h-72 md:h-96 lg:w-auto lg:h-96" src="https://images.unsplash.com/photo-1554900773-4dd76725f876?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1649&q=80" alt="">
          </div>
    </div>
</x-app-layout>
<x-footer>
</x-footer>
