<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Listings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-jet-validation-errors class="mb-4" />


            <form method="POST" action="{{ route('listings.store') }}">

                @csrf

                <div class="mt-4">
                    <x-jet-label for="title" value="{{ __('Title') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"/>
                </div>


                <div class="mt-4">
                    <x-jet-label for="description" value="{{ __('Description') }}" />
                    <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="description">{{ old('description')}}</textarea>
                </div>

                <div class="mt-4">
                    <x-jet-label for="price" value="{{ __('Price') }}" />
                    <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')"/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="photo1" value="{{ __('Photo 1') }}" />
                    <input type="file" name="photo1">
                </div>

                <div class="mt-4">
                    <x-jet-label for="photo2" value="{{ __('Photo 2') }}" />
                    <input type="file" name="photo2">
                </div>

                <div class="mt-4">
                    <x-jet-label for="photo3" value="{{ __('Photo 3') }}" />
                    <input type="file" name="photo3">
                </div>

                <div class="flex items-center mt-6">
                    <x-jet-button>
                        {{ __('Save Listing') }}
                    </x-jet-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
