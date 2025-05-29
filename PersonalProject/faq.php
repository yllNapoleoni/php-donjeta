<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Frequently Asked Questions about Skillfocus, including account, billing, and website support. Find answers quickly and easily.">
    <meta name="author" content="" />
    <title>Skillfocus</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html"><strong>SkillFocus</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="faq.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="course.html">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link active" href="faq.html">FAQ</a></li>
                    <li class="nav-item d-flex align-items-center ms-3">
                        <button id="darkModeToggle" class="btn btn-outline-light btn-sm">🌙 Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <section class="py-5 fade-in">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <input type="text" id="faqSearch" class="form-control" placeholder="Search FAQs..." onkeyup="filterFAQs()" />
                <h1 class="fw-bolder">Frequently Asked Questions</h1>
                <p class="lead fw-normal text-muted mb-0">How can we help you?</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1 -->
                    <h2 class="fw-bolder mb-3">Course & account problems</h2>
                    <div class="accordion mb-5" id="accordionExample1">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    <strong>How do I reset my password?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    You can reset your password by clicking on the "Forgot Password" link on the login page...
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    <strong>How can I update my billing information?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    To update your billing info, go to your account settings, select "Billing," and update...
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    <strong>How do I enroll in a course?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    To enroll in a course, go to the course page and click “Enroll Now.” You must log in first.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                    <strong>What payment methods do you accept?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    We accept major credit/debit cards, PayPal, and bank transfers...
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                    <strong>How do I get a refund if I’m not satisfied?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Refund requests must be made within 14 days. Email <a href="mailto:support@domain.com">support@domain.com</a>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Accordion 2 -->
                    <h2 class="fw-bolder mb-3">Website Issues</h2>
                    <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading6">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                    <strong>Why can’t I access my course materials?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Please make sure you're logged in with the correct account. Clear your cache if needed.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                                    <strong>How do I report a technical problem on the site?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Report issues via our <a href="contact.html">Contact page</a> or email us at <a href="mailto:support@domain.com">support@domain.com</a>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
                                    <strong>Which browsers work best with the course platform?</strong>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We recommend using Chrome, Firefox, Safari, Edge, or Opera – always the latest version.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4">
                    <div class="card border-0 bg-light mt-xl-5">
                        <div class="card-body p-4 py-lg-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">Have more questions?</div>
                                    <p class="text-muted mb-4">
                                        Contact us at<br />
                                        <a href="mailto:support@domain.com">lorem@domain.com</a>
                                    </p>
                                    <div class="h6 fw-bolder">Follow us</div>
                                    <a class="fs-5 px-2 link-dark" href="https://www.x.com/"><i class="bi-twitter"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.facebook.com/"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.linkedin.com/"><i class="bi-linkedin"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.youtube.com/"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-dark py-4 mt-auto">
    <div class="container text-center">
        <div class="small text-white m-0">&copy; Skillfocus 2025</div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
