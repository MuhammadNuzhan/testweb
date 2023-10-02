<!DOCTYPE html>
<html>

<head>
    <title>My Self</title>
    <title>My Self</title>
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
    <link rel="icon" href="example_favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bd64e728a.js" crossorigin="anonymous"></script>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif;
        }

        .card {
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
        }

        .grayscale {
            filter: grayscale(100%);
            transition: filter 4s;
            /* Menambahkan efek transisi */
        }

        .grayscale:hover {
            filter: grayscale(0%);
        }

        @media (max-width: 992px) {
            .sidebar {
                display: none;
                /* Sembunyikan sidebar */
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- Container for the whole page -->
    <div class="container-fluid" style="max-width: 1400px;">

        <!-- Header -->
        <header class="text-center bg-secondary text-light mt-1 pt-4">
            <h1><b>MY BLOG</b></h1>
            <p>Welcome to the blog of <span class="badge badge-dark">HAHA</span></p>
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
                            <a class="nav-link text-light" href="#"><i class="fa fa-bullhorn"> </i> Announcement</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-info-circle"> </i> About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuDropdown">
                                <a class="dropdown-item" href="#">Editorial Team</a>
                                <a class="dropdown-item" href="#">Privacy Statement</a>
                                <a class="dropdown-item" href="#">About the Journal</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i class="fa fa-address-book"> </i> Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Row for Grid -->
        <div class="row">

            <!-- Blog entries -->
            <div class="col-lg-3 col-md-12"> <!-- Mengatur kolom kiri -->
                <!-- Blog entry -->
                <div class="card mb-3">
                    <h5 class="bg-dark text-light " style="padding: 15px;">Journal Issue</h5>
                    <img src="image/coverissue.png" class="mx-auto">
                    <div class="card-body">
                        <p class="card-text text-center text-small">Published by University of California<br>
                            Quarterly Publication</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="image/woods.jpg" alt="Nature" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><b>TITLE HEADING</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-primary"><b>READ MORE »</b></button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom tengah -->
            <div class="col-lg-6 col-md-12"> <!-- Mengatur kolom tengah menjadi lebih lebar -->
                <!-- Blog entry -->
                <div class="card mb-3">
                    <img src="image/homepage.jpg" alt="Norway" class="card-img-top">
                    <div class="card-body">

                        <p class="card-text">The Novelty Theme is one of the newest ojs 3 themes launched by the Openjournaltheme team earlier this year, this Novelty Theme has a main focus on simplicity and functionality</p>
                        <p>

                            There is no other theme that provides as many features as the Novelty theme. Some of the excellent features in Novelty such as upcoming issues, three columns, easy setup, articles with images, articles with citation badges, article categories, share able, published by year, and clickable reviewer and author, <a href="">Click here for more information.</a></p>

                    </div>
                </div>
                <div class="card mb-3">
                    <img src="image/sunset.jpg" alt="Norway" class="grayscale card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><b>BLOG ENTRY</b></h3>
                        <p class="card-text">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-primary"><b>READ MORE »</b></button>
                            </div>
                            <div class="col-md-4">
                                <p class="text-right"><b>Comments  </b> <span class="badge badge-primary">2</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Introduction menu -->
            <div class="col-lg-3 col-md-12"> <!-- Mengatur kolom kanan -->
                <!-- About Card -->
                <div class="card mb-3">
                    <img src="image/avatar_g.jpg" alt="My Photo" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><b>My Name</b></h4>
                        <p class="card-text">Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest in lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                    </div>
                </div>

                <!-- Posts -->
                <div class="card mb-3">
                    <h4 class="bg-dark text-light" style="padding: 15px;">Menu</h4>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="font-weight-bold">Lorem</span><br>
                                <span>Sed mattis nunc</span>
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">Ipsum</span><br>
                                <span>Praes tinci sed</span>
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">Dorum</span><br>
                                <span>Ultricies congue</span>
                            </li>
                            <li class="list-group-item d-none d-md-block">
                                <!-- <img src="image/kitten.jpeg" alt="Image" class="img-fluid mr-3" style="width:50px;"> -->
                                <span class="font-weight-bold">Mingsum</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Labels / tags -->
                <div class="card">
                    <h4 class="bg-dark text-light " style="padding: 15px;">Keyword</h4>
                    <p>
                    <div class="card-body">
                        <span class="badge badge-dark mr-1">Travel</span>
                        <span class="badge badge-light mr-1">New York</span>
                        <span class="badge badge-light mr-1">London</span>
                        <span class="badge badge-light mr-1">IKEA</span>
                        <span class="badge badge-light mr-1">NORWAY</span>
                        <span class="badge badge-light mr-1">DIY</span>
                        <span class="badge badge-light mr-1">Ideas</span>
                        <span class="badge badge-light mr-1">Baby</span>
                        <span class="badge badge-light mr-1">Family</span>
                        <span class="badge badge-light mr-1">News</span>
                        <span class="badge badge-light mr-1">Clothing</span>
                        <span class="badge badge-light mr-1">Shopping</span>
                        <span class="badge badge-light mr-1">Sports</span>
                        <span class="badge badge-light mr-1">Games</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- END ROW -->
        </div><br>

        <!-- END Container -->
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-dark text-white text-center py-5 mt-2">
        <button class="btn btn-secondary disabled">Previous</button>
        <button class="btn btn-secondary">Next »</button>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>

</body>

</html>