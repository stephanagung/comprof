<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT Mada Wikri Tunggal : Metal & Plastic Industries</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon-putih.png') }}" rel="icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('partial.header')

    <!-- Main Section -->
    <main id="main">

        @include('partial.aside')

        @yield('content')

    </main><!-- End Section -->

    @include('partial.footer')

    <div id="preloader">
        <div class="circle">
            <img src="{{ asset('assets/img/logo-loader.png') }}" alt="Logo" class="logo">
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


    <!-- Preloader -->
    <script>
        // Smooth Fade-Out Preloader
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');

            // Beri waktu sebentar untuk memastikan semua elemen halaman sudah stabil
            setTimeout(() => {
                // Tambahkan kelas fade-out untuk memulai transisi
                preloader.classList.add('fade-out');
            }, 500); // Tunggu 500ms sebelum memulai fade-out

            // Sembunyikan elemen setelah animasi selesai
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 1500); // Sesuaikan dengan durasi transisi CSS (1s + buffer 500ms)
        });
    </script>

    <!-- Sosmed -->
    <script>
        function toggleSocialIcons() {
            const socialMedia = document.querySelector("#main aside .social-media");
            if (socialMedia.classList.contains("hidden-icons")) {
                socialMedia.classList.remove("hidden-icons");
            } else {
                socialMedia.classList.add("hidden-icons");
            }
        }
    </script>

    <!-- Header -->
    <script>
        document.addEventListener('scroll', function () {
            const header = document.getElementById('header');
            const logo = header.querySelector('.logo img');

            // Path logo
            const logoHijau = '{{ asset('assets/img/logo-hijau.png') }}';
            const logoPutih = '{{ asset('assets/img/logo-putih.png') }}';

            if (window.scrollY > 50) {
                header.classList.add('header-scrolled'); // Tambahkan class untuk mode scroll
                logo.src = logoHijau; // Ganti logo ke versi hijau
            } else {
                header.classList.remove('header-scrolled'); // Hapus class untuk mode scroll
                logo.src = logoPutih; // Kembalikan logo ke versi putih
            }
        });
    </script>

    <!-- Modal Image Produk index.php -->
    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
        }
    </script>

    <!-- Modal Video index.php-->
    <script>
        // Get modal and close button
        const videoModal = document.getElementById('videoModal');
        const closeModal = document.querySelector('.close');
        const modalVideo = document.getElementById('modalVideo');

        // Add click event to iframe to open modal
        document.querySelector('.video-item iframe').addEventListener('click', function () {
            videoModal.style.display = 'block';
            modalVideo.src = "https://www.youtube.com/embed/J2OOxYszPcA";
        });

        // Close modal when clicking close button
        closeModal.addEventListener('click', function () {
            videoModal.style.display = 'none';
            modalVideo.src = ''; // Stop video playback
        });

        // Close modal when clicking outside the content
        window.addEventListener('click', function (event) {
            if (event.target === videoModal) {
                videoModal.style.display = 'none';
                modalVideo.src = ''; // Stop video playback
            }
        });
    </script>

    <!-- Milestone tentang-kami.php -->
    <script>
        const timelineData = {
            1: {
                image: 'assets/img/bg-mwt.jpg',
                year: '1984',
                description: 'Perusahaan berdiri dengan pencapaian awal yang signifikan.'
            },
            2: {
                image: 'assets/img/bg-mwt.jpg',
                year: '1985',
                description: 'Ekspansi fasilitas pabrik dimulai.'
            },
            3: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2004',
                description: 'Memasuki era teknologi modern.'
            },
            4: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2005',
                description: 'Peluncuran produk unggulan di pasar global.'
            },
            5: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2009',
                description: 'Perusahaan mendapatkan sertifikasi ISO.'
            },
            6: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2011',
                description: 'Pengembangan inovasi ramah lingkungan.'
            },
            7: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2013',
                description: 'Meraih penghargaan industri nasional.'
            },
            8: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2014',
                description: 'Ekspansi ke pasar Asia Tenggara.'
            },
            9: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2022',
                description: 'Implementasi teknologi Smart Factory.'
            },
            10: {
                image: 'assets/img/bg-mwt.jpg',
                year: '2023',
                description: 'Pencapaian produksi tertinggi sepanjang sejarah.'
            }
        };

        function goToStep(step) {
            const content = timelineData[step];
            const imageWrapper = document.getElementById('timeline-image-wrapper');
            const imageElement = document.getElementById('timeline-image');
            const yearElement = document.getElementById('overlay-year');
            const descriptionElement = document.getElementById('overlay-description');

            // Hapus semua kelas aktif
            document.querySelectorAll('.step-item').forEach((item) => {
                item.classList.remove('active');
            });
            document.querySelectorAll('.line').forEach((line) => {
                line.classList.remove('active');
            });

            // Tambahkan kelas aktif ke langkah dan garis sebelumnya
            for (let i = 1; i <= step; i++) {
                document.querySelector(`.step-item:nth-child(${i * 2 - 1})`).classList.add('active');
                if (i < step) {
                    document.querySelector(`#line-${i}`).classList.add('active');
                }
            }

            // Menampilkan gambar, tahun, dan deskripsi dengan animasi
            if (content) {
                imageElement.src = content.image;
                yearElement.textContent = content.year;
                descriptionElement.textContent = content.description;

                // Tambahkan animasi masuk
                imageWrapper.style.display = 'block';
                setTimeout(() => {
                    imageWrapper.classList.add('visible');
                }, 10);
            }
        }
    </script>

    <!-- Zoom Image Achievement tentang-kami.php -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const modal = new bootstrap.Modal(document.getElementById('zoomModal'));
            const zoomedImage = document.getElementById('zoomedImage');

            document.querySelectorAll(".zoomable").forEach(img => {
                img.addEventListener("click", () => {
                    zoomedImage.src = img.src;
                    modal.show();
                });
            });
        });
    </script>

    <!-- Custom Script for DataTables -->
    <script>
        $(document).ready(function () {
            $('#tableDataProduk').DataTable();
            $('#tableDataFasilitas').DataTable();
        });
    </script>

    <script>
        $(document).ready(function () {
            // Handle Edit Button Click
            $('.edit-btn-produk').click(function () {
                $('#edit-id-produk').val($(this).data('id'));
                $('#edit-nama').val($(this).data('nama'));
                $('#edit-kategori').val($(this).data('kategori'));
                $('#edit-jenis').val($(this).data('jenis'));
            });

            // Handle Delete Button Click
            $('.delete-btn-produk').click(function () {
                const idProduk = $(this).data('id');
                $('#delete-id-produk').val(idProduk);
                $('#deleteForm').attr('action', "{{ route('produk.destroy') }}");
            });
        });
    </script>

    <script>
        $(document).on('click', '.edit-btn-fasilitas', function () {
            let id = $(this).data('id');
            let kategori = $(this).data('kategori');
            let nama = $(this).data('nama');
            let qty = $(this).data('qty');

            $('#edit-id-fasilitas').val(id);
            $('#edit-kategori').val(kategori);
            $('#edit-nama').val(nama);
            $('#edit-qty').val(qty);

            $('#editForm').attr('action', "{{ route('fasilitas.update') }}");
        });

        $(document).on('click', '.delete-btn-fasilitas', function () {
            let id = $(this).data('id');
            $('#delete-id-fasilitas').val(id);
            $('#deleteForm').attr('action', "{{ route('fasilitas.destroy') }}");
        });
    </script>

    <script>
        // Edit Karir
        $(document).on('click', '.edit-karir-btn', function () {
            const data = $(this).data();
            $('#edit-karir-id').val(data.id);
            $('#edit-karir-nama').val(data.nama);
            $('#edit-karir-posisi').val(data.posisi);
            $('#edit-karir-departemen').val(data.departemen);
            $('#edit-karir-lokasi').val(data.lokasi);
            $('#edit-karir-durasi').val(data.durasi);
            $('#edit-karir-periode').val(data.periode);
            $('#edit-karir-jenis').val(data.jenis);
            $('#edit-karir-metode').val(data.metode);

            // Set form action jika URL dinamis diperlukan
            $('#editKarirForm').attr('action', "{{ route('loker.update') }}");
        });

        // Hapus Karir
        $(document).on('click', '.delete-karir-btn', function () {
            const data = $(this).data();
            $('#delete-karir-id').val(data.id);
            $('#delete-karir-nama').text(data.nama);

            // Set form action jika URL dinamis diperlukan
            $('#deleteKarirForm').attr('action', "{{ route('loker.destroy') }}");
        });

    </script>

    <script>
        // Edit Tingkat Pendidikan
        $(document).on('click', '.edit-tingkat-pendidikan-btn', function () {
            const data = $(this).data();
            $('#edit-tingkat-id').val(data.id); // Isi ID tingkat pendidikan
            $('#edit-tingkat-nama').val(data.nama); // Isi nama tingkat pendidikan

            // Set form action jika URL dinamis diperlukan
            $('#editTingkatPendidikanForm').attr('action', "{{ route('tingkatPendidikan.update') }}");
        });

        // Hapus Tingkat Pendidikan
        $(document).on('click', '.delete-tingkat-pendidikan-btn', function () {
            const data = $(this).data();
            $('#delete-tingkat-id').val(data.id); // Isi ID tingkat pendidikan

            // Set form action jika URL dinamis diperlukan
            $('#deleteTingkatPendidikanForm').attr('action', "{{ route('tingkatPendidikan.destroy') }}");
        });
    </script>

    <script>
        // Edit Deskripsi Pekerjaan
        $(document).on('click', '.edit-deskripsi-btn', function () {
            const data = $(this).data();
            $('#edit-deskripsi-id').val(data.id); // Isi ID deskripsi pekerjaan
            $('#edit-deskripsi').val(data.deskripsi); // Isi deskripsi pekerjaan

            // Set form action jika URL dinamis diperlukan
            $('#editDeskripsiForm').attr('action', "{{ route('deskripsiPekerjaan.update') }}");
        });

        // Hapus Deskripsi Pekerjaan
        $(document).on('click', '.delete-deskripsi-btn', function () {
            const data = $(this).data();
            $('#delete-deskripsi-id').val(data.id); // Isi ID deskripsi pekerjaan

            // Set form action jika URL dinamis diperlukan
            $('#deleteDeskripsiForm').attr('action', "{{ route('deskripsiPekerjaan.destroy') }}");
        });
    </script>

    <script>
        // Edit Dokumen Persyaratan
        $(document).on('click', '.edit-dokumen-btn', function () {
            const data = $(this).data();
            $('#edit-dokumen-id').val(data.id); // Isi ID dokumen persyaratan
            $('#edit-dokumen').val(data.dokumen); // Isi nama dokumen persyaratan

            // Set form action jika URL dinamis diperlukan
            $('#editDokumenForm').attr('action', "{{ route('dokumenPersyaratan.update') }}");
        });

        // Hapus Dokumen Persyaratan
        $(document).on('click', '.delete-dokumen-btn', function () {
            const data = $(this).data();
            $('#delete-dokumen-id').val(data.id); // Isi ID dokumen persyaratan

            // Set form action jika URL dinamis diperlukan
            $('#deleteDokumenForm').attr('action', "{{ route('dokumenPersyaratan.destroy') }}");
        });
    </script>



</body>

</html>