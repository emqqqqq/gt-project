@section('page-title')
    Home
@endsection
<div>
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full lg:w-[1050px] xl:w-[1024px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[261px] relative pb-[65px] lg:pb-[126px]">
            <div class="relative lg:grid grid-cols-12 flex flex-col-reverse content-center min-h-[606px] w-full ">
                <div class="col-span-12 xl:col-span-6 lg:h-[447px] z-50">
                    <div class="z-50 text-text text-justify lg:text-left">
                        <div class="w-full lg:w-[710px] lg:min-h-[376px]">
                            <h1 class="font-bold text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px]">Savor the Sweet Symphony: Explore our Tempting Ice Cream, Cakes & Delectable Cookies!</h1>
                            <div class="lg:w-[558px]">
                                <p class="text-lg md:text-[20px] lg:text-[22px]">Stepping into our 36th year, we are specialized in making the best home made Cakes, Desserts and 100% Natural Italian Ice Cream</p>
                            </div> 
                        </div>
                        <a  href="{{ route('our_products') }}">
                            <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[33px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                                Check our products
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mt-5 xl:mt-0 col-span-12 xl:col-span-6">
                    <div class="lg:h-[606px] w-full lg:w-[466px] lg:absolute top-0 -right-[38px] bottom-0 flex justify-center">
                        <picture>
                            <source srcset="{{ Vite::asset('resources/images/image-main.webp')}}" type="image/webp">
                            <img src="{{ Vite::asset('resources/images/image-main.png')}}" width="" height="" alt="" class="max-w-full w-auto">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-[1215px] max-w-full px-5 relative pb-[65px] lg:pb-[126px]">
            <div class="flex flex-col-reverse xl:flex-row xl:flex-wrap -mx-[23px] relative xl:h-[560px]">
                <div class="w-full xl:w-1/2 px-[23px] relative">
                    <div class="flex flex-col lg:flex-row items-center justify-center xl:block xl:w-full h-full pt-10 xl:pt-0">
                        <div class=" flex flex-col md:flex-row xl:block h-1/2 relative">
                            <div class="flex items-center justify-center w-full xl:w-1/2 relative">
                                <div class="sm:w-[328px] sm:h-[334px] xl:absolute xl:top-0 xl:left-0">
                                    <picture>
                                        <source srcset="{{ Vite::asset('resources/images/who-we-are-first-image.webp')}}" type="image/webp">
                                        <img src="{{ Vite::asset('resources/images/who-we-are-first-image.png')}}" width="" height="" alt="" class="w-auto max-w-full">
                                    </picture>
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full xl:w-1/2 relative">
                                <div class="sm:w-[226px] sm:h-[199px] xl:absolute xl:top-[22px] xl:left-[333px]">
                                    <picture>
                                        <source srcset="{{ Vite::asset('resources/images/who-we-are-second-image.webp')}}" type="image/webp">
                                        <img src="{{ Vite::asset('resources/images/who-we-are-second-image.png')}}" width="" height="" alt="" class="w-auto max-w-full">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center xl:h-1/2 relative">
                            <div class="sm:w-[445px] sm:h-[338px] xl:absolute xl:bottom-0 xl:right-0">
                                <picture>
                                    <source srcset="{{ Vite::asset('resources/images/who-we-are-third-image.webp')}}" type="image/webp">
                                    <img src="{{ Vite::asset('resources/images/who-we-are-third-image.png')}}" width="" height="" alt="" class=" mx-auto   w-auto max-w-full">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/2 px-[23px] text-text flex justify-center items-center">
                    <div>
                        <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] text-center lg:text-left font-bold">Who We Are?</h1>
                        <div class="text-lg md:text-[20px] lg:text-[22px] text-justify pt-[38px]">
                            <p>In the strict center of Bitola we managed to create an environment in which our visitors can avoid the city noise and enjoy a pleasant atmosphere and different flavors that are a paradise for your senses. Our journey with food started long ago. GT Company is a family business founded in 1985. We started with a small cafeteria in the old bazaar in Bitola, and today we are a company that owns two confectioneries – cafes and a lounge bar. The best, carefully prepared and beautifully served food with excellent drinks and wines, a hearty atmosphere and unobtrusive interior make Lounge Bar GT the right choice for a pleasant lunch or dinner, and of course for breakfast.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-[954px] max-w-full px-5 relative pb-[65px] lg:pb-[168px] text-text">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Our Products</h1>
            <div class="flex flex-row flex-wrap items-center justify-center  text-center -mx-[32px] font-bold text-lg md:text-[20px] lg:text-[25px] pt-[30px] lg:pt-[58px]">
                <div class="h-full w-full md:w-1/2 lg:w-1/3 sm:px-[32px] flex justify-center  py-4 lg:py-2">
                    <a href="{{ route('gt_ice_creams') }}">
                        <div class=" py-[32px] px-[61px] relative shadow-2xl rounded-3xl  cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                            <div class="pb-[45px] relative w-full ">
                                <div class="w-[155px] h-[155px]">
                                    <img src="{{ Vite::asset('resources/images/ice-cream.svg')}}" class="object-center object-cover w-full h-full">
                                </div>
                                <div class="absolute bottom-0 left-0 w-full">
                                    <p class="">Ice Creams</p>
                                </div>
                            </div>
                        </div>
                    </a>  
                </div>
                <div class="h-full w-full md:w-1/2 lg:w-1/3 sm:px-[32px] flex justify-center py-4 lg:py-2">
                    <a href="{{ route('gt_cakes') }}">
                        <div class=" py-[32px] px-[61px] relative shadow-2xl rounded-3xl cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                            <div class="pb-[45px] relative  w-full">
                                <div class="w-[155px] h-[155px]">
                                    <img src="{{ Vite::asset('resources/images/cake.svg')}}" class="object-center object-cover w-full h-full">
                                </div>
                                <div class="absolute bottom-0 left-0 w-full">
                                    <p class="">Cakes</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="h-full w-full md:w-1/2 lg:w-1/3 sm:px-[32px] flex justify-center py-4 lg:py-2">
                    <a href="{{ route('gt_desserts') }}">
                        <div class=" py-[32px] px-[61px] relative shadow-2xl rounded-3xl cursor-pointer hover:bg-gray-200 transition-all ease-in-out">
                            <div class="pb-[45px] relative  w-full">
                                <div class="w-[155px] h-[155px]">
                                    <img src="{{ Vite::asset('resources/images/cupcake.svg')}}" class="object-center object-cover w-full h-full">
                                </div>
                                <div class="absolute bottom-0 left-0 w-full">
                                    <p class="">Desserts</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex justify-center pt-5 sm:pt-[35px] md:pt-[50px] lg:pt-[109px]">
                <a href="{{ route('our_products') }}">
                    <button class="font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[15px] px-[98px] hover:bg-[#69A87C] mt-[14px] transition-all ease-in-out">
                        Explore
                    </button>
                </a>    
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1075px] max-w-full relative px-5 xl:px-0 pb-5 lg:pb-[73px] text-text">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Finest Cakes and Ice Cream</h1>
            <div class="pt-[56px] flex flex-col lg:flex-row items-center justify-center relative">
                <div class="text-lg md:text-[20px] lg:text-[22px] text-justify lg:w-[589px] lg:mr-[42px]">
                    <p>
                        There’s always room for dessert, no doubt about that! A scoop of your favorite Italian ice cream is the perfect way to indulge during the hot days of summer. It's creamy, tasty, and it's decadent texture bears a striking happiness. Our Italian Ice cream is filled with organic and satisfying ingredients of which we have made a cool selection for surprising and delightful options. Ice cream is a world-wide favorite dessert. It’s a staple. Everywhere you go, you'll find a new flavour ready for you to taste, but in Bitola the number one place for you to try as many flavours as you want is GT Company.
                    </p>
                </div>

                <div class="relative">
                    <div class="sm:w-[444px] sm:h-[411px]">
                        <picture>
                            <source srcset="{{ Vite::asset('resources/images/cake-shape.webp')}}" type="image/webp">
                            <img src="{{ Vite::asset('resources/images/cake-shape.png')}}" width="" height="" alt="" class="object-center object-cover w-full h-full">
                        </picture>
                    </div>
                    <div class="hidden lg:block absolute h-[99px] w-[163px] -left-[55px] -bottom-[65px]">
                        <img src="{{ Vite::asset('resources/images/arrow.svg')}}" class="h-full w-full object-center object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1075px] max-w-full relative px-5 xl:px-0 lg:pb-[73px] text-text">
            <div class="flex flex-col-reverse lg:flex-row items-center justify-center">
                <div class="relative">
                    <div class="sm:w-[485px] sm:h-[489px] ">
                        <picture>
                            <source srcset="{{ Vite::asset('resources/images/ice-cream-shape.webp')}}" type="image/webp">
                            <img src="{{ Vite::asset('resources/images/ice-cream-shape.png')}}" width="" height="" alt="" class="object-center object-cover w-full h-full">
                        </picture>
                    </div>
                    <div class="hidden lg:block absolute h-[86px] w-[205px] -right-[80px] -bottom-[65px]">
                        <img src="{{ Vite::asset('resources/images/arrow-curly.svg')}}" class="h-full w-full object-center object-cover">
                    </div>
                </div>
                <div class="text-lg md:text-[20px] lg:text-[22px] text-justify lg:w-[589px] lg:ml-[42px]">
                    <p>
                        You can always make your occasions even better! Personalized cakes for children, weddings, anniversaries, or for gatherings and even meetings. A piece of cake holds the power to make everything right. There's nothing quite like biting into a light, moist cake with tender crumbs. One of the best ways to connect with friends and relatives are cakes and mini-cakes. This is because they bring about joy and happiness, which can be experienced in all kinds of different flavours. The only thing better- or cuter, at least - than a layer cake is an itty-bitty-layer cake; and you don't have to share it!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <livewire:subscribe-to-newsletter>
</div>