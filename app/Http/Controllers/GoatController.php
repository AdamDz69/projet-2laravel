<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goat;

class GoatController extends Controller
{
    public function index()
    {
        $goats = Goat::all();
        return view('goats.index', compact('goats'));
    }

    public function create()
    {
        return view('goats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday' => 'required|date',
        ]);

        $g = new Goat();
        $g->name = $request->name;
        $g->price = $request->price;
        $g->color = $request->color;
        $g->sex = $request->sex == null ? 0 : 1;
        $g->birthday = $request->birthday;
        $g->user_id = auth()->id(); 
        $g->save();

        return redirect('/goats');
    }

    public function show(Goat $goat)
    {
        return view('goats.show', compact('goat'));
    }

    public function edit(Goat $goat)
    {
        return view('goats.edit', compact('goat'));
    }

    public function update(Request $request, Goat $goat)
    {
        $request->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday' => 'required|date',
        ]);

        $goat->name = $request->name;
        $goat->price = $request->price;
        $goat->sex = $request->sex == null ? 0 : 1;
        $goat->birthday = $request->birthday;
        $goat->color = $request->color;
        $goat->save();

        return redirect('/goats/' . $goat->id);
    }

    public function destroy(Goat $goat)
    {
        $goat->delete();
        return redirect('/goats');
    }

    public function dash()
    {
        if (auth()->user()?->is_admin == 1) {
            return redirect('goats');
        } else {
            return view('dashboard');
        }
    }
}
