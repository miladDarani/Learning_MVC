@extends('layouts.admin')

@section('content')

<div class="my-4 card">
    
    <div class="card-header">
        
        <h1 class="card-title">{{$title}}</h1>

    </div>

    <div class="card-body">
            
        <form action="/admin/posts" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name='id' value="{{ old('id', $post->id )}}">
            <div class="form-group">
            @method('PUT')
                
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title', $post->title) }}">

                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="abstract">Abstract</label>
                <textarea class="form-control" name="abstract" id="abstract" cols="5" rows="8">{{old('abstract', $post->abstract)}} </textarea>
                @error('abstract')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="5" rows="3">{{old('body', $post->body)}} </textarea>

                @error('body')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------------------------------------------------- -->
            <div class="form-group">
                <label for="featured_image">Image</label>
                @if(!empty($post->featured_image))
                <img src="/images/{{ $post->featured_image }}" style="width: 150px; height: auto" />
                @endif
                <input type="file" name="featured_image" value="{{old('featured_image', $post->featured_image)}}">

                
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
                    <option 

                        @if($cat->id == old('category_id', $post->category_id))
                            selected
                        @endif

                        value="{{$cat->id}}">{{$cat->name}}
                    </option>
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
                <input  
                    @if(old('status', $post->status) == 'public')
                        checked
                    @endif

                    type="radio" name="status" value="public" checked>
                Public &nbsp;
                <input 
                    @if(old('status', $post->status) == 'private')
                        checked
                    @endif
                    type="radio" name="status" value="private">
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