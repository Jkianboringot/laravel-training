@extends('layouts.app')

@section('content')


@forelse($posts as $post)
<div class="card mb-3 p-5">
    <h1><b>Post History</b></h1>
<div CLASS="card-body">
<div class="">
    <div class="active" id="activity">
        <div class='post'>
        <div class="user-block">
            <img class="img=cercle img-boedered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
                <a href="#">{{$post->user->name}}</a>
                <form method="POST" action="{{route("post.delete",$post->id)}}">
                    @csrf
                    <button class="float-right btn-tool border-0" type="submit"><i class="fas fa-times"></i></button>
                </form>
            </span>
            <span class="description">Shared Publicly {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
        <p>Name:{{$post->user->name}}</p>
        <hr>
        <p>Title : {{ $post->title}}</p>

        <p>{{$post->category}}</p>
        <p>{{$post->body}}</p>

        </div>
    </div>
</div>
</div>
</div>
<div class="form-group">
    <div class="d-flex">
        <a href="{{route('post.edit',$post->id)}}" class="btn m1-3 btn-primary">Edit</a>
    </div>
</div>
</div>

        @empty
    <h1>No avalable post</h1>\
    @endforelse
@endsection
