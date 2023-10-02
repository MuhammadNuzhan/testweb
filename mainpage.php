<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Blog Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Oswald", sans-serif;
        }

        body {
            font-family: "Open Sans", sans-serif;
        }

        .card {
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navigation bar with social media icons -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fa fa-rss"></i> JANE BLOGLIFE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-official"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-snapchat"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Container -->
    <div class="container mt-4">

        <!-- Header -->
        <header class="text-center py-5">
            <h1 class="display-1"><b>JANE BLOGLIFE</b></h1>
            <h6>Welcome to the blog of <span class="badge badge-primary">Jane's world</span></h6>
        </header>

        <!-- Image header -->
        <header class="w3-display-container w3-wide">
            <img class="img-fluid" src="image/skenpatbg.png" alt="Fashion Blog">
            <div class="w3-display-left w3-padding-large">
                <!-- <h1 class="text-dark">Jane's</h1>
                <h1 class="display-1 text-dark d-none d-sm-block"><b>FASHION BLOG</b></h1> -->
            </div>
        </header>

        <!-- Grid -->
        <div class="row py-4">

            <!-- Blog entries -->
            <div class="col-lg-8 col-md-12">

                <!-- Blog entry 1 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">TITLE HEADING</h3>
                        <h6 class="card-subtitle text-muted">Title description, <span class="w3-opacity">May 2, 2016</span></h6>
                        <img src="image/girl_hat.jpg" alt="Girl Hat" class="img-fluid my-3 w-100">
                        <p><strong>More Hats!</strong> I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <button class="btn btn-light" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
                        <button class="btn btn-dark float-right" onclick="myFunction('demo1')"><b>Replies  </b> <span class="badge badge-light">1</span></button>
                    </div>

                </div>


                <!-- Blog entry 2 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">TITLE HEADING</h3>
                        <h6 class="card-subtitle text-muted">Title description, <span class="w3-opacity">April 23, 2016</span></h6>
                        <img src="image/man_hat.jpg" alt="Men in Hats" class="img-fluid my-3 w-100">
                        <p><strong>Hats!</strong> The trend this summer is hats for men!</p>
                        <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <button class="btn btn-light" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
                        <button class="btn btn-dark float-right" onclick="myFunction('demo1')"><b>Replies  </b> <span class="badge badge-light">1</span></button>

                    </div>


                </div>

                <!-- Blog entry 3 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">TITLE HEADING</h3>
                        <h6 class="card-subtitle text-muted">Title description, <span class="w3-opacity">April 7, 2016</span></h6>
                        <img src="image/sunset.jpg" alt="Runway" class="img-fluid my-3 w-100">
                        <p><strong>Dont miss!</strong> The runway in New York City this weekend is gonna be legendary!</p>
                        <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <button class="btn btn-light" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
                        <button class="btn btn-dark float-right" onclick="myFunction('demo1')"><b>Replies  </b> <span class="badge badge-light">1</span></button>

                    </div>
                </div>
            </div>

            <!-- About/Information menu -->
            <div class="col-lg-4">

                <!-- About Card -->
                <div class="card mb-4">
                    <img src="image/avatar_g.jpg" alt="Jane" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">My Name</h4>
                        <p class="card-text">Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                    </div>
                </div>

                <!-- Popular Posts -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Popular Posts</h4>
                        <ul class="list-unstyled">
                            <li class="media mb-3">
                                <img src="/w3images/avatar_smoke.jpg" class="mr-3" alt="Denim" style="width:60px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Denim</h5>
                                    Sed mattis nunc
                                </div>
                            </li>
                            <li class="media mb-3">
                                <img src="/w3images/bandmember.jpg" class="mr-3" alt="Sweaters" style="width:60px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Sweaters</h5>
                                    Praes tinci sed
                                </div>
                            </li>
                            <li class="media mb-3">
                                <img src="/w3images/workshop.jpg" class="mr-3" alt="Workshop" style="width:60px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Workshop</h5>
                                    Ultricies congue
                                </div>
                            </li>
                            <li class="media">
                                <img src="/w3images/avatar_smoke.jpg" class="mr-3" alt="Trends" style="width:60px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Trends</h5>
                                    Lorem ipsum dipsum
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Advertising -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Advertise</h4>
                        <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
                            <span class="w3-display-middle">Your AD Here</span>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Tags</h4>
                        <p>
                            <span class="badge badge-primary">Fashion</span>
                            <span class="badge badge-secondary">New York</span>
                            <span class="badge badge-secondary">London</span>
                            <span class="badge badge-secondary">Hats</span>
                            <span class="badge badge-secondary">Norway</span>
                            <span class="badge badge-secondary">Sweaters</span>
                            <span class="badge badge-secondary">Ideas</span>
                            <span class="badge badge-secondary">Deals</span>
                            <span class="badge badge-secondary">Accessories</span>
                            <span class="badge badge-secondary">News</span>
                            <span class="badge badge-secondary">Clothing</span>
                            <span class="badge badge-secondary">Shopping</span>
                            <span class="badge badge-secondary">Jeans</span>
                            <span class="badge badge-secondary">Trends</span>
                        </p>
                    </div>
                </div>

                <!-- Inspiration -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Inspiration</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="image/dummy.jpg" alt="Jeans" class="img-fluid mb-3">
                                <img src="image/dummy.jpg" alt="Jeans" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-6">
                                <img src="image/dummy.jpg" alt="Men in Hats" class="img-fluid mb-3">
                                <img src="image/dummy.jpg" alt="Jeans" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Follow Me -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Follow Me</h4>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
                            <a href="#"><i class="fa fa-instagram w3-hover-opacity"></i></a>
                            <a href="#"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
                            <a href="#"><i class="fa fa-twitter w3-hover-opacity"></i></a>
                            <a href="#"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Subscribe -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Subscribe</h4>
                        <p>Enter your e-mail below and get notified on the latest blog posts.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter e-mail" aria-label="Recipient's email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModalLabel">SUBSCRIBE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter e-mail" aria-label="Recipient's email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <a href="#" class="btn btn-dark btn-lg w3-hover-opacity"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                myFunction('demo1'); // Menampilkan konten secara default saat halaman dimuat
            });
        </script>


</body>