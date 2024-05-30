@extends('layouts.mainLayout')

@section('title', 'History')

@section('content')
    <div class="px-4 py-6">
        <div class="pb-4">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Filter <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Category</a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="grid lg:grid-cols-4 grid-cols-2 gap-4">
            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>

            <div class="md:p-4 p-3 bg-gray-700 h-auto" style="border-radius: 12px">
                <img src="{{ asset('assets/image/image.png') }}" class="rounded-lg" alt="">
                <div class="w-full mt-4 mb-2 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center leading-none rounded-full"
                        style="width: 80%; color: white !important;"> 80%</div>
                </div>
                <h3 class="mb-1 font-semibold text-white lg:text-md text-sm">Title of Quiz lorem</h3>
            </div>


        </div>
    </div>
@endsection
