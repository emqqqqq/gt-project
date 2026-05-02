@section('page-title')
    Cakes
@endsection
<div>
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[265px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">GT {{ $category->name }}</h1>
            @can('edit_products')
                <div class="flex justify-center lg:justify-start pt-5">
                    <a href="{{ route('gt_cakes_create') }}">
                        <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                            Create Cake
                        </button>
                    </a>    
                </div>
            @endcan
            <div class="relative flex flex-col md:flex-row flex-wrap justify-center xl:justify-start items-center xl:items-stretch -mx-2.5 pt-2.5 sm:pt-[50px] lg:pt-[86px]" >
                @foreach ($cakes as $cake)
                <div class="p-2.5 flex items-stretch justify-center  min-h-[434px] w-full md:w-1/2 xl:w-1/3 relative">
                    <div class="absolute top-[20px] py-[15px] z-[9999]">
                        <form action="{{ route('like_cake', $cake->id) }}" method="POST" class="flex justify-end items-center">
                            @csrf
                            <span class="text-[#5e2121] mr-2">{{ $cake->likers->count() }}</span>
                            @if(auth()->check() && auth()->user()->likes->contains($cake->id))
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
                    <div class="flex items-stretch justify-center relative rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out" wire:click.prevent="view_cake({{ $cake }}, 'Cake')">
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative h-full">
                            <div class=" mx-auto w-[194px] h-[160px]">      
                                @if(Str::startsWith($cake->image, ['http://', 'https://']))    
                                    <img src="{{ url($cake->image) }}" class="h-full w-full object-cover object-center">
                                @else      
                                    <img src="{{ Vite::asset($cake->image) }}" class="h-full w-full object-cover object-center">
                                @endif
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">{{ $cake->name }}</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]"> 
                                <p class="w-[247px]">{{  \Illuminate\Support\Str::limit($cake->description, 20) }}</p>
                                <p>{{ $cake->price }}</p>
                            </div>
                        </div>
                    </div>
                    
                    @can('edit_products')
                        <div class="absolute bottom-0 py-[15px]">
                            <div class="flex justify-center -mx-1">
                                <a href="{{ route('gt_cakes_edit', $cake->slug) }}" class="p-1">
                                    <x-button>
                                        Edit
                                    </x-button>
                                </a>  
                                <div class="p-1">
                                    <x-danger-button wire:click.prevent="delete_cake({{ $cake }})">
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/nutella.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Nutella</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/marte.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Marte</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/nestle.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Nestle Nocioli</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/amarena.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Amarena</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/choco-heart.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Chocolate Heart</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/fruit-heart.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Fruit Heart</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                    <div class="flex items-stretch justify-center relative rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/cherry.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Cherry</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/vanilla.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Vanilla</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/profiterole.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Profiterole</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/tiramisu.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Tiramisu</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/cookies.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Cookies</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/cheesecake.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Cheesecake</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                        <div class="py-[80px] px-[50px] text-center  mx-auto relative">
                            <div class=" mx-auto w-[194px] h-[160px]">
                                <img src="{{ Vite::asset('resources/images/milfay.png')}}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="py-[22px]">
                                <p class="text-[25px] text-text font-montserrat font-bold">Milfay</p>
                            </div>
                            <div class="w-[247px] mx-auto text-[20px]">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do..</p>
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
                </div> --}}
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden" id="custom-cakes">
        <div class="mx-auto w-[1225px] max-w-full px-5 relative ">
            <div class="flex flex-col xl:flex-row justify-center items-center -mx-[30px] relative">
                <div class="w-full xl:w-[710px] px-[30px] text-text flex justify-center items-center relative">
                    <div class="">
                        <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center xl:text-left ">Custom Cakes</h1>
                        <div class="text-lg md:text-[20px] lg:text-[22px] text-justify pt-[40px]">
                            <p>Whether you're celebrating a birthday, wedding, anniversary, or any special occasion, we are here to bring your vision to life. Our skilled bakers and cake decorators are dedicated to delivering not only stunning creations but also delectable flavors that will leave your taste buds wanting more. Ordering a custom cake from us is a breeze—simply reach out to us through your preferred contact method, be it phone, email, or even social media. We'll gladly guide you through the design process, discussing your preferred theme, size, flavors, and any specific details you have in mind. Let us be a part of your celebration, and allow our custom cakes to make your event truly memorable.</p>
                        </div>
                        <div class="flex justify-center xl:justify-start pt-[46px]">
                            <a href="{{ route('custom_cake') }}">
                                <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                                    Contact
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-[515px] px-[30px] text-text flex justify-center items-center relative">
                    <div class="flex w-full xl:w-[454px] xl:h-[391px] flex-col lg:flex-row items-center xl:items-end justify-center xl:block lg:w-full pt-10 xl:pt-0">
                        <div class="flex flex-col sm:flex-row justify-center xl:block xl:h-1/2 relative">
                            <div class="sm:w-[186px] sm:h-[149px] xl:absolute xl:top-[20px] xl:right-[213px] mx-auto ">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/custom-cake-1.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/custom-cake-1.png')}}" width="" height="" alt="" class="max-w-full w-auto">
                                </picture>
                            </div>
                            <div class="sm:w-[201px] sm:h-[155px] xl:absolute xl:top-0 xl:right-0 mx-auto ">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/custom-cake-2.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/custom-cake-2.png')}}" width="" height="" alt="" class="max-w-full w-auto">
                                </picture>
                            </div>
                        </div>
                        <div class=" flex flex-col-reverse sm:flex-row justify-center xl:block xl:h-1/2 relative">
                            <div class="sm:w-[211px] sm:h-[188px] xl:absolute xl:bottom-[20px] xl:left-0 mx-auto ">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/custom-cake-3.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/custom-cake-3.png')}}" width="" height="" alt="" class="max-w-full w-auto">
                                </picture>
                            </div>
                            <div class="sm:w-[258px] sm:h-[246px] xl:absolute xl:bottom-0 xl:right-0 mx-auto ">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/custom-cake-4.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/custom-cake-4.png')}}" width="" height="" alt="" class="max-w-full w-auto">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
 </div>