<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('listings.create')}}" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{__('Add new listing')}}</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="rounded-t-lg m-5 w-5/6 mx-auto  text-gray-800">
                    <thead >
                        <tr class="text-left border-b-2 border-indigo-300">
                          <th class="px-4 py-3">Title</th>
                          <th class="px-4 py-3">Description</th>
                          <th class="px-4 py-3">Price</th>
                          <th class="px-4 py-3" colspan="2">Action</th>
                        </tr>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{ $listing->title }}</td>
                                    <td>{{ $listing->description }}</td>
                                    <td>${{ $listing->price }}</td>
                                    <td>
                                        <a href="{{ route('listings.edit', $listing)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Edit</a>
                                    </td>

                                    <td>
                                        <form action="{{ route('listings.destroy', $listing)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-jet-danger-button type="submit" onclick="return confirm('Are you sure?')" >Delete</x-jet-danger-button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                      </thead>
                <table>
            </div>
        </div>
    </div>
</x-app-layout>
