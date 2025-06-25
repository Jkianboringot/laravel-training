@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3>Create Post</h3>
        </div>  
        <div class="card-body">
            <form method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="form-group">
                    <label> title</label>
                    <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        <option value="Type 1">only me</option>
                        <option value="Type 2">Public</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="body" class="form-control" cols="30" rows="6" placeholder="Enter"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
