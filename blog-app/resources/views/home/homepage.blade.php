@extends('Layout.master')

@section('content')

<!-- Posts section start -->
<div class="container" style="width: 90%; max-width: 90%; margin: auto; padding: 0 15px;">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7" style="padding-top: 20px;">
            <!-- Loop through all posts -->
            @foreach($posts as $post)
            <div class="card home-card mb-4 shadow-sm">
                <div class="card-body">
                    <a href="{{ route('posts.show', $post->id) }}" style="text-decoration: none;">
                        <h2 class="card-title" style="font-weight: bold;">{{ $post->title }}</h2>
                        <h3 class="card-subtitle mb-2 text-muted">
                            {{ Str::limit($post->content, 140) }}
                            @if (strlen($post->content) > 140)
                                <a href="{{ route('posts.show', $post->id) }}" style="color: blue;">read more</a>
                            @endif
                        </h3>
                    </a>
                    <p class="card-text" style="font-weight: bold;">
                        Posted by <a href="#!">{{ $post->user->name }}</a> on {{ $post->created_at->format('F j, Y') }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
