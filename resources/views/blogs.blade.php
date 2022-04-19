@extends("layouts.main")

@section('content')
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <form action="{{ route('blogs') }}">
                            <div class="input-group mb-3">
                                <input value="{{ $search ?? old('search') }}" type="text" name="search"
                                    class="form-control" placeholder="Search" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="blog-grid">
                        @foreach ($blogs as $blog)
                            <div class="card" style="width: 100%">
                                <img src="{{ $blog->image }}" class="card-img-top" alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $blog->subtitle }}</h5>
                                    <span class="d-inline-block text-truncate card-text" style="max-width: 150px;">
                                        {{ $blog->subtitle }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                </div>
            </div>
        </div>
    </footer>
@endsection
