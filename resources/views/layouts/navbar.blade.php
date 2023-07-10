<header id="header" class="header fixed-top d-flex align-items-center bg-white">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="assets/img/logocutesbaru.png" alt="">
            {{-- <span class="d-none d-lg-block"Cutes Camerab</span> --}}
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle" alt="Profile" class="rounded-circle "></i>
                    <span class="d-none d-md-block ps-2">Hai {{ Auth::user()->nama }}!</span>
                </a><!-- End Profile Iamge Icon -->
            </li>
        </ul>
    </nav><!-- End Icons Navigation -->

</header>
