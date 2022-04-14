@extends("layouts.admin")

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 py-2">
        <div class="d-flex justify-content-between border-bottom border-primary">
            <h5 style="font-weight: bold" class="py-2 text-dark text-uppercase">Blogs</h5>
            <a href="{{ route('add-blog') }}"> <button class="btn btn-warning p-2">
                    Add blog
                </button></a>
        </div>
        <div class="post-preview">
            <a href="post.html">
                <h6 class="post-title" style="font-size: 24px">Failure is not an option</h6>
                <h4 class="post-subtitle" style="font-size: 20px">Many say exploration is part of our destiny, but it’s
                    actually our duty
                    to future generations.</h4>
            </a>
            <p class="post-meta" style="font-size: 16px">
                Posted by
                <a href="#!">Start Bootstrap</a>
                on July 8, 2022
            </p>
        </div>
    </main>
@endsection
