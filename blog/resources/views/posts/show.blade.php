@extends('layouts/blog')

@section('content')

<!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$post->featured_image}}" alt="{{$post->title}}">
          <div class="card-body">
            <h1 class="card-title">{{$post->title}}</h1>
            <div class="card-text">

                <p>{{$post->abstract}}</p>
                {!! $post->body !!}


            </div>
          
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Milad Darani</a>
          </div>
        </div>





@stop