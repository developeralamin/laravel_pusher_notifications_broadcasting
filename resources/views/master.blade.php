<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>



    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/blog.css') }}">

    <style>
      
      span.relative.z-0.inline-flex.shadow-sm.rounded-md {
          display: none;
      }
    </style>
  </head>
   <body id='app'>
    
<div class="container">
    @include('admin.header')

</div>

<main class="container">

  <div class="row g-5">
      @yield('content')

  </div>

</main>


<script src="{{ mix('/js/app.js') }}"></script>
 <script>

   Echo.channel('post.created')
    .listen('PostCreated', (e) => {
      console.log(e.post);
     // $.notify(e.post.name + "has been publish now");
        
    });



 </script>

  </body>
</html>