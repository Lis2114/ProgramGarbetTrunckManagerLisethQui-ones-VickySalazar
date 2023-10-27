<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationSessionController extends Controller
{
    public function create(){
        return view('auth.Login');
    }

    public function store(Request $request){

        $credencial = $request->validate(
            [
            'email'=> 'required|string|email|max:255|min:8|',
            'password'=> 'required|string'
            ]
        );

            // Incorrecto, genera excepción y retorna al formulario de login
            if(!Auth::attempt($credencial))
            {
            throw ValidationException::withMessages([
                'email' => 'Autenticación incorrecta'
            ]);
        }
        //crear el archivo de la sesión
        //almacena datos mientras esta en la sesión
        $request->session()->regenerate();
        return redirect()->route('welcome');
    }

    public function destroy(Request $request){
        //Destruir el archivo de sesión
        $request ->session()->invalidate();
        //Obtener un nuevo token
        return redirect()->route('login');

    }
}
