<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoatController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('goats');
});

Route::resource('goats', GoatController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [GoatController::class, 'dash'])->name('dashboard');

    Route::get('/admin', function () {
        return view('admin/admin-panel');
    })->name('administration');
});

Route::get('/test-livewire', function () {
    return view('counter-contrainer');
});

Route::get('/form-with-recaptcha', function () {
    return view('form_with_recaptcha');
})->name('form.show');

Route::post('/form-with-recaptcha', function (Request $request) {
    $request->validate([
        'g-recaptcha-response' => 'required|captcha',
    ]);

    return redirect()->back()->with('success', 'Formulaire soumis avec succès!');
})->name('form.submit');

Route::middleware(['auth'])->group(function () {
    Route::post('/add-permission', [UserController::class, 'addPermissionToUser']);
    Route::post('/assign-role', [UserController::class, 'assignRoleToUser']);

    Route::post('/goats/{goat}/update', [GoatController::class, 'update'])->name('goats.update');
});

Route::get('/goats/{goat}/edit', [GoatController::class, 'edit'])->name('goats.edit');

Route::post('/deco', [UserController::class, 'deco']);
