<?php

use App\Http\Controllers\GoatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ... autres importations ...

Route::get('/', function () {
    return view('welcome');
});

Route::resource('goats',GoatController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/admin',function(){
        return view('admin/admin-panel');   
    })->name('administration')->middleware(Isadmin::class);
});

Route::get('/test-livewire', function () {
    return view('counter-contrainer');
});

// Ajoutez les routes pour le formulaire reCAPTCHA
Route::get('/form-with-recaptcha', function () {
    return view('form_with_recaptcha');
})->name('form.show');

Route::post('/form-with-recaptcha', function (Request $request) {
    // Valider le reCAPTCHA ici
    $request->validate([
        'g-recaptcha-response' => 'required|captcha',
        // ... autres règles de validation ...
    ]);

    // Traitement du formulaire après la validation reCAPTCHA réussie
    // ...

    return redirect()->back()->with('success', 'Formulaire soumis avec succès!');
})->name('form.submit');
