<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Checks if there is username and password

        $request->validate([
            'username' => 'required|string|lowercase|max:255|exists:'.User::class,
            'password' => 'required'
        ]);

        //gets data from the user model, where database table is Users
        $user=User::where('username', $request->username)->first();

        //checks if password is okay

        if(!$user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['password' => ['Your password is incorrect']]);
        }
       

        //deletes tokens when the same user logins another time
        PersonalAccessToken::where('tokenable_id', $user->id)->delete();
        $token = $user->createToken($request->username)->plainTextToken;
        
        //processes validation token
        return response()->json(['token' => $token, 'user' => $user]);
    }
}
