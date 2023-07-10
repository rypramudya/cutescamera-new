<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Cutescamerable</title>
            <link rel="icon" type="image/x-icon" href="/landingpage/assets/favicon.ico" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Google fonts-->
            <link rel="preconnect" href="https://fonts.gstatic.com" />
            <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="/landingpage/css/styles.css" rel="stylesheet" />
        </head>
        <body id="page-top">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg fixed-top " id="mainNav">
                <div class="container px-5">
                    
                    <a class="navbar-brand fw-bold" href="#page-top" i>
                        <img src="assets/img/cuteslogo.png" width="400" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data/landing-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                            <li class="nav-item"><a class="nav-link me-lg-3" href="katalog">Katalog</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Kontak</a></li>
                        </ul>

                        <a href="login">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal" id="tombollogin">
                                <span class="d-flex align-items-center">
                                    <span class="small" >Login</span>
                                </span>
                            </button>
                        </a>
                    
                        <a href="register">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 ms-2" data-bs-toggle="modal" data-bs-target="#feedbackModal" id="tombolregister">
                                <span class="d-flex align-items-center">
                                    <span class="small" >Register</span>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mashead header-->
            <header class="masthead">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <!-- Mashead text and app badges-->
                            <div class="mb-5 mb-lg-0 text-center text-lg-start">
                                <h1 class="display-1 lh-1 mb-3" id="teksbesar">Sewa Kamera dengan harga bersahabat</h1>
                                <div class="d-flex flex-column flex-lg-row align-items-center">
                                    <a href="katalog">
                                        <button type="button" class="btn btn-primary btn-lg btnsewa" id="buttonsewa">Sewa Sekarang!</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- Masthead device mockup feature-->
                            <div class="masthead-device-mockup">
                                <img src="/landingpage/assets/img/cutescamera1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Quote/testimonial aside-->
            <aside class="text-center">
                <h1>Kategori Barang</h1>
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xl-8">
                            <div class="h2 fs-1 text-white mb-4">Kategori Barang</div>
                        </div>
                    </div>
                    <img src="/landingpage/assets/img/kategori_barang.png" alt="..." />
                </div>
            </aside>
            <!-- App features section-->
            
            <section class="py-5">
                <h1 class="text-center">Disarankan Untukmu</h1>
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
                                        <a class="btn btn-primary rounded-pill  mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal" id="tombollogin">
                                            <span class="d-flex align-items-center">
                                                <span class="small" >Sewa Sekarang</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        @endforeach
                    </div>
                </div>
            </section>

          </div>
       
            <!-- Footer-->
            <footer class="bg-black text-center py-5">
                <div class="container px-5">
                    <div class="text-white-50 small">
                        <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                        <a href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a href="#!">FAQ</a>
                    </div>
                </div>
            </footer>

            
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="/landingpage/js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </body>
    </html>
