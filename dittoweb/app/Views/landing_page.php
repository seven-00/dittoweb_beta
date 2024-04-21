<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <style>
        body {
            font-family: "Montserrat", sans-serif!important;
            font-optical-sizing: auto !important;
            font-weight: 300 !important;
            font-style: normal !important;
        }

        #custom-title {
            font-family: "Montserrat", sans-serif!important;
            font-optical-sizing: auto !important;
            font-weight: 300 !important;
            font-style: normal !important;
            font-size: 50px;
        }

        header {
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        #content {
            padding-top: 130px;
            /* Adjust this value as needed */
            overflow: hidden;
            position: relative;
        }

        #icons {
            transform: translate(-0%, -0%) scale(0.6);
        }

        #headerVideo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            transform: translate(-0%, -0%) scale(1.2);
        }
    </style>

    <title>Ditto</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
        <!-- Navigation-->
        <header class="video-header">
            <video autoplay muted loop id="headerVideo">
                <source src="assets/videos/bgm.webm" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container px-7">
                    <a class="navbar-brand" href="/dittoweb.com">Ditto logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dittoweb.com/login">login</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header id="content">
                <div class="container px-10">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Welcome to Ditto</h1>
                                <p class="lead fw-normal text-white mb-4">
                                    Explore diverse movies from classics to blockbusters. Join our community of movie enthusiasts and embark on a cinematic journey.
                                </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">

                                    <div class="form-group d-grid gap-3">
                                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email" style="max-width: 400px;">
                                    </div>
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/dittoweb.com/register">Get started</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="/dittoweb.com/assets/images/sliderimg1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="/dittoweb.com/assets/images/sliderimg2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="/dittoweb.com/assets/images/sliderimg3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </header>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder " id="custom-title">Watch with us</h2>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <video autoplay muted loop id="icons">
                                <source src="assets/videos/tv.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Android</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Android TV</h5>
                                </a>
                                <p class="card-text mb-0">Availabe to latest Android Tv. Spend your time with your family along with us. We'll take care of the entertainment part. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <video autoplay muted loop id="icons">
                                <source src="assets/videos/web.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Web</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Ditto website</h5>
                                </a>
                                <p class="card-text mb-0">Watch anyplace anytime, now available to stream in mars by our <mark>collaboration with Elon musk.</mark></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <video autoplay muted loop id="icons">
                                <source src="assets/videos/phone.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">App</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Android and IOS</h5>
                                </a>
                                <p class="card-text mb-0">Android app is coming soon. We have plans to develop IOS app in future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to action-->
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>