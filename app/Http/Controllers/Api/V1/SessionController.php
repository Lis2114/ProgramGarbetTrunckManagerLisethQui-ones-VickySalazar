<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $user = $request->user();

            return response()->json([
                //Generar token (clave) para el servicio autenticado
                //si hay clave puede consumir los servicios
                'token' => $user->createToken($request->name)->plainTextToken,
                'name'=>$user->name,
                'email' => $user->email,
                'message' => 'Success'
            ], Response::HTTP_ACCEPTED);
        }else{
            return response()->json([

                'message' => 'Unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function logout(Request $request){
        $user = $request->user();
        if($user){
            $user->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Successfully logged out'
            ], Response::HTTP_ACCEPTED);
        }else{
            return response()->json([

                'message' => 'User not authorized'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
    public function register(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->email = $request->input('email');

        $user->save();

        return response()->json([
            'message'=> 'se ha registrado un usuario con éxito',
            'data'=> $user
        ], Response::HTTP_ACCEPTED);
    }

}
