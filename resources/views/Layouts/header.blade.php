<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <link href="/css/tailwind.css" rel="stylesheet">
</head>

<body>
    <nav
        class="border-solid border-2 border-gray-200 h-20 shadow-md bg-gray-100 m-0 p-0 flex items-center justify-between">
        <div class="text-2xl flex flex-grow justify-center">
            <a href="{{ url('/home') }}"
                class="px-10 not-italic hover:bg-black hover:text-white hover:h-10  transition-colors duration-300 rounded-md ">Home</a>
            <a href=""
                class="px-10 hover:bg-black hover:text-white hover:h-10  transition-colors duration-300 rounded-md">About</a>
            <a href=""
                class="px-10 hover:bg-black hover:text-white hover:h-10  transition-colors duration-300 rounded-md">Contact
                us</a>
            <a href="{{ url('/shoes') }}"
                class="px-10 hover:bg-black hover:text-white hover:h-10  transition-colors duration-300 rounded-md">Shoes</a>
        </div>
        <div class="flex text-2xl space-x-4 mr-10">
            <a href="{{ url('/login') }}"
                class=" hover:bg-black hover:px-10 hover:text-white hover:h-10  transition-colors duration-300 rounded-md">Login</a>
            <a href="{{ url('/register') }}"
                class=" hover:bg-black hover:px-10 hover:text-white hover:h-10  transition-colors duration-300 rounded-md">Register</a>
        </div>
    </nav>
