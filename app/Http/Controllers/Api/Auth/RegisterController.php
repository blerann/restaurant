<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|lowercase|max:255|unique:'.User::class,
            'password' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken($request->username);

        return response()->json([
            'token' => $token->plainTextToken,
            'username' => $user
        ]);
    }
}
