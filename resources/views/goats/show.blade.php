@extends('layout')
@section('main')

    <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4">Just one goat</h1>
        <img src="/img/goats/{{ $goat->image_path }}" alt="image de goat" class="mb-4 w-full h-auto">
        <ul class="list-disc ml-6">
            <li><strong>ID:</strong> {{ $goat->id }}</li>
            <li><strong>Name:</strong> {{ $goat->name }}</li>
            <li><strong>Price:</strong> {{ $goat->price }}</li>
            <li><strong>Sex:</strong> {{ $goat->sex }}</li>
            <li><strong>Birthday:</strong> {{ $goat->birthday }}</li>
            <li><strong>Color:</strong> {{ $goat->color }}</li>
            <li>Proprio: {{ $goat->owner->name }}</li>
        </ul>
        
        <a href="{{ url('/goats') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4 inline-block">Retour </a>
    </div>
@endsection
