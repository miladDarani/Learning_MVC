@extends('layouts.admin')



@section('content')


 <div class="card my-4">

     <div class="card-header">
         <h1 class="card-title">{{ $title }}</h1>
     </div>
    <a href="/admin/posts/create" class="btn btn-warning">CREATE POST</a>
     <div class="card-body">

       <table class="table table-striped">
           
            <tr>
                
                <th>Post ID</th>
                <th>Title</th>
                <th>Published at</th>
                <th>Actions</th>
            </tr>
            
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach

       </table>
            
        </ul>
         
     </div>

     <div class="row justify-content-center"></div>
            {{ $posts->links()}}
     <div class="card-footer">
         
        <p>Admin, with great power comes nothing</p>

     </div>

 </div>


@stop