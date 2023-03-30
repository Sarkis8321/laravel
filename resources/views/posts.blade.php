@extends('layouts/main')

@section('title', 'Посты')


@section('content')
    <h2>Posts</h2>

    @foreach ($posts as $post)
        <h3>{{ $post->name }}</h3>
        <p>{{ $post->description }}</p>
    @endforeach

@endsection