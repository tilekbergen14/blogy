@extends("layouts.main")

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <form action="{{ route('blogs') }}">
                            <div class="input-group mb-3">
                                <input value="{{ $search ?? old('search') }}" type="text" name="search"
                                    class="form-control" placeholder="Search" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                        <span class="subheading">Search everything from here!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="px-4">
        <div class="row justify-content-center">
            <div class="col-md-8 m-auto" style="height: max-content">
                <div id="carouselExampleIndicators" class="carousel slide col-md-6 w-100 my-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner w-100">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                                <img src="{{ $popBlogs[$i]->image ?? '' }}" class=" card-img-top"
                                    alt="{{ $popBlogs[$i]->title ?? '' }}">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                @foreach ($popBlogs as $blog)
                    <div class="post-preview">
                        <a href="{{ route('blog', $blog) }}">
                            <h2 style="font-size: 16px" class="post-title">{{ $blog->title }}</h2>
                            <div class="post-subtitle">{!! $blog->subtitle !!}</div>
                        </a>
                        <p class="post-meta">
                            by
                            <a href="#!">{{ $blog->user->name }}</a>
                            on {{ $blog->created_at->format('d.m.Y') }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="m-0" />
                @endforeach
                <div class="title my-4">Latest blogs</div>
                <div class="blog-grid">
                    @foreach ($latestBlogs as $blog)
                        <div class="card" style="width: 100%">
                            <a href="{{ route('blog', $blog) }}">
                                <img src="{{ $blog->image }}" class="card-img-top" alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $blog->subtitle }}</h5>
                                    <span class="d-inline-block text-truncate card-text" style="max-width: 150px;">
                                        {{ $blog->subtitle }}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Pager-->
                <div class="d-flex justify-content-end my-4"><a class="btn btn-primary text-uppercase"
                        href="{{ route('blogs') }}">Older
                        Posts
                        →</a></div>

            </div>

        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
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
                                <a href="https://wa.me/+77054110200">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Newsy 2022</div>
                    </div>
                </div>
            </div>
        </footer>
    @endsection
