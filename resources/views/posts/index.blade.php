<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
       <h1>Blog Name</h1>
       <p class='create'><a href='/posts/create'>create</a></p>
       <div class='posts'>
           @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p class='body'>This is a sample body.</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
