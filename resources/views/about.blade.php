@extends("layouts.main")

@section('content')
    <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>You should know!</h1>
                        <span class="subheading">We will make sure you know everything!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur
                        voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam
                        ducimus consectetur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                        architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum
                        in officia voluptas voluptatibus, minus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid
                        ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit
                        tempora!</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="border-top">
        <div class="container px-4">
            <div class="row justify-content-center">

                <div class="col-md-6">
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
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Newsy 2022</div>
                </div>
            </div>
        </div>
    </footer>
@endsection