<!DOCTYPE html>
<html lang="en">

{{-- Ini untuk header --}}
@include('layouts.header')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')
    <!-- End Sidebar-->
    @include('sweetalert::alert')
    <main id="main" class="main">
        <section>
        <!-- End Page Title -->
        @yield('content')
        </div><!-- End Right side columns -->
        </div>
        </section>
    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.script')

</body>

</html>
