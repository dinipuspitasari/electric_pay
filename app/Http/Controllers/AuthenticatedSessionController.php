<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as FortifyAuthenticatedSessionController;

class AuthenticatedSessionController extends FortifyAuthenticatedSessionController
{
    protected function authenticated(Request $request, $user)
    {
        if ($user->id_level == '2') {
            return redirect('/pembayaran');
        }

        if ($user->id_level == '1') {
            return redirect('/beranda');
        }

        return redirect('/dashboard');
    }
}