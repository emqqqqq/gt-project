@section('page-title')
    Create Ice Creams
@endsection
<div  x-data="{ name_focused: @entangle('name_focused')}">
    <section class="w-screen relative overflow-x-hidden" id="custom-ice-creams">
        <div class="mx-auto w-full xl:w-[1188px] max-w-full px-5 pt-[70px] sm:pt-[90px] md:pt-[100px] lg:pt-[200px] relative pb-[65px] md:pb-[100px] xl:pb-[250px]">
            <h1 class="text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px] font-bold text-center">Create Ice Cream</h1>
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
                    <div class="w-full md:w-1/2 px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="category">Category</label>
                        <select disabled id="category" wire:model="category" class="w-full  border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                            @foreach ($categories as $category)
                                @if ($category->name === "Ice Creams")
                                    <option value="{{ $category->id  }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                          </select>
                        @error('category') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="w-full px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="name">Name</label>
                        <input type="text" id="name" wire:model="name" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300"  @focus="name_focused = true" @click.away="name_focused = false">
                        @error('name') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="w-full px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="slug">Slug</label>
                        <input type="text" id="slug" wire:model="slug" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                        @error('slug') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                    </div>
        
        
                    <div class="w-full px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="price">Price</label>
                        <input type="text" id="price" wire:model="price" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                        @error('price') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="w-full px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="description">Description</label>
                        <input type="text" id="description" wire:model="description" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
                        @error('description') <span class="text-red-600 text-sm block pt-0.5">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="w-full md:w-1/2 px-4 py-2">
                        <label class="block text-neutral-800 font-medium text-base mb-1" for="image">Image</label>
                        <input type="file" id="image" wire:model="image" class="w-full border-px border-gray-300 border-solid bg-white py-2 px-3 rounded-md shadow-sm min-h-[42px] placeholder:text-gray-500 text-black font-normal text-base leading-tight focus:border-blue-500 !ring-transparent disabled:text-black disabled:bg-gray-50 disabled:border-gray-300">
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
                                    Create
                                </x-button>
                            </div>  
                            <div class="p-1">
                                <a href={{ route('gt_ice_creams') }}>
                                   <x-danger-button>
                                        Cancel
                                   </x-danger-button>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            </form>
        
        </div>
    </section>
</div>
