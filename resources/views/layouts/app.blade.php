<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lender Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100" x-data="{ openSidebar: false }">

<div class="flex h-screen">

    <!-- SIDEBAR (DESKTOP) -->
    <aside class="hidden md:flex w-64 bg-white shadow-md flex-col">

        <div class="p-6 border-b">
            <h1 class="text-xl font-bold">Amerifirst</h1>
            <p class="text-sm text-gray-600">{{ auth()->user()->name }}</p>
        </div>

        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">

            <a href="/dashboard" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                📊 Dashboard
            </a>

            <a href="/loans" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('loans') ? 'bg-gray-200 font-semibold' : '' }}">
                📄 Loan History
            </a>

            <a href="/payments" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('payments') ? 'bg-gray-200 font-semibold' : '' }}">
                💵 Payments
            </a>

            <p class="text-xs text-gray-500 uppercase mt-4">Opportunities</p>

            <a href="/opportunities/short-term" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('opportunities/short-term') ? 'bg-gray-200 font-semibold' : '' }}">
                ⚡ Short-Term
            </a>

            <a href="/opportunities/long-term" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('opportunities/long-term') ? 'bg-gray-200 font-semibold' : '' }}">
                📈 Long-Term
            </a>

            <a href="/documents" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('documents') ? 'bg-gray-200 font-semibold' : '' }}">
                📂 Documents
            </a>

            <a href="/referral" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('referral') ? 'bg-gray-200 font-semibold' : '' }}">
                🔗 Referral Program
            </a>
        </nav>

        <form method="POST" action="/logout" class="p-4">
            @csrf
            <button class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">
                Logout
            </button>
        </form>

    </aside>


    <!-- SIDEBAR MOBILE -->
    <div
        class="fixed inset-0 bg-black bg-opacity-40 z-30 md:hidden"
        x-show="openSidebar"
        x-transition.opacity
        @click="openSidebar = false">
    </div>

    <aside
        class="fixed top-0 left-0 h-full w-64 bg-white shadow-md flex flex-col z-40 transform md:hidden"
        x-show="openSidebar"
        x-transition:enter="transition transform duration-200"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full">

        <div class="p-6 border-b">
            <h2 class="text-xl font-bold">Amerifirst</h2>
            <p class="text-sm text-gray-600">{{ auth()->user()->name }}</p>
        </div>

        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">

            <a href="/dashboard" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                📊 Dashboard
            </a>

            <a href="/loans" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('loans') ? 'bg-gray-200 font-semibold' : '' }}">
                📄 Loan History
            </a>

            <a href="/payments" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('payments') ? 'bg-gray-200 font-semibold' : '' }}">
                💵 Payments
            </a>

            <p class="text-xs text-gray-500 uppercase mt-4">Opportunities</p>

            <a href="/opportunities/short-term" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('opportunities/short-term') ? 'bg-gray-200 font-semibold' : '' }}">
                ⚡ Short-Term
            </a>

            <a href="/opportunities/long-term" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('opportunities/long-term') ? 'bg-gray-200 font-semibold' : '' }}">
                📈 Long-Term
            </a>

            <a href="/documents" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('documents') ? 'bg-gray-200 font-semibold' : '' }}">
                📂 Documents
            </a>

            <a href="/referral" @click="openSidebar = false"
                class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('referral') ? 'bg-gray-200 font-semibold' : '' }}">
                🔗 Referral Program
            </a>
        </nav>

        <form method="POST" action="/logout" class="p-4">
            @csrf
            <button class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">
                Logout
            </button>
        </form>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="flex-1 overflow-y-auto">

        <!-- TOP BAR MOBILE -->
        <div class="md:hidden px-4 py-3 bg-white shadow flex items-center gap-4">
            <button @click="openSidebar = true" class="text-2xl">☰</button>
            <h2 class="text-lg font-semibold">Amerifirst</h2>
        </div>

        <div class="p-4">
            {{ $slot }}
        </div>

    </main>

</div>

@livewireScripts
</body>
</html>
