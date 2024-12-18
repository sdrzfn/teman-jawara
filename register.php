<?php
	require('koneksi.php');
	
	if (isset($_POST['email']) && isset($_POST['password'])){
		$username = $_POST['Nama'];
        $usia = $_POST['Usia'];
        $jk = $_POST['JenisKelamin'];
        $institusi = $_POST['Institusi'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	 
	$sql = "INSERT INTO user (Nama, Usia, JenisKelamin, Institusi, email, password)
	VALUES ('$username', $usia, $jk, $institusi, '$email', '$password')";

	    if (mysqli_query($koneksi, $sql)) {
		    echo "<center><h3>Data telah terekam!<br/>Klik disini untuk login <a href='login.php'>Login</a></h3></center>";
	    } else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	    }

	mysqli_close($koneksi);       
			
    }

?>
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
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">                    
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
                    <a href="login.html" class="btn btn-primary px-3 d-none d-lg-flex">Masuk</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large; margin-top: 50px;">Nama Lengkap
                        <input type="text" class="form-control border-top py-3" placeholder="Nama Lengkap">
                    </p>
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large;">Usia
                        <input type="text" class="form-control border-top py-3" placeholder="Usia">
                    </p>
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large;">Jenis Kelamin
                        <input type="text" class="form-control border-top py-3" placeholder="Jenis Kelamin">
                    </p>
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large;">Asal Institusi
                        <input type="text" class="form-control border-top py-3" placeholder="Jenis Kelamin">
                    </p>
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large;">E-Mail
                        <input type="text" class="form-control border-top py-3" placeholder="E-Mail">
                    </p>
                    <p class="animated fadeIn mb-4 pb-2" style="font-weight: bolder; font-size: large;">Password
                        <input type="text" class="form-control border-top py-3" placeholder="Password">
                    </p>
                    <a href="login.html"><p class="animated fadeIn mb-4 pb-2">Sudah Punya Akun?</p></a>
                    <a href="index.html" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Daftar</a>
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