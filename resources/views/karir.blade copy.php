@extends('layout.app')

@section('content')
    <!-- ======= Headline  Section ======= -->
    <section id="headline" class="headline-karir">
        <div class="container-fluid" data-aos="fade-up">
            <div class="content">
                <div class="section-title-headline">
                    <h2>Karir</h2>
                </div>
            </div>

        </div>
    </section><!-- End Section -->

    <!-- ======= Karir Section ======= -->
    <section id="career" class="career section-bg">
        <div class="container" data-aos="fade-up">

            <!-- Title Added Here -->
            <div class="section-title">
                <h2><span class="thin-title">Lowongan</span> Pekerjaan</h2>
                <p class="section-description">
                    Kami menawarkan berbagai peluang yang sesuai dengan keterampilan dan ambisi Kamu. Daftar hari ini dan
                    ambil langkah berikutnya menuju karir Impian. Masa depan Anda dimulai di sini.
                </p>
            </div>

            <!-- Filter Card -->
            <div class="card filter-card mb-4">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">
                        <select class="form-control filter-select">
                            <option value="">Semua</option>
                            <!-- Add options here -->
                        </select>
                        <select class="form-control filter-select">
                            <option value="">Lokasi</option>
                            <!-- Add options here -->
                        </select>
                        <select class="form-control filter-select">
                            <option value="">Jenjang</option>
                            <!-- Add options here -->
                        </select>
                        <button class="btn btn-search">
                            <i class="fas fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </div>

            <!-- Job Cards -->
            <div class="row content">
                <!-- Dummy Job Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail" data-bs-toggle="modal" data-bs-target="#jobDetailModal">
                                    Lihat Detail <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>

                        </center>
                    </div>
                </div>

                <!-- Repeat the card structure for additional dummy cards (6 cards in total) -->
                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                    <div class="job-card">
                        <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                        <h4>Sales Executive</h4>
                        <p>PT Mada Wikri Tunggal</p>
                        <p class="job-category">Sales | Semua</p>
                        <p class="deadline">Batas Lamar: 01 Maret 2025</p>
                        <center>
                            <div class="job-actions mt-3">
                                <button class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#">&laquo;</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">20</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Section -->


    <!-- Modal Detail Lowongan -->
    <div class="modal fade" id="jobDetailModal" tabindex="-1" aria-labelledby="jobDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jobDetailModalLabel">Internship Organization Development - KFHO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Perusahaan</h5>
                            <p><strong>Nama:</strong> PT Kimia Farma Tbk</p>
                            <p><strong>Lokasi:</strong> Kota Adm. Jakarta Pusat</p>
                            <p><strong>Jenis:</strong> Onsite</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Tanggal Penting</h5>
                            <p><strong>Durasi Internship:</strong> 6 Bulan</p>
                            <p><strong>Batas Pendaftaran:</strong> 18 Desember 2024</p>
                            <p><strong>Wawancara:</strong> 20 Desember 2024</p>
                        </div>
                    </div>

                    <hr />
                    <h5>Deskripsi Pekerjaan</h5>
                    <p>
                        Internship pada bidang Organization Development di PT Kimia Farma. Anda akan belajar tentang
                        pengembangan
                        organisasi di perusahaan farmasi yang besar, serta berkesempatan untuk mengembangkan keterampilan
                        manajerial.
                    </p>
                    <h5>Persyaratan</h5>
                    <ul>
                        <li>Mahasiswa/i semester akhir</li>
                        <li>Memahami manajemen SDM</li>
                        <li>Memiliki kemampuan analisa yang baik</li>
                        <li>Terampil dalam mengelola data dan administrasi</li>
                        <li>Penempatan di Jakarta Pusat</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Lamar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endsection
