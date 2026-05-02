<div>
    @if($product)
    <div class="fixed top-0 left-0 z-[99999999] w-screen h-screen bg-black/50 {{ $modal_property }}">
        <section class="fixed left-0 top-0 z-[999999999] h-full w-full flex justify-center items-center overflow-y-auto overflow-x-hidden outline-none {{ $modal_property }}">
            <div class="relative flex flex-col rounded-xl border-none bg-white bg-clip-padding text-current shadow-lg outline-none max-w-[92vw] md:w-[550px]">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md pb-0 p-4 md:p-5 bg-olive">
                    <h5 class="text-xl font-medium mb-0 leading-normal text-white">{{ $model_to_view }} Details</h5>
                    <a href="#" wire:click.prevent="hide()" class="w-9 h-9 md:w-11 md:h-11 rounded-lg bg-transparent relative">
                        <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-7 md:w-7 h-auto" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="hover:fill-gray-500 transition-all" d="M8.40994 7.00019L12.7099 2.71019C12.8982 2.52188 13.004 2.26649 13.004 2.00019C13.004 1.73388 12.8982 1.47849 12.7099 1.29019C12.5216 1.10188 12.2662 0.996094 11.9999 0.996094C11.7336 0.996094 11.4782 1.10188 11.2899 1.29019L6.99994 5.59019L2.70994 1.29019C2.52164 1.10188 2.26624 0.996094 1.99994 0.996094C1.73364 0.996094 1.47824 1.10188 1.28994 1.29019C1.10164 1.47849 0.995847 1.73388 0.995847 2.00019C0.995847 2.26649 1.10164 2.52188 1.28994 2.71019L5.58994 7.00019L1.28994 11.2902C1.19621 11.3831 1.12182 11.4937 1.07105 11.6156C1.02028 11.7375 0.994141 11.8682 0.994141 12.0002C0.994141 12.1322 1.02028 12.2629 1.07105 12.3848C1.12182 12.5066 1.19621 12.6172 1.28994 12.7102C1.3829 12.8039 1.4935 12.8783 1.61536 12.9291C1.73722 12.9798 1.86793 13.006 1.99994 13.006C2.13195 13.006 2.26266 12.9798 2.38452 12.9291C2.50638 12.8783 2.61698 12.8039 2.70994 12.7102L6.99994 8.41019L11.2899 12.7102C11.3829 12.8039 11.4935 12.8783 11.6154 12.9291C11.7372 12.9798 11.8679 13.006 11.9999 13.006C12.132 13.006 12.2627 12.9798 12.3845 12.9291C12.5064 12.8783 12.617 12.8039 12.7099 12.7102C12.8037 12.6172 12.8781 12.5066 12.9288 12.3848C12.9796 12.2629 13.0057 12.1322 13.0057 12.0002C13.0057 11.8682 12.9796 11.7375 12.9288 11.6156C12.8781 11.4937 12.8037 11.3831 12.7099 11.2902L8.40994 7.00019Z" fill="#FFF"/>
                        </svg>
                    </a>
                </div>
    
                 <!--Modal body-->
                <div class="py-5 px-[50px] text-center  mx-auto relative h-full">
                    <div class=" mx-auto w-[194px] h-[160px]">      
                        @if(Str::startsWith($product['image'], ['http://', 'https://']))    
                            <img src="{{ url($product['image']) }}" class="h-full w-full object-cover object-center">
                        @else      
                            <img src="{{ Vite::asset($product['image']) }}" class="h-full w-full object-cover object-center">
                        @endif
                    </div>
                    <div class="py-[22px]">
                        <p class="text-[25px] text-text font-montserrat font-bold">{{ $product['name'] }}</p>
                    </div>
                    <div class="w-[247px] mx-auto text-[20px]">
                        <p>{{ $product['description'] }}</p>
                        <p>{{ $product['price'] }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endif
</div>
