<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE479 Project</title>

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="East West University_files/lightbox.min.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/animate.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/aos.css" id="bad5"> -->
    <!-- <link rel="stylesheet" href="East West University_files/owl.theme.default.min.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/owl.carousel.min.css">
    <link rel="stylesheet" href="East West University_files/fonts.css">
    <link rel="stylesheet" href="East West University_files/slick.css">
    <link rel="stylesheet" href="East West University_files/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/pb.calendar.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/style-core.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/kingster-style-custom.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/style.css"> -->
    <!-- <link rel="stylesheet" href="East West University_files/responsive.css"> -->
</head>

<body>

    <header class="menu_wrapper">
        <!-- menu section -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Icon -->
                <a href="index.html"><img class="logoImage" src="img/logo02.png" alt=""></a>
                <!-- navigation toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-bs-auto-close="outside">Faculty O.H</a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item" href="#">Faculty of Businesses & Economy</a></li>
                                <li><a class="dropdown-item" href="#">Faculty of Liberal Arts & Social Science</a></li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">Faculty of Science & Engineering</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="#">Faculty of Electrical and Electronic
                                                Engineering</a></li>
                                        <li><a class="dropdown-item" href="#">Faculty of Genetic Engineering and
                                                Biotechnology</a></li>
                                        <li><a class="dropdown-item" href="#">Faculty of Civil Engineering</a></li>
                                        <li><a class="dropdown-item" href="#">Faculty of Mathematical and Physical
                                                Sciences</a></li>
                                        <li><a class="dropdown-item" href="#">Faculty of Pharmacy</a></li>
                                        <li class="dropend">
                                            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">Faculty of Computer Science &
                                                Engineering</a>
                                            <ul class="dropdown-menu dropdown-submenu shadow" id="list">
                                                <button class="btnSort" onclick="sortList()">Sort List</button>
                                                <li><a class="dropdown-item" href="#"></a></li>
                                                <li><a class="dropdown-item" href="#">Amit Kumar Das</a></li>
                                                <li><a class="dropdown-item" href="#">M. Saddam Hossain Khan</a></li>
                                                <li><a class="dropdown-item" href="#">M. Ruhul Amin (MRA) </a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Maheen Islam ()</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Mohammad Rifat Ahmmad
                                                        Rashid</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Atiqur Rahman</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Mozammel Huq Azad Khan</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Dr. Shamim H Ripon</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Nawab Yousuf Ali</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Ahmed Wasif Reza</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Taskeed Jabid</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Maheen Islam</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Mohammad Rezwanul Huq</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Anisur Rahman</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Anup Kumar Paul</a></li>
                                                <li><a class="dropdown-item" href="#">Mohammad Arifuzzaman Ph.D.</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Dr. Sarwar Jahan</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Mohammad Salah Uddin</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md Sawkat Ali</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md Mostofa Kamal Rasel
                                                        (MKR)</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Mohammad Manzurul Islam</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Dr. Abdullahil Al Kafee
                                                        Chowdhury</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Hasanul Ferdaus</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Hasan Mahmood Aminul Islam</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Md. Sarwar Kamal</a></li>
                                                <li><a class="dropdown-item" href="#">Md. Shamsujjoha</a></li>
                                                <li><a class="dropdown-item" href="#">Rashedul Amin Tuhin</a></li>
                                                <li><a class="dropdown-item" href="#">Surajit Das Barman</a></li>
                                                <li><a class="dropdown-item" href="#">Fahmida Azmi</a></li>
                                                <li><a class="dropdown-item" href="#">Tanni Mittra</a></li>
                                                <li><a class="dropdown-item" href="#">Khan Mohammad Habibullah</a></li>
                                                <li><a class="dropdown-item" href="#">Musharrat Khan</a></li>
                                                <li><a class="dropdown-item" href="#">Mahamudul Hasan</a></li>
                                                <li><a class="dropdown-item" href="#">Md. Mohsin Uddin</a></li>
                                                <li><a class="dropdown-item" href="#">Jesan Ahammed Ovi</a></li>
                                                <li><a class="dropdown-item" href="#">Syed Athar Bin Amir</a></li>
                                                <li><a class="dropdown-item" href="#">Shakila Mahjabin Tonni</a></li>
                                                <li><a class="dropdown-item" href="#">Sadia Nowrin</a></li>
                                                <li><a class="dropdown-item" href="#">Touhid Ahmed</a></li>
                                                <li><a class="dropdown-item" href="#">Kowshika Sarker</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TA O.H</a>
                        </li>
                        <!-- mega menu  -->
                        <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Club Updates
                            </a>
                            <div class="dropdown-menu shadow">
                                <div class="mega-content px-md-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <!-- mega menu 1st column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Science & Tecnology</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Electronics Club</a>
                                                    <a class="list-group-item" href="#">Cyber Security Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 2nd column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Science & Tecnology</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Electronics Club</a>
                                                    <a class="list-group-item" href="#">Cyber Security Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 3rd column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Science & Tecnology</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Electronics Club</a>
                                                    <a class="list-group-item" href="#">Cyber Security Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 4th column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Science & Tecnology</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Electronics Club</a>
                                                    <a class="list-group-item" href="#">Cyber Security Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                    <a class="list-group-item" href="#">Programming Club</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="map2.html">Find Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">User</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-auto" role="search">
                        <div class="input-group">
                            <input class="form-control border-2 me-0 search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- carousel section  -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/slider01.jpg" class="d-block w-100" alt="slider01">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/slider02.jpg" class="d-block w-100" alt="slider02">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider03.jpg" class="d-block w-100" alt="slider03">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <!-- <div class="carousel-item">
                <img src="img/slider04.jpg" class="d-block w-100" alt="slider04">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Forth slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider05.jpg" class="d-block w-100" alt="slider05">
                <div class="carousel-caption d-none d-md-block">
                    <h5>fifth slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <i class="fa-solid fa-circle-arrow-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Section 2 section start  -->
    <div class="section2">
        <div class="services">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>Degree Program</h2>
                <p>Join world's brightest minds</p>
                <a href="" class="btn-se2-b1">Read More</a>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>Student's Welfare</h2>
                <p>Depertment of student welfare</p>
                <a href="" class="btn-se2-b1">Read More</a>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>Scholership</h2>
                <p>Scholership & financial Aid</p>
                <a href="" class="btn-se2-b1">Read More</a>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>Alumni</h2>
                <p>Our Alumni is our Strength</p>
                <a href="" class="btn-se2-b1">Read More</a>
            </div>

        </div>

    </div>

    <!-- Section 2 end  -->
    <!-- section 3 start  -->
    <div class="section">
        <div class="services">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>11000+</h2>
                <p>Student Enrolled</p>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>11000+</h2>
                <p>Student Enrolled</p>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>11000+</h2>
                <p>Student Enrolled</p>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2>11000+</h2>
                <p>Student Enrolled</p>
            </div>
            
        </div>
    </div>

    <!-- section 3 end  -->

    <!-- footer section start  -->
    <footer>
        <div class=" container">
            <div class="aboutus">
                <a href="index.html"><img class="footerLogoImage" src="img/logo03.png" alt=""></a>
                <p> <i class="fa-solid fa-location-dot"></i> A/2, Jahurul Islam Avenue
                    Jahurul Islam City, Aftabnagar
                    Dhaka-1212, Bangladesh</p>
                <p> <i class="fa-solid fa-phone"></i> <a href="tel:02-55046678">02-55046678</a>, <a href="tel:09666775577">09666775577</a>,<a href="tel:01755587224">01755587224</a>, <a href="tel:01851933094">01851933094</a></p>
                <p><i class="fa-solid fa-envelope"> </i><a href="mailto:admissions@ewubd.edu"> admissions@ewubd.edu</a>
                    <a href="mailto:info@ewubd.edu">info@ewubd.edu</a>
                </p>
                <ul class="sociallinks">
                    <li><a href="#"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="student">
                <h2>Student</h2>
                <ul>
                    <li><a href="#">Office Hour of Faculty</a></li>
                    <li><a href="#">Office Hour of TA</a></li>
                    <li><a href="#">Upcomming Competitions</a></li>
                    <li><a href="#">Upcomming Events</a></li>
                    <li><a href="#">Vacancies</a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h2>University</h2>
                <ul>
                    <li><a href="#">Find your room</a></li>
                    <li><a href="#">Achivments</a></li>
                    <li><a href="#">Capstone Projects</a></li>
                    <li><a href="#">Vacancies</a></li>
                </ul>
            </div>
            <div class="map">
                <h2>Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14605.625308688122!2d90.41520595550536!3d23.768540967336648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2z4KaH4Ka44KeN4KafIOCmk-Cmr-CmvOCnh-CmuOCnjeCmnyDgpofgpongpqjgpr_gpq3gpr7gprDgp43gprjgpr_gpp_gpr8!5e0!3m2!1sbn!2sbd!4v1713638195002!5m2!1sbn!2sbd" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <hr>
        <p>Copyright &copy; 2024. All Rights Reserved To East West University</p>
    </div>




    <!-- bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- other js file link  -->
    <script src="js/sort.js"></script>
</body>

</html>