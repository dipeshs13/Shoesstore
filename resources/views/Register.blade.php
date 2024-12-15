@include("Layouts.header")
@push('title')
    <title>Register</title>
@endpush
<div class="container mx-auto mt-10 px-4 py-8 flex justify-center">
    <div class="mt-5">
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
    </div>
    <h1 class="text-3xl font-bold mb-4 mt-10">Register</h1>  

    <form class="ml-10" action="{{route('registration.post')}}" method="POST">
        @csrf
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
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow  
appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Enter your email">
<span class="text-red-700">
    @error('email')
    {{ $message }}
@enderror
 </span> 

        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border  
rounded w-80 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">
<span class="text-red">
    @error('password')
    {{ $message }}
@enderror
 </span>
        </div>
        <div class="mt-5">
            <button type="submit"
                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                Register
            </button>
        </div>
    </form>  

</div>


