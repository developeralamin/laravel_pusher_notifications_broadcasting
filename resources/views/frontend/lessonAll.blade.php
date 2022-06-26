@extends('master')

@section('content')
    
  <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

        <h1 class="mt-5 text-success">All Lessons Here</h1>

    @foreach($lessons as $lesson)
      <div class="blog-post mt-5">
        <h2 class="blog-post-title">{{ $lesson->name }}</h2>
        <h5 class="blog-post-subtitle">{{ $lesson->description }}</h5>
        <p class="blog-post-meta">Date: {{ ($lesson->created_at)->format('Y-m-D') }}</p>
      </div><!-- /.blog-post -->
     
    @endforeach

<br>
   {{-- {{ $posts->links() }}      --}}
<br>
<br>
  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar mt-5">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic">About</h4>
    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>



  <div class="p-3">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

  

    </main><!-- /.container -->






@endsection    