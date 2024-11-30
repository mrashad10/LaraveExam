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
     * Show the users has posts, with each post title
     */
    public function index()
    {
        $users = User::query()
            ->has('posts')
            ->with('posts')
            ->select('users.id')
            ->get();

        $result = [];
        foreach ($users as $user) {
            $posts = [];
            foreach ($user->posts as $post) {
                $posts[] = $post->title;
            }

            $result[] = [
                'id' => $user->id,
                'posts' => $posts,
            ];
        }

        return $result;
    }
}
