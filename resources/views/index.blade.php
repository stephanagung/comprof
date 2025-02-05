@extends('layout.app')

@section('content')
    <!-- ======= Carousel ======= -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
        data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/c1.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/c2.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/c3.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
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
    <!-- End Carousel --> 

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about ">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h5 class="mb-3">SELAMAT DATANG DI</h5>
                <h2>PT MADA WIKRI TUNGGAL</h2>
            </div>

            <div class="row content">
                <div class="col-lg-5" style="text-align: center;">
                    <div class="image-container">
                        <img src="assets/img/bg-ceo.jpeg" alt="Krisna Bharata">
                        <div class="image-overlay">
                            <h4 class="mb-1">Krisna Bharata</h4>
                            <h6>Direktur PT Mada Wikri Tunggal</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <p>
                        <span class="title-pt">PT Mada Wikri Tunggal</span> merupakan perusahaan yang bergerak di bidang
                        pembuatan
                        mold dan dies, komponen logam dan komponen plastik di Indonesia. Didirikan sejak tahun 1984 dengan
                        core
                        value perusahaan yaitu <span class="title-pt">LEVEL UP</span> (Leading, Energik, Visioner, Efisien,
                        Loyal,
                        Unggul, Profesional) untuk mewujudkan perusahaan komponen otomotif terbaik dalam skala nasional dan
                        internasional.
                    </p>
                    <p>
                        <span class="title-pt">PT Mada Wikri Tunggal</span> berkomitmen untuk menyediakan solusi inovatif
                        yang mendukung produktivitas dan kualitas tinggi dalam setiap produk yang kami hasilkan.
                        Kami siap menjadi mitra strategis Anda dalam menciptakan komponen berkualitas unggul untuk memenuhi
                        tuntutan kebutuhan pasar yang dinamis.
                    </p>
                    <a href="{{ url('/tentang-kami') }}" class="btn-learn-more">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Fasilitas Section ======= -->
    <section id="fasilitas" class="fasilitas section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <div class="section-title">
                            <h2>Fasilitas Produksi</h2>
                            <p class="mb-3">
                                Berikut beberapa fasilitas produksi <br>yang digunakan untuk membuat produk kami
                            </p>
                            <a href="{{ url('/fasilitas') }}" class="btn-learn-more">Lihat Selengkapnya</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/fasilitas.png" alt="" srcset="">
                </div>
            </div>

        </div>
    </section><!-- End Section -->

    <!-- ======= Products Section ======= -->
    <section id="products" class="products">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <!-- Carousel -->
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/produk/interior-plastic.png" class="d-block w-100"
                                    alt="Interior Plastic" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/headlamp-plastic.png" class="d-block w-100"
                                    alt="Headlamp Plastic" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/headlining-plastic.png" class="d-block w-100"
                                    alt="Headlining Plastic" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/headlining-metal.png" class="d-block w-100"
                                    alt="Headlining Metal" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/engine-metal.png" class="d-block w-100" alt="Engine Metal"
                                    data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/motorcycle-plastic.png" class="d-block w-100"
                                    alt="Motorcycle Plastic" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk/motorcycle-metal.png" class="d-block w-100"
                                    alt="Motorcycle Plastic" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="openModal(this.src)">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- End Carousel -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <div class="section-title">
                        <h2>Produk Kami</h2>
                        <p class="mb-3">
                            Berikut beberapa produk yang kami hasilkan
                        </p>
                        <a href="{{ url('/produk') }}" class="btn-learn-more">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Section -->

    <!-- Modal for Image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Gambar Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Gambar Produk" />
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Customer Section ======= -->
    <section id="customer" class="customer section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pelanggan Kami</h2>
                <p>Beberapa perusahaan yang telah bekerja sama dengan kami</p>
            </div>

            <div class="container">
                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/ahm.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/astot.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/hpp.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/aji.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/inoac.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/chemco.png" class="img-fluid" alt="">
                    </div>

                </div>
                <div class="row" style="margin-top: -40px;" data-aos="zoom-in">

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/sanden.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/ichikoh.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/bsindo.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/cmw.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Section -->

    <!-- ======= Vidcom Section ======= -->
        <section id="vidcom" class="vidcom">
          <div class="container" data-aos="zoom-in">
            <div class="section-title">
              <h2>Video Galeri MWT</h2>
            </div>
            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
               
                <div class="carousel-item active">
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/J2OOxYszPcA" title="YouTube video 1" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/e9x2H8AmoCc?si=WgsadZBkmBI56IDV" title="YouTube video 4"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="carousel-item">
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/v2W1PDpWjt4" title="YouTube video 3" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/fuGTvhA12HM" title="YouTube video 4" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               
              <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section> 
      <!-- End Section -->

    <!-- ======= Media Section ======= -->
        <section id="services" class="berita">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Media</h2>
              <p>Informasi terkini untuk Anda tentang kegiatan perusahaan</p>
            </div>

            <div class="row content justify-content-center">

              <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                  data-instgrm-version="14"
                  style="background:#FFF; border:0; border-radius:10px; box-shadow:0 0 15px rgba(0, 0, 0, 0.1); padding:0; width: 100%; transition: all 0.3s ease;">
                  <div style="padding:1px;">
                    <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                      style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                      target="_blank">
                      <div style=" display: flex; flex-direction: row; align-items: center;">
                        <div
                          style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; margin-right: 14px; width: 40px;">
                        </div>
                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 7px; margin-bottom: 6px; width: 100px;">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 7px; width: 60px;">
                          </div>
                        </div>
                      </div>
                      <div style="padding: 19% 0;"></div>
                      <div style="display:block; height:30px; margin:0 auto 12px; width:50px;">
                        <svg width="50px" height="30px" viewBox="0 0 60 60" version="1.1"
                          xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                              <g>
                                <path
                                  d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                </path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div style="padding-top: 8px;">
                        <div
                          style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                          View this post on Instagram
                        </div>
                      </div>
                      <div style="padding: 6% 0;"></div>
                      <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                        <div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 6px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                          </div>
                          <div
                            style="background-color: #F4F4F4; height: 6px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                          </div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 6px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                          </div>
                        </div>
                        <div style="margin-left: 8px;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 10px; width: 20px;">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                          </div>
                        </div>
                        <div style="margin-left: auto;">
                          <div
                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; flex-grow: 0; height: 6px; width: 16px; transform: translateY(-4px);">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                          </div>
                        </div>
                      </div>
                      <div
                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 7px; margin-bottom: 6px; width: 224px;">
                        </div>
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 7px; width: 144px;">
                        </div>
                      </div>
                    </a>
                    <p
                      style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                      <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                        style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                        target="_blank">A post shared by PT MADA WIKRI TUNGGAL (@mwtpart.info)</a>
                    </p>
                  </div>
                </blockquote>
                <script async
                    onerror="var a=document.createElement('script');a.src='https://iframely.net/files/instagram_embed.js';document.body.appendChild(a);"
                    src="https://www.instagram.com/embed.js"></script>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                  data-instgrm-version="14"
                  style="background:#FFF; border:0; border-radius:10px; box-shadow:0 0 15px rgba(0, 0, 0, 0.1); padding:0; width: 100%; transition: all 0.3s ease;">
                  <div style="padding:1px;">
                    <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                      style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                      target="_blank">
                      <div style=" display: flex; flex-direction: row; align-items: center;">
                        <div
                          style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                        </div>
                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                          </div>
                        </div>
                      </div>
                      <div style="padding: 9% 0;"></div>
                      <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                          xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                              <g>
                                <path
                                  d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                </path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div style="padding-top: 8px;">
                        <div
                          style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                          View this post on Instagram
                        </div>
                      </div>
                      <div style="padding: 6% 0;"></div>
                      <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                        <div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                          </div>
                          <div
                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                          </div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                          </div>
                        </div>
                        <div style="margin-left: 8px;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                          </div>
                        </div>
                        <div style="margin-left: auto;">
                          <div
                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                          </div>
                        </div>
                      </div>
                      <div
                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                        </div>
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                        </div>
                      </div>
                    </a>
                    <p
                      style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                      <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                        style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                        target="_blank">A post shared by PT MADA WIKRI TUNGGAL (@mwtpart.info)</a>
                    </p>
                  </div>
                </blockquote>
                <script async
                    onerror="var a=document.createElement('script');a.src='https://iframely.net/files/instagram_embed.js';document.body.appendChild(a);"
                    src="https://www.instagram.com/embed.js"></script>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                  data-instgrm-version="14"
                  style="background:#FFF; border:0; border-radius:10px; box-shadow:0 0 15px rgba(0, 0, 0, 0.1); padding:0; width: 100%; transition: all 0.3s ease;">
                  <div style="padding:1px;">
                    <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                      style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                      target="_blank">
                      <div style=" display: flex; flex-direction: row; align-items: center;">
                        <div
                          style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                        </div>
                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                          </div>
                        </div>
                      </div>
                      <div style="padding: 19% 0;"></div>
                      <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                          xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                              <g>
                                <path
                                  d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                </path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div style="padding-top: 8px;">
                        <div
                          style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                          View this post on Instagram
                        </div>
                      </div>
                      <div style="padding: 12.5% 0;"></div>
                      <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                        <div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                          </div>
                          <div
                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                          </div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                          </div>
                        </div>
                        <div style="margin-left: 8px;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                          </div>
                        </div>
                        <div style="margin-left: auto;">
                          <div
                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                          </div>
                        </div>
                      </div>
                      <div
                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                        </div>
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                        </div>
                      </div>
                    </a>
                    <p
                      style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                      <a href="https://www.instagram.com/p/DAFvaSEPchQ/?utm_source=ig_embed&utm_campaign=loading"
                        style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                        target="_blank">A post shared by PT MADA WIKRI TUNGGAL (@mwtpart.info)</a>
                    </p>
                  </div>
                </blockquote>
                <script async
                    onerror="var a=document.createElement('script');a.src='https://iframely.net/files/instagram_embed.js';document.body.appendChild(a);"
                    src="https://www.instagram.com/embed.js"></script>
              </div>
            </div>

            <div class="section-button-berita">
              <a href="{{ url('/media') }}" class="btn-learn-more">Lihat Selengkapnya</a>
            </div>
          </div>
        </section> 
      <!-- End Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3>Join <strong>Our Team</strong> Now!</h3>
                    <p>LEVEL UP karirmu bersama PT Mada Wikri Tunggal dan jadilah bagian dari tim yang berkomitmen serta
                        berkontribusi bagi perusahaan! </p>
                </div>
                <div class="col-lg-4 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{ url('/karir') }}">Our Career</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->
@endsection
