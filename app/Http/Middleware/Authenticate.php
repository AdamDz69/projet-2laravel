<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // $validate = Validator::make(Input::all(), [
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);
        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate);
        // }
        return $request->expectsJson() ? null : route('login');
    }
}
