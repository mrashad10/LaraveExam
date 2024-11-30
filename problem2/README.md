# Problem 2: Eloquent ORM in Laravel

Task: Using Laravel's Eloquent ORM, write a method in a UserController that:
Retrieves all users with at least one associated post. Displays the username
and the title of their posts. Returns the result in JSON format. Assumptions:
You have User and Post models with a One-to-Many relationship.

# Solution:

The simple answer is the next chunk of code in API routes, it will return JSON
response by default

```php
{
    $users = User::query()
        ->has('posts')
        ->with('posts')
        ->select('users.id')
        ->orderby('id')
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
```

# Usage

To use the example you need to to do this steps

-   Install Laravel requirements `composer install`
-   Create and migrate the database `php artisan migrate`
-   Seed the database `php artisan db:seed`
-   Start the server `php artisan serve`, this will start server on default
    port `8000`
-   Run the following command to retrieve the list of users, the result should
    never returns user with ID 1, as he has no posts.

```sh
curl "http://localhost:8000/api/user"
```
