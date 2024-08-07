<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jadwal-dokter | Klinik GPA</title>
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header col-md-2 col-sm-2 col-xs-12">
                    <figure class="logo">
                        <a href="../">
                            <img src="images/logoklinik.png" alt="Logo Klinik" width="80">
                        </a>
                    </figure>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../">Beranda</a></li>
                        <li><a href="../jadwaldokter">Jadwal Dokter</a></li>
                        <li><a href="../layanan">Layanan</a></li>
                        <li><a href="../tentang">Tentang</a></li>
                        <li><a href="../kontak">Kontak</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../auth/login" class="btn btn-main">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-title text-center" style="background-image:url(images/slider/slider-bg-1.jpg);">
            <div class="container">
                <div class="title-text">
                    <h1>Jadwal Dokter</h1>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-container">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <th>Poli Layanan</th>
                                        <th>Hari</th>
                                        <th>Jam Praktek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwalDokter as $jadwal)
                                        <tr>
                                            <td>{{ $jadwal->nama_dokter }}</td>
                                            <td>{{ $jadwal->spesialisasi }}</td>
                                            <td>{{ $jadwal->hari }}</td>
                                            <td>{{ $jadwal->jam_praktek }}</td>
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

        <footer class="footer-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index.html">
                                            <img src="images/logoklinik.png" alt="Klinik Logo" width="120">
                                        </a>
                                    </figure>
                                </div>
                                <ul class="location-link">
                                    <li class="item">
                                        <i class="fa fa-map-marker"></i>
                                        <p>Tarutung, Sumatera Utara</p>
                                    </li>
                                    <li class="item">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <a href="mailto:klinikgloriaputraabadi@gmail.com">
                                            <p>klinikgloriaputraabadi@gmail.com</p>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p>(88017) +123 4567</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <h6>Tautan</h6>
                            <ul class="menu-link">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> IGD 24 Jam
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Pemeriksaan Umum
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Elektrokardiografi (EKG)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Ultrasonografi (USG)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Persalinan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Bedah Minor
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> Konsultasi Kecantikan Wajah
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="social-links">
                                <h6>Sosial Media</h6>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container clearfix">
                    <div class="copyright-text">
                        <p>Klinik Gloria Putra Abadi &copy; 2024 </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="plugins/jquery.js"></script>
    <script src="plugins/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="plugins/smoothscroll.js"></script>
    <script src="plugins/wow/wow.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
