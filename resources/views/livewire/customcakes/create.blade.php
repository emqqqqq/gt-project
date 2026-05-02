
@section('page-title')
Custom Cakes
@endsection

@if(auth()->user() && auth()->user()->hasRole('admin'))
<section class="w-screen relative overflow-x-hidden" id="custom-cakes">
    <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[200px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
        <div class="w-full">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-start sm:justify-between mb-2 p-2">
                <div class="mb-2 sm:mb-0">
                    <div class="w-auto relative " x-data="{ search: '' }">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"  class="w-[20px] h-[20px] absolute left-3 top-1/2 -translate-y-1/2 z-10 inline-block">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.751 0.499756C5.53777 0.499756 0.500977 5.53655 0.500977 11.7498C0.500977 17.963 5.53777 22.9998 11.751 22.9998C14.4072 22.9998 16.8485 22.0792 18.7731 20.5396L23.3674 25.1337C23.8556 25.6218 24.6471 25.6218 25.1352 25.1336C25.6233 24.6454 25.6233 23.854 25.1351 23.3659L20.5409 18.7718C22.0804 16.8473 23.001 14.406 23.001 11.7498C23.001 5.53655 17.9642 0.499756 11.751 0.499756ZM3.00098 11.7498C3.00098 6.91726 6.91848 2.99976 11.751 2.99976C16.5835 2.99976 20.501 6.91726 20.501 11.7498C20.501 16.5822 16.5835 20.4998 11.751 20.4998C6.91848 20.4998 3.00098 16.5822 3.00098 11.7498Z" fill="#939393"/>
                        </svg>
                        <input type="text"  id="search" name="" placeholder="Search" x-model="search" x-on:keydown.escape="search = ''" wire:model.debounce.500ms="search" class="rounded-md w-full p-1 min-h-[40px] pl-[42px] border-solid border-gray-300 text-gray-800 placeholder-gray-500 focus:border-gray-400 ring-0 focus:ring-0">
                        <div wire:loading class="absolute left-[105%] top-1/2 -translate-y-1/2">
                            Processing...
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-row -mx-2 items-center">
                        <div class="px-2 order-2 sm:order-1"><label for="per_page_selected" class="text-sm text-gray-500">Results per page</label></div>
                        <div class="px-2 order-1 sm:order-2">
                            <select id="per_page_selected" wire:model="per_page_selected" class="rounded-md w-20 p-2 min-h-[40px] border-solid border-gray-300 text-gray-800 placeholder-gray-500 focus:border-gray-400 ring-0 focus:ring-0">
                                @foreach ($per_page as $per)
                                <option value="{{ $per }}">{{ $per }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mb-3 overflow-x-auto">
                <table class="min-w-full overflow-x-auto">
                    <thead class="border-b bg-olive text-white">
                        <tr>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-center text-3.5 font-semibold">
                                ID 
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Name
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Email
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Phone
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Description
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Delivery
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-left text-3.5 font-semibold">
                                Address
                            </th>
                            <th scope="col" class="text-sm sm:text-base px-2 py-2 text-center text-3.5 font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class=" overflow-x-auto">
                        @foreach ($cake_orders as $cake_order)
                        <tr class="border-b">
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle text-center">{{ $cake_order->id }}</td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">{{ $cake_order->name }}</td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">{{ $cake_order->email }}</td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">{{ $cake_order->phone }}</td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">{{ Str::words($cake_order->description, 5,'... ') }}</td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle text-center">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" {{ $cake_order->delivery ? 'checked' : '' }} disabled class="sr-only peer">
                                    <div class="w-11 h-6 bg-red-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-olive"></div>
                                </label>
                            </td>
                            <td class="text-sm md:text-base text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap align-middle">{{ $cake_order->address }}</td>
                            <td class="text-sm text-neutral-800 font-normal text-4 px-2 py-2 whitespace-nowrap text-center align-middle">
                                <div class="w-auto inline-block relative z-10" x-data="{open:false, active:false}" x-bind:class="{'z-[60]' : active}">
                                    <a href="#" class="group block relative text-center bg-transparent rounded-md w-[24px] h-[24px] text-olive text-base leading-tight hover:bg-gray-200 [&amp;.active]:bg-gray-200 transition ease-in-out duration-200" x-on:click="open = !open, active = !active" x-bind:class="{'active' : active}" @click.away="active = false">
                                        <span class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 transition ease-in-out duration-300 z-10">
                                            <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-olive">
                                                <path d="M0.666992 1.66659C0.666992 1.40288 0.745191 1.14509 0.891699 0.925825C1.03821 0.70656 1.24645 0.535663 1.49008 0.434746C1.73372 0.33383 2.0018 0.307425 2.26045 0.358872C2.51909 0.410319 2.75666 0.537307 2.94313 0.723777C3.1296 0.910247 3.25659 1.14782 3.30804 1.40647C3.35949 1.66511 3.33308 1.9332 3.23217 2.17683C3.13125 2.42047 2.96035 2.6287 2.74109 2.77521C2.52182 2.92172 2.26403 2.99992 2.00033 2.99992C1.6467 2.99992 1.30757 2.85944 1.05752 2.60939C0.807468 2.35935 0.666992 2.02021 0.666992 1.66659ZM2.00033 8.33325C2.26403 8.33325 2.52182 8.25505 2.74109 8.10854C2.96035 7.96204 3.13125 7.7538 3.23217 7.51016C3.33308 7.26653 3.35949 6.99844 3.30804 6.7398C3.25659 6.48116 3.1296 6.24358 2.94313 6.05711C2.75666 5.87064 2.51909 5.74365 2.26045 5.6922C2.0018 5.64076 1.73372 5.66716 1.49008 5.76808C1.24645 5.869 1.03821 6.03989 0.891699 6.25916C0.745191 6.47842 0.666992 6.73621 0.666992 6.99992C0.666992 7.35354 0.807468 7.69268 1.05752 7.94273C1.30757 8.19278 1.6467 8.33325 2.00033 8.33325ZM2.00033 13.6666C2.26403 13.6666 2.52182 13.5884 2.74109 13.4419C2.96035 13.2954 3.13125 13.0871 3.23217 12.8435C3.33308 12.5999 3.35949 12.3318 3.30804 12.0731C3.25659 11.8145 3.1296 11.5769 2.94313 11.3904C2.75666 11.204 2.51909 11.077 2.26045 11.0255C2.0018 10.9741 1.73372 11.0005 1.49008 11.1014C1.24645 11.2023 1.03821 11.3732 0.891699 11.5925C0.745191 11.8118 0.666992 12.0695 0.666992 12.3333C0.666992 12.6869 0.807468 13.026 1.05752 13.2761C1.30757 13.5261 1.6467 13.6666 2.00033 13.6666Z" fill="#6B7280"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100 bg-white" x-transition:enter-start="transform -translate-y-6 opacity-0" x-transition:enter-end="transform translate-y-0 opacity-100" x-transition:leave="transition ease-in duration-100 bg-transparent" x-transition:leave-start="transform translate-y-0 opacity-100" x-transition:leave-end="transform -translate-y-6 opacity-0" @click.away="open = false" class="absolute  @if(count($cake_orders) >= 5 && $loop->iteration >= count($cake_orders) - 2) bottom-full @else top-full @endif right-0 bg-white shadow-lg min-w-full w-[110px] rounded-lg p-2" style="display: none;">
                                        <ul class="mb-0">
                                            <li class="pb-1">
                                                <a href="{{ route('customcakes.view', $cake_order) }}" class="text-sm text-gray-500 py-1 px-2 block text-left bg-transparent font-normal transition-all duration-300 rounded-md hover:bg-blue-50 hover:text-olive hover:font-bold">View Order</a>
                                            </li>
                                            <li class="pb-0">
                                                <a href="" wire:click.prevent="delete_order({{ $cake_order->id }})" class="text-sm text-gray-500 py-1 px-2 block text-left bg-transparent font-normal transition-all duration-300 rounded-md hover:bg-blue-50 hover:text-olive hover:font-bold">Delete order</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pb-3">{{ $cake_orders->onEachSide(3)->links('custom-pagination-links-view') }}</div>
        </div>
    </div>
</section>

@else

    <div  x-data="{ name_focused: @entangle('name_focused')}">
        <section class="w-screen relative overflow-x-hidden" id="custom-cakes">
            <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[200px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
                <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Order Cake</h1>
                <form wire:submit.prevent="submit">
                    @csrf 
                    <div class="flex flex-row flex-wrap -mx-4 items-stretch p-2">
                        <div class="w-full px-4">
                            @if (session()->has('message'))
                                <div class="text-green-500 font-bold text-lg md:text-2xl">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="w-full px-4" wire:loading wire:target="image">Uploading...</div>

                        <div class="w-full px-4 py-2" x-data="{ showDiv: false }">
                            <div class="flex items-center">
                                <label class="relative inline-flex items-center cursor-pointer my-2">
                                    <input type="checkbox" class="sr-only peer"  wire:model="delivery" x-model="showDiv">
                                    <div class="w-[40px] sm:w-[51px] md:w-[78px] h-[25px] sm:h-[30px] md:h-[44px] bg-white peer-focus:outline-none border border-olive peer-focus:ring-4 peer-focus:ring-olive rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-olive peer-checked:after:bg-olive after:content-[''] after:absolute after:bg-olive after:border-olive after:border after:rounded-full after:h-[23px] after:w-[23px] sm:after:h-[30px] sm:after:w-[30px] md:after:h-[43px] md:after:w-[43px] after:transition-all peer-checked:bg-white peer-checked:after:-left-[7px] sm:peer-checked:after:-left-[9px]"></div>
                                </label>
                                <div class="ml-2 text-neutral-800 font-medium text-base">
                                    Delivery
                                </div>
                            </div>

                            <div x-show="showDiv">
                                <div class="w-full">
                                    <label class="block text-neutral-800 font-medium text-base mb-1" for="address">Your Address</label>
                                    <input type="text" id="address"  wire:model="address" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                                    @error('address') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
            
                        <div class="w-full px-4 py-2">
                            <label class="block text-neutral-800 font-medium text-base mb-1" for="name">Name</label>
                            <input type="text" id="name" wire:model="name" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300"  @focus="name_focused = true" @click.away="name_focused = false">
                            @error('name') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="w-full px-4 py-2">
                            <label class="block text-neutral-800 font-medium text-base mb-1" for="email">Email</label>
                            <input type="text" id="email" wire:model="email" disabled class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                            @error('email') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                        </div>

                        <div class="w-full px-4 py-2">
                            <label class="block text-neutral-800 font-medium text-base mb-1" for="phone">Phone</label>
                            <input type="text" id="phone" wire:model="phone" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                            @error('phone') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="w-full px-4 py-2">
                            <label class="block text-neutral-800 font-medium text-base mb-1" for="description">Description</label>
                            <textarea  id="description" wire:model="description" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300"></textarea>
                            @error('description') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="w-full md:w-1/2 px-4 py-2">
                            <label class="block text-neutral-800 font-medium text-base mb-1" for="image">Image</label>
                            <input type="file" id="image" wire:model="image" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-olive !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                            @error('image') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="w-full px-4 py-2">
                            @if ($image)                
                                Image Preview:
                                <img src="{{ $image->temporaryUrl() }}" class="mx-auto">                
                            @endif
                        </div>        
            
                        <div class="w-full px-4 py-2">
                            <div class="flex flex-row justify-between items-center w-full pt-2">
                                <div class="p-1">
                                    <x-button>
                                        Order
                                    </x-button>
                                </div>  
                            </div>
                        </div>
                    </div>
                </form>
            
            </div>
        </section>
    </div>
@endif
