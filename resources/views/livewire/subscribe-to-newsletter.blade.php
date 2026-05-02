<div>
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1075px] max-w-full relative px-5 xl:px-0 lg:pt-[73px] text-text text-center">
            <div class="flex flex-col xl:flex-row items-center justify-center">
                <div class="w-[500px]">
                    <img src="{{ Vite::asset('resources/images/envelope.png')}}" width="" height="" alt="envelope" class="max-w-full w-auto h-auto">
                </div>

                <div class="">
                    <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center mb-4">SUBSCRIBE</h1>
                    <p class="mb-4 text-lg md:text-[20px] lg:text-[22px] ">Subscribe to our newsletter & stay updated</p>
                    <form action="/" method="POST"  wire:submit.prevent="subscribe"> 
                        <div class="flex flex-col md:flex-row items-center flex-wrap">
                            <div class=" flex flex-col md:flex-row w-full  md:w-auto  items-center relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 md:pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512"><style>svg{fill:#7d8082}</style><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                                </div>
                                <input wire:model="email" type="email" name="email" required
                                    class="w-full py-[10px] px-[50px] md:px-[40px] border border-gray-300 rounded-full focus:outline-none !focus:border-olive mr-0 md:mr-5"
                                    placeholder="Your Email">
                            </div>
                            <x-button  type="submit"  class="w-full md:w-auto mt-5 md:mt-0 ">Submit</x-button>
                        </div>
                        @if (session('subscribed'))
                            <div class="mt-4 text-olive">You are subscribed!</div>
                        @elseif (session('already_subscribed'))
                            <div class="mt-4 text-olive">You are already a subscriber!</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
