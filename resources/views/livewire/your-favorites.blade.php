<div>
    @section('page-title')
        Your Favorites
    @endsection
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[265px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Your Favorites</h1>
            <div class="relative flex flex-col md:flex-row flex-wrap justify-center xl:justify-start items-center xl:items-stretch -mx-2.5 pt-2.5 sm:pt-[50px] lg:pt-[86px]" >
                @if (count($favoriteProducts) > 0)
                    @foreach ($favoriteProducts as $product)
                        <div class="p-2.5 flex items-stretch justify-center  min-h-[434px] w-full md:w-1/2 xl:w-1/3 relative">
                            <div class="absolute top-[20px] py-[15px] z-[9999]">
                                <form action="{{ route('remove_from_favorites', $product->id) }}" method="POST" class="flex justify-end items-center">
                                    @csrf
                                    <span class="text-[#5e2121] mr-2">{{ $product->likers->count() }}</span>
                                    @if(auth()->check() && auth()->user()->likes->contains($product->id))
                                        <button type="submit" class="text-[#5e2121]" id="like-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <style>svg{fill:#5e2121}</style>
                                                <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                        </button>
                                    @endif
                                </form>
                            </div>
                            <div class="flex items-stretch justify-center relative rounded-[38px] shadow-xl bg-white cursor-pointer hover:bg-gray-200 transition-all ease-in-out" wire:click.prevent="view_cake({{ $product }}, 'Cake')">
                                <div class="py-[80px] px-[50px] text-center  mx-auto relative h-full">
                                    <div class=" mx-auto w-[194px] h-[160px]">      
                                        @if(Str::startsWith($product->image, ['http://', 'https://']))    
                                            <img src="{{ url($product->image) }}" class="h-full w-full object-cover object-center">
                                        @else      
                                            <img src="{{ Vite::asset($product->image) }}" class="h-full w-full object-cover object-center">
                                        @endif
                                    </div>
                                    <div class="py-[22px]">
                                        <p class="text-[25px] text-text font-montserrat font-bold">{{ $product->name }}</p>
                                    </div>
                                    <div class="w-[247px] mx-auto text-[20px]">
                                        <p>{{  \Illuminate\Support\Str::limit($product->description, 80) }}</p>
                                        <p>{{ $product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-lg md:text-[20px] lg:text-[22px] text-center">You haven't liked any products yet.</p>
                @endif
            </div>
        </div>
    </section>
</div>
