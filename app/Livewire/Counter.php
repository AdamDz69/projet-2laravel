<?php

namespace App\Livewire;

use App\Models\Goat;
use Illuminate\Support\Collection;
use Livewire\Component;

class Counter extends Component
{
    public string $name;
    public int $price;
    public int $count;
    public Collection $goats;

    public function mount()
    {
        $this->username ='gherg';
        $this->count = 0;
        $this->goats = Goat::all();
    }

    public function increment()
    {
        $this->count++;
    }

    public function add()
    {
        $g = new Goat();
        $g->name = $this->name;
        $g->price = $this->price;
        $g->color = 'Darkgreen';
        $g->birthday = '2004-08-31';
        $g->sex = 0;
        $g->user_id = 1;
        $g->save();
        $this->goats = Goat::all()->sortByDesc('id');

    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
