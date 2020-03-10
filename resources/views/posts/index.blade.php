@extends('layouts.app')
{{-- came from postscontroller --}}
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>1)
        @foreach($posts as $post)
            <div class="card">
                {{-- we use elequont orm  --}}
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            {{-- For timestamp --}}
            <small>written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else 
    @endif
@endsection