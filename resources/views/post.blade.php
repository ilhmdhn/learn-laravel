@extends('layouts.main')

@section('container')

    <h1 class="mb-5"> {{$post->title}} </h1>
    {{-- {{$post->body}} --}}

    <p>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    <br>
    <a href="/posts">Back to Posts</a>
@endsection
