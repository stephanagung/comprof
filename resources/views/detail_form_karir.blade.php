@extends('layout.app')

@section('content')
<section id="headline" class="headline-about">
    <div class="container-fluid" data-aos="fade-up">
        <div class="content">
            <div class="section-title-headline">
                <h2>Detail Lowongan Kerja</h2>
            </div>
        </div>
    </div>
</section>

<section class="section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="card shadow p-3">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>{{ $loker->nama_perusahaan }}</strong></h3>

                        <div class="mt-4 mb-3">
                            <a href="{{ route('form_karir') }}" class="btn btn-secondary">Kembali</a>
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <th>Posisi</th>
                                <td>{{ $loker->posisi_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th>Departemen</th>
                                <td>{{ $loker->departemen }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi Penempatan</th>
                                <td>{{ $loker->lokasi_penempatan }}</td>
                            </tr>
                            <tr>
                                <th>Durasi Kerja</th>
                                <td>{{ $loker->durasi_kerja }}</td>
                            </tr>
                            <tr>
                                <th>Periode Lamar Berakhir</th>
                                <td>{{ $loker->periode_lamar_berakhir }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Pekerjaan</th>
                                <td>{{ $loker->jenis_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th>Metode Kerja</th>
                                <td>{{ $loker->metode_kerja }}</td>
                            </tr>
                        </table>

                        <h4 class="mt-5 d-flex justify-content-between align-items-center">
                            Tingkat Pendidikan
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addTingkatPendidikanModal">Tambah</button>
                        </h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tingkat Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loker->tingkatPendidikan as $index => $pendidikan)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $pendidikan->nama_tingkat_pendidikan }}</td>
                                        <td>
                                            <!-- Tombol Edit -->
                                            <button class="btn btn-warning btn-sm edit-tingkat-pendidikan-btn"
                                                data-id="{{ $pendidikan->id_info_tingkat_pendidikan }}"
                                                data-nama="{{ $pendidikan->nama_tingkat_pendidikan }}"
                                                data-bs-toggle="modal" data-bs-target="#editTingkatPendidikanModal">
                                                Edit
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm delete-tingkat-pendidikan-btn"
                                                data-id="{{ $pendidikan->id_info_tingkat_pendidikan }}"
                                                data-bs-toggle="modal" data-bs-target="#deleteTingkatPendidikanModal">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h4 class="mt-5 d-flex justify-content-between align-items-center">
                            Deskripsi Pekerjaan
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addDeskripsiModal">Tambah</button>
                        </h4>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loker->deskripsiPekerjaan as $index => $deskripsi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $deskripsi->deskripsi_pekerjaan }}</td>
                                        <td>
                                            <!-- Tombol Edit -->
                                            <button class="btn btn-warning btn-sm edit-deskripsi-btn"
                                                data-id="{{ $deskripsi->id_info_deskripsi_pekerjaan }}"
                                                data-deskripsi="{{ $deskripsi->deskripsi_pekerjaan }}"
                                                data-bs-toggle="modal" data-bs-target="#editDeskripsiModal">
                                                Edit
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm delete-deskripsi-btn"
                                                data-id="{{ $deskripsi->id_info_deskripsi_pekerjaan }}"
                                                data-bs-toggle="modal" data-bs-target="#deleteDeskripsiModal">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h4 class="mt-5 d-flex justify-content-between align-items-center">
                            Dokumen Persyaratan
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addDokumenModal">Tambah</button>
                        </h4>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loker->dokumenPersyaratan as $index => $dokumen)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $dokumen->dokumen_persyaratan }}</td>
                                        <td>
                                            <!-- Tombol Edit -->
                                            <button class="btn btn-warning btn-sm edit-dokumen-btn"
                                                data-id="{{ $dokumen->id_info_dokumen_persyaratan }}"
                                                data-dokumen="{{ $dokumen->dokumen_persyaratan }}" data-bs-toggle="modal"
                                                data-bs-target="#editDokumenModal">
                                                Edit
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm delete-dokumen-btn"
                                                data-id="{{ $dokumen->id_info_dokumen_persyaratan }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteDokumenModal">
                                                Hapus
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

<div class="modal fade" id="addTingkatPendidikanModal" tabindex="-1" aria-labelledby="addTingkatPendidikanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('tingkatPendidikan.store') }}">
                @csrf
                <input type="hidden" name="id_info_loker" value="{{ $loker->id_info_loker }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="addTingkatPendidikanLabel">Tambah Tingkat Pendidikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add-tingkat-nama" class="form-label">Nama Tingkat Pendidikan</label>
                        <select class="form-select" name="nama_tingkat_pendidikan" id="namaTingkatPendidikan" required>
                            <option value="" selected disabled>Pilih Tingkat Pendidikan</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="S1/Sederajat">S1/Sederajat</option>
                        </select>
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

<div class="modal fade" id="editTingkatPendidikanModal" tabindex="-1" aria-labelledby="editTingkatPendidikanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editTingkatPendidikanForm" method="POST" action="{{ route('tingkatPendidikan.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_info_tingkat_pendidikan" id="edit-tingkat-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="editTingkatPendidikanLabel">Edit Tingkat Pendidikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-tingkat-nama" class="form-label">Nama Tingkat Pendidikan</label>
                        <select class="form-select" name="nama_tingkat_pendidikan" id="edit-tingkat-nama" required>
                            <option value="" selected disabled>Pilih Tingkat Pendidikan</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="S1/Sederajat">S1/Sederajat</option>
                        </select>
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

<div class="modal fade" id="deleteTingkatPendidikanModal" tabindex="-1" aria-labelledby="deleteTingkatPendidikanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteTingkatPendidikanForm" method="POST" action="{{ route('tingkatPendidikan.destroy') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id_info_tingkat_pendidikan" id="delete-tingkat-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="deleteTingkatPendidikanLabel">Hapus Tingkat Pendidikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data tingkat pendidikan ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="addDeskripsiModal" tabindex="-1" aria-labelledby="addDeskripsiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('deskripsiPekerjaan.store') }}">
                @csrf
                <input type="hidden" name="id_info_loker" value="{{ $loker->id_info_loker }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="addDeskripsiModalLabel">Tambah Deskripsi Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add-deskripsi" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea class="form-control" id="add-deskripsi" name="deskripsi_pekerjaan" rows="3"
                            required></textarea>
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

<div class="modal fade" id="editDeskripsiModal" tabindex="-1" aria-labelledby="editDeskripsiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editDeskripsiForm" method="POST" action="{{ route('deskripsiPekerjaan.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_info_deskripsi_pekerjaan" id="edit-deskripsi-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="editDeskripsiModalLabel">Edit Deskripsi Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-deskripsi" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea class="form-control" id="edit-deskripsi" name="deskripsi_pekerjaan" rows="3"
                            required></textarea>
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

<div class="modal fade" id="deleteDeskripsiModal" tabindex="-1" aria-labelledby="deleteDeskripsiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteDeskripsiForm" method="POST" action="{{ route('deskripsiPekerjaan.destroy') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id_info_deskripsi_pekerjaan" id="delete-deskripsi-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDeskripsiModalLabel">Hapus Deskripsi Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus deskripsi pekerjaan ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="addDokumenModal" tabindex="-1" aria-labelledby="addDokumenModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('dokumenPersyaratan.store') }}">
                @csrf
                <input type="hidden" name="id_info_loker" value="{{ $loker->id_info_loker }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="addDokumenModalLabel">Tambah Dokumen Persyaratan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add-dokumen" class="form-label">Nama Dokumen Persyaratan</label>
                        <input type="text" class="form-control" id="add-dokumen" name="dokumen_persyaratan" required>
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

<div class="modal fade" id="editDokumenModal" tabindex="-1" aria-labelledby="editDokumenModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editDokumenForm" method="POST" action="{{ route('dokumenPersyaratan.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_info_dokumen_persyaratan" id="edit-dokumen-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="editDokumenModalLabel">Edit Dokumen Persyaratan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-dokumen" class="form-label">Nama Dokumen Persyaratan</label>
                        <input type="text" class="form-control" id="edit-dokumen" name="dokumen_persyaratan" required>
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

<div class="modal fade" id="deleteDokumenModal" tabindex="-1" aria-labelledby="deleteDokumenModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteDokumenForm" method="POST" action="{{ route('dokumenPersyaratan.destroy') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id_info_dokumen_persyaratan" id="delete-dokumen-id">

                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDokumenModalLabel">Hapus Dokumen Persyaratan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus dokumen persyaratan ini?</p>
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