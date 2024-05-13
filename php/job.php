<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Vacancies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/faculty.css">
</head>

<body>
    <header class="menu_wrapper">
        <!-- menu section -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Icon -->
                <a href="../index.html"><img class="logoImage" src="../img/logo02.png" alt=""></a>
                <!-- navigation toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
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
                                                <li><a class="dropdown-item" href="#">Dr. Mohammad Rifat Ahmmad
                                                        Rashid</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Atiqur Rahman</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Mozammel Huq Azad Khan</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Dr. Shamim H Ripon</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Md. Nawab Yousuf Ali</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Ahmed Wasif Reza</a></li>
                                                <li><a class="dropdown-item" href="#">Dr. Taskeed Jabid</a></li>
                                                <li><a class="dropdown-item" href="../html/maheenIslam.html">Dr. Maheen
                                                        Islam</a></li>
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
                        <!-- Find Room menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-bs-auto-close="outside">Find Room</a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item" href="#">AB3</a></li>
                                <li><a class="dropdown-item" href="#">FUB</a></li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">Main Building</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="#">Ground Floor</a></li>
                                        <li><a class="dropdown-item" href="#">First Floor</a></li>
                                        <li><a class="dropdown-item" href="#">Second Floor</a></li>
                                        <li><a class="dropdown-item" href="#">Third Floor</a></li>
                                        <li><a class="dropdown-item" href="#">Forth Floor</a></li>
                                        <li><a class="dropdown-item" href="../html/map2.html">Fifth Floor</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="map2.html">Find Room</a>
                        </li> -->
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
                                                    <a class="list-group-item" href="../html/ewucopc.html">Programming
                                                        Club</a>
                                                    <a class="list-group-item" href="#">Electronics Club</a>
                                                    <a class="list-group-item" href="#">Cyber Security Club</a>
                                                    <a class="list-group-item" href="#">Robotics Club</a>
                                                    <a class="list-group-item" href="#">Science Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 2nd column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Business & Economics</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Business Club</a>
                                                    <a class="list-group-item" href="#">Economics Club</a>
                                                    <a class="list-group-item" href="#">Investment and Finance Club</a>
                                                    <a class="list-group-item" href="#">English Conversation Club</a>
                                                    <a class="list-group-item" href="#">Creative Marketing Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 3rd column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Arts & Sports </h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Performing Arts Club</a>
                                                    <a class="list-group-item" href="#">Sports Club</a>
                                                    <a class="list-group-item" href="#">Photography Club</a>
                                                    <a class="list-group-item" href="#">Telecomminication Club</a>
                                                    <a class="list-group-item" href="#">Sociology Club</a>
                                                </div>
                                            </div>
                                            <!-- mega menu 4th column -->
                                            <div class="col-lg-3 col-sm-6 px-4 px-xl-5 px-4">
                                                <h5>Student Welfare</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Agro-Industrialization Club</a>
                                                    <a class="list-group-item" href="#">Debating Club</a>
                                                    <a class="list-group-item" href="#">Environmental & Social Club</a>
                                                    <a class="list-group-item" href="#">IEEE Student Branch</a>
                                                    <a class="list-group-item" href="#">Model United Nation Club</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/login.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/contactUs.html">Contact Us</a>
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
    <div class="post-list mt-5">
        <div class="container">
            <?php
            include("connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="row mb-4 p-5 bg-light">
                    <div class="col-sm-2">
                        <?php echo $data["date"]; ?>
                    </div>
                    <div class="col-sm-3">
                        <h2> <?php echo $data["title"]; ?></h2>
                    </div>
                    <div class="col-sm-5">
                        <?php echo $data["summary"]; ?>
                    </div>
                    <div class="col-sm-2">
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- footer section start  -->
    <footer>
        <div class=" container">
            <div class="aboutus">
                <a href="../index.html"><img class="footerLogoImage" src="../img/logo03.png" alt=""></a>
                <p> <i class="fa-solid fa-location-dot"></i> A/2, Jahurul Islam Avenue
                    Jahurul Islam City, Aftabnagar
                    Dhaka-1212, Bangladesh</p>
                <p> <i class="fa-solid fa-phone"></i> <a href="tel:02-55046678">02-55046678</a>, <a href="tel:09666775577">09666775577</a>,<a href="tel:01755587224">01755587224</a>, <a href="tel:01851933094">01851933094</a></p>
                <p><i class="fa-solid fa-envelope"> </i><a href="mailto:admissions@ewubd.edu">
                        admissions@ewubd.edu</a>
                    <a href="mailto:info@ewubd.edu">info@ewubd.edu</a>
                </p>
                <ul class="sociallinks">
                    <li><a href="../html/contactUs.html"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="https://www.facebook.com/myewu/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/myewubd"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/EastWestUniversity96"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="student">
                <h2>Student</h2>
                <ul>
                    <li><a href="#">Office Hour of Faculty</a></li>
                    <li><a href="#">Office Hour of TA</a></li>
                    <li><a href="#">Upcomming Competitions</a></li>
                    <li><a href="#">Upcomming Events</a></li>
                    <li><a href="../php/job.php">Vacancies</a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h2>University</h2>
                <ul>
                    <li><a href="#">Find your room</a></li>
                    <li><a href="#">Achivments</a></li>
                    <li><a href="#">Capstone Projects</a></li>
                    <li><a href="../php/job.php">Vacancies</a></li>
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
    <script src="../js/sort.js"></script>
    <script src="../js/counter.js"></script>
</body>

</html>