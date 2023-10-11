<nav x-data="{ open: false }"
    class="bg-gray-700 text-white fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between placed-item-center">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                {{ $data['title'] }}
            </span>
        </a>
        <button @click="open = !open" class="md:hidden">

            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                <path d="M120-240v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
            </svg>
        </button>
        <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
            <x-menu-items />
        </div>
        <div class="hidden w-full md:block md:w-auto">
            <x-menu-items />
        </div>
    </div>

</nav>
