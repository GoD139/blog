@extends('layouts.main')


@section('content')

    <div class="row col-8 offset-md-2 bg-white content-wrap">

        <div class="content">
            <h1>{{$post->title}}</h1>
            <small>{{ $post->created_at->toFormattedDateString() }}</small>
            <hr>
            <p>{{$post->content}}</p>

        </div>

        <div class="comments col-12">
                <h6 class="border-bottom border-gray pb-2 mb-0">Comments</h6>
                @if($post->comments->count() > 0)
                    @foreach($post->comments as $comment)

                            <div class="media text-muted pt-3">
                              <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163d527bc2d%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163d527bc2d%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.546875%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <span class="d-block text-gray-dark"><strong>@username</strong> - {{ $comment->created_at->diffForHumans() }}</span>
                                {{ $comment->content }}
                              </p>
                            </div>
                    @endforeach
                    @else
                        <div class="media text-muted col-12 pt-3">
                            <h5 class="text-muted col-12 text-center ">There's no comments</h5>
                        </div>
                    @endif

                    <form class="" method="POST" action="/post/{{ $post->id }}/comments">
                        {{ Csrf_field() }}
                        <div class="pt-3 col-12">
                          <div class="input-group">
                            <textarea class="form-control" name="content" id="submit-comment" placeholder="Comment..." required=""></textarea>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>

                          </div>
                        </div>
                      </form>

        </div>

    </div>

@endsection()
