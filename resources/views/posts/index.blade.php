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
       <p class='create'>[<a href='/posts/create'>create</a>]</p>
       <div class='posts'>
           @foreach ($posts as $post)
           <div class='post'>
               <a href='/posts/{{$post->id}}'><h2 class='title'>{{ $post->title }}</h2></a>
               <p class='body'>{{ $post->body }}</p>
           </div>
           @endforeach
           <div class="paginate">
               {{ $posts->links() }}
           </div>
       </div>
    </body>
</html>
