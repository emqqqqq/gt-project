@section('page-title')
    Ice Creams
@endsection
<div>
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[265px] relative pb-[65px] lg:pb-[126px]">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">GT {{ $category->name }}</h1>
            @can('edit_products')
                <div class="flex justify-center lg:justify-start pt-5">
                    <a href="{{ route('gt_ice_creams_create') }}">
                        <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                            Create Ice Cream
                        </button>
                    </a>    
                </div>
            @endcan
            <div class="relative flex flex-col md:flex-row flex-wrap  xl:justify-start items-center xl:items-stretch -mx-2.5  pt-2.5 sm:pt-[50px] lg:pt-[86px]">
                @foreach ($ice_creams as $ice_cream)
                <div class="p-2.5 flex items-stretch justify-center relative min-h-[434px] w-full md:w-1/2 xl:w-1/3">
                    <div class="absolute top-[20px] py-[15px] z-[9999]">
                        <form action="{{ route('like_ice_cream', $ice_cream->id) }}" method="POST" class="flex justify-end items-center">
                            @csrf
                            <span class="text-[#5e2121] mr-2">{{ $ice_cream->likers->count() }}</span>
                            @if(auth()->check() && auth()->user()->likes->contains($ice_cream->id))
                                <button type="submit" class="text-[#5e2121]" id="like-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <style>svg{fill:#5e2121}</style>
                                        <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                </button>
                            @else
                                <button type="submit" class="" id="like-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <style>svg{fill:#5e2121}</style>
                                        <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
                                    </svg>
                                </button>
                            @endif
                        </form>
                    </div>
                    <div class="flex items-stretch justify-center relative rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out" wire:click.prevent="view_ice_cream({{ $ice_cream }}, 'Ice Cream')">
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative h-full">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                @if(Str::startsWith($ice_cream->image, ['http://', 'https://']))    
                                    <img src="{{ url($ice_cream->image) }}" class="h-full w-full object-cover object-center">
                                @else      
                                    <img src="{{ Vite::asset($ice_cream->image) }}" class="h-full w-full object-cover object-center">
                                @endif
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">{{ $ice_cream->name }}</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>{{  \Illuminate\Support\Str::limit($ice_cream->description, 80) }}</p>
                                <p>{{ $ice_cream->price }}</p>
                            </div>
                        </div> 
                    </div>
                    @can('edit_products')
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="{{ route('gt_ice_creams_edit', $ice_cream->slug) }}" class="p-1">
                                    <x-button>
                                        Edit
                                    </x-button>
                                </a>  
                                <div class="p-1" >
                                    <x-danger-button wire:click.prevent="delete_ice_cream({{ $ice_cream }})">
                                        Delete
                                    </x-danger-button>
                                </div>     
                            </div>
                        </div>
                    @endcan
                </div>
                @endforeach
                {{-- <div class="p-2.5  min-h-[434px] w-full md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-1.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5 min-h-[434px] w-full md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-2.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5  min-h-[434px] w-full  md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-3.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5 min-h-[434px] w-full  md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-4.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5  min-h-[434px] w-full md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-5.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5 min-h-[434px] w-full md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-6.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5  min-h-[434px] w-full  md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-7.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2.5 min-h-[434px] w-full md:w-1/2 lg:w-1/3">
                    <div class="flex items-stretch justify-center relative  rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[109px] px-[95px] text-center  mx-auto">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/ice-cream-8.png')}}"  class="h-full w-full object-cover object-center">
                            </div>
                            <div class="pt-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out">
                                        Edit
                                    </button>
                                </a>  
                                <a href="#" class="p-1">
                                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out">
                                        Delete
                                    </button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
                 --}}
            </div>
        </div>
    </section>

</div>