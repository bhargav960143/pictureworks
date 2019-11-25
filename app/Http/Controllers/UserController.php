<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUserById($id)
    {
        if (!is_numeric($id))
            return response()->json('Invalid Id', 422);

        $userData = User::find($id);
        if (empty($userData))
            return response()->json('User Not Exist!', 404);

        return view('user', ['user' => $userData]);
    }
}
