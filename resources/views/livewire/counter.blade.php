<div class="p-4">
    <x-input wire:model="name" type="text" />
    <x-input wire:model="price" type="number" />
    <x-button wire:click="add">Ajouter</x-button>

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
                @foreach($goats as $goat)
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
