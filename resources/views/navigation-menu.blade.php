<nav x-data="{ showMenu: false }" x-bind:class="{ 'overflow-hidden': !showMenu }">
    <!-- Primary Navigation Menu -->

    <header class="w-screen h-[75px] sm:h-[90px] xl:h-[139px] fixed top-0 z-[9999999] overflow-x-hidden" id="header" x-data="{ scrollPosition: 0 }"
        x-init="window.addEventListener('scroll', () => { scrollPosition = window.scrollY; });
                $watch('scrollPosition', (value) => {
                    $refs.header.style.backgroundColor = value > 0 ? '#FFFF' : 'transparent';
                    $refs.header.style.boxShadow = value > 0 ? '0px 5px 10px rgba(0, 0, 0, 0.2)' : 'none';
                });"
        x-bind:style="{ backgroundColor: scrollPosition > 0 ? '#FFFF' : 'transparent', boxShadow: scrollPosition > 0 ? '0px 5px 10px rgba(0, 0, 0, 0.2)' : 'none' }"
        x-ref="header" style="background-color: transparent;">
        <div class="flex justify-between bg-white text-text items-center h-full px-[25px] xl:px-[156px] overflow-x-hidden">
            <div class="h-[48px] w-[40px] sm:h-[60px] sm:w-[50px] xl:h-[86px] xl:w-[71px]">
                <x-nav-link  href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/gt-logo.png')}}" class="w-full h-full object-cover object-center"/>                        
                </x-nav-link>
            </div>
            <div class="lg:flex lg:text-[17px]  2xl:text-[20px] -mx-[23px] font-bold hidden">
                <div class="p-[23px] 2xl:p-[26px] active [&.active]:text-olive">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="hover:text-olive transition-all ">
                        {{ __('Home')}}
                    </x-nav-link>
                </div>
                <div class="p-[23px] 2xl:p-[26px]">
                    <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')" class="hover:text-olive transition-all ">
                        {{ __('About')}}
                    </x-nav-link>
                </div>
                <div class="p-[23px] 2xl:p-[26px]">
                    <x-nav-link href="{{ route('our_products') }}" :active="request()->routeIs('our_products')" class="hover:text-olive transition-all ">
                        {{ __('Products/Menu')}}
                    </x-nav-link>
               </div>
                <div class="p-[23px] 2xl:p-[26px]">
                    <x-nav-link href="{{ route('custom_cake') }}" :active="request()->routeIs('custom_cake')" class="hover:text-olive transition-all ">
                        {{ __('Custom cakes')}}
                    </x-nav-link>
                </div>
                <div class="p-[23px] 2xl:p-[26px]">
                    <x-nav-link href="{{ route('contact') }}"  :active="request()->routeIs('contact')" class="hover:text-olive transition-all ">
                        Contact
                    </x-nav-link>
                </div> 
                @if (Route::has('login'))
                    @auth
                        <div class="p-[23px] 2xl:p-[26px]">
                            <div  class="hidden sm:flex sm:items-center">
                                <!-- Teams Dropdown -->
                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                    <div class="relative">
                                        <x-dropdown align="right" width="60">
                                            <x-slot name="trigger">
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center lg:text-[19px]  2xl:text-[20px] font-bold border border-transparent text-sm rounded-md text-text hover:text-olive  transition ease-in-out duration-150">
                                                        {{ Auth::user()->currentTeam->name }}
                
                                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </x-slot>
                
                                            <x-slot name="content">
                                                <div class="w-60">
                                                    <!-- Team Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Team') }}
                                                    </div>
                
                                                    <!-- Team Settings -->
                                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                        {{ __('Team Settings') }}
                                                    </x-dropdown-link>
                
                                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                                            {{ __('Create New Team') }}
                                                        </x-dropdown-link>
                                                    @endcan
                
                                                    <!-- Team Switcher -->
                                                    @if (Auth::user()->allTeams()->count() > 1)
                                                        <div class="border-t border-gray-200"></div>
                
                                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                                            {{ __('Switch Teams') }}
                                                        </div>
                
                                                        @foreach (Auth::user()->allTeams() as $team)
                                                            <x-switchable-team :team="$team" />
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                @endif
                
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @else
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center lg:text-[17px]  2xl:text-[20px] font-bold border border-transparent text-sm leading-4 rounded-md text-text bg-white hover:text-olive  transition ease-in-out duration-150">
                                                        {{ Auth::user()->name }}
                
                                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            @endif
                                        </x-slot>
                
                                        <x-slot name="content">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>
                
                                            <x-dropdown-link href="{{ route('profile.show') }}">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <x-dropdown-link href="{{ route('your_favorites') }}">
                                                {{ __('Your Favorites') }}
                                            </x-dropdown-link>
                                            @auth
                                                @if(auth()->user() && auth()->user()->hasRole('admin'))
                                                    <!-- Admin is logged in, do not show the links -->
                                                @else
                                                    <x-dropdown-link href="{{ route('orders') }}">
                                                        {{ __('Your Orders') }}
                                                    </x-dropdown-link>
                                                @endif
                                            @endauth
                
                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                    {{ __('API Tokens') }}
                                                </x-dropdown-link>
                                            @endif
                
                                            <div class="border-t border-gray-200"></div>
                
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf
                
                                                <x-dropdown-link href="{{ route('logout') }}"
                                                        @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="p-[23px] 2xl:p-[26px]">
                            <x-nav-link href="{{ route('login') }}" class=" hover:text-olive  transition ease-in-out duration-150">
                                Log In
                            </x-nav-link>
                        </div>
                        @if (Route::has('register'))
                            <div class="p-[23px] 2xl:p-[26px]">
                                <x-nav-link href="{{ route('register') }}" class=" hover:text-olive  transition ease-in-out duration-150">
                                    Register
                                </x-nav-link>
                            </div>
                        @endif
                    @endauth
                   
                @endif
            </div>
       

            <div class="flex flex-row -mx-[10px] sm:-mx-[20px] xl:-mx-[42px] items-center lg:hidden  overflow-x-hidden">
                <div class=" overflow-x-hidden xl:px-[42px] h-[calc(100vh_-_70px)] sm:h-[calc(100vh_-_90px)] lg:h-auto hidden lg:block fixed lg:static left-0 lg:left-auto top-[75px] sm:top-[90px] lg:top-auto z-[200] bg-black/90 lg:bg-transparent w-screen lg:w-auto overflow-y-auto lg:overflow-visible py-8 lg:py-0" x-bind:class="{'!block' : showMenu}" >
                    <div class=" overflow-x-hidden flex flex-col lg:flex-row lg:-mx-[17px] font-mulish">
                        <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                            <div class="w-auto">
                                <x-responsive-nav-link href="{{ route('home') }}" class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('home')"  >
                                    {{ __('Home')}}
                                </x-responsive-nav-link>
                            </div>
                        </div>
                        <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                            <div class="w-auto">
                                <x-responsive-nav-link href="{{ route('about') }}" class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('about')" >
                                    {{ __('About')}}
                                </x-responsive-nav-link>
                            </div>
                        </div>
                        <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                            <div class="w-auto">
                                <x-responsive-nav-link href="{{ route('our_products') }}"  class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('our_products')">
                                    {{ __('Products/Menu')}}
                                </x-responsive-nav-link>
                            </div>
                        </div>
                        <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                            <div class="w-auto">
                                <x-responsive-nav-link  href="{{ route('custom_cake') }}" class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('custom_cake')">
                                    {{ __('Custom cakes')}}
                                </x-responsive-nav-link>
                            </div>
                        </div>
                        <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                            <div class="w-auto">
                                <x-responsive-nav-link href="{{ route('contact') }}"  class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('contact')">
                                    {{ __('Contact')}}
                                </x-responsive-nav-link>
                            </div>
                        </div>
                        
                        @if (Route::has('login'))
                            @auth
                            <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                                <div class="w-auto">
                                    <x-responsive-nav-link href="{{ route('your_favorites') }}"  class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('your_favorites')">
                                        {{ __('Your Favorites')}}
                                    </x-responsive-nav-link>
                                </div>
                            </div>
                                @if(auth()->user() && auth()->user()->hasRole('admin'))
                                <!-- Admin is logged in, do not show the links -->
                                @else
                                <div class="py-5 lg:py-0 px-[17px] border-b border-b-white/30 lg:border-0 hover:bg-white/25">
                                    <div class="w-auto">
                                        <x-responsive-nav-link href="{{ route('orders') }}"  class=" flex  items-center relative tracking-[-0.2px] text-[20px] pr-5" :active="request()->routeIs('orders')">
                                            {{ __('Your Orders')}}
                                        </x-responsive-nav-link>
                                    </div>
                                </div>
                                @endif

                                <div class="flex justify-center items-center">
                                    <div  class="flex sm:items-center">
                                        <!-- Teams Dropdown -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                            <div class="relative">
                                                <x-dropdown align="right" width="60">
                                                    <x-slot name="trigger">
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button" class="inline-flex items-center lg:text-[19px]  2xl:text-[20px] font-bold border border-transparent text-sm leading-4 rounded-md text-text hover:text-olive  transition ease-in-out duration-150">
                                                                {{ Auth::user()->currentTeam->name }}
                        
                                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </x-slot>
                        
                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Manage Team') }}
                                                            </div>
                        
                                                            <!-- Team Settings -->
                                                            <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Team Settings') }}
                                                            </x-dropdown-link>
                        
                                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                                <x-dropdown-link href="{{ route('teams.create') }}">
                                                                    {{ __('Create New Team') }}
                                                                </x-dropdown-link>
                                                            @endcan
                        
                                                            <!-- Team Switcher -->
                                                            @if (Auth::user()->allTeams()->count() > 1)
                                                                <div class="border-t border-gray-200"></div>
                        
                                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                                    {{ __('Switch Teams') }}
                                                                </div>
                        
                                                                @foreach (Auth::user()->allTeams() as $team)
                                                                    <x-switchable-team :team="$team" />
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            </div>
                                        @endif
                        
                                        <!-- Settings Dropdown -->
                                        <div class="px:0 py-5 lg:py-0 lg:px-[17px] flex flex-row items-center justify-center -mx-2">
                                            <div class="px-2">
                                                <button class="px-[23px] 2xl:px-[26px] py-3 text-white hover:text-gray-300 transition-all">
                                                    <a href="{{ route('profile.show') }}">
                                                        {{__('Profile') }}
                                                    </a>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf
                
                                                <div class="px-2">
                                                    <button class="px-[23px] 2xl:px-[26px] py-3 border-[1px] border-white rounded-xl text-white  hover:bg-white hover:text-neutral-800 transition-all">
                                                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                            
                                                            {{ __('Log Out') }}
                                                        </a>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="px:0 py-5 lg:py-0 lg:px-[17px] flex flex-row items-center justify-center -mx-2">
                                    <div class="px-2">
                                        <button class="px-[23px] 2xl:px-[26px] py-3 text-white hover:text-gray-300 transition-all">
                                            <a href="{{ route('login') }}">
                                                Log In
                                            </a>
                                        </button>
                                    </div>
                                    @if (Route::has('register'))
                                        <div class="px-2">
                                            <button class="px-[23px] 2xl:px-[26px] py-3 border-[1px] border-white rounded-xl text-white  hover:bg-white hover:text-neutral-800 transition-all">
                                                <a href="{{ route('register') }}">
                                                    Register
                                                </a>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            @endauth
                        @endif   
                    </div>
                </div>
            </div>

            <div class="lg:hidden">
                <button x-on:click="showMenu = !showMenu" x-bind:class="{'is-active' : showMenu}" class="hamburger hamburger--collapse group items-center !p-0 lg:hidden flex  z-[200]  !opacity-100 -scale-[0.8] min-[420px]:scale-100 group-[&.inner-pages]/inner:border-gold" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner before:bg-text after:bg-text bg-text group-[&.is-active]:bg-text group-[&.is-active]:after:bg-text group-[&.is-active]:before:bg-text group-[&.inner-pages]/inner:bg-text  group-[&.inner-pages]/inner:before:bg-text group-[&.inner-pages]/inner:after:bg-text" ></span>
                    </span>
                </button>   
            </div>                     
        </div> 
    </header>
</nav> 
