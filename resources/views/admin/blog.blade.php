@extends("layouts.admin")

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 py-2">
        <div class="d-flex justify-content-between border-bottom border-primary">
            <h5 style="font-weight: bold" class="py-2 text-dark text-uppercase">Blogs</h5>
            <a href="{{ route('add-blog') }}"> <button class="btn btn-warning p-2">
                    Add blog
                </button></a>
        </div>
        @foreach ($blogs as $blog)
            <div class="post-preview border-bottom">
                <a href="{{ route('edit-blog', $blog) }}" style="text-decoration: none">
                    <h6 class="post-title" style="font-size: 24px">{{ $blog->title }}</h6>
                    <h4 class="post-subtitle" style="font-size: 20px">{{ $blog->subtitle }}</h4>
                </a>
                <p class="post-meta" style="font-size: 16px">
                    by
                    <a href="#!">{{ $blog->user->name }}</a>
                    at {{ $blog->created_at->format('d.m.Y') }}
                </p>
            </div>
        @endforeach
    </main>
@endsection
