<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ta2hel</title>
    <!-- bootstrap sheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- css main sheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- font awesome sheet -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Inter:wght@400;700&family=Rubik:wght@400;500&family=Workbench&display=swap" rel="stylesheet" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- start header -->
    <header>
        <div class="contanier">
            <div class="flex">
                <div class="logo">
                    <img src="image/rename.png" alt="" class="network" />
                    TA2<span>HEEL</span>
                </div>
                <div class="right">
                    <a href="#HOME"> <i class="fa-solid fa-house"></i> Home</a>
                    <a href="#About Us">
                        <i class="fa-solid fa-circle-question"></i> About Us</a>
                    <a href="#Mission"> <i class="fa-solid fa-award"></i> Mission</a>
                    <a href="#Vision"> <i class="fa-solid fa-eye"></i> Vision</a>

                    <a href="#Contact"> <i class="fa-solid fa-phone"></i> Contact</a>
                    <form action="index.php" class="form p-0 m-0 d-inline-block">
                        <!-- <button type="submit" class="click-me">Click Here</button> -->
                        <button type=" submit" class="my-0 btn btn-primary my-0 mx-0 d-inline-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start main -->
    <section class="main" id="HOME">
        <h3>Hi My New Friend</h3>
        <h1>
            Discover My <br />
            Web Site
        </h1>
        <!-- <a href="#" class="Video_link"
        >Video Resume
        <i class="fa-solid fa-play"></i>
      </a> -->
        <div class="scrollholder">
            <div class="elipse">
                <div class="circle"></div>
            </div>
            <span>SCROLL DOWN</span>
        </div>
    </section>
    <!-- end main -->
    <!-- start section carousel -->
    <section>
        <div class="contanier py-5">
            <div class="row">
                <div class="col-4">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/pexels-anastasiya-gepp-1462630.jpg" class="d-block w-100" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src="image/pexels-helena-lopes-933964.jpg" class="d-block w-100" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src="image/pexels-antoni-shkraba-4348401.jpg" class="d-block w-100" alt="..." />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="m-0 p-0">
                        <div id="carouselExampleAutoplaying" class="carousel slide py-3" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="image/pexels-fauxels-3183183.jpg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="image/pexels-fox-1595385.jpg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="image/pexels-fox-1595386.jpg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-8">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/employment services provider (1).jpeg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>First slide label</h5> -->
                                    <p>
                                        <!-- Some representative placeholder content for the first
                                        slide. -->
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/pexels-elevate-1267338.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Second slide label</h5>
                                    <p>
                                        Some representative placeholder content for the second
                                        slide.
                                    </p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/pexels-kobe-1516440.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Third slide label</h5>
                                    <p>
                                        Some representative placeholder content for the third
                                        slide.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section carousel -->
    <!-- start About -->
    <section class="my-5 py-5" id="About Us">
        <div class="container">
            <div class="row">
                <h4 class="spacial-heading">About</h4>
                <p>Everything you should know about our website.</p>
                <div class="col-6 text-center">
                    <img src="image/illustration1.png" alt="" />
                </div>
                <div class="col-6 text-end About-section">
                    <h1>Ta2heel is an e-commerce company that is founded in 2024.</h1>
                    <p class="mt-4 lead">
                        It provides better opportunities for the future in the labour
                        market, as it seeks to train, employ, and provide young people
                        with experience in the labour market.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end About -->
    <!-- Start Missin -->
    <section class="my-5 py-5">
        <div class="container" id="Mission">
            <div class="row">
                <h4 class="spacial-heading">Mission</h4>
                <p>What is The Mission.</p>
                <div class="col-6 text-start About-section">
                    <h1>Our website's mission.</h1>
                    <p class="mt-4 lead">
                        Our mission is to catalyse career growth by matching talent with
                        diverse job opportunities.
                    </p>
                    <!-- <button type="button" class="btn btn-primary btn-lg">
              LEARN MORE
            </button> -->
                </div>
                <div class="col-6 text-center">
                    <img src="image/illustration2.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end mission -->
    <!-- start Vision -->
    <section class="my-5 py-5">
        <div class="container" id="Vision">
            <div class="row">
                <h4 class="spacial-heading">Vision</h4>
                <p>What Is The Vision.</p>
                <div class="col-6 text-center">
                    <img src="image/teamwork.png" alt="" />
                </div>
                <div class="col-6 text-end About-section">
                    <h1>
                        Our vision is to empower youth through our innovative recruitment
                        application.
                    </h1>
                    <p class="mt-4 lead">
                        We envision a future where every young individual seamlessly
                        connects with opportunities that align with their skills and
                        passions, fostering personal growth, career advancement, and
                        contributing to a vibrant, dynamic workforce.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="body">

        <div class="icon-container">
            <a href="./jobseekers.php"><img src="image/fair.png" class="image-content" alt="" /></a>
            <h3>Job seekers</h3>

        </div>

        <div class="icon-container">
            <a href="./employment.php"><img src="image/employment.png" class="image-content" alt="" /></a>
            <h3>Employment Services Providers</h3>
        </div>

        <div class="icon-container">
            <a href="./courses.php"><img src="image/online-course.png" class="image-content" alt="" /></a>
            <h3>Courses</h3>
        </div>

        <div class="icon-container">
            <a href="./career.php"><img src="image/career.png" class="image-content" alt="" /></a>
            <h3>career counceling</h3>
        </div>
    </section>
    <footer id="Contact">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>
                    It provides better opportunities for the future in the labour
                    market, as it seeks to train, employ, and provide young people with
                    experience in the labour market.
                </p>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: contact@example.com<br />Phone: 123-456-7890</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <p>Stay connected on social media:</p>
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Ta2heel. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>