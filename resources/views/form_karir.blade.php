@extends('layout.app')

@section('content')
<section id="headline" class="headline-about">
    <div class="container-fluid" data-aos="fade-up">
        <div class="content">
            <div class="section-title-headline">
                <h2>Data Karir</h2>
            </div>
        </div>
    </div>
</section>

<section class="section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Input Loker -->
            <div class="col-12 col-md-10 col-lg-9 mb-5">
                <div class="card shadow p-3 cardFormKeluar">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>Form Input Loker</strong></h3>
                        <form method="POST" action="{{ route('loker.store') }}">
                            @csrf

                            <!-- Nama Perusahaan -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="nama_perusahaan" class="col-sm-3 semi-bold">Nama Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control custom-input" id="nama_perusahaan"
                                        name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                                </div>
                            </div>

                            <!-- Posisi Pekerjaan -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="posisi_pekerjaan" class="col-sm-3 semi-bold">Posisi Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control custom-input" id="posisi_pekerjaan"
                                        name="posisi_pekerjaan" placeholder="Posisi Pekerjaan" required>
                                </div>
                            </div>

                            <!-- Departemen -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="departemen" class="col-sm-3 semi-bold">Departemen</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="departemen" name="departemen"
                                        required>
                                        <option value="" disabled selected>[Pilih Departemen]</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Engineering">Engineering</option>
                                        <!-- Tambahkan pilihan departemen lainnya sesuai kebutuhan -->
                                    </select>
                                </div>
                            </div>

                            <!-- Lokasi Penempatan -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="lokasi_penempatan" class="col-sm-3 semi-bold">Lokasi Penempatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="lokasi_penempatan"
                                        name="lokasi_penempatan" required>
                                        <option value="" disabled selected>[Pilih Lokasi]</option>
                                        <option value="Cikarang">Cikarang</option>
                                        <option value="Bandung">Bandung</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Durasi Kerja -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="durasi_kerja" class="col-sm-3 semi-bold">Durasi Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control custom-input" id="durasi_kerja"
                                        name="durasi_kerja" placeholder="Durasi Kerja (misal: 6 bulan)" required>
                                </div>
                            </div>

                            <!-- Periode Lamar Berakhir -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="periode_lamar_berakhir" class="col-sm-3 semi-bold">Periode Lamar
                                    Berakhir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control custom-input" id="periode_lamar_berakhir"
                                        name="periode_lamar_berakhir" required>
                                </div>
                            </div>

                            <!-- Jenis Pekerjaan -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="jenis_pekerjaan" class="col-sm-3 semi-bold">Jenis Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="jenis_pekerjaan"
                                        name="jenis_pekerjaan" required>
                                        <option value="" disabled selected>[Pilih Jenis Pekerjaan]</option>
                                        <option value="Fulltime">Fulltime</option>
                                        <option value="Internship">Internship</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Metode Kerja -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="metode_kerja" class="col-sm-3 semi-bold">Metode Kerja</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="metode_kerja" name="metode_kerja"
                                        required>
                                        <option value="" disabled selected>[Pilih Metode Kerja]</option>
                                        <option value="Onsite">Onsite</option>
                                        <option value="WFA">Work From Anywhere (WFA)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Button Submit -->
                            <div class="form-group row align-items-center">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success custom-btn">
                                        Simpan Lowongan Kerja
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Dashboard Data Loker -->
            <div class="col-12 col-md-10 col-lg-12 mb-5">
                <div class="card shadow p-3">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>Data Loker</strong></h3>
                        <div class="row">
                            <!-- Card 1: Total Loker -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm py-2 px-3 mb-3 text-white bg-primary">
                                    <div class="card-body text-center">
                                        <i class="fas fa-briefcase fa-2x mb-2"></i>
                                        <h5 class="card-title fw-bold">Total Loker Dibuat</h5>
                                        <p class="fs-4 mb-1"><strong>{{ $totalLoker }}</strong></p>
                                        <p class="small">Hari Ini: <span class="fw-bold">{{ $lokerHariIni }}</span></p>
                                        <p class="small">Keseluruhan: <span class="fw-bold">{{ $totalLoker }}</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Status Loker -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm py-2 px-3 mb-3 text-white bg-success">
                                    <div class="card-body text-center">
                                        <i class="fas fa-check-circle fa-2x mb-2"></i>
                                        <h5 class="card-title fw-bold">Status Loker</h5>
                                        <p class="fs-4 mb-1"><strong>{{ $lokerBuka }}</strong></p>
                                        <p class="small">Buka: <span class="fw-bold">{{ $lokerBuka }}</span></p>
                                        <p class="small">Tutup: <span class="fw-bold">{{ $lokerTutup }}</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Lokasi Loker -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm py-2 px-3 mb-3 text-white bg-info">
                                    <div class="card-body text-center">
                                        <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                                        <h5 class="card-title fw-bold">Lokasi Loker Buka</h5>
                                        <p class="fs-4 mb-1"><strong>{{ $totalLokasi }}</strong></p>
                                        <p class="small">Cikarang: <span class="fw-bold">{{ $lokerCikarang }}</span></p>
                                        <p class="small">Bandung: <span class="fw-bold">{{ $lokerBandung }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Data Loker -->
            <div class="col-12 col-md-10 col-lg-12">
                <div class="card shadow p-3">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>Data Loker</strong></h3>
                        <table class="table-data table table-striped table-hover table-bordered"
                            id="tableDataFasilitas">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Posisi</th>
                                    <th>Departemen</th>
                                    <th>Lokasi Penempatan</th>
                                    <th>Durasi Kerja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataLoker as $index => $loker)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $loker->posisi_pekerjaan }}</td>
                                        <td>{{ $loker->departemen }}</td>
                                        <td>{{ $loker->lokasi_penempatan }}</td>
                                        <td>{{ $loker->durasi_kerja }}</td>
                                        <td>
                                            <!-- Tombol Detail -->
                                            <a href="{{ route('loker.detail', $loker->id_info_loker) }}"
                                                class="btn btn-info btn-sm">
                                                Detail
                                            </a>

                                            <!-- Tombol Edit -->
                                            <button class="btn btn-warning btn-sm edit-karir-btn"
                                                data-id="{{ $loker->id_info_loker }}"
                                                data-nama="{{ $loker->nama_perusahaan }}"
                                                data-posisi="{{ $loker->posisi_pekerjaan }}"
                                                data-departemen="{{ $loker->departemen }}"
                                                data-lokasi="{{ $loker->lokasi_penempatan }}"
                                                data-durasi="{{ $loker->durasi_kerja }}"
                                                data-periode="{{ $loker->periode_lamar_berakhir }}"
                                                data-jenis="{{ $loker->jenis_pekerjaan }}"
                                                data-metode="{{ $loker->metode_kerja }}" data-bs-toggle="modal"
                                                data-bs-target="#editKarirModal">
                                                Edit Karir
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm delete-karir-btn"
                                                data-id="{{ $loker->id_info_loker }}"
                                                data-nama="{{ $loker->nama_perusahaan }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteKarirModal">
                                                Hapus Karir
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Edit Karir -->
<div class="modal fade" id="editKarirModal" tabindex="-1" aria-labelledby="editKarirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editKarirForm" method="POST" action="{{ route('loker.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_info_loker" id="edit-karir-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="editKarirModalLabel">Edit Data Karir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- Nama Perusahaan -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-nama" class="col-sm-3 semi-bold">Nama Perusahaan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control custom-input" id="edit-karir-nama"
                                name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        </div>
                    </div>

                    <!-- Posisi Pekerjaan -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-posisi" class="col-sm-3 semi-bold">Posisi Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control custom-input" id="edit-karir-posisi"
                                name="posisi_pekerjaan" placeholder="Posisi Pekerjaan" required>
                        </div>
                    </div>

                    <!-- Departemen -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-departemen" class="col-sm-3 semi-bold">Departemen</label>
                        <div class="col-sm-9">
                            <select class="form-control custom-input" id="edit-karir-departemen" name="departemen"
                                required>
                                <option value="" disabled selected>[Pilih Departemen]</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Engineering">Engineering</option>
                                <!-- Tambahkan opsi lainnya -->
                            </select>
                        </div>
                    </div>

                    <!-- Lokasi Penempatan -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-lokasi" class="col-sm-3 semi-bold">Lokasi Penempatan</label>
                        <div class="col-sm-9">
                            <select class="form-control custom-input" id="edit-karir-lokasi" name="lokasi_penempatan"
                                required>
                                <option value="" disabled selected>[Pilih Lokasi]</option>
                                <option value="Cikarang">Cikarang</option>
                                <option value="Bandung">Bandung</option>
                            </select>
                        </div>
                    </div>

                    <!-- Durasi Kerja -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-durasi" class="col-sm-3 semi-bold">Durasi Kerja</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control custom-input" id="edit-karir-durasi"
                                name="durasi_kerja" placeholder="Durasi Kerja (misal: 6 bulan)" required>
                        </div>
                    </div>

                    <!-- Periode Lamar Berakhir -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-periode" class="col-sm-3 semi-bold">Periode Lamar Berakhir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control custom-input" id="edit-karir-periode"
                                name="periode_lamar_berakhir" required>
                        </div>
                    </div>

                    <!-- Jenis Pekerjaan -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-jenis" class="col-sm-3 semi-bold">Jenis Pekerjaan</label>
                        <div class="col-sm-9">
                            <select class="form-control custom-input" id="edit-karir-jenis" name="jenis_pekerjaan"
                                required>
                                <option value="" disabled selected>[Pilih Jenis Pekerjaan]</option>
                                <option value="Fulltime">Fulltime</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                    </div>

                    <!-- Metode Kerja -->
                    <div class="form-group row mb-3 align-items-center">
                        <label for="edit-karir-metode" class="col-sm-3 semi-bold">Metode Kerja</label>
                        <div class="col-sm-9">
                            <select class="form-control custom-input" id="edit-karir-metode" name="metode_kerja"
                                required>
                                <option value="" disabled selected>[Pilih Metode Kerja]</option>
                                <option value="Onsite">Onsite</option>
                                <option value="WFA">Work From Anywhere (WFA)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Karir -->
<div class="modal fade" id="deleteKarirModal" tabindex="-1" aria-labelledby="deleteKarirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteKarirForm" method="POST" action="{{ route('loker.destroy') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id_info_loker" id="delete-karir-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="deleteKarirModalLabel">Konfirmasi Hapus Data Karir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data karir <strong id="delete-karir-nama"></strong>?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection