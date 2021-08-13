<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full rounded-t-lg m-5 w-5/6 mx-auto  text-gray-800">
                    <thead >
                        <tr class="text-left border-b-2 border-indigo-300">
                          <th class="px-4 py-3">Title</th>
                          <th class="px-4 py-3">Description</th>
                          <th class="px-4 py-3">Price</th>
                        </tr>

                        <tbody>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{ $listing->title }}</td>
                                    <td>{{ $listing->description }}</td>
                                    <td>${{ $listing->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </thead>
                <table>
            </div>
        </div>
    </div>
</x-app-layout>
