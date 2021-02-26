<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS')}} File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="#hero">Tracking Covid</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    {{-- <li class="active"><a href="index.html">Home</a></li> --}}
                    <li class="drop-down"><a href="">Data kasus</a>
                        <ul>
                            <li><a href="#global">Data Kasus Dunia</a></li>
                            <li class="drop-down"><a href="#">Data Kasus Lokal</a>
                                <ul>
                                    <li><a href="#provinsi">Data Kasus Provinsi</a></li>
                                    <li><a href="#kota">Data Kasus Kota </a></li>
                                    <li><a href="#kecamatan">Data Kasus Kecamatan </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#about">Tentang</a></li>


                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- .nav-menu -->



        </div>
    </header><!-- End Header -->

    <!-- ======= DATA KASUS Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Tracking Covid</h1>
                    <h2>live data kasus corona dunia dan Indonesia</h2>
                </div>
            </div><br><br>


            <section id="tkasus" class="page">
                <div class="container">
                    <center>
                        <div class="title">
                            <h2>DATA KASUS INDONESIA</h2>
                        </div>
                    </center>
                    <div class="row icon-boxes">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="icon-box">
                                <center>
                                    <div class="icon"><i class="icofont-medical-sign"></i></div>

                                    <h2 class="title"><a href="">POSITIF</a></h2>
                                    <div class="count-box">
                                        <h2>
                                            <p class=""><span
                                                    data-toggle="counter-up">{{ number_format($positif) }}</span>
                                            </p>
                                        </h2>
                                        <p><b>Orang</b></p>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <center>
                                    <div class="icon"><i class="icofont-heart-alt"></i></div>

                                    <h2 class="title"><a href="">SEMBUH</a></h2>
                                    <div class="count-box">
                                        <h2>
                                            <p class=""><span
                                                    data-toggle="counter-up">{{ number_format($sembuh) }}</span>
                                            </p>
                                        </h2>
                                        <p><b>Orang</b></p>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                            data-aos-delay="400">

                            <div class="icon-box">
                                <center>
                                    <div class="icon"><i class="icofont-skull-face"></i></div>

                                    <h4 class="title"><a href="">MENINGGAL</a></h4>
                                    <div class="count-box">
                                        <h2>
                                            <p class=""><span
                                                    data-toggle="counter-up">{{ number_format($meninggal) }}</span>
                                            </p>
                                        </h2>
                                        <p><b>Orang</b></p>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                            data-aos-delay="500">
                            <div class="icon-box">
                                <center>
                                    <div class="icon"><i class="icofont-globe-alt"></i></div>

                                    <div class="count-box">
                                        <h2 class="title"><a href="">DATA KASUS DUNIA</a></h2>
                                        <span data-toggle="counter-up">
                                            <center><?php echo $getglobal['value']; ?>
                                            </center>
                                        </span>

                                        <p><b>Orang</b></p>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section><!-- End DATA KASUS -->

    <main id="main">


        <!-- ======== Table data kasus berdasarkan provinsi Section ======== -->
        <section id="provinsi" class="provinsi">
            <div class="container">


                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Indonesia Berdasarkan Provinsi</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Provinsi</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($lokal as $data)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $no++ }}</center>
                                        </th>
                                        <td>
                                            <center>{{ $data->nama_provinsi }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_positif) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_sembuh) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_meninggal) }}</center>
                                        </td>
                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table data kasus berdasarkan provinsi Section ======== -->

        <!-- ======== Table data kasus berdasarkan Kota Section ======== -->
        <section id="kota" class="kota">
            <div class="container">


                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Indonesia Berdasarkan Kota</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Kota</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($tampil as $data)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $no++ }}</center>
                                        </th>
                                        <td>
                                            <center>{{ $data->nama_kota }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_positif) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_sembuh) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_meninggal) }}</center>
                                        </td>
                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table data kasus berdasarkan kota Section ======== -->
        <!-- ======== Table data kasus berdasarkan provinsi Section ======== -->
        <section id="kecamatan" class="kecamatan">
            <div class="container">


                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Indonesia Berdasarkan Kecamatan</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Kecamatan</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($kecam as $data)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $no++ }}</center>
                                        </th>
                                        <td>
                                            <center>{{ $data->nama_kecamatan }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_positif) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_sembuh) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->jumlah_meninggal) }}</center>
                                        </td>
                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table Section ======== -->


        <!-- ======== Table Global Section ======= -->
        <section id="global" class="global">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Dunia</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Negara</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($globall as $data)
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $data['attributes']['Country_Region']; ?></td>
                                        <td> <?php echo number_format($data['attributes']['Confirmed']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Recovered']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Deaths']); ?></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table Global Section ======= -->


        <!-- ======= About/Tentang Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Covid-19</h2>
                    <p>COVID-19 (coronavirus disease 2019) adalah penyakit yang disebabkan oleh jenis coronavirus baru
                        yaitu Sars-CoV-2, yang dilaporkan pertama kali di Wuhan Tiongkok pada tanggal 31 Desember 2019.
                    </p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p><b>
                                Lindungi diri Anda dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait
                                virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh
                                otoritas kesehatan setempat, adapun cara untuk mencegah agar terhindar dari virus
                                covid-19
                            </b></p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Cuci tangan Anda secara rutin. Gunakan sabun dan
                                air, atau cairan pembersih tangan berbahan alkohol.</li>
                            <li><i class="ri-check-double-line"></i> Selalu jaga jarak aman dengan orang yang batuk atau
                                bersin</li>
                            <li><i class="ri-check-double-line"></i> Kenakan masker jika pembatasan fisik tidak
                                dimungkinkan.</li>
                            <li><i class="ri-check-double-line"></i> Jangan sentuh mata, hidung, atau mulut Anda.</li>
                            <li><i class="ri-check-double-line"></i> Saat batuk atau bersin, tutup mulut dan hidung Anda
                                dengan lengan atau tisu.</li>
                            <li><i class="ri-check-double-line"></i> Jangan keluar rumah jika merasa tidak enak badan.
                            </li>
                            <li><i class="ri-check-double-line"></i> Jika demam, batuk, atau kesulitan bernapas, segera
                                cari bantuan medis.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p><b>
                                COVID-19 telah menelan banyak korban jiwa. Sebagai upaya penanggulangan penyebaran,
                                penting
                                sekali bagi kita untuk mengenali gejala infeksi virus Corona, terutama gejala awalnya di
                                minggu pertama.
                            </b></p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>Demam ≥380 C</li>
                            <li><i class="ri-check-double-line"></i> Kelelahan atau lemas</li>
                            <li><i class="ri-check-double-line"></i> Hilangnya kemampuan mengecap rasa atau mencium
                                aroma</li>
                            <li><i class="ri-check-double-line"></i> Sesak Napas.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About/Tentang Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">

                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tim Pendukung</h2>
                    <p>Terimaksih kepada para tim pendukung yang telah berpartisipasi untuk mengembangkan website
                        tracking covid </p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('frontend/assets/img/team/guru.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Muhammad Mulki Sukmana</h4>
                                <span>Guru Pembimbing</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('frontend/assets/img/team/hilmi.jpg') }}" class="img-fluid" alt=""
                                    width="197px" height="1500px">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Hilmi Fadhilah Darmawan</h4>
                                <span>Tim Pendukung</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('frontend/assets/img/team/iki.jpg') }}" class="img-fluid" alt=""
                                    width="1000px" height="600px">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href="https://web.facebook.com/rifqi.miftahudin.5"><i
                                            class="icofont-facebook"></i></a>
                                    <a href="https://www.instagram.com/rifqym40/"><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('frontend/assets/img/team/ilham.jpg') }}" class="img-fluid" alt=""
                                    width="600px">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->

        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->

        <!-- End Frequently Asked Questions Section -->
        <!-- kontak baru -->

        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Hubungi Kami</h2>
                    <p class="gr-text-8 mb-13">Berikut informasi kontak yang bisa digunakan untuk berbagai keperluan.
                    </p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="icofont-google-map"></i>
                            <h3>Lokasi</h3>
                            <address>Jalan Situ Tarate Jl. Cibaduyut Raya, Cangkuang Kulon, Kec. Dayeuhkolot, Kota
                                Bandung, Jawa Barat 40265</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="icofont-phone"></i>
                            <h3>Nomor Telepon</h3>
                            <p><a href="tel:++6281285916892">(022) 5420220</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="icofont-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">smk@smkassalaambandung.sch.id</a></p>
                        </div>
                    </div>

                </div>
        </section><!-- End Contact Section -->
        <!-- end kontak -->

        <!-- ======= Contact Section ======= -->

        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-8 footer-contact">
                        <h3><b>Tracking Covid</b></h3>
                        <p>
                            Jalan Situ Tarate Jl. Cibaduyut Raya, Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung, Jawa
                            Barat 40265 <br><br>
                            <strong>Telepon:</strong> (022) 5420220<br>
                            <strong>Email:</strong> smk@smkassalaambandung.sch.id<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Tautan Berguna</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#provinsi">Data Kasus Provinsi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#global">Data Kasus Dunia</a></li>

                        </ul>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> --}}


                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy;
                    Hak Cipta <strong><span>Tracking Covid</span></strong>. Seluruh hak cipta

                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Didesain oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            {{-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> --}}
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
