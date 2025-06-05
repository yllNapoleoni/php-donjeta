<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Skillfocus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php"><strong>SkillFocus</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="course.php">Courses</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li> 
                            <li class="nav-item"><a class="nav-link" href="users.php">Users</a></li> 
                            <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li> 
                            <li class="nav-item d-flex align-items-center ms-3">
                                <button id="darkModeToggle" class="btn btn-outline-light btn-sm">🌙 Dark Mode</button>
                            </li>
                            <?php if (isset($_SESSION['username'])): ?>
                                <li class="nav-item ms-3 d-flex align-items-center">
                                    <img src="<?php echo isset($_SESSION['profile_pic']) ? htmlspecialchars($_SESSION['profile_pic']) : 'img/default-profile.png'; ?>" alt="Profile" class="rounded-circle" style="width:36px;height:36px;object-fit:cover;margin-right:10px;">
                                    <span class="text-white fw-semibold"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                </li>
                                <li class="nav-item ms-2">
                                    <a class="btn btn-outline-light btn-sm px-4 fw-semibold shadow-sm" href="logout.php">
                                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item ms-2">
                                    <a class="btn btn-light btn-sm me-2 px-4 fw-semibold shadow-sm" href="login.php">
                                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary btn-sm px-4 fw-semibold shadow-sm" href="register.php">
                                        <i class="bi bi-person-plus me-1"></i> Register
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5 fade-in">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">A website that helps you choose your next course with ease!</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Our website is recommended by a lot of up and coming programmers and students.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="about.php">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/courselogo.png" alt="..." /></div>
                    </div>
                </div>
            </header>

            <!-- Call to Action Section -->
            <section class="py-5 bg-primary text-white fade-in">
                <div class="container px-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-2">Ready to boost your skills?</h2>
                            <p class="mb-0 lead">Join thousands of learners and start your journey with SkillFocus today. Discover top courses from world-renowned universities and advance your career with confidence.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a class="btn btn-light btn-lg px-4" href="contact.html">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Features section-->
           <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">A better way to start learning.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <img class="stanfordicon" src="img/stanfordicon.png" alt="">
                                    <div class=""><i></i></div>
                                    <h2 class="h5">Stanford University</h2>
                                    <p class="mb-0">Stanford provides excellent online courses to boost your knowledge and career growth.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class=""><img class="caliicon" src="img/caliicon.png" alt=""><i class=""></i></div>
                                    <h2 class="h5">University of California Berkeley</h2>
                                    <p class="mb-0">UC Berkeley offers quality online courses to help you learn new skills and achieve your goals.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class=""><img class="harvardicon" src="img/harvardicon.png" alt=""><i class=""></i></div>
                                    <h2 class="h5">Harvard University</h2>
                                    <p class="mb-0">Harvard offers top online courses to help you gain valuable skills and advance your career.
</p>
                                </div>
                                <div class="col h-100">
                                    <div class=""><img class="camicon" src="img/camicon.png" alt=""><i class=""></i></div>
                                    <h2 class="h5">University of Cambridge</h2>
                                    <p class="mb-0">Cambridge delivers prestigious online courses to enhance your knowledge and career prospects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial section-->
            <div class="py-5 fade-in bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Working with Skillfocus has made my life way easier, it is super simple yet so effective!"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Us Section -->
            <section class="py-5 bg-white fade-in">
                <div class="container px-5 my-5">
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8 text-center">
                            <h2 class="fw-bolder mb-3">Why Choose SkillFocus?</h2>
                            <p class="lead text-muted">Discover what sets us apart and why thousands of learners trust SkillFocus for their educational journey.</p>
                        </div>
                    </div>
                    <div class="row gx-5 text-center">
                        <div class="col-md-4 mb-4">
                            <div class="mb-3">
                                <i class="bi bi-award display-4 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Top University Partners</h5>
                            <p class="text-muted">We collaborate with world-renowned universities to bring you the best courses available online.</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="mb-3">
                                <i class="bi bi-lightbulb display-4 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Personalized Recommendations</h5>
                            <p class="text-muted">Our smart platform suggests courses tailored to your interests and career goals.</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="mb-3">
                                <i class="bi bi-people display-4 text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Supportive Community</h5>
                            <p class="text-muted">Join a vibrant community of learners and get support from peers and experts every step of the way.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Blog preview section-->
            <section class="py-5">
    <div class="container px-5 my-5 py-5 ">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">From our recommended courses</h2>
                    <p class="lead fw-normal text-muted mb-5">These are three of our best courses.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">

            <!-- Harvard -->
            <div class="col-lg-4 mb-5">
  <div class="flip-card h-100">
    <div class="flip-card-inner">
      <!-- FRONT -->
      <div class="flip-card-front card shadow border-0">
        <img class="card-img-top" src="img/harvardicon.png" alt="Harvard Icon" />
        <div class="card-body p-4">
          <h5 class="card-title mb-3">Harvard University</h5>
          <p class="card-text mb-0">Harvard offers world-class online courses...</p>
        </div>
      </div>
      <!-- BACK -->
      <div class="flip-card-back card shadow border-0">
        <div class="card-body p-4">
          <h5>More Info</h5>
          <p>Courses in leadership, health, computer science, and more.</p>
          
            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="https://www.harvard.edu/">Visit site</a>      
          
        </div>
      </div>
    </div>
  </div>
</div>


            <!-- Stanford -->
            <div class="col-lg-4 mb-5">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front card h-100 shadow border-0">
                            <img class="card-img-top" src="img/stanfordicon.png" alt="Stanford Icon" />
                            <div class="card-body p-4">
                                <h5 class="card-title mb-3">Stanford University</h5>
                                <p class="card-text mb-0">"Stanford inspires innovation through online learning."</p>
                            </div>
                        </div>
                        <div class="flip-card-back card h-100 shadow border-0">
                            <div class="card-body p-4 d-flex flex-column justify-content-center text-center">
                                <h5>More Info</h5>
                                <p>Known for cutting-edge courses in AI, machine learning, and tech leadership.</p>
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="https://www.stanford.edu/">Visit site</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UC Berkeley -->
            <div class="col-lg-4 mb-5">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front card h-100 shadow border-0">
                            <img class="card-img-top" src="img/caliicon.png" alt="UC Berkeley Icon" />
                            <div class="card-body p-4">
                                <h5 class="card-title mb-3">UC Berkeley</h5>
                                <p class="card-text mb-0">"Explore new ideas and lead with knowledge."</p>
                            </div>
                        </div>
                        <div class="flip-card-back card h-100 shadow border-0">
                            <div class="card-body p-4 d-flex flex-column justify-content-center text-center">
                                <h5>More Info</h5>
                                <p>Offers courses in sustainability, public policy, and innovation leadership.</p>
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="https://www.berkeley.edu/">Visit site</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        </main>
        <!-- Footer-->
       <footer class="bg-dark py-4 mt-auto">
    <div class="container text-center">
        <div class="small text-white m-0">Copyright &copy; Skillfocus 2025</div>
    </div>
</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
