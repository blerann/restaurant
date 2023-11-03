<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|exists:'.User::class,
            'password' => ['required'],
        ]);

        // get data for user
        $user = User::where('email', $request->email)->first();

        // check password

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // delete old tokens if they exists
        PersonalAccessToken::where('tokenable_id', $user->id)->delete();

        $token = $user->createToken($request->email)->plainTextToken;


        // process validation with token

        return response()->json(['token' => $token, 'user' => $user]);


    }
}
