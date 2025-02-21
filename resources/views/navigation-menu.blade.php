<nav class="flex items-center justify-between py-7 px-8">
    <div id="nav-left" class="flex items-center">
        <div class="text-gray-800 font-semibold"> <span class="text-yellow-500 text-xl">NEXUS</span> </div>



        <div class="top-menu ml-10">
            <div class="flex space-x-4">

            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>


            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">

        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>
