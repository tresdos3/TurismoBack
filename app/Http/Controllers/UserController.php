<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use App\User;
use JWTAuthException;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }

    public function register(Request $request){
        // $results = DB::select('select * from users where id = 2');
        // // var_dump($results);
        // $json = json_encode($results);
        // echo $json;
        $user = $this->user->create([
          'nombre' => $request->get('nombre'),
          'apmaterno' => $request->get('apmaterno'),
          'appaterno' => $request->get('appaterno'),
          'codigo' => $request->get('codigo'),
          'id_origen' => $request->get('id_origen'),
          'id_categoria_usuario' => $request->get('id_categoria'),
          'fechanacimiento' => $request->get('fechanacimiento'),
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password'))
        ]);
        // echo $user;
        return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    }

     public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}
