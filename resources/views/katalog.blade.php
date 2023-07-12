<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/shoppage/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/shoppage/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg static-top " id="mainNav">
                <div class="container px-5">

                    <a class="navbar-brand fw-bold" href="/" i>
                        <img src="assets/img/cuteslogo.png" width="400" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                            <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Katalog</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Kontak</a></li>
                        </ul>
                        @if(Auth::check())
                        <a href="actionlogout">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center">
                                    <span class="small" >Logout</span>
                                </span>
                            </button>
                        </a>
                        @else
                        <a href="login">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center">
                                    <span class="small" >Login</span>
                                </span>
                            </button>
                        </a>
                        <a href="register">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 ms-2" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center">
                                    <span class="small" >Register</span>
                                </span>
                            </button>
                        </a>
                        @endif
                    </div>
                </div>
            </nav>
        <!-- Header-->
        <header class="bg-light py-5" id="promo">
        <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6" >
                            <div class="mb-5 mb-lg-0 text-center text-lg-start">
                                <h1 class="display-1 lh-1 mb-3" id="teksbesar">Cashback 30%</h1>
                                <h3>setiap penyewaan hari senin, selasa dan rabu</h3>
                                <div class="d-flex flex-column flex-lg-row align-items-center">
                                    <a href="katalog">

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="masthead-device-mockup">
                                <img src="/landingpage/assets/img/cutescamera1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <h1 class="text-center"> Daftar Produk </h1>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($data as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img style="width:205px;height:205px;margin-left:auto;margin-right:auto; class="card-img-top" src="{{ url('image_kamera').'/'.$item->image_kamera }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $item->nama_kamera }}</h5>
                                    <!-- Product price-->
                                    Rp.{{ $item->harga_sewa }}/jam
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class= "btn btn-primary btn-sm" href="{{ route('kamera.show', [$item->id_kamera], '/show') }}">Sewa Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>      
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/shoppage/js/scripts.js"></script>
    </body>
</html>
