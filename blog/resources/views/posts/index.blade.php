@extends('layouts/blog')

@section('content')



    <h1 class="my-4">Blog
          <small>Recent Posts</small>
    </h1>



    @foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$post->featured_image}}" alt="{{$post->title}}">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->abstract}}</p>
            <a href="/posts/{{$post->id}}/show" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Milad Darani</a>. Category: <a href="/cat/{{$post->category->name}}">{{$post->category->name}}</a>
          </div>
        </div>
    @endforeach



        <!-- Pagination -->
        <div class="my-4 row justify-content-center">
          
          {{ $posts->links() }}

        </div>


   
@stop


@section('side')

    <h3>This is the sidebar</h3>

@stop