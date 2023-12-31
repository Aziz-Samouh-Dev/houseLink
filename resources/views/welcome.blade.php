<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HouseLink</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>


    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', system-ui, sans-serif;
        }
    </style>
</head>

<body class=" ">
    <!-- drawer component Nav -->
    <div id="drawer-example"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 "
        tabindex="-1" aria-labelledby="drawer-label">

        <ul class="mt-8">
            <li>
                <a href="#" class="w-full block p-2  text-gray-500 rounded hover:bg-gray-100" aria-current="page">
                    About us
                </a>
            </li>
            <li>
                <a href="#" class="w-full block p-2  text-gray-500 rounded hover:bg-gray-100" aria-current="page">
                    Services
                </a>
            </li>
            <li>
                <a href="#" class="w-full block p-2  text-gray-500 rounded hover:bg-gray-100" aria-current="page">
                    Residences
                </a>
            </li>
            <li>
                <a href="#" class="w-full block p-2  text-gray-500 rounded hover:bg-gray-100" aria-current="page">
                    Reviews
                </a>
            </li>
            <li>
                <a href="#" class="w-full block p-2  text-gray-500 rounded hover:bg-gray-100" aria-current="page">
                    FAQ'S
                </a>
            </li>

        </ul>
    </div>
    <!-- Navbar Section -->
    <div style="background-color: rgba(0, 0, 0, 0.274)"
        class="bg-transparent z-20 fixed w-full top-0 left-0 transform transition-all duration-300 ease-in-out"
        x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 0) })" :class="{ 'h-20': scrolled, 'h-30': !scrolled }">
        <nav class=" fixed w-full top-0 left-0 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('logo.png') }}" class="h-9 mr-3" alt="houseLink Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">HouseLink</span>
                </a>
                <div class="flex lg:order-2">
                    @guest
                        @if (Route::has('login'))
                            <a class="mr-1 " href="{{ route('login') }}">
                                <button type="button"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 text-center"
                                    style="letter-spacing: 1px ">
                                    Get In
                                </button>
                            </a>
                        @endif
                    @else
                        <ul class="flex items-center flex-shrink-2 space-x-6">
                            <!-- Notifications menu -->
                            <li class="relative">
                                <button
                                    class="relative text-white align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                                    type="button" data-dropdown-toggle="NotificationDropdown">
                                    <svg class="w-5 h-5 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                    <span aria-hidden="true"
                                        class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 rounded-full "></span>
                                </button>
                                <ul id="NotificationDropdown"
                                    class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md">
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="#">
                                            <span>Messages</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                                13
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="#">
                                            <span>Sales</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                                2
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="#">
                                            <span>Alerts</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Profile menu -->
                            <li class="relative ">
                                <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                                    type="button" data-dropdown-toggle="profileDropdown">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                                        alt="" />
                                </button>
                                <ul id="profileDropdown"
                                    class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                                    class="profile-menu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="{{ url('profile') }}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                            href="{{ route('dashboard') }}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                                </path>
                                            </svg>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" href="{{ route('logout') }}"
                                                class="flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800">
                                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path
                                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                                {{ __('Log Out') }}
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    @endguest

                    <!-- drawer init and toggle -->
                    <button
                        class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                        aria-controls="drawer-example">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>


                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                    id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 lg:p-0 mt-4 font-medium rounded-lg lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:bg-transparent ">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-gray-100 lg:hover:bg-transparent lg:p-0"
                                aria-current="page">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-gray-100 lg:hover:bg-transparent lg:p-0"
                                aria-current="page">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-gray-100 lg:hover:bg-transparent lg:p-0"
                                aria-current="page">
                                Residences
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-gray-100 lg:hover:bg-transparent lg:p-0"
                                aria-current="page">
                                Reviews
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-gray-100 lg:hover:bg-transparent lg:p-0"
                                aria-current="page">
                                FAQ'S
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Hero Section -->
    <div class="w-full flex ml-auto relative ">
        <!-- hero image and titel .. -->
        <div class="w-full bg-cover bg-center flex "
            style="background-image: url('./images/hero3.jpg'); height: 600px; width: 100%;">
            <div class="w-full flex items-center justify-center bg-gray-900/60">
                <div class="max-w-screen-xl flex items-center justify-between overflow-hidden">
                    <div class="flex flex-wrap p-4">
                        <div class="w-full grid gap-4 align-center justify-center">
                            <h1 class="text-4xl md:text-6xl font-black text-white leading-none"
                                style="letter-spacing: 1.2rem; font-size: 4rem; font-weight: 900;">
                                Find Your <br />Perfect <br /> Match
                            </h1>
                            <p class="text-base md:text-lg text-gray-300 " style="letter-spacing: 2px">
                                Ignite Your Imagination <br>
                                HouseLink - Where Vision Meets Reality.
                            </p>
                            <div class="">
                                <button type="button"
                                    class="flex py-2 px-4 md:py-2.5 md:px-5 text-xs md:text-sm font-medium text-white focus:outline-none rounded-lg border border-white hover:border-green-700 hover:bg-green-700 hover:text-white focus:z-10 focus:ring-2"
                                    style="letter-spacing: 2px">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 hidden md:flex">
                        <img src="{{ asset('./images/mar.png') }}" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter section -->
        <section class="absolute w-full  flex items-center justify-center px-4" style=" bottom: -8%">
            <div class=" py-6 px-8 border lg:flex rounded-lg shadow-lg hidden max-w-screen-xl  mx-auto  backdrop-blur-md bg-white/30"
                style=" fill: linear-gradient(154deg, rgba(255, 255, 255, 0.836) 0%, rgba(255, 255, 255, 0.87) 100%);filter: drop-shadow(0px 0px 50px rgba(255, 255, 255, 0.1)); backdrop-filter: blur(30px);">
                <!-- Action Type -->
                <div class="mr-3">
                    <!-- Dropdown Button -->
                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                        data-dropdown-placement="bottom"
                        class="text-gray-800 border border-gray-300 bg-gray-50 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                        type="button">
                        Action Type
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60">
                        <div class="p-3">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="input-group-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500
                                        placeholder="Search
                                    user">
                            </div>
                        </div>
                        <ul class="h-full px-3 pb-3 overflow-y-auto text-sm text-gray-700"
                            aria-labelledby="dropdownSearchButton">
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100 ">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2  ">
                                    <label for="checkbox-item-11"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded  ">Bonnie
                                        Green</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100">
                                    <input checked id="checkbox-item-12" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  ">
                                    <label for="checkbox-item-12"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded ">Jese
                                        Leos</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- City -->
                <div class="mr-3">
                    <!-- Dropdown Button -->
                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                        data-dropdown-placement="bottom"
                        class="text-gray-800 border border-gray-300 bg-gray-50 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                        type="button">
                        City
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60  ">
                        <div class="p-3">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500  " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="input-group-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  "
                                    placeholder="Search user">
                            </div>
                        </div>
                        <ul class="h-full px-3 pb-3 overflow-y-auto text-sm text-gray-700  "
                            aria-labelledby="dropdownSearchButton">
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100  ">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2  ">
                                    <label for="checkbox-item-11"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded  ">Bonnie
                                        Green</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100 ">
                                    <input checked id="checkbox-item-12" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="checkbox-item-12"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded ">Jese
                                        Leos</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Area -->
                <div class="mr-3">
                    <!-- Dropdown Button -->
                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                        data-dropdown-placement="bottom"
                        class="text-gray-800 border border-gray-300 bg-gray-50 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                        type="button">
                        Area
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60  ">
                        <div class="p-3">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500  " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="input-group-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  "
                                    placeholder="Search user">
                            </div>
                        </div>
                        <ul class="h-full px-3 pb-3 overflow-y-auto text-sm text-gray-700"
                            aria-labelledby="dropdownSearchButton">
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100 ">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="checkbox-item-11"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded ">Bonnie
                                        Green</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100 ">
                                    <input checked id="checkbox-item-12" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="checkbox-item-12"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded">Jese
                                        Leos</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Property Type -->
                <div class="mr-3">
                    <!-- Dropdown Button -->
                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                        data-dropdown-placement="bottom"
                        class="text-gray-800 border border-gray-300 bg-gray-50 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                        type="button">
                        Property type
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 ">
                        <div class="p-3">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="input-group-search"
                                    class="block w-full px-5 py-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Search user">
                            </div>
                        </div>
                        <ul class="h-full px-3 pb-3 overflow-y-auto text-sm text-gray-700 "
                            aria-labelledby="dropdownSearchButton">
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="checkbox-item-11"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded">
                                        Bonnie Green</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center pl-2 rounded hover:bg-gray-100">
                                    <input checked id="checkbox-item-12" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="checkbox-item-12"
                                        class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded">
                                        Jese Leos</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Max Price Input -->
                <div class="mr-3">
                    <input type="search"
                        class="block py-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Max Price MAD" required>
                </div>
                <!-- Filter Button -->
                <button type="button"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 text-center "
                    style="letter-spacing: 1px ">
                    Search
                </button>
            </div>
        </section>
    </div>
    <!-- page Content -->
    <div class=" w-full flex items-center justify-center">
        <div class="max-w-screen-xl grid gap-8 items-center justify-center my-8 ">
            <!-- Partners Section -->
            <section class="flex items-center justify-center ">
                <div class="grid grid-cols-5 gap-2">
                    <div class="overflow-hidden filter-grayscale">
                        <img src="{{ asset('partners/par3.png') }}" alt="Image 1">
                    </div>
                    <div class="overflow-hidden filter-grayscale">
                        <img src="{{ asset('partners/par2.png') }}" alt="Image 2">
                    </div>
                    <div class="overflow-hidden filter-grayscale">
                        <img src="{{ asset('partners/par1.png') }}" alt="Image 3">
                    </div>
                    <div class="overflow-hidden filter-grayscale">
                        <img src="{{ asset('partners/par4.png') }}" alt="Image 4">
                    </div>
                    <div class="overflow-hidden filter-grayscale">
                        <img src="{{ asset('partners/par5.png') }}" alt="Image 5">
                    </div>
                </div>
            </section>
            <!-- About Us Section -->
            <section class="w-full flex items-center">
                <div class=" justify-center flex-1 py-4 lg:py-6 md:px-2">
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-2">
                        <!-- Image Content -->
                        <div class="relative px-4 mb-10">
                            <img src="https://i.postimg.cc/HsSPvTq8/pexels-fauxels-3184357.jpg" alt=""
                                class="relative object-cover w-full rounded-md md:h-96 h-44">
                        </div>
                        <!-- Text Content -->
                        <div
                            class="px-6 sm:px-4 mb-6 sm:mb-10 grid items-center justify-center md:text-start text-center">
                            <h2 class="mb-2 text-4xl lg:leading-loose font-black sm:mb-4 ">
                                We are the Leader in the real estate business
                            </h2>
                            <p class="mb-4 text-sm leading-normal md:text-base lg:text-md sm:mb-6">
                                HouseLink is a leading Moroccan company that provides an easy and efficient
                                platform
                                for
                                buying,
                                selling, and renting properties. With a strong focus on customer satisfaction,
                                we
                                strive
                                to make
                                the process of property transactions seamless and convenient for our clients.
                            </p>
                            <div class="flex items-center justify-between sm:flex-row gap-2 px-6 md:p-0">
                                <div class="text-center sm:text-left md:w-1/4 lg:w-1/4">
                                    <h3 class="text-xl md:text-2xl font-black">
                                        +120
                                    </h3>
                                    <p class="text-sm md:text-md">
                                        Business Done
                                    </p>
                                </div>
                                <div class="text-center sm:text-left md:w-1/4 md:w-1/4">
                                    <h3 class="text-xl md:text-2xl font-black">
                                        +220
                                    </h3>
                                    <p class="text-sm md:text-md">
                                        happy clients
                                    </p>
                                </div>
                                <div class="text-center sm:text-left md:w-1/4 md:w-1/4">
                                    <h3 class="text-xl md:text-2xl font-black">
                                        +5
                                    </h3>
                                    <p class="text-sm md:text-md">
                                        Partnerships
                                    </p>
                                </div>
                                <div class="text-center sm:text-left md:w-1/4 md:w-1/4">
                                    <h3 class="text-xl md:text-2xl font-black">
                                        +100
                                    </h3>
                                    <p class="text-sm md:text-md">
                                        available property
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Section -->
            <section class="w-full flex items-center justify-center flex-col sm:flex-row gap-8 mb-4 px-8">
                <!-- Cards -->
                <div class="grid gap-14 grid-cols-1 p-4 lg:gap-8 lg:grid-cols-3">
                    <style>
                        .hovered {
                            transform: scale(1.1);
                            box-shadow: 0px 10px 20px rgba(44, 44, 44, 0.137);
                            transition: transform 0.4s ease-in-out, box-shadow 0.2s ease-in-out;
                        }

                        .hovered .ico {
                            color: rgba(9, 1, 58, 0.76);
                            background-color: white;
                            box-shadow: 0px 10px 20px rgba(44, 44, 44, 0.137);
                        }

                        .card {
                            width: 250px;
                        }
                    </style>
                    <!-- Card 1 -->
                    <div
                        class="card relative grid gap-4 text-center items-center justify-center p-6 border border-gray-50 rounded-lg transition-transform transform cursor-default">

                        <div
                            class="ico absolute -top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 grid justify-center items-center h-14 w-14 rounded-full bg-gray-800 text-white border border-gray-50 ">

                            <i
                                class="fa-solid fa-house-circle-check h-full w-full text-2xl flex items-center justify-center"></i>
                        </div>
                        <h5 class="mt-3 text-lg font-bold tracking-tight text-gray-900">
                            Explore Listings
                        </h5>
                        <p class="font-normal text-xs text-gray-500">
                            Browse through our wide range of available properties to find your dream home.
                        </p>
                    </div>
                    <!-- Card 2 Hovered -->
                    <div
                        class="card hovered relative grid gap-4 text-center items-center justify-center p-6 border border-gray-50 rounded-lg transition-transform transform cursor-default">

                        <div
                            class="ico absolute -top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 grid justify-center items-center h-14 w-14 rounded-full bg-gray-800 text-white border border-gray-50 ">

                            <i
                                class="fa-regular fa-handshake h-full w-full text-2xl flex items-center justify-center"></i>
                        </div>
                        <h5 class="mt-3 text-lg font-bold tracking-tight text-gray-900">
                            Explore Listings
                        </h5>
                        <p class="font-normal text-xs text-gray-500">
                            Browse through our wide range of available properties to find your dream home.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="card relative grid gap-4 text-center items-center justify-center p-6 border border-gray-50 rounded-lg transition-transform transform cursor-default">

                        <div
                            class="ico absolute -top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 grid justify-center items-center h-14 w-14 rounded-full bg-gray-800 text-white border border-gray-50 ">

                            <i class="fa-solid fa-key h-full w-full text-2xl flex items-center justify-center"></i>
                        </div>
                        <h5 class="mt-3 text-lg font-bold tracking-tight text-gray-900">
                            Explore Listings
                        </h5>
                        <p class="font-normal text-xs text-gray-500">
                            Browse through our wide range of available properties to find your dream home.
                        </p>
                    </div>
                    <script>
                        const cards = document.querySelectorAll('.card');
                        const card2 = document.querySelector('.card.hovered');

                        // Add event listeners for each card
                        cards.forEach(card => {
                            card.addEventListener('mouseover', () => {
                                // Remove hovered class from all cards
                                cards.forEach(otherCard => {
                                    otherCard.classList.remove('hovered');
                                });

                                // Add hovered class to the current card
                                card.classList.add('hovered');

                            });

                            card.addEventListener('mouseout', () => {
                                // Remove hovered class from the current card
                                card.classList.remove('hovered');
                                card2.classList.add('hovered');

                            });
                        });
                    </script>
                </div>
            </section>
            <!-- Popular Residences Section -->
            <section class="p-4 grid">
                <div class="w-full">
                    <h1 class="text-4xl font-bold" style="letter-spacing: 2px">Popular Residences .</h1>
                </div>
                <div class="w-full flex items-center justify-center py-8">
                    <div
                        class="max-w-screen-xl grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center justify-center py-6">
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover" alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                        <div class="relative w-96 lg:w-80 xl:w-96 md:w-96 grid gap-2 bg-white border border-gray-200 rounded-2xl hover:shadow-xl p-2 transform hover:scale-105 transition-transform ease-in-out duration-300 overflow-hidden"
                            data-carousel="slide">
                            <!-- Badge container inside the card -->
                            <div
                                class="absolute -rotate-45 top-6 -left-12 z-50 bg-yellow-300 text-white font-bold text-sm tracking-widest">
                                <h1 class="px-16 py-1 ">RENT</h1>
                            </div>
                            <!-- Carousel wrapper -->
                            <div class="relative h-64 overflow-hidden rounded-lg">

                                <!-- Heart icon -->
                                <button type="button"
                                    class="absolute text-gray-50 top-0 right-0 z-50 flex items-center justify-center p-2 cursor-pointer focus:outline-none"
                                    id="heartIcon" onclick="toggleHeartColor()">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/10 hover:bg-gray-50/30 focus:ring-gray-800/70 focus:outline-none">
                                        <i class="ri-heart-fill text-2xl "></i>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <script>
                                    function toggleHeartColor() {
                                        const heartIcon = document.getElementById('heartIcon');
                                        heartIcon.classList.toggle('text-red-400');
                                    }
                                </script>

                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/1.jpg" class="absolute block h-64 object-cover"
                                        alt="">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/2.jpg" class="absolute block h-64 object-cover"
                                        alt="">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out h-64" data-carousel-item>
                                    <img src="/images/3.jpg" class="absolute block h-64 object-cover"
                                        alt="">
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-2 left-1/2">
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                                    </button>
                                    <button type="button" class="w-2 h-2 rounded-full transition-all duration-300 "
                                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                                    </button>
                                </div>
                                <!-- Slider controls -->
                                <div class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </div>
                                <div class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 cursor-pointer rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </div>
                            </div>
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900">
                                Entire rental unit hosted by Carmen Y David
                            </h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded ml-3">
                                    4.5
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">
                                    100.000 $
                                </span>
                                <a href="#"
                                    class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    View Details
                                </a>
                            </div>
                            <hr>
                            <div class="grid grid-cols-3 justify-between ">
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-hotel-bed-line"></i>
                                    <p class="pl-2 font-medium">4 Bedrooms</p>
                                </div>
                                <div class="text-sm flex items-center justify-center border-r p-2 lg:px-0">
                                    <i class="ri-map-2-line"></i>
                                    <p class="pl-2 font-medium"> Casablanca </p>
                                </div>
                                <div class="text-sm flex items-center justify-center p-2 lg:px-0">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="pl-2 font-medium"> City Center </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Best Reviews Section -->
            <section class="p-4 grid">
                <div class="w-full flex justify-between">
                    <h1 class="text-4xl font-bold" style="letter-spacing: 2px">Best Reviews.</h1>
                    <div class="icons grid grid-cols-2 gap-4 items-center">
                        <button id="moveLeft" class="h-7 w-7">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z">
                                </path>
                            </svg>
                        </button>
                        <button id="moveRight" class="h-7 w-7">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 11V8L16 12L12 16V13H8V11H12ZM12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20Z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex overflow-hidden">
                    <div id="reviewSlider" class="p-4 flex gap-10 transition-transform duration-500 ease-in-out">
                        <!-- Review Cards -->
                        <div class="review-card flex items-center">
                            <div class="flex-shrink-0 bg-white border border-gray-50 rounded-lg shadow-lg"
                                style="width: 506px;">
                                <div class="p-8 grid gap-5 items-center justify-between items-start"
                                    style="padding: 30px 28px;">
                                    <div class="w-full flex  items-center justify-between">
                                        <div class=" flex flex-wrap items-center">
                                            <img class="object-cover mr-2 rounded-full shadow w-14 h-14 "
                                                src="{{ asset('person.png') }}">
                                            <div>
                                                <h2 class="mr-2 text-lg font-medium text-gray-700 ">
                                                    Last Nelson
                                                </h2>
                                                <p class="text-sm font-medium text-gray-400 ">
                                                    Anaheim, CA, USA
                                                </p>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="flex w-20 h-20 rotate-180 opacity-10" viewBox="0 0 16 16">
                                            <path
                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                        </svg>

                                    </div>
                                    <p class="flex text-sm text-gray-600">
                                        “ This product is exactly what I was needed. Awesome
                                        construction
                                        and
                                        incredible
                                        comfort
                                        while using. ”
                                    </p>
                                    <div class="flex items-center">
                                        <div>
                                            <ul class="flex mb-1">
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li class="text-xs font-thin text-gray-400">
                                                    <p>4.5</p>
                                                </li>
                                            </ul>
                                            <p class="text-xs font-thin text-gray-400 text-gray-400">
                                                2h ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card flex items-center">
                            <div class="flex-shrink-0 bg-white border border-gray-50 rounded-lg shadow-lg"
                                style="width: 506px;">
                                <div class="p-8 grid gap-5 items-center justify-between items-start"
                                    style="padding: 30px 28px;">
                                    <div class="w-full flex  items-center justify-between">
                                        <div class=" flex flex-wrap items-center">
                                            <img class="object-cover mr-2 rounded-full shadow w-14 h-14 "
                                                src="{{ asset('person.png') }}">
                                            <div>
                                                <h2 class="mr-2 text-lg font-medium text-gray-700 ">
                                                    Last Nelson
                                                </h2>
                                                <p class="text-sm font-medium text-gray-400 ">
                                                    Anaheim, CA, USA
                                                </p>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="flex w-20 h-20 rotate-180 opacity-10" viewBox="0 0 16 16">
                                            <path
                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                        </svg>

                                    </div>
                                    <p class="flex text-sm text-gray-600">
                                        “ This product is exactly what I was needed. Awesome
                                        construction
                                        and
                                        incredible
                                        comfort
                                        while using. ”
                                    </p>
                                    <div class="flex items-center">
                                        <div>
                                            <ul class="flex mb-1">
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li class="text-xs font-thin text-gray-400">
                                                    <p>4.5</p>
                                                </li>
                                            </ul>
                                            <p class="text-xs font-thin text-gray-400 text-gray-400">
                                                2h ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card flex items-center">
                            <div class="flex-shrink-0 bg-white border border-gray-50 rounded-lg shadow-lg"
                                style="width: 506px;">
                                <div class="p-8 grid gap-5 items-center justify-between items-start"
                                    style="padding: 30px 28px;">
                                    <div class="w-full flex  items-center justify-between">
                                        <div class=" flex flex-wrap items-center">
                                            <img class="object-cover mr-2 rounded-full shadow w-14 h-14 "
                                                src="{{ asset('person.png') }}">
                                            <div>
                                                <h2 class="mr-2 text-lg font-medium text-gray-700 ">
                                                    Last Nelson
                                                </h2>
                                                <p class="text-sm font-medium text-gray-400 ">
                                                    Anaheim, CA, USA
                                                </p>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="flex w-20 h-20 rotate-180 opacity-10" viewBox="0 0 16 16">
                                            <path
                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                        </svg>

                                    </div>
                                    <p class="flex text-sm text-gray-600">
                                        “ This product is exactly what I was needed. Awesome
                                        construction
                                        and
                                        incredible
                                        comfort
                                        while using. ”
                                    </p>
                                    <div class="flex items-center">
                                        <div>
                                            <ul class="flex mb-1">
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li class="text-xs font-thin text-gray-400">
                                                    <p>4.5</p>
                                                </li>
                                            </ul>
                                            <p class="text-xs font-thin text-gray-400 text-gray-400">
                                                2h ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card flex items-center">
                            <div class="flex-shrink-0 bg-white border border-gray-50 rounded-lg shadow-lg"
                                style="width: 506px;">
                                <div class="p-8 grid gap-5 items-center justify-between items-start"
                                    style="padding: 30px 28px;">
                                    <div class="w-full flex  items-center justify-between">
                                        <div class=" flex flex-wrap items-center">
                                            <img class="object-cover mr-2 rounded-full shadow w-14 h-14 "
                                                src="{{ asset('person.png') }}">
                                            <div>
                                                <h2 class="mr-2 text-lg font-medium text-gray-700 ">
                                                    Last Nelson
                                                </h2>
                                                <p class="text-sm font-medium text-gray-400 ">
                                                    Anaheim, CA, USA
                                                </p>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="flex w-20 h-20 rotate-180 opacity-10" viewBox="0 0 16 16">
                                            <path
                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                        </svg>

                                    </div>
                                    <p class="flex text-sm text-gray-600">
                                        “ This product is exactly what I was needed. Awesome
                                        construction
                                        and
                                        incredible
                                        comfort
                                        while using. ”
                                    </p>
                                    <div class="flex items-center">
                                        <div>
                                            <ul class="flex mb-1">
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li class="text-xs font-thin text-gray-400">
                                                    <p>4.5</p>
                                                </li>
                                            </ul>
                                            <p class="text-xs font-thin text-gray-400 text-gray-400">
                                                2h ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-card flex items-center">
                            <div class="flex-shrink-0 bg-white border border-gray-50 rounded-lg shadow-lg"
                                style="width: 506px;">
                                <div class="p-8 grid gap-5 items-center justify-between items-start"
                                    style="padding: 30px 28px;">
                                    <div class="w-full flex  items-center justify-between">
                                        <div class=" flex flex-wrap items-center">
                                            <img class="object-cover mr-2 rounded-full shadow w-14 h-14 "
                                                src="{{ asset('person.png') }}">
                                            <div>
                                                <h2 class="mr-2 text-lg font-medium text-gray-700 ">
                                                    Last Nelson
                                                </h2>
                                                <p class="text-sm font-medium text-gray-400 ">
                                                    Anaheim, CA, USA
                                                </p>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="flex w-20 h-20 rotate-180 opacity-10" viewBox="0 0 16 16">
                                            <path
                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                        </svg>

                                    </div>
                                    <p class="flex text-sm text-gray-600">
                                        “ This product is exactly what I was needed. Awesome
                                        construction
                                        and
                                        incredible
                                        comfort
                                        while using. ”
                                    </p>
                                    <div class="flex items-center">
                                        <div>
                                            <ul class="flex mb-1">
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="w-4 mr-1 text-yellow-400 bi bi-star-half"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li class="text-xs font-thin text-gray-400">
                                                    <p>4.5</p>
                                                </li>
                                            </ul>
                                            <p class="text-xs font-thin text-gray-400 text-gray-400">
                                                2h ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    const reviewSlider = document.getElementById('reviewSlider');
                    const reviewCards = document.querySelectorAll('.review-card');
                    const totalCards = reviewCards.length;
                    const cardWidth = 310; // Adjust this based on your card's width

                    let currentIndex = 0;
                    let currentTranslate = 0;

                    // Clone and append each card to the end
                    for (let i = 0; i < totalCards; i++) {
                        reviewSlider.appendChild(reviewCards[i].cloneNode(true));
                    }

                    function updateReviewSlider() {
                        reviewSlider.style.transform = `translateX(${currentTranslate}px)`;
                    }

                    function moveSliderRight() {
                        currentTranslate -= cardWidth;

                        if (currentTranslate <= -totalCards * cardWidth) {
                            currentTranslate = 0;
                        }

                        updateReviewSlider();
                    }

                    function moveSliderLeft() {
                        currentTranslate += cardWidth;

                        if (currentTranslate > 0) {
                            currentTranslate = -totalCards * cardWidth;
                        }

                        updateReviewSlider();
                    }

                    document.getElementById('moveLeft').addEventListener('click', moveSliderLeft);
                    document.getElementById('moveRight').addEventListener('click', moveSliderRight);

                    setInterval(moveSliderRight, 2000);
                </script>
            </section>
            <!-- FAQ'S Section -->
            <section class="p-4 grid grid-cols-1 gap-6  lg:grid-cols-2">
                <!-- Image Section -->
                <div class="md:col-span-1 lg:col-span-1 flex justify-center lg:px-4">
                    <!-- image -->
                    <img src="faqs.png" alt="Image" class=" object-cover w-full rounded-lg "
                        style="height: 550px ; border-radius: 16px;">
                </div>
                <!-- FAQ Section -->
                <div class="md:col-span-1 lg:col-span-1">
                    <h1 class="text-4xl font-bold my-4 lg:text-start text-center" style="letter-spacing: 2px">
                        Frequently Asked Questions
                    </h1>
                    <div class="md:p-2 p-6" id="accordion-flush" data-accordion="collapse"
                        data-active-classes="text-gray-900" data-inactive-classes="text-gray-500">
                        <!-- FAQ Items... -->
                        <div class="py-4 mx-auto">
                            <div id="accordion-flush" data-accordion="collapse"
                                data-active-classes="text-gray-900" data-inactive-classes="text-gray-500">
                                <!-- FAQ Item 1 -->
                                <h2 id="accordion-flush-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                        aria-controls="accordion-flush-body-1">
                                        <span class="text-gray-800 font-bold">What types of houses do you
                                            offer?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-1" class="hidden"
                                    aria-labelledby="accordion-flush-heading-1">
                                    <div class="py-5 border-b border-gray-200">
                                        <p class="mb-2 text-gray-500">We offer a wide variety of houses, including
                                            single-family homes, townhouses, condos, and apartments. Each type of house
                                            is
                                            designed to meet different needs and preferences.</p>
                                        <p class="text-gray-500">Explore our <a href="/house-types"
                                                class="text-blue-600 hover:underline">house types</a> page to learn
                                            more
                                            about the features and benefits of each option.</p>
                                    </div>
                                </div>
                                <!-- FAQ Item 2 -->
                                <h2 id="accordion-flush-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                        aria-controls="accordion-flush-body-2">
                                        <span class="text-gray-800 font-bold">How do I schedule a house
                                            viewing?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-2" class="hidden"
                                    aria-labelledby="accordion-flush-heading-2">
                                    <div class="py-5 border-b border-gray-200">
                                        <p class="mb-2 text-gray-500">To schedule a house viewing, please visit our <a
                                                href="/schedule-viewing"
                                                class="text-blue-600 hover:underline">schedule
                                                viewing</a> page. You can choose a convenient date and time, and our
                                            team
                                            will get in touch with you to confirm the appointment.</p>
                                        <p class="text-gray-500">If you have specific preferences or questions, you
                                            can
                                            also reach out to our customer support at <a href="tel:123-456-7890"
                                                class="text-blue-600 hover:underline">(123) 456-7890</a>.</p>
                                    </div>
                                </div>
                                <!-- FAQ Item 3 -->
                                <h2 id="accordion-flush-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                        aria-controls="accordion-flush-body-3">
                                        <span class="text-gray-800 font-bold">What amenities are included with the
                                            houses?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-3" class="hidden"
                                    aria-labelledby="accordion-flush-heading-3">
                                    <div class="py-5 border-b border-gray-200">
                                        <p class="mb-2 text-gray-500">Our houses come with a range of amenities
                                            depending
                                            on the type and location. Common amenities include spacious living areas,
                                            modern
                                            kitchens, private outdoor spaces, and access to community facilities such as
                                            pools and gyms.</p>
                                        <p class="text-gray-500">For a detailed list of amenities for each house,
                                            please
                                            refer to the <a href="/house-details"
                                                class="text-blue-600 hover:underline">house
                                                details</a> page for the
                                            specific property you're interested in.</p>
                                    </div>
                                </div>
                                <!-- FAQ Item 4 -->
                                <h2 id="accordion-flush-heading-4">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                                        data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                        aria-controls="accordion-flush-body-4">
                                        <span class="text-gray-800 font-bold">Can I customize the interior of the
                                            house?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-4" class="hidden"
                                    aria-labelledby="accordion-flush-heading-4">
                                    <div class="py-5 border-b border-gray-200">
                                        <p class="mb-2 text-gray-500">Yes, we offer customization options for the
                                            interior
                                            of our houses. Our design team can work with you to personalize certain
                                            aspects
                                            of the house, such as paint colors, flooring, and fixtures, to match your
                                            preferences and style.</p>
                                        <p class="text-gray-500">For more information about customization options and
                                            the
                                            process, please reach out to our <a href="/customization"
                                                class="text-blue-600 hover:underline">customization department</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card Get Started -->
            <!-- Card Get Started -->
            <section class="p-4 h-full h-auto">
                <div class="my-8 flex w-full py-10 flex-col justify-center items-center flex-shrink-0 gap-8 text-white hover:shadow-2xl"
                    style="border-radius: 16px; background: linear-gradient(135deg, #003F89 0.02%, #052851 48.19%, #006632 100%);">
                    <div class="grid gap-3 text-center ">
                        <h1 class="text-4xl font-bold " style="letter-spacing: 4px">
                            Get started with HouseLink
                        </h1>
                        <p class="text-gray-200 text-md" style="letter-spacing: 2px">
                            This beautiful collection of UI components is part of the recently <br>
                            released Purpose Design System.
                        </p>
                    </div>
                    <button type="button" id="contactBtn"
                        class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none rounded-lg border border-white hover:bg-blue-700 hover:text-white focus:z-10 focus:ring-2 "
                        style="letter-spacing: 2px;">
                        Get Started
                    </button>
                </div>

                <div id="contactForm" class="hidden z-[200]  fixed top-0 right-0 w-full h-screen overflow-auto"
                    style="background-color: rgba(0, 0, 26, 0.877)">
                    <div
                        class="w-full h-screen absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class=" h-auto flex items-center justify-center p-8">
                            <section class="relative w-full bg-gray-50 p-5 grid rounded-xl">
                                <!--div1-->
                                <h1 class="text-4xl font-bold mb-5 text-center" style="letter-spacing: 2px">Contact
                                    us .
                                </h1>

                                <div class=" grid grid-cols-1 sm:grid-cols-1 xl:grid-cols-2  gap-2 ">
                                    <!--div2-->
                                    <div
                                        class="w-full items-center justify-center grid grid-cols-1 sm:grid-cols-2 gap-4 p-8 ">
                                        <!--div1-->
                                        <div
                                            class="w-full grid items-center justify-center text-center gap-3 col-span-1">
                                            <div
                                                class="inline-block overflow-hidden text-xs text-white bg-blue-500 rounded-full w-44 h-44 sm:w-64 sm:h-64">
                                                <img class="object-cover w-full h-full transition-all hover:scale-110"
                                                    src="https://i.postimg.cc/bNyr5cJq/pexels-anastasia-shuraeva-5704720.jpg"
                                                    alt="">
                                            </div>
                                            <h2 class="text-xl font-bold ">Khellali Marouan</h2>
                                            <p class="text-sm text-blue-500 ">Developer</p>
                                            <div class="flex gap-4 items-center justify-center">
                                                <a class="inline-block text-gray-800  hover:text-pink-400  "
                                                    href="#">
                                                    <i class="fa-solid fa-envelope text-xl"></i>
                                                </a>
                                                <a class="inline-block text-gray-800 hover:text-gray-400 "
                                                    href="#">
                                                    <i class="fa-brands fa-github text-xl"></i>
                                                </a>
                                                <a class="inline-block text-gray-800  hover:text-blue-400"
                                                    href="#">
                                                    <i class="fa-brands fa-linkedin text-xl"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <!--div2-->
                                        <div
                                            class="w-full grid items-center justify-center text-center gap-3 col-span-1">
                                            <div
                                                class="inline-block overflow-hidden text-xs text-white bg-blue-500 rounded-full w-44 h-44 sm:w-64 sm:h-64">
                                                <img class="object-cover w-full h-full transition-all hover:scale-110"
                                                    src="https://i.postimg.cc/bNyr5cJq/pexels-anastasia-shuraeva-5704720.jpg"
                                                    alt="">
                                            </div>
                                            <h2 class="text-xl font-bold ">Samouh Aziz</h2>
                                            <p class="text-sm text-blue-500 ">Developer</p>
                                            <div class="flex gap-4 items-center justify-center">
                                                <a class="inline-block text-gray-800  hover:text-pink-400  "
                                                    href="#">
                                                    <i class="fa-solid fa-envelope text-xl"></i>
                                                </a>
                                                <a class="inline-block text-gray-800 hover:text-gray-400 "
                                                    href="#">
                                                    <i class="fa-brands fa-github text-xl"></i>
                                                </a>
                                                <a class="inline-block text-gray-800  hover:text-blue-400"
                                                    href="#">
                                                    <i class="fa-brands fa-linkedin text-xl"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full grid grid-cols-1 gap-2">
                                        <!-- component -->
                                        <div class="flex items-center justify-center p-12">
                                            <div class="mx-auto w-full max-w-[550px]">

                                                <form action="https://formbold.com/s/FORM_ID" method="POST">
                                                    <div class="mb-5">

                                                        <input type="text" name="name" id="name"
                                                            placeholder="Full Name"
                                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div class="mb-5">

                                                        <input type="email" name="email" id="email"
                                                            placeholder="example@domain.com"
                                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div class="mb-5">

                                                        <input type="text" name="subject" id="subject"
                                                            placeholder="Enter your subject"
                                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div class="mb-5">

                                                        <textarea rows="4" name="message" id="message" placeholder="Type your message"
                                                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button id="closeFormBtn"
                                    class="absolute top-3 right-3 text-red-500 hover:bg-gray-200 w-6 h-6 flex items-center justify-center  rounded-full">
                                    <i class="fas fa-times "></i>
                                </button>
                            </section>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                const contactBtn = $("#contactBtn");
                                const contactForm = $("#contactForm");
                                const closeFormBtn = $("#closeFormBtn");

                                contactBtn.click(function() {
                                    contactForm.removeClass("hidden");
                                });

                                closeFormBtn.click(function() {
                                    contactForm.addClass("hidden");
                                });
                            });
                        </script>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <!-- Footer Section -->

    <section class="flex flex-col lg:justify-end font-poppins bg-gray-900">
        <div class="w-full pt-11">
            <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-0">
                <div class="flex items-center justify-center pb-3 border-b border-gray-700 lg:justify-between">
                    <div class="hidden mr-12 lg:block">
                        <span class="text-gray-400">Get connected with us</span>
                    </div>
                    <div class="flex justify-center">
                        <a href="#" class="mr-6 text-gray-400 hover:text-blue-700">
                            <!-- Facebook Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="mr-6 text-gray-400 hover:text-blue-400">
                            <!-- Twitter Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="mr-6 text-gray-400 hover:text-red-600">
                            <!-- Google Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-google" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="mr-6 text-gray-400 hover:text-blue-600">
                            <!-- LinkedIn Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class=" w-5 h-5 bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap py-10 -mx-3">
                    <div class="w-full px-4 mb-11 md:w-1/2 lg:w-4/12 lg:mb-0">
                        <a href="#" class="inline-block mb-4 text-2xl font-bold text-gray-400">
                            <img src="{{ asset('logo.png') }}" class="h-20 mr-8" alt="houseLink Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap text-white">HouseLink</span>
                        </a>
                        <p class="text-base font-normal leading-6 lg:w-64 text-gray-400">
                            Lorem ipsum dor amet Lorem ipsum dor amet Lorem ipsum dor Lorem ipsum dor amet Lorem ipsum
                            dor amet Lorem ipsum dor
                        </p>
                    </div>
                    <div class="w-full px-4 md:w-1/4 lg:w-2/12 mb-11 lg:mb-0">
                        <h2 class="mb-4 text-lg font-bold text-gray-800 text-gray-400">Recent Posts</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal text-gray-400">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal text-gray-400">About
                                    Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#"
                                    class="inline-block text-base font-normal text-gray-400">Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-11 lg:mb-0 md:w-1/4 lg:w-2/12">
                        <h2 class="mb-4 text-base font-bold text-gray-800 text-gray-400">Recent Posts</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal text-gray-400">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal text-gray-400">About
                                    Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#"
                                    class="inline-block text-base font-normal text-gray-400">Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-2 lg:mb-0 md:w-1/3 lg:w-4/12">
                        <h2 class="mb-4 text-lg font-bold text-gray-400">Newsletter</h2>
                        <div class="flex flex-wrap">
                            <div class="w-full py-1 mb-2 lg:flex-1 lg:py-0 lg:mr-3 lg:mb-0">
                                <input type="email "
                                    class="inline-block w-full h-12 px-3 placeholder-gray-400 border rounded-md text-gray-400 border-gray-700 bg-gray-700"
                                    placeholder="Your email">
                            </div>
                            <div class="w-full py-1 lg:w-auto lg:py-0">
                                <a href="#"
                                    class="inline-block w-full px-5 py-4 font-medium leading-4 text-center rounded-md bg-gray-700 text-gray-400 hover:bg-gray-800 hover:bg-blue-300">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 text-center text-gray-400">
                    <span>&copy; Copyright {{ date('Y') }}. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>

    <!-- Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>


</body>

</html>
