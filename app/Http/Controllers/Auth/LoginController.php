<?php

namespace App\Http\Controllers\Auth;

use App\Models\PersonalAccessTokens;
use App\Models\User;
use App\Http\HttpCodes;
use Illuminate\Http\Request;
use App\Http\ResponseHandler;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginCreateUserRequest;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $auth = Auth::attempt([
            'email'    => $request->email,
            'password' => $request->password
        ]);

        if ($auth) {
            $id    = $request->user()->id;
            $email = $request->user()->email;

            PersonalAccessTokens::where('tokenable_id', $id)->delete();

            $token = User::find($id)->createToken($email)->plainTextToken;

            return ResponseHandler::json(
                message: [
                    'token' => $token
                ],
                code: HttpCodes::$ok
            );
        }

        return ResponseHandler::json('Usuário ou senha incorretos!', HttpCodes::$unprocessableContent);
    }

    public function register(LoginCreateUserRequest $request, User $user)
    {
        $userExists = $user->where('email', $request->email)->select(['name'])->first();

        if ($userExists) return ResponseHandler::json('Usuário já cadastrado.', HttpCodes::$unprocessableContent);

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;

        $user->save();

        if ($user) return ResponseHandler::json('Usuário criado!', HttpCodes::$created);

        return ResponseHandler::json('', 500);
    }
}
