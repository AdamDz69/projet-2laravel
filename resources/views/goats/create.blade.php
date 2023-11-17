@extends('layout')

@section('main')
    <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4">Add a goat</h1>
        <form action="/goats" method="post" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="text-sm font-semibold">Nom :</label>
                <input type="text" id="name" name="name" class="border p-2 mt-1" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="price" class="text-sm font-semibold">Prix :</label>
                <input type="number" id="price" name="price" step="0.01" class="border p-2 mt-1" required>
            </div>

            <div class="flex flex-col">
                <label for="birthday" class="text-sm font-semibold">Birthday :</label>
                <input type="date" id="birthday" name="birthday" class="border p-2 mt-1" required>
            </div>

            <div class="flex flex-col">
                <label for="color" class="text-sm font-semibold">Color :</label>
                <input type="text" id="color" name="color" class="border p-2 mt-1" required>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="sex" name="sex" class="mr-2" >
                <label for="sex" class="text-sm font-semibold">Sex :</label>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4">Soumettre</button>
        </form>
    </div>
@endsection
