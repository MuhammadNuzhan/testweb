<!DOCTYPE html>
<html>

<head>

    <title>Test Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Bootstrap JavaScript (optional, for components like modals) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Raleway Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <!-- Favicon (example URL) -->
    <link rel="icon" href="image/bell.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bd64e728a.js" crossorigin="anonymous"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        a.nav-link {
            margin-right: 10px;
            font-size: 15px;
        }

        .card {
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tengah {
            margin: 0 -12px;
        }

        .kiri {
            margin-left: 11px;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 1px;
            padding-left: 1px;
            margin-right: auto;
            margin-left: auto;
            background-color: #f3f3f3;
        }

        .grayscale {
            filter: grayscale(100%);
            transition: filter 4s;
            /* Menambahkan efek transisi */
        }

        .grayscale:hover {
            filter: grayscale(0%);
        }

        .menu-list.list-group-item {
            background: #fff;
            background-size: 200%;
            color: #000;
            transition: background 0.7s;
        }

        .menu-list.list-group-item:hover {
            background: linear-gradient(to right, transparent 50%, #343a40 50%);
            background-size: 200%;
            background-position: -100%;
            color: #fff;
            cursor: pointer;

        }

        .card-body .menu-list a:hover {
            text-decoration: none;
        }

        .media {
            margin-bottom: 2em;
        }

        footer {
            padding-left: 10px;
            padding-right: 10px;
        }

        .menu-list.list-group-item {
            margin-bottom: 9px;

        }

        .sosmed a {
            display: flex;
            justify-content: center;
            margin-bottom: 14px;
            margin-top: -6px;
        }

        @media (max-width: 992px) {
            /* .sidebar {
                display: none;
               
            } */

            .tengah,
            .kiri,
            .kanan {
                margin: auto;
            }

            .media img.mr-3 {
                min-width: 369px;
            }

            .card iframe {
                min-width: 369px;
                margin: auto;
            }

            body>div>div>div.kiri.col-lg-3.col-md-12>div:nth-child(4)>div {
                margin-left: 28px;
            }

            form .search {
                margin-right: 6px;
            }

            .col-md-10.mx-auto {

                width: 407px;
            }
        }
    </style>
</head>

<body style="background-color: #fff;">

    <!-- Container for the whole page -->
    <div class="container-fluid" style="max-width: 1270px;">

        <!-- Header -->
        <header class="text-center bg-secondary text-light mt-1 pt-4">
            <h1><b>MY ....</b></h1>
            <p>Welcome to <span class="badge badge-dark">....</span></p>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
                <!-- Tambahkan tombol hamburger menu di sini -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Tambahkan daftar navigasi di sini -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home"> </i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#berita"><i class="fa fa-bullhorn"> </i> News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-info-circle"> </i> About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuDropdown">
                                <a class="dropdown-item" href="#">Tentang Kami</a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#kontak"><i class="fa fa-address-book"> </i> Contact</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="search form-control mr-sm-2" type="search" style="width: 219px; height: 31px;" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light my-2 my-sm-0 btn-sm" type="submit">Search</button>
                </form>
            </nav>
        </header>

        <!-- Row for Grid -->
        <div class="row">

            <!-- Blog entries -->
            <div class="kiri col-lg-3 col-md-12"> <!-- Mengatur kolom kiri -->
                <!-- Blog entry -->
                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">Upcoming Event</h6>
                    <img src="image/school_event.png" class="mx-auto mt-3">
                    <div class="card-body" style="margin-top: -11px;">
                        <p class="card-text text-center">
                            <b style="font-size:21px; ">Back to School</b><br>
                            Save the Date
                        </p>

                    </div>
                </div>
                <!-- Blog entry -->
                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">PPDB</h6>
                    <img src="image/info_ppdb.jpeg" class="mx-auto mt-3">
                    <div class="card-body">
                        <p class="card-text text-center text-small">Penerimaan Peserta
                            Didik Baru<br>
                            <a href="#">Info Selengkapnya</a>
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="image/woods.jpg" alt="Nature" class="card-img-top">
                    <div class="card-body" style="margin-bottom: -14px;">
                        <h3 class="card-title"><b>TITLE HEADING</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <!-- <button class="btn btn-outline-primary btn-sm">READ MORE »</button> -->
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">Facebook</h6>

                    <div class="card-body">
                        <center>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fopenjournalofficial&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="400" style="border:none;overflow:hidden; margin-left:-14px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </center>

                    </div>
                </div>
            </div>

            <!-- Kolom tengah -->
            <div class="tengah col-lg-6 col-md-12"> <!-- Mengatur kolom tengah menjadi lebih lebar -->
                <!-- Blog entry -->
                <div class="card mb-3">
                    <img src="image/homepage.jpg" alt="Norway" class="card-img-top">
                    <div class="card-body" style="margin-bottom:-20px;">

                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<a href=""> Click here for more information.</a></p>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="image/sunset.jpg" alt="Norway" class="grayscale card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><b>GRAYSCALE</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-outline-primary btn-sm">READ MORE »</button>
                            </div>
                            <div class="col-md-4">
                                <!-- <p class="text-right"><b>Comments  </b> <span class="badge badge-primary">2</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" id="berita">
                    <div class="card-body">
                        <!-- Berita 1 -->
                        <div class="media flex-column flex-md-row">
                            <img src="image/toeic.jpeg" class="mr-3" alt="Gambar Berita 1" style="max-width: 200px;">
                            <div class="media-body">
                                <h5 class="mt-0">Pelaksanaan TOEIC</h5>
                                <p>Pelaksanaan Sertifikasi Internasional Kemampuan Bahasa Inggris TOEIC 2023 di SMK Negeri 4 Banjarmasin </p>
                                <a href="#" class="btn btn-success btn-sm">Baca Selengkapnya »</a>
                            </div>
                        </div>
                        <!-- Berita 2 -->
                        <div class="media flex-column flex-md-row">
                            <img src="image/news1.jpeg" class="mr-3" alt="Gambar Berita 1" style="max-width: 200px;">
                            <div class="media-body">
                                <h5 class="mt-0">SMKN 4 Banjarmasin Gelar Kegiatan Job Fair</h5>
                                <p>SMKN 4 Banjarmasin menggelar Job Fair 2023 di Taman Budaya Kalsel di Jalan Brigjen H Hasan Basri. </p>
                                <a href="#" class="btn btn-success btn-sm">Baca Selengkapnya »</a>
                            </div>
                        </div>
                        <!-- Berita 3 -->
                        <div class="media flex-column flex-md-row">
                            <img src="image/ujian.jpeg" class="mr-3" alt="Gambar Berita 1" style="max-width: 200px;">
                            <div class="media-body">
                                <h5 class="mt-0">Pelaksanaan Ujian Sekolah (US) Kelas XII
                                </h5>
                                <p>Peserta didik kelas XII baru saja berhasil menyelesaikan pelaksanaan Ujian Kompetensi Keahlian </p>
                                <a href="#" class="btn btn-success btn-sm">Baca Selengkapnya »</a>
                            </div>
                        </div>
                        <!-- Berita 4 -->
                        <div class="media flex-column flex-md-row">
                            <img src="image/workshop.jpeg" class="mr-3" alt="Gambar Berita 1" style="max-width: 200px;">
                            <div class="media-body">
                                <h5 class="mt-0">Workshop Sosial Media Marketing</h5>
                                <p>SMKN 4 Banjarmasin, menggelar kegiatan workshop Sosial Media Marketing (SMM) </p>
                                <a href="#" class="btn btn-success btn-sm">Baca Selengkapnya »</a>
                            </div>
                        </div>
                        <!-- Berita 5 -->
                        <div class="media flex-column flex-md-row">
                            <img src="image/khataman.jpeg" class="mr-3" alt="Gambar Berita 1" style="max-width: 200px;">
                            <div class="media-body">
                                <h5 class="mt-0">Sekolah menggelar khataman</h5>
                                <p>Sekolah Menengah Kejuruan Negeri 4 Banjarmasin menggelar acara Salat Dhuha dan Khataman Alquran.</p>
                                <a href="#" class="btn btn-success btn-sm">Baca Selengkapnya »</a>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm float-right">Tampilkan Selengkapnya »</button>
                    </div>
                </div>
            </div>


            <!-- Introduction menu -->
            <div class="kanan col-lg-3 col-md-12"> <!-- Mengatur kolom kanan -->
                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">Social Media</h6>

                    <div class="sosmed card-body" style="margin-bottom:-13px;">
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-youtube my-auto"></i> ` Youtube</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-instagram my-auto"></i> ` Instagram</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-twitter my-auto"></i> ` Twitter</a>

                    </div>

                </div>


                <!-- About Card -->
                <div class="card mb-3">
                    <h6 class="bg-dark text-light" style="padding: 15px; margin-bottom: -1px;">Menu</h6>

                    <div class="card-body" style="margin-bottom: -9px;">
                        <ul class="menu-list list-group">
                            <a href="#">
                                <li class="menu-list list-group-item">
                                    <span>Tim Manajemen</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item">
                                    <span>Tenaga Pendidik</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item">
                                    <span>Tenaga Kependidikan</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item d-none d-md-block">
                                    <!-- <img src="image/kitten.jpeg" alt="Image" class="img-fluid mr-3" style="width:50px;"> -->
                                    <span>Ketua Kompetensi Keahlian</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item">
                                    <span>Kompetensi Keahlian</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item">

                                    <span>Tata Tertib</span>
                                </li>
                            </a>
                            <a href="#">
                                <li class="menu-list list-group-item">
                                    <span>Makna Logo</span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">Visitors</h6>

                    <div class="card-body">
                        <center>
                            <a href="https://info.flagcounter.com/0QUC"><img src="https://s01.flagcounter.com/count2/0QUC/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                        </center>

                    </div>
                </div>
                <!-- Posts -->
                <div class="card mb-3" id="kontak">
                    <h6 class="bg-dark text-light" style="padding: 15px;">Address</h6>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1955.051313800522!2d114.59159140212572!3d-3.2950487063563467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a0b07eb9cd%3A0xc5fc816bceb7bcf7!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Banjarmasin!5e0!3m2!1sid!2sid!4v1696294907680!5m2!1sid!2sid" width="260" height="260" style="border:0; margin: auto; margin-top:7px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="card-body">
                        <!-- <h4 class="card-title"><b>Alamat</b></h4> -->
                        <p class="card-text">JL. Brigjend H. Hasan Basri No. 7<br>Banjarmasin, Kalimantan Selatan<br><i class="fa fa-phone"></i> : 0511 – 3305054<br><i class="fa fa-at"></i> : info@smkn4bjm.sch.id </p>
                    </div>
                </div>
                <div class="card mb-3" id="pesan">
                    <h6 class="bg-dark text-light" style="padding: 15px; margin-bottom: -10px;">Send Message</h6>
                    <div class="container mt-4" style="background-color: #fff;">
                        <div class="row">
                            <div class="col-md-10 mx-auto" style="background-color: #fff;">
                                <form class="pesan" action="kirimemail.php" method="post">
                                    <div class="form-group">
                                        <label for="nama"><i class="fas fa-user"></i> Nama:</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="subjek"><i class="fas fa-pen-nib"></i> Subjek:</label>
                                        <input type="text" class="form-control" name="subjek" placeholder="Masukkan judul pesan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pesan"><i class="fas fa-comment"></i> Pesan:</label>
                                        <textarea class="form-control" name="pesan" rows="4" placeholder="Masukkan pesan Anda"></textarea>
                                    </div>
                                    <button type="submit" name="send" value="Kirim" class="btn btn-primary float-right mb-3 btn-sm"><i class="fas fa-paper-plane"></i> Kirim Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Labels / tags -->
                <div class="card mb-3">
                    <h6 class="bg-dark text-light " style="padding: 15px;">Keyword</h6>

                    <div class="card-body">
                        <p>
                            <span class="badge badge-dark mr-1">School</span>
                            <span class="badge badge-light mr-1">Work</span>
                            <span class="badge badge-light mr-1">Indonesia</span>
                            <span class="badge badge-light mr-1">Banjarmasin</span>
                            <span class="badge badge-light mr-1">Learn</span>
                            <span class="badge badge-light mr-1">DIY</span>
                            <span class="badge badge-light mr-1">Ideas</span>
                            <span class="badge badge-light mr-1">Sport</span>
                            <span class="badge badge-light mr-1">Family</span>
                            <span class="badge badge-light mr-1">News</span>
                            <span class="badge badge-light mr-1">Clothing</span>
                            <span class="badge badge-light mr-1">Shopping</span>
                            <span class="badge badge-light mr-1">Games</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- END ROW -->
        </div><br>

        <!-- END Container -->
        <!-- Footer -->
        <footer class="container-fluid bg-dark text-white text-center py-5 mt-2 w-100">
            <p>&copy; 2023 SMK Negeri 4 Banjarmasin | Jl. Brigjend H. Hasan Basri No. 7, Banjarmasin, Kalimantan Selatan | Phone: 0511 – 3305054 | Email: info@smkn4bjm.sch.id</p>
        </footer>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script>
        // Fungsi untuk menampilkan/menyembunyikan navigasi saat hamburger diklik
        function toggleNavbar() {
            var navbar = document.getElementById("navbarNav");
            if (navbar.style.display === "block") {
                navbar.style.display = "none";
            } else {
                navbar.style.display = "block";
            }
        }

        // Event listener untuk memanggil fungsi toggleNavbar saat hamburger diklik
        document.querySelector(".navbar-toggler").addEventListener("click", toggleNavbar);
    </script>

</body>

</html>
