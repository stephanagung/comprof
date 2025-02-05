<!-- resources/views/partial/header.blade.php -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><img src="assets/img/logo-putih.png" alt=""></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}">Beranda</a></li>
                <li><a class="nav-link scrollto {{ Request::is('tentang-kami') ? 'active' : '' }}"
                        href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                <li><a class="nav-link scrollto {{ Request::is('produk') ? 'active' : '' }}"
                        href="{{ url('/produk') }}">Produk</a></li>
                <li><a class="nav-link scrollto {{ Request::is('fasilitas') ? 'active' : '' }}"
                        href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                <li><a class="nav-link scrollto {{ Request::is('media') ? 'active' : '' }}"
                        href="{{ url('/media') }}">Media</a></li>
                <li><a class="nav-link scrollto {{ Request::is('karir') ? 'active' : '' }}"
                        href="{{ url('/karir') }}">Karir</a></li>
                <li><a class="nav-link scrollto {{ Request::is('kontak') ? 'active' : '' }}"
                        href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
