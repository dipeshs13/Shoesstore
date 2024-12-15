@include("Layouts.header")
@push('title')
    <title>Order</title>
@endpush
<div class="container mx-auto mt-10 px-4 py-8 flex justify-center">
    {{-- @if($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif --}}

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif

    <h1 class="text-3xl font-bold mb-4 mt-10">Order Now</h1>  

    <form class="ml-10" action="{{route('Order.post')}}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name"  type="text" name="name" placeholder="Enter  
your name">
<span class="text-red-500">
    @error('name')
        {{ $message }}
    @enderror
</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Address">
                Address
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" placeholder="Enter your address">  
<span class="text-red-500">
    @error('address')
        {{ $message }}
    @enderror
</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Shoes">
                Shoes Name
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="shoes" type="text" name="shoes" placeholder="Enter shoes name">  
<span class="text-red-500">
    @error('shoes')
        {{ $message }}
    @enderror
</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Shoes">
                Shoes Size
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="shoessize" type="text" name="shoessize" placeholder="Enter shoes size">  
<span class="text-red-500">
    @error('shoessize')
        {{ $message }}
    @enderror
</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Shoes">
                Phone number
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_number" type="text" name="phone_number" placeholder="Enter phone number">  
<span class="text-red-500">
    @error('phone_number')
        {{ $message }}
    @enderror
</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Payment Method
            </label>
            <div class="flex items-center mb-2">
                <input type="radio" id="cod" name="payment_method" value="cod" class="mr-2">
                <label for="cod" class="text-gray-700">Cash on Delivery (COD)</label>

            </div>
            <div class="flex items-center">
                <input type="radio" id="esewa" name="payment_method" value="esewa" class="mr-2">
                <label for="esewa" class="text-gray-700">eSewa</label>
            </div>
            <span class="text-red-500">
                @error('payment_method')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mt-5">
            <button type="submit"
                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                Order Now
            </button>
        </div>
    </form>  

</div>
