<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Teman Jawara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="img/logo1.ico">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <img class="img-fluid" src="img/logo.png" alt="Icon" style="width: 70px; height: 35,44px;">
                    <img class="img-fluid" src="img/garis1.svg" alt="Icon" style="width: 50px; height: 50px;">
                    <h1 class="m-0 text-primary">TemanJawara</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="c-collage.html" class="dropdown-item">Collage Competition</a>
                                <a href="c-school.html" class="dropdown-item">High School Competition </a>
                                <a href="c-action.html" class="dropdown-item">Action-learning Series</a>
                            </div>
                        </div>
                        <a href="info.html" class="nav-item nav-link">Info Lomba</a>
                    </div>
                    <a href="login.php" class="btn btn-primary px-3 d-none d-lg-flex">Masuk</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Mari Raih<span class="text-primary"> Juara</span>
                        Bersama <span class="text-primary">TemanJawara.</span></h1>
                    <p class="animated fadeIn mb-4 pb-2">Ayo mulai misimu bersama kami untuk meraih kesuksesan dalam semua kompetisi yang ingin dicapai.</p>
                    <a href="login.html" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Mulai Perjalanan</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/foto1.png" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/foto2.png" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/foto3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Kompetisi</option>
                                    <option value="1">PKM</option>
                                    <option value="2">Gemastik</option>
                                    <option value="3">P2MW</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Kelas</option>
                                    <option value="1">Webinar</option>
                                    <option value="2">Bootcamp</option>
                                    <option value="3">Kelas Konsultasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1000px;">
                    <h1 class="mb-3">SELAMAT DATANG DI <span class="text-primary"> TEMANJAWARA</span></h1>
                </div>
            </div>
            <!-- Category End -->


            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="img/about.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4">#1 Place To Find The Perfect Mentoring Website!</h1>
                            <p class="mb-4">TemanJawara is a mentoring service website aimed at
                                students and college students who want to take part in competitions with
                                Action-learning mentoring method, TemanJawara brings new changes in
                                the world of online mentoring.
                            </p>
                            <p><i class="fa fa-check text-primary me-3"></i>Experienced mentor</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Action-learning Mentoring</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Diverse Choices of Program</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Quality Services</p>
                            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Property List Start -->
            <div class="container-xxl py-5" id="services">
                <div class="container">
                    <div class="row g-0 gx-5 align-items-end">
                        <div class="col-lg-6">
                            <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                <h1 class="mb-3">List Kelas</h1>
                                <p>TemanJawara menyediakan beberapa variasi kelas mentoring
                                    yang dapat dipiih mulai dari siswa SMA sampai mahasiswa.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                            <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                        href="#tab-1">Semua</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#mahasiswa">Mahasiswa</a>
                                </li>
                                <li class="nav-item me-0">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#siswa">Siswa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-pkm.jpg" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring PKM</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>19.00-21.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-pm2w.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring P2MW</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>13.00-15.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-OSN.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba OSN</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>15.00-17.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-gemastik.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring GEMASTIK</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-OPSI.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba OPSI</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-compfest.jpg" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring COMPFEST</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>15.00-17.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="btn btn-primary py-3 px-5" href="">Kelas Lainnya</a>
                                </div>
                            </div>
                        </div>
                        <div id="mahasiswa" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-pkm.jpg" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring PKM</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>19.00-21.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-pm2w.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring P2MW</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>13.00-15.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-gemastik.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring GEMASTIK</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-compfest.jpg" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring COMPFEST</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>14 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>15.00-17.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-kri.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Mahasiswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Mentoring KRI (Kontes Robot Indonesia)</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="btn btn-primary py-3 px-5" href="">Kelas Lainnya</a>
                                </div>
                            </div>
                        </div>
                        <div id="siswa" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-OSN.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba OSN</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>15.00-17.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-OPSI.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba OPSI</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-o2sn-sma-2024.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba O2SN</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>12 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>10.00-12.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-FIKSI.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba FIKSI</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>12 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>13.00-15.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/fls2n-logo.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba FLS2N</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>12 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>15.00-17.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/logo-LKS SMK.png" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                Siswa</div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                Bootcamp</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp35.000</h5>
                                            <a class="d-block h5 mb-2" href="">Kelas Lomba LKS SMK</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Online Meeting at
                                                Zoom</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-calendar-alt text-primary me-2"></i>13 Juli 2024</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>13.00-15.00</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="btn btn-primary py-3 px-5" href="">Kelas Lainnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Property List End -->


            <!-- Call to Action Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="bg-light rounded p-3">
                        <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                    <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                                </div>
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="mb-4" id="contact">
                                        <h1 class="mb-3" id="">Contact With Our Customer Services</h1>
                                        <p>Apakah Anda memerlukan bantuan dengan layanan dan produk kami? Cukup hubungi
                                            kami melalui telepon atau buat janji temu dengan kami.</p>
                                    </div>
                                    <a href="https://wa.me/6285784283713" class="btn btn-primary py-3 px-4 me-2"><i
                                            class="fa fa-phone-alt me-2"></i>WhatsApp</a>
                                    <a href="https://calendar.app.google/uwLohzNzKrKvn19d8"
                                        class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Buat Janji
                                        Temu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->


            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Our Mentor</h1>
                        <p>Halo semuanya, perkenalkan kami adalah para mentor yang akan
                            membimbing kalian menuju kesuksesan. Selamat bertemu di kelas-kelas yang akan datang.</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/mentor1.png" alt="">
                                    <div
                                        class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square mx-1" href="https://wa.me/6285784283713">
                                            <img class="WhatsApp" src="img/WhatsApp-Logo-1.png" style="height: 20px; width: 20px;"></i>
                                        </a>
                                        <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/sadrakh-zefanya-putra/"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-square mx-1" href="https://www.instagram.com/sdrzfn_/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Sadrakh Zefanya</h5>
                                    <small>Programming & Coding</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/mentor2.png" alt="">
                                    <div
                                        class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square mx-1" href="https://wa.me/6285882044887">
                                            <img class="WhatsApp" src="img/WhatsApp-Logo-1.png" style="height: 20px; width: 20px;"></i>
                                        </a>
                                        <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/najma-choirun-nisa-75a70a23b/"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-square mx-1" href="https://www.instagram.com/najma.nisa24/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Najma Choirunnisa</h5>
                                    <small>Ideation</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/mentor3.png" alt="">
                                    <div
                                        class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square mx-1" href="https://wa.me/6285155048234">
                                            <img class="WhatsApp" src="img/WhatsApp-Logo-1.png" style="height: 20px; width: 20px;"></i>
                                        </a>
                                        <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/ilhamazhiim/"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-square mx-1" href="https://www.instagram.com/azhimm/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Ilham Azhiim</h5>
                                    <small>Design Thinking</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/mentor4.png" alt="">
                                    <div
                                        class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                        <a class="btn btn-square mx-1" href="https://wa.me/62895382155800">
                                            <img class="WhatsApp" src="img/WhatsApp-Logo-1.png" style="height: 20px; width: 20px;"></i>
                                        </a>
                                        <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/arkanaeru/"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-square mx-1" href="https://www.instagram.com/arkanaeru_/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Zahrah Hayat Arka</h5>
                                    <small>Business Specialists</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Our Clients Say!</h1>
                        <p>Apa yang mereka katakan setelah bergabung dengan kelas TemanJawara? Temukan jawabannya
                            dibawah ini!</p>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <p>Saya merasa terbantu sekali karena mengikuti kelas bootcamp PKM. Saya merasa
                                    pelajaran yang paling penting setelah mengikuti kelas bootcamp tersebut adalah cara
                                    membentuk dan menentukan sebuah ide</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimoni-12.jpg"
                                        style="width: 45px; height: 45px;">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1">Hafidz Ridwan</h6>
                                        <small>Mahasiswa</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <p>Mengikuti Action-Learning Series dari TemanJawara sangat membantu memberikan insight
                                    mengenai cara membuat proposal yang layak pada perlombaan.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimoni-1.jpg"
                                        style="width: 45px; height: 45px;">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1">Putri Nurul Hidayati</h6>
                                        <small>Mahasiswa</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <p>Setelah mengikuti kelas bootcamp dan Action-Learning Series dari TemanJawara, saya
                                    merasa mampu untuk memenangkan perlombaan apapun itu!</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                                        style="width: 45px; height: 45px;">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1">D'andra Maydzarin Amadea</h6>
                                        <small>Mahasiswa</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Surabaya, Jawa Timur, Indonesia</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 8578 4283 713</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>fishfoster@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.instagram.com/hanastavijaya.upnvjt/"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.youtube.com/channel/UCWT05cJ5tNdX8dvwV70tjtw"><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.linkedin.com/company/havijayaupnjatim/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Quick Links</h5>
                            <a class="btn btn-link text-white-50" href="about.html">About Us</a>
                            <a class="btn btn-link text-white-50" href="contact.html">Contact Us</a>
                            <a class="btn btn-link text-white-50" href="#services">Our Services</a>
                            <a class="btn btn-link text-white-50" href="privacy.html">Privacy Policy</a>
                            <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Photo Gallery</h5>
                            <div class="row g-2 pt-2">
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/foto1.png" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/foto2.png" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/foto3.png" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/carousel-2.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/college.jpeg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="img/foto2.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">TemanJawara</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="#">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>