<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends BaseController
{
    // Removed the AuthorizesRequests to simplify the solution
    use ValidatesRequests;

    /**
     * Store user data
     */
    public function store()
    {
        $body = request()->json()->all();
        $user = User::create([
            'username' => $body['username'],
            'email' => $body['email'],
        ]);

        return $user;
    }
}
