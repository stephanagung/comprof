@extends('layout.app')

@php
    $kategoriProdukMapping = [
        'metal' => 'Metal Part',
        'plastik' => 'Plastic Part',
        'non_otomotif' => 'Non Otomotif',
    ];

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
                <h2>Produk Perusahaan</h2>
            </div>
        </div>
    </div>
</section>

<section id="product" class="product section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h2><span class="thin-title">Produk </span>Kami</h2>
            <p class="section-description">
                Kami tidak hanya mengembangkan produk untuk pasar industri otomotif (OEM) saja,
                melainkan juga produk untuk disuplai ke pasar suku cadang pengganti (Aftermarket).
                Dengan penguasaan teknologi dan kemampuan yang dimiliki selama ini, kami mampu
                menghasilkan produk berkualitas utamanya di sektor otomotif.
            </p>
        </div>

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="productTabs" role="tablist">
            @foreach ($jenis_produk_enum as $jenis)
                <li class="nav-item">
                    <a class="nav-link @if ($selected_jenis === $jenis) active @endif"
                        href="{{ route('produk.index', ['jenis_produk' => $jenis, 'kategori_produk' => $selected_kategori]) }}">
                        {{ $jenisProdukMapping[$jenis] ?? ucfirst($jenis) }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Dropdown Category -->
        <div class="dropdown text-center">
            <button class="btn btn-sm btn-outline-success dropdown-toggle" type="button" id="categoryDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ $kategoriProdukMapping[$selected_kategori] ?? ucfirst($selected_kategori) }}
            </button>

            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                @foreach ($kategori_produk_enum as $kategori)
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('produk.index', ['jenis_produk' => $selected_jenis, 'kategori_produk' => $kategori]) }}">
                            {{ $kategoriProdukMapping[$kategori] ?? ucfirst($kategori) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="productTabsContent">
            <div class="tab-pane fade show active" role="tabpanel">
                <div class="row">
                    @forelse ($produk as $item)
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-gambar">
                                    <img src="{{ Storage::url($item->foto_produk) }}" class="card-img-top"
                                        alt="{{ $item->nama_produk }}">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">Tidak ada produk ditemukan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection