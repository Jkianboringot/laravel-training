@extends('layouts.app')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3>Update Post</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('post.update',$post->id)}}">
                @csrf
                <div class="form-group">
                    <label> title</label>
                    <input type="text" class="form-control" name='title' value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        <option value="Type 1" {{$post->category=='Type 1'}}>Type 1</option>
                        <option value="Type 2" {{$post->category=='Type 2'}}>Type 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="body" class="form-control" cols="30" rows="6" placeholder="Enter" value="{{$post->body}}" >{{$post->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
