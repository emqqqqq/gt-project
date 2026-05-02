<x-app-layout>
    @section('page-title')
        Contact
    @endsection
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-[798px] max-w-full px-5 relative text-text font-montserrat">
            <div class="flex flex-col lg:flex-row flex-wrap justify-center items-center -mx-[23px] relative  pt-[45px]  md:pt-[50px] lg:pt-[100px] xl:pt-[180px] ">
                <div class="w-[315px] h-[411px] xl:w-[448px] xl:h-[511px]">
                    <picture>
                        <source srcset="{{ Vite::asset('resources/images/contact-lady.webp')}}" type="image/webp">
                        <img src="{{ Vite::asset('resources/images/contact-lady.png')}}" width="" height="" alt="" class="object-cover object-center h-full w-full">
                    </picture>
                </div>
                <div class="flex items-center lg:ml-[59px]">
                    <div>
                        <h1 class="text-[22px] sm:text-[25px] lg:text-[32px] font-bold">Let’s get in touch</h1>
                        <div class="mt-[20px] sm:mt-[30px] lg:mt-[51px]">
                            <div class="text-lg xl:text-[20px]">
                                <div class="pb-[2px] -mx-[6px]">
                                    <div class="flex flex-row shrink items-center p-[6px]">
                                        <div class="w-[21px] h-[21px] mr-[5px]">
                                            <img src="{{ Vite::asset('resources/images/phone.svg')}}"" class="w-full h-full object-center object-cover"/>
                                        </div>
                                        <p><a href="tel:+389 75 237 252">+389 75 237 252</a></p>
                                    </div>
                                    <div class="flex flex-row shrink items-center p-[6px]">
                                        <div class="w-[21px] h-[21px] mr-[5px]">
                                            <img src="{{ Vite::asset('resources/images/phone.svg')}}" class="w-full h-full object-center object-cover"/>
                                        </div>
                                        <p><a href="tel:+389 76 432 880">+389 76 432 880</a></p>
                                    </div>
                                </div>
                                <div class="flex flex-row shrink items-center">
                                    <div class="w-[22px] h-4 mr-[5px]">
                                        <img src="{{ Vite::asset('resources/images/mail.svg')}}" class="w-full h-full object-center object-cover"/>
                                    </div>
                                    <p><a href = "mailto: office@gt-company.org">office@gt-company.org</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

</x-app-layout>