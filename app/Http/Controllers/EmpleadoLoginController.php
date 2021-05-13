<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class EmpleadoLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('empleado.empleadoLogin');
    }

    public function login(Request $request)
    {
        //dd($this->validateLogin($request);

        if (auth()->guard('empleado')->attempt(['correo' => $request->correo, 'password' => $request->password]))
        {
            //dd(auth()->guard('editor')->user()->nombre);
            return redirect()->route('empleado.index')
                ->with(['logeado'=>'Mensaje',
                ]);
        }
        /*if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }*/

        return back()->withErrors(['correo' => 'Correo o contraseña incorrecto(s)']);
    }

    public function index()
    {
        return view ('empleado.empleadoinicio');
    }
}

