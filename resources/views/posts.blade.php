@extends('layouts/main')

@section('title', 'Посты')


@section('content')
    <h2>Posts</h2>
    <div class="container-fluid text-center">
        <div class="row">
        
    @foreach ($posts as $post)
    <div class="col-lg-6">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
          </div>
        </div>
    </div>
    @endforeach

        </div>
    </div>
@endsection