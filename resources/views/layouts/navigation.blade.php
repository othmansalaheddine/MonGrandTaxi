<nav x-data="{ open: false }" style="  background-image: linear-gradient(to right, rgb(234, 238, 0), rgb(234, 238, 0));" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                {{-- <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div> --}}

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<<<<<<< HEAD
                    <x-nav-link style="color: rgb(0, 0, 0);font-weight:bold; font-size: 1rem " :href="route('dashboard')" :active="request()->routeIs('dashboard')">
=======
                    <x-nav-link style="color: rgb(255, 255, 255); font-size: 1rem; font-family: 'Times New Roman', Times, serif" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
>>>>>>> 52ea81c8b3720ecd5be6ec7ab26ac67758154993
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                @role('admin')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<<<<<<< HEAD
                    <x-nav-link style="color: rgb(255, 255, 255);font-weight:bold; font-size: 1rem" :href="route('admin.index')" :active="request()->routeIs('admin.index')">
=======
                    <x-nav-link style="color: rgb(255, 255, 255);font-family: 'Times New Roman', Times, serif" :href="route('admin.index')" :active="request()->routeIs('admin.index')">
>>>>>>> 52ea81c8b3720ecd5be6ec7ab26ac67758154993
                        {{ __('Admin') }}
                    </x-nav-link>
                </div>
            @else
                @role('driver')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<<<<<<< HEAD
                        <x-nav-link style="color: rgb(69, 84, 15);font-weight:bold; font-size: 1rem" :href="route('driver.index')" :active="request()->routeIs('driver.index')">
=======
                        <x-nav-link style="color: rgb(255, 255, 255); font-family: 'Times New Roman', Times, serif" :href="route('driver.index')" :active="request()->routeIs('driver.index')">
>>>>>>> 52ea81c8b3720ecd5be6ec7ab26ac67758154993
                            {{ __('Driver') }}
                        </x-nav-link>
                    </div>
                @else
                    @role('passenger')
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<<<<<<< HEAD
                            <x-nav-link style="color: rgb(0, 0, 0); font-weight:bold; font-size: 1rem" :href="route('passenger.home')" :active="request()->routeIs('passenger.home')">
=======
                            <x-nav-link style="color: rgb(255, 255, 255); font-weight:bold; font-size: 1rem;font-family: 'Times New Roman', Times, serif" :href="route('passenger.home')" :active="request()->routeIs('passenger.home')">
>>>>>>> 52ea81c8b3720ecd5be6ec7ab26ac67758154993
                                {{ __('Passenger') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link style="color: rgb(255, 255, 255); font-weight:bold; font-size: 1rem; font-family: 'Times New Roman', Times, serif" :href="route('passenger.myreservation')" :active="request()->routeIs('passenger.myreservation')">
                                {{ __('My Reservations') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link style="color: rgb(255, 255, 255); font-weight:bold; font-size: 1rem; font-family: 'Times New Roman', Times, serif" :href="route('passenger.myhistory')" :active="request()->routeIs('passenger.myhistory')">
                                {{ __('My History') }}
                            </x-nav-link>
                        </div>
                    @endrole
                @endrole
            @endrole
            
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button  class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            <div style="color:rgb(0, 0, 0);font-weight:bold; font-size: 1rem">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link  style="background-color: rgb(251, 255, 2);" :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link  style="background-color: rgb(251, 255, 2);text-color:rgb(0, 0, 0)" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 hover:bg-gray-200 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-900 dark:focus:bg-gray-900 focus:text-gray-900 dark:focus:text-gray-900 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
