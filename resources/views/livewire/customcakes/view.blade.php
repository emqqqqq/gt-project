<div>
    
@section('page-title')
Cake Order
@endsection
<section class="w-screen relative overflow-x-hidden" id="custom-cakes">
    <div class="mx-auto w-full lg:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[200px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
    <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">{{ $cakeOrder->name }} Order Details</h1>
    
    <div class="py-5 md:py-8 w-full">
        <div class="flex flex-col md:flex-row items-stretch w-full">
            <div class="w-full md:w-1/2">
                <div class="py-2 w-full text-lg">
                    <p class="text-lg font-bold">Cake order description:</p>
                    <p>{{$cakeOrder->description}}</p>
                </div>
                <div class="py-2 w-full text-lg">
                    <p class="text-lg font-bold">Customer number:</p>
                    <p>{{$cakeOrder->phone}}</p>
                </div>
                <div class="py-2 w-full text-lg">
                    <p class="text-lg font-bold">Customer email:</p>
                    <p>{{$cakeOrder->email}}</p>
                </div>
                <div class="py-2  text-lg">
                    @if($cakeOrder->delivery == 0)
                        <p class="text-lg font-bold">No Delivery</p>
                    @elseif($cakeOrder->delivery == 1)
                        <p class="text-lg font-bold">Customer's address:</p>
                        <p>{{ $cakeOrder->address }}</p>
                    @endif
                </div>
            </div>
            <div class="w-full md:w-1/2">
                @if(Str::startsWith($cakeOrder->image, ['http://', 'https://']))
                    <img src="{{ url($cakeOrder->image) }}" class="h-full w-full object-cover object-center rounded-md">
                @else
                    <img src="{{ Vite::asset($cakeOrder->image) }}" class="h-full w-full object-cover object-center rounded-md">
                @endif
            </div>
        </div>   
    </div>
</div>