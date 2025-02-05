@extends('layout.app')

@section('content')
<!-- ======= Headline  Section ======= -->
<section id="headline" class="headline-about">
    <div class="container-fluid" data-aos="fade-up">
        <div class="content">
            <div class="section-title-headline">
                <h2>Fasilitas Perusahaan</h2>
            </div>
        </div>

    </div>
</section><!-- End Section -->

<!-- ======= Facilities Section ======= -->
<section id="facilities" class="facilities section-bg">
    <div class="container" data-aos="fade-up">

        <div class="nav-tabs-container">
            <ul class="nav nav-tabs justify-content-center" id="fasilitasTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="plant1-tab" data-bs-toggle="tab" data-bs-target="#plant1"
                        type="button" role="tab" aria-controls="plant1" aria-selected="true">Plant 1 -
                        Gemalapik</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="plant2-tab" data-bs-toggle="tab" data-bs-target="#plant2" type="button"
                        role="tab" aria-controls="plant2" aria-selected="false">Plant 2 -
                        Bandung</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="plant3-tab" data-bs-toggle="tab" data-bs-target="#plant3" type="button"
                        role="tab" aria-controls="plant3" aria-selected="false">Plant 3 -
                        Pasirgombong</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="plant4-tab" data-bs-toggle="tab" data-bs-target="#plant4" type="button"
                        role="tab" aria-controls="plant4" aria-selected="false">Plant 4 -
                        Jababeka</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="pendukung-tab" data-bs-toggle="tab" data-bs-target="#pendukung"
                        type="button" role="tab">Fasilitas Pendukung</button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="fasilitasTabsContent">
            <!-- Plant 1 - Gemalapik -->
            <div class="tab-pane fade show active" id="plant1" role="tabpanel" aria-labelledby="plant1-tab">
                <div class="plant-section">
                    <h3>Plant 1 - Gemalapik</h3>
                    <p>Fasilitas unggulan di Plant 1 - Gemalapik :</p>
                    <div class="facility-details">
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah Item</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['gml_1'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $totals['gml_1'] }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <h4>Galery</h4>
                    <div id="carouselFacilities" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 1">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 2">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 4">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 5">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plant 2 - Bandung -->
            <div class="tab-pane fade" id="plant2" role="tabpanel" aria-labelledby="plant2-tab">
                <div class="plant-section">
                    <h3>Plant 2 - Bandung</h3>
                    <p>Fasilitas unggulan di Plant 2 - Bandung :</p>
                    <div class="facility-details">
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['bdg_2'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $totals['bdg_2'] }}</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>

                    <h4>Galery</h4>
                    <div id="carouselFacilities" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 1">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 2">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 4">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 5">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plant 3 - Pasirgombong -->
            <div class="tab-pane fade" id="plant3" role="tabpanel" aria-labelledby="plant3-tab">
                <div class="plant-section">
                    <h3>Plant 3 - Pasirgombong</h3>
                    <p>Fasilitas unggulan di Plant 3 - Pasirgombong :</p>
                    <div class="facility-details">
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['psg_3'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $totals['psg_3'] }}</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>

                    <h4>Galery</h4>
                    <div id="carouselFacilities" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 1">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 2">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 4">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 5">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plant 4 - Jababeka -->
            <div class="tab-pane fade" id="plant4" role="tabpanel" aria-labelledby="plant4-tab">
                <div class="plant-section">
                    <h3>Plant 4 - Jababeka</h3>
                    <p>Fasilitas unggulan di Plant 4 - Jababeka :</p>
                    <div class="facility-details">
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['jbk_4'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $totals['jbk_4'] }}</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>

                    <h4>Galery</h4>
                    <div id="carouselFacilities" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 1">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 2">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 4">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 5">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Fasilitas Pendukung -->
            <div class="tab-pane fade" id="pendukung" role="tabpanel" aria-labelledby="pendukung-tab">
                <div class="plant-section">
                    <h3>Fasilitas Pendukung</h3>

                    <!-- Tabel untuk Polymer Measurement (Cikarang) -->
                    <div class="facility-details mt-4">
                        <h6 style="text-align: left;">Polymer Measurement (Cikarang)</h6>
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table-polymer-ckr">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['polymer_ckr'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $fasilitas['polymer_ckr']->sum('qty_item') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- Tabel untuk Polymer Measurement (Bandung) -->
                    <div class="facility-details mt-4">
                        <h6 style="text-align: left;">Polymer Measurement (Bandung)</h6>
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table-polymer-bdg">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['polymer_bdg'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $fasilitas['polymer_bdg']->sum('qty_item') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- Tabel untuk Metal Measurement (Cikarang) -->
                    <div class="facility-details mt-4">
                        <h6 style="text-align: left;">Metal Measurement (Cikarang)</h6>
                        <div class="scrollable-table">
                            <table class="table table-striped table-hover" id="facility-table-metal-ckr">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas['metal_ckr'] as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_item }}</td>
                                            <td>{{ $item->qty_item }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="2" class="text-end fw-bold">Total</td>
                                        <td class="fw-bold">{{ $fasilitas['metal_ckr']->sum('qty_item') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <h4>Galery</h4>
                    <div id="carouselFacilities" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 1">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 2">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center gap-3">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 4">
                                    <img src="assets/img/image1.png" class="carousel-image shadow-lg" alt="Image 5">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Facilities Section -->
@endsection