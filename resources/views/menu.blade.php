<x-layout>
    <header class="text-center  text-primary-0 text-2xl font-bold mt-2">
        <h1>Products</h1>
    </header>
    <nav class="flex ml-14" aria-label="Breadcrumbc ">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse mt-6">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center font-medium text-gray-700 hover:text-blueCustom-600 dark:text-gray-400 dark:hover:text-white text-md">
                    <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-md font-medium text-gray-700 hover:text-blueCustom-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Products</a>
                </div>
            </li>

        </ol>
    </nav>

    @foreach ($categories as $category)
        <div class="menu container px-6 mt-6 mx-auto">
            <div class=" relative">
                <div class="Category flex justify-between">
                    <h1 class="text-xl font-semibold mb-4 underline-offset-4"> {{ $category->name }} </h1>
                    <a href="/menu/category/{{ $category->slug }}" class="font-medium hover:underline text-blue-500">View
                        More &raquo;</a>
                </div>
                <div class="overflow-x-scroll scrollContainer no-scrollbar relative scroll-smooth overflow-y-hidden">
                    <div class="flex gap-2  py-1 w-full">
                        <!-- menu card -->
                        @foreach ($products as $product)

                            @if ($product->category->name == $category->name)
                                <x-card :product="$product">

                                </x-card>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="next  absolute -right-6 top-1/2 z-20 -translate-y-[15px] hover:opacity-75 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </div>
                <div class="prev  absolute -left-6 top-1/2 z-20 -translate-y-[15px]  cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </div>

            </div>

        </div>

    @endforeach




</x-layout>