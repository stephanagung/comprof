@extends('layout.app')

@php
    $kategoriFasilitasMapping = [
        'gml_1' => 'Plant 1 - Gemalapik',
        'bdg_2' => 'Plant 2 - Bandung',
        'psg_3' => 'Plant 3 - Pasirgombong',
        'jbk_4' => 'Plant 4 - Jababeka',
        'polymer_ckr' => 'Polymer Measurement (Cikarang)',
        'polymer_bdg' => 'Polymer Measurement (Bandung)',
        'metal_ckr' => 'Metal Measurement (Cikarang)',
    ];
@endphp


@section('content')
    <section id="headline" class="headline-about">
        <div class="container-fluid" data-aos="fade-up">
            <div class="content">
                <div class="section-title-headline">
                    <h2>Data Fasilitas</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Form Input Fasilitas -->
                <div class="col-12 col-md-10 col-lg-9 mb-5">
                    <div class="card shadow p-3 cardFormKeluar">
                        <div class="card-body">
                            <h3 class="text-center mb-4"><strong>Form Input Fasilitas</strong></h3>
                            <form method="POST" action="{{ route('fasilitas.store') }}">
                                @csrf
                                <!-- Kategori Fasilitas -->
                                <div class="form-group row mb-3 align-items-center">
                                    <label for="kategori_fasilitas" class="col-sm-3 semi-bold">Kategori Fasilitas</label>
                                    <div class="col-sm-9">
                                        <select class="form-control custom-input" id="kategori_fasilitas"
                                            name="kategori_fasilitas" required>
                                            <option value="" disabled selected>[Pilih Kategori]</option>
                                            @foreach ($kategoriFasilitasMapping as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <!-- Nama Item -->
                                <div class="form-group row mb-3 align-items-center">
                                    <label for="nama_item" class="col-sm-3 semi-bold">Nama Item</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control custom-input" id="nama_item"
                                            name="nama_item" placeholder="Nama Item" required>
                                    </div>
                                </div>

                                <!-- Jumlah Item -->
                                <div class="form-group row mb-3 align-items-center">
                                    <label for="qty_item" class="col-sm-3 semi-bold">Jumlah Item</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control custom-input" id="qty_item"
                                            name="qty_item" placeholder="Jumlah Item" required>
                                    </div>
                                </div>

                                <!-- Button Submit -->
                                <div class="form-group row align-items-center">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success custom-btn">
                                            Tambah Fasilitas
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tabel Data Fasilitas -->
                <div class="col-12 col-md-10 col-lg-12">
                    <div class="card shadow p-3">
                        <div class="card-body">
                            <h3 class="text-center mb-4"><strong>Data Fasilitas</strong></h3>
                            <table class="table-data table table-striped table-hover table-bordered"
                                id="tableDataFasilitas">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori Fasilitas</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah Item</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kategoriFasilitasMapping[$item->kategori_fasilitas] ?? $item->kategori_fasilitas }}
                                            </td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                            <td>
                                                <!-- Tombol Edit -->
                                                <button class="btn btn-warning btn-sm edit-btn-fasilitas"
                                                    data-id="{{ $item->id_fasilitas }}"
                                                    data-kategori="{{ $item->kategori_fasilitas }}"
                                                    data-nama="{{ $item->nama_item }}" data-qty="{{ $item->qty_item }}"
                                                    data-bs-toggle="modal" data-bs-target="#editModal">
                                                    Edit
                                                </button>

                                                <!-- Tombol Hapus -->
                                                <button class="btn btn-danger btn-sm delete-btn-fasilitas"
                                                    data-id="{{ $item->id_fasilitas }}" data-bs-toggle="modal"
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

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST" action="{{ route('fasilitas.update') }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_fasilitas" id="edit-id-fasilitas">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit-kategori" class="form-label">Kategori Fasilitas</label>
                            <select class="form-control" id="edit-kategori" name="kategori_fasilitas" required>
                                @foreach ($kategoriFasilitasMapping as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="edit-nama" class="form-label">Nama Item</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama_item" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-qty" class="form-label">Jumlah Item</label>
                            <input type="number" class="form-control" id="edit-qty" name="qty_item" required>
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

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="deleteForm" method="POST" action="{{ route('fasilitas.destroy') }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id_fasilitas" id="delete-id-fasilitas">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus fasilitas ini?</p>
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
