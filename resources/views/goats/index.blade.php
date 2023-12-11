@extends('layout')

@section('main')
    <div class="max-w-4xl mx-auto mt-8">
        <div class="flex justify-between mb-4">
            <h1 class="text-3xl font-bold underline">All the goats</h1>
            @if(auth()->user()?->is_admin)
            <a href="/goats/create" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">Create a goat</a>
        @endif
        </div>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    @if(auth()->user()->is_admin == 0)
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @endif
                    @if(auth()->user()->is_admin == 1)
                    <form action='/deco' method='post'>
                        @csrf
                        <button type='submit'>Déconnexion</button>
                    </form>
                    @endif
                        @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200">Id</th>
                    <th class="py-2 px-4 bg-gray-200">Name</th>
                    <th class="py-2 px-6 bg-gray-200">Price</th>
                    <th class="py-2 px-4 bg-gray-200">Sex</th>
                    <th class="py-2 px-8 bg-gray-200">Birthday</th> 
                    <th class="py-2 px-4 bg-gray-200">Color</th>
                    <th class="py-2 px-4 bg-gray-200">Actions</th>
                    @if(auth()->user()?->is_admin)<th class="py-2 px-4 bg-gray-200">Edit</th>
                    <th class="py-2 px-4 bg-gray-200">Delete</th>@endif
                </tr>
            </thead>
            <tbody>
                @foreach ($goats as $goat)
                    <tr>
                        <td class="border py-2 px-4">{{ $goat->id }}</td>
                        <td class="border py-2 px-4">{{ $goat->name }}</td>
                        <td class="border py-2 px-6">{{ $goat->price }}</td>
                        <td class="border py-2 px-4">{{ $goat->sex }}</td>
                        <td class="border py-2 px-8">{{ $goat->birthday }}</td> 
                        <td class="border py-2 px-4">{{ $goat->color }}</td>
                        <td class="border py-2 px-4">
                            <a href="/goats/{{ $goat->id }}" class="text-blue-500 hover:underline">View details</a>
                        </td>
                        @if(auth()->user()?->is_admin)
                        <td class="border py-2 px-4">
                            <a href="/goats/{{ $goat->id }}/edit" class="text-blue-500 hover:underline">Edit the
                                goat</a>
                                @endif
                            </td>
                            @if(auth()->user()?->is_admin)
                            <td class="border py-2 px-4">
                            <form action="/goats/{{ $goat->id }}" method="post" class="space-y-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md">Supprimer</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
