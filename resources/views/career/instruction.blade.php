<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./form1.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- mdb -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <style>
        body {
            overflow-x: hidden;
        }

        .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class=" container col-lg-2 text-center" style="background-color: white;">
                <img style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">
            </div>
            <div class=" container  col-lg-10 text-white">
                <div class="row">
                    <section style="background-color: #111c3a; "
                        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                        <!-- Left -->
                        <div class=" d-none d-lg-block">
                            <span class="mx-5"> <i style="color:  rgb(176, 134, 55);"
                                    class="fa-regular fa-address-book"></i> No. 5/333A, OMR Road, Thuraipakkam, Chennai,
                                Tamil Nadu, India-600097 </span>
                            <span class="mx-5"> <i style="color:  rgb(176, 134, 55);"
                                    class="fa-solid fa-phone-volume"></i> +91 89009 10738</span>
                            <span class="mx-5"> <i style="color:  rgb(176, 134, 55);"
                                    class="fa-regular fa-envelope"></i> info@tisecon.com</span>
                        </div>
                        <!-- Left -->

                        <!-- Right -->
                        <div>
                            <a style="text-decoration: none;" href="" class="  me-4 text-reset">
                                <i class="icons-1  fab fa-facebook-f "></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>

                        </div>
                        <!-- Right -->
                    </section>
                </div>
                <div class="row">
                    <nav style="background-color: #bf9855 " class="navbar navbar-expand-lg navbar-light text-white ">
                        <div class="container-fluid  ">
                            <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4 p-1">
                                    <li class="nav-item">
                                        <a class="nav-link active mx-4" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active  mx-4" aria-current="page" href="#">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active  mx-4" aria-current="page" href="#">Sectors</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle mx-5" href="#" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active mx-4" aria-current="page"
                                            href="#">Expertise</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active mx-4" aria-current="page"
                                            href="#">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active mx-4" aria-current="page"
                                            href="#">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active mx-5" aria-current="page" href="#">Contact Us
                                        </a>
                                    </li>
                                    <button style="font-weight: bold;" class="btn-nav mx-5 p-3">Feedback</button>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- Percentage bar -->
        <div class="progress m-2  " style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width: 15%; background-color: #111;color: white; "
                aria-valuenow="15" aria-valuemin="0" aria-valuemax="15%">15%</div>
        </div>
    </div>
    <div class="container">
        <h1 style="font-size: 44px;" class="text-center">INSTRUCTION</h1>
        <ol class="">
            <li>Please ensure the following document are readily available prior to start the application.
                <ol>
                    <li>Passport Size Photo (Candidate, Father, Mother, Spouse, Siblings as applicable. Photo should be
                        taken within six months and size <br>
                        should not exceed 35 mm in width and 45mm in height)</li>
                    <li>Educational Certificates (10, 12, Diploma, Degree Certificates as applicable) in PDF format
                    </li>
                    <li>Experience Certificates, if available (in PDF format)
                    </li>
                    <li>Valid Aadhar/Passport copy (PDF, JPEG)
                    </li>
                    <li>Final Year Projects (PDF)
                    </li>
                    <li>Conference paper, if published
                    </li>
                    <li>Extracurricular/Co-curricular certificates (PDF), if available
                    </li>
                </ol>
            <li>Please provide working email/working mobile/telephone details for communication.
            </li>
            <li>Please complete each section EVEN IF you decide to attach a curriculum vitae.
            </li>
            <li>Application can be saved and resumed at any level. Please copy and save the link to resume the
                application at a later stage.
            </li>
            <li>Application fees of INR 1500 to be paid prior to submission.
            </li>
            <li>Please read the company terms and conditions, payment policy, and refund policy carefully prior to
                submitting the application.
            </li>
            <li>You may contact us if you face any difficulties/queries while applying and our team will guide you for
                further completion.
            </li>
            <li>You will receive a confirmation email after successful completion and our team will contact you for
                further interviews. <br>
                “ Wishing you all the Very Best ”</li>




            </li>
        </ol>
        <div style="display: flex;justify-content: end;">
            <a style="font-weight: bold;" class="btn btn-secondary" href="job_application">Next</a>


        </div>

    </div>

    <br>
    <footer class="bg-dark  text-white">
        <div class="container p-4 ">
            <!-- link -->
            <section class="">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5 mb-5 ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        <!-- icons -->
                        <div>
                            <a style="text-decoration: none;" href="" class="  me-4 text-reset">
                                <i class="icons-1  fab fa-facebook-f "></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Quick Links  -->
                    <div class="col-lg-4 col-md-6 mt-5 mb-5">
                        <h4 class=""> Quick Links </h4>
                        <ul class="list-unstyled mb-4 ">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Terms and Conditions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Privacy Policy</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Training</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Job</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Useful Links -->
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <h4 class=""> Useful Links </h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Apply for Job</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Training Sessions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <img class="pb-4 img-fluid" src="./img/TISE-Footer-Logo.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- copy -->
        <div class="row mb-5 text-center">
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
            </div>
            <div class="col-lg-4 d-flex mt-2 mb-2">
                <p>Razorpay Quick Links:</p>
                <a class="mx-2" style="color: white; " href=""> Privacy Policy </a>
                <a class="mx-2" style="color: white;" href=""> T&C </a>
                <a class="mx-2" style="color: white;" href=""> Shipping </a>
                <a class="mx-2" style="color: white;" href=""> Refund </a>
            </div>
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Powered by TISE</p>

            </div>
        </div>
    </footer>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>
