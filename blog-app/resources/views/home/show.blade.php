@extends('Layout.master')

@section('content')

<div class="container" style="width: 90%; max-width: 90%; margin: auto; padding: 0 15px;">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7" style="padding-top: 20px;">
            <!-- Post Title and Content -->
            <div class="mb-4">
                <h1 class="font-weight-bold">{{ $post->title }}</h1>
                <p class="text-muted">Posted on {{ $post->created_at->format('F j, Y') }}</p>
                <p>{{ $post->content }}</p>
                <br>
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to All Posts</a>
            </div>
      <!-- Success and Error Messages -->
      @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
      @endif
            <!-- Comments Section -->
            <div class="card mb-4 shadow-sm border-light">
                <div class="card-body">
                    <h4>Comments:</h4>
                    @forelse($post->comments as $comment)
                    <div class="d-flex mb-4">
                        <img src="{{ asset('images/user-img.png') }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="User Image">
                        <div class="ms-3 mx-3">
                            <p class="mb-1"><strong>{{ $comment->user->name }}</strong></p>
                            <p>{{ $comment->comment }}</p>

                            <!-- Edit and Delete Buttons -->
                            @auth
                                @if(auth()->user()->id == $comment->user_id)
                                    <div class="mt-2">
                                        <!-- Edit Button -->
                                        <a href="{{ route('comments.update', $comment->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-info">No comments yet.</div>
                    @endforelse
                </div>
            </div>

            @auth
            <!-- Add Comment Section -->
            <div class="card mt-4 shadow-sm border-light">
                <div class="card-body">
                    <h4>Add a Comment:</h4>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment" class="form-control" rows="3" placeholder="Enter your comment here..." required></textarea>
                        </div>
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>

@endsection
