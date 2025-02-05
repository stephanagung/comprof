@extends('layout.app')

@php
    $departemenMapping = [
        'Marketing' => 'Marketing',
        'Engineering' => 'Engineering',
        'Human_Resource' => 'Human Resource',
        'Production' => 'Production',
        'General_Affair' => 'General Affair',
        'Moldshop' => 'Moldshop',
        'Diesshop' => 'Diesshop',
        'Purchasing' => 'Purchasing',
        'Repair_Maintanance' => 'Repair Maintanance',
        'Quality_Control' => 'Quality Control',
        'Information_Technology' => 'Information Technology',
        'Finance' => 'Finance',
        'Health_Safety_Environment' => 'Health Safety Environment',
        'Quality_Management_System' => 'Quality Management System',
        'Production_Planning_Inventory_Control' => 'Production Planning Inventory Control',
    ];
@endphp

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
                <form method="GET" action="{{ route('karir') }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Filter Departemen -->
                        <select name="departemen" class="form-control filter-select">
                            <option value="all" {{ request('departemen') == 'all' ? 'selected' : '' }}>Semua
                                Departemen</option>
                            @foreach ($departemenMapping as $key => $value)
                                <option value="{{ $key }}" {{ request('departemen') == $key ? 'selected' : '' }}>{{ $value }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Filter Lokasi Penempatan -->
                        <select name="lokasi_penempatan" class="form-control filter-select">
                            <option value="all" {{ request('lokasi_penempatan') == 'all' ? 'selected' : '' }}>Semua
                                Lokasi</option>
                            <option value="Cikarang" {{ request('lokasi_penempatan') == 'Cikarang' ? 'selected' : '' }}>
                                Cikarang</option>
                            <option value="Bandung" {{ request('lokasi_penempatan') == 'Bandung' ? 'selected' : '' }}>
                                Bandung</option>
                        </select>

                        <!-- Filter Jenis Pekerjaan -->
                        <select name="jenis_pekerjaan" class="form-control filter-select">
                            <option value="all" {{ request('jenis_pekerjaan') == 'all' ? 'selected' : '' }}>Semua
                                Jenis Pekerjaan</option>
                            <option value="Fulltime" {{ request('jenis_pekerjaan') == 'Fulltime' ? 'selected' : '' }}>
                                Fulltime</option>
                            <option value="Internship" {{ request('jenis_pekerjaan') == 'Internship' ? 'selected' : '' }}>
                                Internship</option>
                        </select>

                        <!-- Filter Jenjang Pendidikan -->
                        <select name="jenjang_pendidikan" class="form-control filter-select">
                            <option value="all" {{ request('jenjang_pendidikan') == 'all' ? 'selected' : '' }}>Semua
                                Jenjang Pendidikan</option>
                            <option value="SMA/SMK" {{ request('jenjang_pendidikan') == 'SMA/SMK' ? 'selected' : '' }}>
                                SMA/SMK</option>
                            <option value="S1/Sederajat" {{ request('jenjang_pendidikan') == 'S1/Sederajat' ? 'selected' : '' }}>S1/Sederajat
                            </option>
                        </select>

                        <!-- Tombol Cari -->
                        <button type="submit" class="btn btn-search"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>



        <!-- Job Cards -->
        <div class="row content">
            @if ($loker->isEmpty())
                <div class="col-12 text-center">
                    <h5 class="text-muted mt-5 mb-5">Lowongan pekerjaan tidak tersedia</h5>
                </div>
            @else
                @foreach ($loker as $job)
                    <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                        <div class="job-card">
                            <img src="assets/img/logo-hijau.png" alt="Company Logo" class="company-logo" />
                            <h4>{{ $job->posisi_pekerjaan }}</h4>
                            <p>{{ $job->nama_perusahaan }}</p>
                            <p class="job-category">
                                {{ $departemenMapping[$job->departemen] ?? $job->departemen }}
                            </p>
                            <p class="job-category">
                                @foreach ($job->tingkatPendidikan as $pendidikan)
                                    {{ $pendidikan->nama_tingkat_pendidikan }}@if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </p>
                            <p class="deadline">
                                Batas Lamar : {{ \Carbon\Carbon::parse($job->periode_lamar_berakhir)->format('d M Y') }}
                            </p>
                            <p class="status">
                                <span class="badge {{ $job->status_lowongan == 'Tutup' ? 'bg-danger' : 'bg-success' }}">
                                    {{ $job->status_lowongan }}
                                </span>
                            </p>
                            <center>
                                <div class="job-actions mt-3">
                                    <button class="btn-detail" data-bs-toggle="modal"
                                        data-bs-target="#jobDetailModal{{ $job->id_info_loker }}">
                                        Lihat Detail <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </center>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

</section>
<!-- End Section -->


<!-- Modal Detail Lowongan -->
@foreach ($loker as $job)
    <div class="modal fade" id="jobDetailModal{{ $job->id_info_loker }}" tabindex="-1" aria-labelledby="jobDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="jobDetailModalLabel">
                        <strong>{{ $job->jenis_pekerjaan }} - {{ $job->posisi_pekerjaan }}</strong>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="job-detail-content">
                        <p><strong><i class="fas fa-building" style="margin-right: 10px;"></i> Perusahaan :</strong>
                            {{ $job->nama_perusahaan }}</p>
                        <p><strong><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i> Lokasi :</strong>
                            {{ $job->lokasi_penempatan }} | {{ $job->metode_kerja }}</p>
                        <p><strong><i class="fas fa-clock" style="margin-right: 10px;"></i> Durasi :</strong>
                            {{ $job->durasi_kerja }}</p>
                        <p><strong><i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> Periode Lamar
                                :</strong>
                            {{ \Carbon\Carbon::parse($job->periode_lamar_berakhir)->format('d M Y') }}
                        </p>
                        <hr>
                        <h6><strong><i class="fas fa-info-circle" style="margin-right: 10px;"></i> Deskripsi</strong>
                        </h6>
                        <ul>
                            @foreach ($job->deskripsiPekerjaan as $deskripsi)
                                <li>{{ $deskripsi->deskripsi_pekerjaan }}</li>
                            @endforeach
                        </ul>
                        <hr>
                        <h6><strong><i class="fas fa-list-alt" style="margin-right: 10px;"></i> Persyaratan</strong>
                        </h6>
                        <ul>
                            @foreach ($job->dokumenPersyaratan as $dokumen)
                                <li>{{ $dokumen->dokumen_persyaratan }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection