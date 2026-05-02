@section('page-title')
    Our Products
@endsection
<div>
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[265px] relative pb-[65px] lg:pb-[126px] text-text font-montserrat overflow-x-hidden">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Our products</h1>
            @can('edit_products')
                <div class="flex justify-center lg:justify-start pt-5">
                    <a href="{{ route('our_products_create') }}">
                        <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                            Create Category
                        </button>
                    </a>    
                </div>
            @endcan
            <div class="relative flex flex-col  justify-center items-center -mx-[30px] pt-0 lg:pt-[56px] overflow-x-hidden">
                @foreach ($categories as $category)
                <div class="p-[30px] flex  w-full min-h-[443px] justify-center overflow-x-hidden ">
                    <div class="rounded-[38px] w-full shadow-xl hover:shadow-2xl bg-white">
                        <div class="py-[35px] lg:py-[56px] px-[45px] md:px-[66px] text-center flex flex-col lg:flex-row items-center">
                            <div class="w-[220px] h-[200px] xl:w-[318px] xl:h-[318px] lg:mr-2.5 xl:mr-[59px]">
                                @if(Str::startsWith($category->image, ['http://', 'https://']))    
                                    <img src="{{ url($category->image) }}" class="h-full w-full object-cover object-center">
                                @else      
                                    <img src="{{ Vite::asset($category->image) }}" width="" height="" alt="" class="object-cover object-center h-full w-full">
                                @endif
                            </div>
                            <div class="lg:w-[780px] xl:w-[684px] text-center lg:text-left">
                                <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold">GT {{ $category->name }}</h1>
                                <div class="text-lg text-justify lg:text-[20px]">
                                    <p>{{ $category->description }}</p>
                                </div>
                                <div class="flex justify-center lg:justify-start pt-6 items-center">
                                    @isset($routeNames[$category->id])
                                        @if(Route::has($routeNames[$category->id]))
                                            <a href="{{ route($routeNames[$category->id]) }}">
                                                <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[25px] md:px-[98px] hover:bg-[#69A87C] transition-all ease-in-out">
                                                    Find out more
                                                </button>
                                            </a>
                                        @else
                                            <p>This route does not exist. Create one.</p>
                                        @endif
                                    @endisset
                                    @can('edit_products')
                                        <div class="w-auto relative z-10 flex justify-center ml-5" x-data="{open:false, active:false}" x-bind:class="{'z-[60]' : active}">
                                            <a class="cursor-pointer group block relative text-center bg-transparent rounded-md w-[24px] h-[24px] text-blue-500 text-base leading-tight hover:bg-gray-200 [&.active]:bg-gray-200 transition ease-in-out duration-200" x-on:click="open = !open, active = !active" x-bind:class="{'active' : active}" @click.away="active = false">
                                                <span class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 transition ease-in-out duration-300 z-10">
                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-blue-500">
                                                        <path d="M0.666992 1.66659C0.666992 1.40288 0.745191 1.14509 0.891699 0.925825C1.03821 0.70656 1.24645 0.535663 1.49008 0.434746C1.73372 0.33383 2.0018 0.307425 2.26045 0.358872C2.51909 0.410319 2.75666 0.537307 2.94313 0.723777C3.1296 0.910247 3.25659 1.14782 3.30804 1.40647C3.35949 1.66511 3.33308 1.9332 3.23217 2.17683C3.13125 2.42047 2.96035 2.6287 2.74109 2.77521C2.52182 2.92172 2.26403 2.99992 2.00033 2.99992C1.6467 2.99992 1.30757 2.85944 1.05752 2.60939C0.807468 2.35935 0.666992 2.02021 0.666992 1.66659ZM2.00033 8.33325C2.26403 8.33325 2.52182 8.25505 2.74109 8.10854C2.96035 7.96204 3.13125 7.7538 3.23217 7.51016C3.33308 7.26653 3.35949 6.99844 3.30804 6.7398C3.25659 6.48116 3.1296 6.24358 2.94313 6.05711C2.75666 5.87064 2.51909 5.74365 2.26045 5.6922C2.0018 5.64076 1.73372 5.66716 1.49008 5.76808C1.24645 5.869 1.03821 6.03989 0.891699 6.25916C0.745191 6.47842 0.666992 6.73621 0.666992 6.99992C0.666992 7.35354 0.807468 7.69268 1.05752 7.94273C1.30757 8.19278 1.6467 8.33325 2.00033 8.33325ZM2.00033 13.6666C2.26403 13.6666 2.52182 13.5884 2.74109 13.4419C2.96035 13.2954 3.13125 13.0871 3.23217 12.8435C3.33308 12.5999 3.35949 12.3318 3.30804 12.0731C3.25659 11.8145 3.1296 11.5769 2.94313 11.3904C2.75666 11.204 2.51909 11.077 2.26045 11.0255C2.0018 10.9741 1.73372 11.0005 1.49008 11.1014C1.24645 11.2023 1.03821 11.3732 0.891699 11.5925C0.745191 11.8118 0.666992 12.0695 0.666992 12.3333C0.666992 12.6869 0.807468 13.026 1.05752 13.2761C1.30757 13.5261 1.6467 13.6666 2.00033 13.6666Z" fill="#6B7280"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div x-show="open" x-transition:enter="transition ease-out duration-100 bg-white" x-transition:enter-start="transform -translate-y-6 opacity-0" x-transition:enter-end="transform translate-y-0 opacity-100" x-transition:leave="transition ease-in duration-100 bg-transparent" x-transition:leave-start="transform translate-y-0 opacity-100" x-transition:leave-end="transform -translate-y-6 opacity-0" @click.away="open = false" class="absolute  top-full  right-0 bg-white shadow-lg min-w-full w-[190px] rounded-lg p-2" style="display: none;">
                                            
                                                <ul class="mb-0">
                                                    <li class="pb-1">
                                                        <a href="{{ route('our_products_edit', $category->slug) }}" class="text-sm text-gray-500 py-1 px-2 block text-left bg-transparent font-normal transition-all duration-300 rounded-md hover:bg-blue-50 hover:text-blue-500 hover:font-bold">Edit</a>
                                                    </li>
                                                    <li class="pb-0">
                                                        <a href="" wire:click.prevent="delete_category({{ $category }})" class="text-sm text-gray-500 py-1 px-2 block text-left bg-transparent font-normal transition-all duration-300 rounded-md hover:bg-blue-50 hover:text-blue-500 hover:font-bold">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endcan
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="p-[30px] flex  w-full min-h-[443px] justify-center ">
                    <div class="rounded-[38px] w-full shadow-xl bg-white">
                        <div class="py-[35px] lg:py-[56px] px-[45px] md:px-[66px] text-center  flex flex-col lg:flex-row items-center">
                            <div class="w-[220px] h-[200px] xl:w-[318px] xl:h-[318px] lg:mr-[59px]">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/gt-ice-cream.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/gt-ice-cream.webp')}}" width="" height="" alt="" class="object-cover object-center h-full w-full">
                                </picture>
                            </div>
                            <div class="lg:w-[684px] text-center lg:text-left">
                                <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold">GT Ice Cream</h1>
                                <div class="text-lg text-justify lg:text-[20px]">
                                    <p></p>
                                </div>
                                <div class="flex justify-center lg:justify-start pt-2.5">
                                    <a href="{{ route('gt_ice_cream') }}">
                                        <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[25px] md:px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                                            Find out more
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="p-[30px] flex  w-full min-h-[443px] justify-center ">
                    <div class="rounded-[38px] w-full shadow-xl bg-white">
                        <div class="py-[35px] lg:py-[56px] px-[45px] md:px-[66px] text-center  flex flex-col lg:flex-row items-center">
                            <div class="w-[220px] h-[200px] xl:w-[318px] xl:h-[318px] lg:mr-[59px]">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/gt-dessert.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/gt-dessert.webp')}}" width="" height="" alt="" class="object-cover object-center h-full w-full">
                                </picture>
                            </div>
                            <div class="lg:w-[684px] text-center lg:text-left">
                                <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold">GT Dessert</h1>
                                <div class="text-lg text-justify lg:text-[20px]">
                                    <p></p>
                                </div>
                                <div class="flex justify-center lg:justify-start pt-2.5">
                                    <a href="{{ route('gt_dessert') }}">
                                        <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[25px] md:px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                                           Find out more
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                 --}}
            </div>
        </div>
    </section>

</div>