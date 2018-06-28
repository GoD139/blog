@extends('layouts.main')


@section('content')

<div class="row mb-2">

    @foreach($posts as $post)

    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">Tag</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="post/{{ $post->slug }}">{{ $post->title }}</a>
          </h3>
          <div class="mb-1 text-muted">{{ $post->created_at->toFormattedDateString() }}</div>
          <p class="card-text mb-auto">{{ str_limit($post->content, 250) }}</p>
          <a href="post/{{ $post->slug }}">Continue reading</a>
        </div>
      </div>
    </div>

    @endforeach

    <!--<div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Post title</a>
          </h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continue reading</a>
        </div>
      </div>
  </div>-->

  </div>

@endsection()
