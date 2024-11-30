{{-- This should use layouts, but I use it like this again just for simplicity --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts List</title>
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }

        .button {
            background-color: #008CBA;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>Posts List</h1>
        <div class="card">
            <div class="container">
                <h4>Title: <b>{{ $post->title }}</b></h4>
                <h4>Author: <b>{{ $post->user->name }}</b></h4>
                <p>{{ $post->body }}</p>
                <p><a class="button" href="{{ route('posts.index') }}">Back</a></p>
            </div>
        </div>
</body>

</html>
