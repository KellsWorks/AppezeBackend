<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /* Get user credentials */

    public function show(Request $request)
    {
        $user = User::find($request->id);

        if($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'This user is not found in the database'], 404);
    }
}
