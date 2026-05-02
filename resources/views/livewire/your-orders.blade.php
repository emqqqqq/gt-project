<div>
    @section('page-title')
        Your Orders
    @endsection
    <section class="w-screen relative overflow-x-hidden">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[265px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Your Orders</h1>
            <div class="relative flex flex-col md:flex-row flex-wrap justify-center xl:justify-start items-center xl:items-stretch -mx-2.5 pt-2.5 sm:pt-[50px] lg:pt-[86px]" >
                @if (count($orders) > 0)
                        <div class="w-full overflow-x-auto mb-3">
                            <table class="min-w-full overflow-x-auto">
                                <thead class="border-b bg-olive text-white">
                                    <tr>
                                        <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                            Description
                                        </th>
                                        <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                            Image
                                        </th>
                                        <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                            Delivery
                                        </th>
                                        <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                            Address
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="overflow-x-auto">
                                    @foreach ($orders as $order)
                                    <tr class="border-b">
                                        <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">ijedjdsjdsjldsljkdsljkdsJkldsjldljkldjkdJKLdejkldljkdejkldljkldjaskljadskkadskjadskjadskjladssssssssssssssssssssssssssssssssssss</td>
                                        <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">
                                            @if(Str::startsWith($order->image, ['http://', 'https://']))
                                                <img src="{{ url($order->image) }}" class="h-[100px]  md:h-[200px] md:w-[349px] object-cover object-center">
                                            @else
                                                <img src="{{ Vite::asset($order->image) }}" class="h-[100px]  md:h-[200px] md:w-[349px] object-cover object-center">
                                            @endif
                                        </td>
                                        <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap">
                                            <label class="relative inline-flex cursor-pointer">
                                                <input type="checkbox" {{ $order->delivery ? 'checked' : '' }} disabled class="sr-only peer">
                                                <div class="w-11 h-6 bg-red-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-olive"></div>
                                            </label>
                                        </td>
                                        <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">
                                            @if($order->delivery)
                                                {{ $order->address }}
                                            @else
                                                No Address Provided
                                            @endif
                                        </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="text-lg md:text-[20px] lg:text-[22px] text-center">You haven't ordered anything yet.</p>
                    
                @endif
            </div>
        </div>
    </section>
</div>
