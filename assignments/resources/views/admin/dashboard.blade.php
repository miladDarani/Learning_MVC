@extends('layouts.app')

@section('content')
    <style>
        body{
            color:white;
        };  

    </style>
    <div class="my-4 pl-5">
        <h2>{{$title}}</h2>
        <a href="/admin/games" class="btn btn-primary">GO TO ADMIN INDEX</a>
    </div>
@stop