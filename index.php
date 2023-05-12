<?php
session_start();

if (@$_COOKIE['username'] != '' and @$_COOKIE['password'] != '') {
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['password'] = $_COOKIE['password'];
}

if ($_SESSION['username'] == '' and $_SESSION['password'] == '') {
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">

<!-- Alhamdulilah ini adalah Versi Revisinya pak Yogi Nugraha-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="Yogi Nugraha PTIK 3B">
    <meta name="lokasi" content="Kosan Rumah Jana">
    <meta name="keyword" content="Portofolio felyous Photography">
    <meta name="Description" content="Weebsite ini dibuat untuk menampilkan portofolio Photography & Videography saya">

    <title>Felyous Photography</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/icon/logo-01.png" type="image/x-icon">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- icon -->
    <link href="assets/icon/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="dists/css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body id="home">
    <!--Navbar Yogi-->
    <nav class="navbar navbar-expand-lg  fixed-top navbar-dark animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">Felyous.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active mx-1" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="logOut.php">Log Out</a>
                    </li>
                </ul>
                <!--Icon-->
                <div class="text-center">
                    <a target="_blank" href="https://web.facebook.com/yogi.nugraha.526438">
                        <i class="fa-brands fa-facebook fs-5 mx-2 "></i>
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@felyous">
                        <i class="fa-brands fa-tiktok fs-5 mx-2"></i>
                    </a>
                </div>
                <!--Icon-->
            </div>
        </div>
    </nav>
    <!--Navbar Yogi-->
    <!--Hero Yogi-->
    <div class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">Felyous Photography <br> Solusi Untuk Foto Burik Anda</h1>
                    <p class="text-white mb-4 text-opacity-53 animate__animated animate__fadeInUp animate__delay-1s"><i>"Photography is synonymous with freedom. The freedom to see, take and be responsible for what we record."</i><br>
                        start from now, because there is nothing wrong with starting
                    </p>

                    <button class="btn btn-primary btn-lg rounded-1 me-2 animate__animated animate__bounceInLeft animate__delay-1s">Order Now!</button>
                    <a href="#about"><button class="btn btn-outline-light btn-lg rounded-1 animate__animated animate__bounceInRight animate__delay-1s">About Me</button></a>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Yogi-->

    <!-- About Yogi -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span data-aos="fade-down" data-aos-duration="1000">About Me</span>
                <h2 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">About Me</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Yuk kenal lebih jauh dengan saya supaya kita akrab ehehe</p>
            </div>

            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"></div>
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <ul>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Yogi Nugraha</span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"><i class="bi bi-chevron-right"></i> <strong>Instagram</strong> <span> <a target="_blank" href="https://instagram.com/felyous_?igshid=ZDdkNTZiNTM=" class="text-decoration-none text-black">@felyous_</a> </span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>087896026764</span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000"><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>Cirebon, Jawa Barat Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>20</span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"><i class="bi bi-chevron-right"></i> <strong>Hoby</strong> <span>Photography</span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900"><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>ynugraha278@gmail.com</span></li>
                                    <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000"><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Photographer & Videographer</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-n4">
                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                                    <span>Keep Smile</span>
                                    <p><strong>Happy Clients</strong> Dalam memotret mood client nomer satu </p>
                                </div>
                            </div>

                            <div class="file col-md-6 mt-4 d-md-flex align-items-md-stretch" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                <div class="count-box">
                                    <a target="_blank" href="https://drive.google.com/file/d/1ATaSq2LkD0HlxpbQZm7ppJp4sXJncY4q/view?usp=drivesdk">
                                        <i class="bi bi-file-earmark" style="color: #c72cee;"></i>
                                    </a>
                                    <span>CV</span>
                                    <p><strong>Curiculum Vitae</strong> Silahkan unduh CV saya disamping</p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                                <div class="count-box">
                                    <i class="bi bi-clock" style="color: #2cbdee;"></i>
                                    <span>Experience</span>
                                    <p><strong>Years of experience</strong> Banyak sekali pengalaman yang saya lalui dari tahun ke tahun bersama camera</p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                <div class="count-box">
                                    <i class="bi bi-award" style="color: #ffb459;"></i>
                                    <span>Awards</span>
                                    <p><strong>Awards</strong> Penghargaan menurut saya tidak penting karena memang itu hanya piala kosong</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skills-content ps-lg-4 pt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class="skill">Adobe Premiere Pro <i class="val">100%</i></span>
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
                        </div>
                    </div>

                    <div class="skills-content ps-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <span class="skill">Adobe Lightroom <i class="val">90%</i></span>
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skills-content ps-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <span class="skill">Davinci Resolve <i class="val">75%</i></span>
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>


    <div class="about">
        <div class="container-fluid">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col text-center py-5 text-white" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <h2>250+</h2>
                    <h2 class="fw-bold mb-2">Projects Selesai</h2>
                    <p>Lorem ipsum dolor sit, amet <br>
                        consectetur adipisicing elit.</p>
                </div>
                <div class="col text-center py-5 bg-primary text-white" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <h2>250+</h2>
                    <h2 class="fw-bold mb2">Client</h2>
                    <p>Lorem ipsum dolor sit amet <br>
                        consectetur, adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!--About Yogi-->

    <!--Projects Yogi-->
    <div class="projects" id="projects">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="border-bottom pb-2 fw-semibold" data-aos="fade-right" data-aos-duration="1000">Detail projects <br> yang telah di selesaikan</h2>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="assets/projects/img/img1.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Dinar - Hunting</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <img src="assets/projects/img/ripki.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Ripki - Studio</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                    <img src="assets/projects/img/p2.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Marshel - Caffe</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="assets/projects/img/p9.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Escobar Vibes</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="assets/projects/img/p4.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Nabila - Caffe</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <img src="assets/projects/img/p5.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Seftiani - Studio</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
                        explicabo!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Projects Yogi-->

    <!--Service Yogi-->
    <div class="services" id="services">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">Layanan <br>
                        Yang Dapat Saya Berikan</h2>
                </div>
            </div>
            <div class="row align-items-center row-cols-lg-2 row-cols-1">
                <div class="col d-flex d-lg-block d-none">
                    <img src="assets/projects/img/p11.jpg" class="me-2" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="assets/projects/img/IMG_5533.jpg" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                </div>
                <div class="col">
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"> <i class="fa-regular fa-circle-check"></i> Bekerja Sama Vendor Hebat</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"> <i class="fa-regular fa-circle-check"></i> Gear yang sesuai standard photo professional</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600"> <i class="fa-regular fa-circle-check"></i> Good Attitude</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"> <i class="fa-regular fa-circle-check"></i> Kualitas Photo yang Jernih</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"> <i class="fa-regular fa-circle-check"></i> Keunikan Tema Photo Dapat Di Sesuaikan</h5>
                </div>
            </div>
        </div>
    </div>
    <!--Service Yogi-->

    <!-- FAQ -->
    <div class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">Pertanyaan <br>
                        Yang Biasa Ditanyakan </h2>
                </div>
            </div>
            <div class="row row-cols-lg-2 row-cols-1 g-4 pt-4">
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Bagaimana Cara Daftar Nya?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah Ada Forum Diskusi?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Berapa DP yang harus dibayar ketika ingin difoto?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Berapa lama proses pemotretan?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Apakah Tema Dominan foto anda
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana Cara Daftar Nya?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta, debitis sed quaerat exercitationem omnis reprehenderit vitae nemo perferendis, officiis id voluptate labore possimus vel fuga incidunt, sint aliquid placeat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ -->

    <!-- Footer Yogi -->
    <div class="footer pt-5">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
                <div class="col col-lg-6 mb-lg-0 mb-4">
                    <h2 class="fw-bold text-white mb-3">Felyous.</h2>
                    <p class="text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quas aliquam unde temporibus distinctio culpa id corrupti. Facilis, ipsa aspernatur.</p>
                </div>
                <div class="menu col-lg-2 d-flex flex-column mb-lg-0 mb-4">
                    <h5 class="fw-bold text-white">Menu</h5>
                    <a href="#home" class="mt-3">Home</a>
                    <a href="#about" class="mt-3">About</a>
                    <a href="#projects" class="mt-3">Projects</a>
                    <a href="#services" class="mt-3">Services</a>
                    <a href="#faq" class="mt-3">FAQ</a>
                </div>
                <div class="contactme col-lg-3 d-flex flex-column">
                    <h5 class="fw-bold text-white">Contact Me</h5>
                    <a target="_blank" href="mailto:ynugraha278@gmail.com" class=" mt-3">ynugraha278@gmail.com</a>
                    <a target="_blank" href="https://wa.me/qr/LKSNOKLOAO4PL1" class=" mt-2">+62 838-4439-5913</a>
                    <a target="_blank" href="https://t.me/@yoginugraha03" class=" mt-2">@yoginugraha03 (Telegram)</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-white text-center copyright">&copy; Copyright 2023 by Yogi Nugraha, All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Yogi -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--JS Yogi-->
    <script src="dists/js/script.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // Pilih elemen anchor tag untuk logout
        const logoutButton = document.querySelector('a[href="logOut.php"]');

        // Tambahkan event click pada elemen anchor tag
        logoutButton.addEventListener('click', (event) => {
            event.preventDefault(); // Mencegah tindakan default dari elemen anchor tag

            // Tampilkan SweetAlert2 konfirmasi logout
            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Anda yakin ingin keluar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'logOut.php'; // Redirect ke halaman logout
                }
            });
        });
    </script>

    <?php
    if (isset($_GET['status'])) {
        // echo '<div class="alert alert-danger">Username Lu Salah</div>';
        echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Selamat Anda Berhasil Login',
            showConfirmButton: false,
            timer: 1500
          })
        </script>";
    }

    ?>

</body>

</html>