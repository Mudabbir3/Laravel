@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User ID</th>
            <th>Category ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>
              <td><img height="50" src="{{$post->photo ? $post->photo->file : "/images/placeholder.jpg"}}" alt="user image"></td>
              <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
              <td>{{$post->category ? $post->category->name : 'not found'}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>


          </tr>
          @endforeach
        @endif
        </tbody>
    </table>

@stop

@section('footer')

@stop