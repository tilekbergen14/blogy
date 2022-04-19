<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>

<body style="height: 100vh">
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-2 shadow" style="background-color: #007189">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Admin panel</a>
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    </header>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light h-100 sidebar collapse position-fixed">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" aria-current="page"
                                href="{{ route('admin-blog') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ms-2">Blogs</span>
                            </a>
                        </li>
                    </ul>
            </nav>

            @yield("content")
        </div>
    </div>
    <script src="/bootstrap/js/bootstrap.min.js">
    </script>
    @yield("scripts")

</body>

</html>
