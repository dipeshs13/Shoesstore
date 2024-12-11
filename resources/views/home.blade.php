@extends('Layouts.main')
@push('title')
    <title>Home</title>
@endpush
@section('main-section')
    <section class="text-gray-600 body-font ">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Step into Style
                    <br class="hidden lg:inline-block">Walk with Confidence
                </h1>
                <p class="mb-8 leading-relaxed">Iconic Air Jordans, where heritage meets modern style. Legendary design,
                    premium comfort, and a bold statement with every step. From the court to the streets, these kicks
                    redefine your game—making every move count.</p>
                <div class="flex justify-center">
                    <a href="{{route('Shoes')}}"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy
                            Now</a>

                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/shoes1.jpeg') }}">
            </div>
        </div>
    </section>
    {{-- <section>
        <span class="text-2xl font-bold ml-48">Shop Air Force 1</span>
        <div class="container min-h-64 h-78 mx-auto flex justify-center mt-8 gap-6 ">
            <div class="shadow-md h-4/5 px-3">

                <img src="{{ asset('images/shoes2.jpeg') }}" alt="1" class="w-80 h-80 px-3 mt-2">

                <p class="ml-20">Name Here</p>
                <p class="ml-20">Price Here</p>
                <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg ml-20 ">Buy
                        Now</button>
            </div>
            <div class="shadow-md h-4/5">
                <img src="{{ asset('images/shoes3.jpeg') }}" alt="2" class="w-80 h-80 px-3 mt-2">
                <p class="ml-20">Name Here</p>
                <p class="ml-20">Price Here</p>
                <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg ml-20 ">Buy
                        Now</button>
            </div>
            <div class="shadow-md h-4/5">
                <img src="{{ asset('images/shoes4.jpeg') }}" alt="3" class="w-80 h-80 px-3 mt-2">
                <p class="ml-20">Name Here</p>
                <p class="ml-20">Price Here</p>
                <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg ml-20 ">Buy
                        Now</button>
            </div>
            <div class="shadow-md h-4/5">
                <img src="{{ asset('images/shoes5.jpeg') }}" alt="4" class="w-80 h-80 px-3 mt-2">
                <p class="ml-20">Name Here</p>
                <p class="ml-20">Price Here</p>
                <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg ml-20 ">Buy
                        Now</button>
            </div>
        </div>
    </section> --}}

    <span class="text-2xl font-bold ml-48 ">Shop Air Force 1</span>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-20 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="{{ asset('images/shoes2.jpeg') }}">
                    </a>
                    <div class="mt-4">
                        {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
                        <h2 class="text-gray-900 title-font text-lg font-medium">Air Jordan 3 Retro 'Cement Grey'</h2>
                        <p class="mt-1">Rs 8000</p>
                    </div>
                    <div>
                        @if(auth()->check())
                        <a href="{{route('Order')}}"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy
                            Now</a>
                            @else
                            <span>Please login to buy</span>
                            @endif
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="{{ asset('images/shoes3.jpeg') }}">
                    </a>
                    <div class="mt-4">
                        {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
                        <h2 class="text-gray-900 title-font text-lg font-medium">Air Jordan Retro 1 High OG</h2>
                        <p class="mt-1">Rs 6000</p>
                    </div>
                    <div>
                        @if(auth()->check())
                        <a href="{{route('Order')}}"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy
                            Now</a>
                            @else
                            <span>Please login to buy</span>
                            @endif
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="{{ asset('images/shoes4.jpeg') }}">
                    </a>
                    <div class="mt-4">
                        {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
                        <h2 class="text-gray-900 title-font text-lg font-medium">Jordan 1 Retro White Black CDP</h2>
                        <p class="mt-1">Rs 5000</p>
                    </div>
                    <div>
                        @if(auth()->check())
                        <a href="{{route('Order')}}"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy
                            Now</a>
                        @else
                        <span>Please login to buy</span>
                        @endif
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="{{ asset('images/shoes5.jpeg') }}">
                    </a>
                    <div class="mt-4">
                        {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
                        <h2 class="text-gray-900 title-font text-lg font-medium">Jordan 1 Mid RM</h2>
                        <p class="mt-1">Rs 4500</p>
                    </div>
                    <div>
                        @if(auth()->check())
                        <a href="{{route('Order')}}"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy
                            Now</a>
                        @else
                            <span>Please login to buy</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
