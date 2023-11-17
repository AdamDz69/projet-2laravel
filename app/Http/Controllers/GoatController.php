<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Goat;
use App\Http\Requests\StoreGoatRequest;
use App\Http\Requests\UpdateGoatRequest;

class GoatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goats = Goat::all();
        return view('goats.index',compact('goats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday'=> 'required|date',
        ]);
   
        $g=new Goat();
        $g->name = request()->name;
        $g->price = request()->price;
        $g->color = request()->color;
        $g->sex = request()->sex == null ? 0 : 1;
        $g->birthday = request()->birthday;
        $g->user_id = 1;
        $g->save();
        return redirect('/goats');
    }

    /**
     * Display the specified resource.
     */
    public function show(Goat $goat)
    {
        return view('goats.show',compact('goat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goat $goat)
    {
        return view('goats.edit', compact('goat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Goat $goat)
    {
         //valider les données
    request()->validate([
        'price' =>'required',
        'name'=>'required',
        'birthday'=>'required',
        'color'=>'required',
    ]);
    
    $goat->name = request()->name;
    $goat->price = request()->price;
    $goat->sex = request()->sex == null ? 0 : 1;
    $goat->birthday = request()->birthday;
    $goat->color = request()->color;
    $goat->save();
    return redirect('/goats/' . $goat->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goat $goat)
    {
        $goat->delete();
        return redirect('/goats');
    }
}
