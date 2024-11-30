<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
    // Removed the AuthorizesRequests to simplify the solution
    use ValidatesRequests;

    /**
     * Show the users has posts, with each post title
     */
    public function index(string $id): View
    {
        User::factory()->count(10)->create();
    }
}
