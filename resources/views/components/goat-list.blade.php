<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">La liste de mes goats</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="px-4">
                    <x-th> ID</x-thh>
                    <x-th>Name</x-th>
                    <x-th> Price</x-th>
                    <x-th> Sex </x-th>
                    <x-th> Birthday</x-th>
                    <x-th> Color</x-th>
                </tr>
            </thead>
            <tbody>
                @foreach(Auth::user()->goats as $goat)
                <tr>
                    <x-td> {{ $goat->id }}</x-td>
                    <x-td>{{ $goat->name }}</x-td>
                    <x-td> {{ $goat->price }}</x-td>
                    <x-td>{{ $goat->sex }}</x-td>
                    <x-td> {{ $goat->birthday }}</x-td>
                    <x-td>{{ $goat->color }}</x-td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
