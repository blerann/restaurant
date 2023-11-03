<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required'],
            'surname'=> ['required'],
            'username'=>['required'],
            'date_of_birth'=> ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'surname'=>$request->surname,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'date_of_birth'=> $request->date_of_birth
        ]);
        
        $token = $user->createToken($request->email);

        return response()->json([
            'token' => $token->plainTextToken,
            'user' => $user
        ]);
    }
}
