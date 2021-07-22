<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use managmentChange\Domain\TypeChangeBuy;
use managmentChange\Domain\TypeChangeId;
use managmentChange\Domain\TypeChangeSales;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{


    public function __invoke(Request $request)
    {
        $credentials = $request->only(["email", "password"]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/tc/all");
        }
        return  back()->withErrors(["email", "usuario no encontrado"]);
    }
}
