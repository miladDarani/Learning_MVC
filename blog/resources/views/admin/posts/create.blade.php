@extends('layouts.admin')

@section('content')

<div class="my-4 card">
    
    <div class="card-header">
        
        <h1 class="card-title">{{$title}}</h1>

    </div>

    <div class="card-body">
            
        <form action="/admin/posts/create" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title') }}">

                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="abstract">Abstract</label>
                <textarea class="form-control" name="abstract" id="abstract" cols="5" rows="8">{{old('abstract')}} </textarea>
                @error('abstract')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="5" rows="3">{{old('body')}} </textarea>

                @error('body')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="featured_image">Image</label>
                <input type="file" name="featured_image" value="{{old('featured_image')}}">

                
                @error('featured_image')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <select class="form-control" name="category_id" id="category_id">

                    <option value="">Select a category</option>

                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach

                </select>
                @error('category_id')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                
                <label for="status"><strong>Post Status:</strong></label><br>
                <input type="radio" name="status" value="public" checked>
                Public &nbsp;
                <input type="radio" name="status" value="private">
                Private &nbsp;

                @error('status')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>

    <div class="card-footer">
        
        <p>Admin, I'd rather have a bottle in front of me </p>

    </div>
</div>

@stop