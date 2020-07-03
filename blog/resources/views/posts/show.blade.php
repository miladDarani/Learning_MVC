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


        <div class="card mb-4">         
          <div class="card-body">   
            <h1 class="card-title">Comments</h1>     
            <div class="card-text">

            @guest
            <p>Please <a href="/login">Login</a> or <a href="/register">Register</a> to leave a comment</p>
            @endguest
                

                @auth 
                <div class="comment_form">
                  <!-- comment form -->
                     
                      <form action="/comments" class="form" method="post">

                         @csrf
                         <input type="hidden" name="post_id" value="{{$post->id}}">
                         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                         <div class="form-group">
                              <textarea  class="form-control" name="comment" id="comment" cols="30" rows="3"></textarea>
                         </div>


                          <div class="form-group">
                              
                              <button class="btn btn-primary">Submit
                              </button>

                          </div> 
                      </form>
                    
                </div>
                @endauth




              @if(count($comments))
                <div class="comments">
                  <!-- comments -->
                 
                      @foreach($comments as $comment)
                        <div class="card bg-light mb-3">
                          <div class="card-body">
                            <p>Posted by: </p>
                              <p class="meta">Comment By {{$comment->user->name}}</p>
                              <p>{{$comment->comment}}</p>

                          </div>
                        </div>   

                          </div>
                      @endforeach
                  
                </div>
              @endif

            </div> 
          </div>

          <div class="card-footer text-muted">
            
          </div>

        </div>


@stop