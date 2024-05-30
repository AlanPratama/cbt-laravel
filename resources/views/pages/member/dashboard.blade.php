@extends('layouts.mainLayout')

@section('title', 'Dashboard')

@section('content')
    <div class="px-4 py-6">
        <div class="flex md:flex-row flex-col justify-between items-center h-[280px] gap-5">
            {{-- WELCOME SECTION --}}
                <div class="w-full bg-gray-700 text-white p-3 h-full rounded-lg">
                    <h3>WELCOME</h3>
                </div>
            {{-- END WELCOME SECTION --}}



            {{-- STATICTIC SECTION --}}
                <div class="w-full grid grid-cols-2 gap-2 h-full rounded-lg">

                    <div class="bg-gray-700 text-white px-4 py-2 md:h-full h-20 rounded-lg">
                        <h3>STATS</h3>
                    </div>
                    <div class="bg-gray-700 text-white px-4 py-2 md:h-full h-20 rounded-lg">
                        <h3>STATS</h3>
                    </div>
                    <div class="bg-gray-700 text-white px-4 py-2 md:h-full h-20 rounded-lg">
                        <h3>STATS</h3>
                    </div>
                    <div class="bg-gray-700 text-white px-4 py-2 md:h-full h-20 rounded-lg">
                        <h3>STATS</h3>
                    </div>

                </div>
            {{-- END STATICTIC SECTION --}}
        </div>


        {{-- ACTION SECTION --}}
        <div class="h-[280px] p-3 mt-5 bg-gray-700 text-white rounded-lg">
            <h3>ACTION</h3>
        </div>
        {{-- END ACTION SECTION --}}
    </div>
@endsection