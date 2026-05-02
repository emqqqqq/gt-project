<x-app-layout>
    @section('page-title')
        About
    @endsection
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto  w-full xl:w-[1196px]  max-w-full relative px-5 xl:px-0 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[194px] text-text">
            <div class=" flex flex-col xl:flex-row flex-wrap items-center justify-center">
                <div class="w-full xl:w-[708px]">
                    <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center xl:text-left">Who we are?</h1>
                    <div class="pt-[56px] text-lg md:text-[20px] lg:text-[22px] text-justify ">
                        <p class="pb-5">
                            GT Company is a family business founded in 1985 year.
                        </p>
                        <p class="pb-5">
                            Our commitment to excellence in the craft and artistry of baking enables us to deliver high quality products that look amazing, delight the customer and make celebrations a moment to cherish.
                        </p>
                        <p class="pb-5">
                            We are preserving the elegance and sensation of age old baking, coffee making and cake decorating with cookery technique to achieve the height of quality in the cake, coffee and pastry industry. Our products range from high end artistry to modern and local customs.
                        </p>
                    </div>
                </div>
                <div class="w-[288px] h-[365px] md:w-[488px] md:h-[665px] ">
                    <picture>
                        <source srcset="{{ Vite::asset('resources/images/coffee-about.webp')}}"  type="image/webp">
                        <img src="{{ Vite::asset('resources/images/coffee-about.webp')}}" width="" height="" alt="" class="object-center object-cover w-full h-full">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto  w-full xl:w-[1196px]  max-w-full relative px-5 xl:px-0 text-text">
            <div class=" flex flex-col-reverse xl:flex-row flex-wrap items-center justify-center">
                <div class="w-[288px] h-[365px] md:w-[488px] md:h-[665px] ">
                    <picture>
                        <source srcset="{{ Vite::asset('resources/images/girl-about.webp')}}" type="image/webp">
                        <img src="{{ Vite::asset('resources/images/girl-about.webp')}}" width="" height="" alt="" class="object-center object-cover w-full h-full">
                    </picture>
                </div>
                <div class="w-full xl:w-[708px]">
                    <div class="text-lg md:text-[20px] lg:text-[22px] text-justify ">
                        <p class="pb-5">
                            We started as a small cafeteria in the old bazaar in Bitola. Gt Company took a lot of effort, commitment and we achieved 36 years of sustainable growth.
                        </p>
                        <p class="pb-5">
                            Today we stand for a very successful coffee shop, the most artistry cakes for every special occasion that you can think of and of course we are the ones that can please you with 100% natural Italian ice cream in so many flavors.
                        </p>
                        <p class="pb-5">
                            On the other hand we are bringing forth advanced pastry techniques, food safety knowledge, and a strong understanding of the principles of pastry design.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto  w-full xl:w-[1049px]  max-w-full relative px-5 xl:px-0 text-text font-montserrat">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Our Locations</h1>
            <div class="flex flex-col lg:flex-row flex-wrap xl:flex-nowrap  items-center justify-center pt-[52px] lg:-mx-[26px]">
                <div class="lg:px-[26px]">
                    <div class="w-[250px] sm:w-[358px] md:w-[658px] h-[150px] sm:h-[200px] md:h-[322px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.00335827401983!2d21.335257017176144!3d41.02920912875317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135724fc2d8404f5%3A0x90b24ee5a11cbccc!2sGT%20Caffe!5e0!3m2!1sen!2smk!4v1692017588307!5m2!1sen!2smk" class="object-cover object-center h-full w-full shadow-lg rounded-3xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                </div>
                <div class="pt-6 lg:px-[26px]">
                    <div class="flex shrink items-start">
                        <div class="w-4 h-[23px] mr-1.5 lg:mr-5">
                            <img src="{{ Vite::asset('resources/images/location.svg')}}" class="h-full w-full  object-center object-cover">
                        </div>
                        <div class="xl:w-[305px] text-lg xl:text-[22px]">
                            <p>Sirok Sokak 94, Bitola
                                North Macedonia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row flex-wrap xl:flex-nowrap  items-center justify-center pt-[52px] lg:-mx-[26px]">
                <div class="lg:px-[26px]">
                    <div class="w-[250px] sm:w-[358px] md:w-[658px] h-[150px] sm:h-[200px] md:h-[322px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.00335827401983!2d21.335257017176144!3d41.02920912875317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135724fc2d8404f5%3A0x90b24ee5a11cbccc!2sGT%20Caffe!5e0!3m2!1sen!2smk!4v1692017588307!5m2!1sen!2smk" class="object-cover object-center h-full w-full shadow-lg rounded-3xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                </div>
                <div class="pt-6 lg:px-[26px]">
                    <div class="flex shrink items-start">
                        <div class="w-4 h-[23px] mr-1.5 lg:mr-5">
                            <img src="{{ Vite::asset('resources/images/location.svg')}}" class="h-full w-full  object-center object-cover">
                        </div>
                        <div class="xl:w-[305px] text-lg xl:text-[22px]">
                            <p>Sirok Sokak 55, Bitola
                                North Macedonia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>