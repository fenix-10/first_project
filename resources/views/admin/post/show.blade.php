@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$post->id}}. {{$post->title}} </div>
        <div>{{$post->content}} </div>
    </div>

    <div>
        <a href="{{route("admin.post.edit", $post->id)}}" class="btn btn-primary m-3">Edit</a>
    </div>
    <div>
        <form action="{{route("admin.post.destroy", $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger m-3">Delete</button>
        </form>
    </div>
@endsection
