@extends('layouts.app')



@section('content')

<style>
    body{
        background: #0c1b2b !important;
    }
    .card-header{
        background: #0c1b2b !important;
        color:white;
        border:none;
    }
    .card{
        border:none;
    }
    .card-body{
        background: #0c1b2b !important;
    }
    nav {
        border-bottom: 1px solid white;
    }
</style>
 <div class="card my-4">

     <div class="card-header">
         <h1 class="card-title">{{ $title }}</h1>
          <a href="/admin/games/create" class="btn btn-warning">Create Record</a>
     </div>

       
     <div class="card-body">

       <table class="table table-striped table-dark">
           
            <tr>
                
                <th>Game ID</th>
                <th>Title</th>
                <th>Published at</th>
                <th>Rating</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            @foreach($games as $game)
            <tr>
                <td>{{$game->id}}</td>
                <td>{{$game->title}}</td>
                <td>{{$game->created_at}}</td>
                <td>{{$game->rating}}</td>

                <td>
                    <a href="games/{{$game->id}}/edit" class="btn btn-primary">Edit</a>
                </td>
                
                <td>
                    <form action="/admin/games" method="post" class="delete"
                        onSubmit="return confirm('Do you really want to delete?')">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$game->id}}"/>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

       </table>
            
        </ul>
         
     </div>

     <div class="row justify-content-center"></div>
            {{ $games->links()}}
     <div class="card-footer">
         
        <p>Admin, with great power comes nothing</p>

     </div>

 </div>


@stop