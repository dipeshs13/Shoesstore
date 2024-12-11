@extends('Layouts.main')
@push('title')
    <title>Shoes</title>
@endpush
@section('shoes-section')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes6.jpeg') }}">
          </a>
          <div class="mt-4">
            <h2 class="text-gray-900 title-font text-lg font-medium">Air Jordan 4 Retro "Orchid Women's"</h2>
            <p class="mt-1">Rs8000</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes7.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Kid's Air Jordan 1 Low SE</h2>
            <p class="mt-1">Rs 5000</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes8.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Men's Jordan Spizike Low</h2>
            <p class="mt-1">Rs 6000</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes9.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Nike Air Jordan I</h2>
            <p class="mt-1">Rs 7000</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes10.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Jordan Tatum 3</h2>
            <p class="mt-1">Rs 7500</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes11.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Jordan Jumpman MVP</h2>
            <p class="mt-1">Rs 6500</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes12.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Air Jordan 1 Low SE</h2>
            <p class="mt-1">Rs4000</p>
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
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/shoes13.jpeg') }}">
          </a>
          <div class="mt-4">
            {{-- <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3> --}}
            <h2 class="text-gray-900 title-font text-lg font-medium">Air Jordan 6 Retro</h2>
            <p class="mt-1">Rs 7800</p>
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
