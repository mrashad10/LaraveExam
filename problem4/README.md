# Problem 4: Laravel API Endpoint

Task: Create an API endpoint in Laravel that: Accepts a POST request to
/api/store-user. Stores a user's name and email in the database. Returns a
JSON response with the status and user ID. Bonus: Add validation to ensure the
email is unique.

# Solution:

Built the requested endpoint that will receive and save the user information,
I couldn't apply the validation because I'm facing a problem but I ran out of
time so I have to post the solutions.

# Usage

To use the example you need to to do this steps

-   Install Laravel requirements `composer install`
-   Create and migrate the database `php artisan migrate`
-   Seed the database `php artisan db:seed`
-   Start the server `php artisan serve`, this will start server on default
    port `8000`
-   Run the following command to post the a user.

```sh
curl "https://localhost:8000/api/user" -d '{"username": "test1", "email": "test@test.com"}'
```
