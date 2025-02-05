@extends('layout.app')

@php
    $jenisProdukMapping = [
        'kendaraan_roda_2' => 'Kendaraan Roda 2',
        'kendaraan_roda_4' => 'Kendaraan Roda 4',
        'non_otomotif' => 'Non Otomotif',
    ];
@endphp


@section('content')
<section id="headline" class="headline-about">
    <div class="container-fluid" data-aos="fade-up">
        <div class="content">
            <div class="section-title-headline">
                <h2>Data Produk</h2>
            </div>
        </div>
    </div>
</section>

<section class="section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9 mb-5">
                <div class="card shadow p-3 cardFormKeluar">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>Form Input Produk</strong></h3>
                        <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Nama Produk -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="nama_produk" class="col-sm-3 semi-bold">Nama Produk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control custom-input" id="nama_produk"
                                        name="nama_produk" placeholder="Nama Produk" required>
                                </div>
                            </div>

                            <!-- Kategori Produk -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="kategori_produk" class="col-sm-3 semi-bold">Kategori Produk</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="kategori_produk"
                                        name="kategori_produk" required>
                                        <option value="" disabled selected>[Pilih Kategori]</option>
                                        <option value="metal">Metal</option>
                                        <option value="plastik">Plastic</option>
                                        <option value="non_otomotif">Non Otomotif</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Jenis Produk -->
                            <div class="form-group row mb-3 align-items-center">
                                <label for="jenis_produk" class="col-sm-3 semi-bold">Jenis Produk</label>
                                <div class="col-sm-9">
                                    <select class="form-control custom-input" id="jenis_produk" name="jenis_produk"
                                        required>
                                        <option value="" disabled selected>[Pilih Jenis]</option>
                                        @foreach ($jenisProdukMapping as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <!-- Foto Produk -->
                            <div class="form-group row mb-4 align-items-center">
                                <label for="foto_produk" class="col-sm-3 semi-bold">Foto Produk</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control custom-input" id="foto_produk"
                                        name="foto_produk" placeholder="Foto Produk" required>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group row align-items-center">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success custom-btn">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-12">
                <div class="card shadow p-3">
                    <div class="card-body">
                        <h3 class="text-center mb-4"><strong>Data Produk</strong></h3>
                        <table class="table-data table table-striped table-hover table-bordered" id="tableDataProduk">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama_produk }}</td>
                                        <td>{{ $item->kategori_produk }}</td>
                                        <td>{{ $jenisProdukMapping[$item->jenis_produk] ?? $item->jenis_produk }}</td>

                                        <td>
                                            <!-- Tombol untuk preview gambar -->
                                            <a href="{{ route('produk.preview', $item->nama_produk) }}" target="_blank"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i> Lihat
                                            </a>

                                            <!-- Tombol untuk download gambar -->
                                            <a href="{{ route('produk.download', $item->nama_produk) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fas fa-download"></i> Unduh
                                            </a>
                                        </td>


                                        <td>
                                            <button class="btn btn-warning btn-sm edit-btn-produk"
                                                data-id="{{ $item->id_produk }}" data-nama="{{ $item->nama_produk }}"
                                                data-kategori="{{ $item->kategori_produk }}"
                                                data-jenis="{{ $item->jenis_produk }}" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                Edit
                                            </button>
                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm delete-btn-produk"
                                                data-id="{{ $item->id_produk }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">
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

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" method="POST" action="{{ route('produk.update') }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_produk" id="edit-id-produk">
                    <div class="mb-3">
                        <label for="edit-nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama_produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-kategori" class="form-label">Kategori Produk</label>
                        <select class="form-control" id="edit-kategori" name="kategori_produk" required>
                            <option value="metal">Metal</option>
                            <option value="plastik">Plastik</option>
                            <option value="non_otomotif">Non Otomotif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edit-jenis" class="form-label">Jenis Produk</label>
                        <select class="form-control" id="edit-jenis" name="jenis_produk" required>
                            @foreach ($jenisProdukMapping as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
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

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id_produk" id="delete-id-produk">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus produk ini?</p>
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