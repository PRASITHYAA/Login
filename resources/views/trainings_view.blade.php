<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- Include the intlTelInput stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

</head>

<body class="">
    <style>
        body {
            overflow-x: hidden;
        }

        /* back-image */
        .careers-back-img {
            background-image: url(./img/live\ back.jpeg);
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        /* select-back-colour */
        .select-back-colour {
            background-color: rgba(248, 235, 235, 0.726);
        }


        .hidden {
            display: none;
        }
           /* nav bar */
           .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }

        .nav-bg {
            background-color: #bf9855;
            color: black;
        }

        .hai {
    display: inline-block;

    /* "to left" / "to right" - affects initial color */
    background: linear-gradient(to left, white 50%, #1e3060 50%) right;
    background-size: 200%;
    transition: .5s ease-out;
}
.hai:hover {
    background-position: left;
    color: white;
}

    </style>


<!-- nav bar -->
<div class="container-fluid ">
    <div class="row nav-top ">
        <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
            <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">
        </div>
        <div class=" container-fluid  col-lg-10 text-white  navtop">
            <section style="background-color: #111c3a; "
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class=" d-none d-lg-block ">
                    <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                            class="fa-regular fa-address-book"></i> No. 5/333A, OMR Road, Thuraipakkam, Chennai,
                        Tamil Nadu, India-600097 </span>
                    <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                            class="fa-solid fa-phone-volume"></i> +91 89009 10738</span>
                    <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                            class="fa-regular fa-envelope"></i> info@tisecon.com</span>
                </div>
                <!-- Right -->
                <div>
                    <a style="text-decoration: none;" href="" class=" mx-2   text-reset">
                        <i class="icons-1  fab fa-facebook-f "></i>
                    </a>
                    <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a style="text-decoration: none;" href="" class="  mx-2 text-reset">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </section>
            <nav class="navbar navbar-expand-lg  nav-bg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">

                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                            <li class="nav-item">
                                <a class="nav-link  mx-2 " href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-2 " href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   mx-1" href="#">Sectors</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#">Action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-2 " href="#">Expertise</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link   mx-2" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   mx-2" href="#">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   mx-1" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-end btn-nav">
                            <button type="button" class="btn btn-primary btn-nav ">
                                Feedback
                            </button>
                        </div>
                    </div>
            </nav>
        </div>

    </div>
</div>

    <!-- main -->

    <div class="container-fluid">
        <!-- back-img -->
        <div class="container-fluid  careers-back-img">

            <h1 style="padding-top: 75px; color: white;" class="text-center">Sector: {{ $courseTitle->sector->name }}</h1>
            <h4 style=" padding-top: 10px; color: white;" class="text-center">Course Title: {{ $courseTitle->name }}</h4>
            <h4 style=" padding-top: 10px; color: white;" class="text-center">CODE: {{ $courseTitle->course_code }}</h4>
            <h4 style=" padding-top: 10px; padding-bottom: 75px; color: white;" class="text-center">{{ $courseTitle->course_location }}
                | Registration Fee: ₹{{ $courseTitle->course_registration_fee }}</h4>
<!-- <button class="text-center">thr</button> -->
        </div>
        <!-- forms -->
    </div>
    <!-- total folder -->
    <div class="container">
        <div class="row">
            <!-- 1 coloum -->
            <div  class="col-lg-8">

                <div style="width: 100%; padding-left: 50px;" class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-floppy-disk pb-4 "></i>

                    <h2 class="head-gold">Workshop Description</h2>
                    <p>{{ $courseTitle->course_description }}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end; color: white;" class="fa-solid fa-floppy-disk  "></i>
                </div>
                <!-- 2 box -->
                <div style=" width: 100%; padding-left: 50px; " class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-user-group pb-4 "></i>

                    <h2 class="head-gold">Who Should Attend</h2>
                    <p>{{ $courseTitle->course_description }}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end;;color: white;;" class="fa-solid fa-user-group  "></i>
                </div>
                <!-- box-3 -->
                <div style=" width: 100%; padding-left: 50px; " class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-regular fa-circle-check  pb-4 "></i>
                    <h2 class="head-gold">Prerequisites</h2>
                    <p>{{ $courseTitle->eligible_to_participate }}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end;color: white;" class="fa-regular fa-circle-check  "></i>

                </div>

            </div>
            <!-- 2 coloum   right-->
            <div class="col-lg-4">
                <!-- date -->
                <div style="width: 100%; " class="border 4px solid text-center mt-5  pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-calendar-days pb-4 "></i>
                    <h5 class="head-gold">Date & Time / Duration</h5>
                    <p>{{ $courseTitle->from_date. ' - '. $courseTitle->to_date }} </p>
                    <p>{{ ' At '. $courseTitle->time }}</p>
                    <p>{{ 'Duration : '.$courseTitle->duration }}</p>
                    <i style="font-size: 70px;display: flex;justify-content: end;color: white;" class="fa-solid fa-calendar-days "></i>
                </div>
                <!-- location -->
                <div style="width: 100%;" class="border 4px solid text-center mt-5 pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-location-dot pb-4 "></i>
                    <h5 class="head-gold">Location </h5>
                    <p>{{ $courseTitle->course_location }}</p>
                    <i style="font-size: 70px; display: flex;justify-content: end; color: white; " class="fa-solid fa-location-dot  "></i>
                </div>
                <!-- training -->
                <div style="width: 100%; padding-left: 50px;" class="border 4px solid  mt-5 pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-calendar-days pb-4 "></i>
                    <h5 class="head-gold"> Training Schedule</h5>
                    <p>Day 1 :</p>
                    <ul>
                        <li> Introduction to power system protection</li>
                        <li> Basic Information and Types of faults</li>
                        <li> Components of the protection system</li>
                        <li> Importance of protection coordination</li>
                        <li>Time scale for protection system </li>
                        <li> Short Circuit calculations
                        </li>
                        <li>Basic principles of power system protections
                        </li>
                        <li> Types of protections – Equipment wise
                        </li>
                    </ul>
                    <p>Day 2 :</p>
                    <ul>
                        <li> Settings of power system protections
                        </li>
                        <li> Type of Protection Relays
                        </li>
                        <li> Protection Relays Principle of operation
                        </li>
                        <li> Architecture
                        </li>
                        <li> Communication
                        </li>
                        <li> Numerical relays
                        </li>
                        <li> Testing of Relays
                        </li>
                        <li> Testing of Relays
                        </li>
                        <li> Advantages & disadvantages of Numerical relay
                        </li>
                        <li> Operation & Maintenance of Numerical relays</li>
                    </ul>
                    <i style="font-size: 70px; display: flex;justify-content: end;color: white; " class="fa-solid fa-calendar-days "></i>

                </div>

                <!-- final box -->
                <div style="width: 100%;" class="border 4px solid text-center mt-5 pt-4 mb-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-pen-to-square pb-4 "></i>
                    <h5 class="head-gold">Registration Fee</h5>
                    <p>Registration Fee of Rs.{{ $courseTitle->course_registration_fee }}/- Applicable</p>
                    <i style="font-size: 70px; display: flex;justify-content: end;color: white; " class="fa-solid fa-pen-to-square  fly-out-up    "></i>
                    <div class="ekit-wid-con">		<div class="ekit-btn-wraper">
                            <a href="{{ route('trainings.apply', ['sector_id' => $courseTitle->sector_id, 'course_level_id' => $courseTitle->course_level_id, 'course_title_id' => $courseTitle->id]) }}" class="btn btn-primary">
                                <i aria-hidden="true" class="far fa-building"></i>
                                Apply For Training</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- footer -->
    <footer class="bg-dark  text-white mt-4">
        <div class="container-fluid  p-4">
            <!-- link -->
            <section class="container">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5  ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        <!-- icons -->
                        <div class="">
                            <a style="text-decoration: none; padding-right: 10px;" href="" class="   text-reset">
                                <i class="icons-1  fab fa-facebook-f g-5 "></i>
                            </a>
                            <a style="text-decoration: none; padding-right: 10px;" href="" class=" text-reset ">
                                <i class="fa-brands fa-instagram  "></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
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
        <div class="row  text-center">
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
            </div>
            <div class="col-lg-4  d-flex mt-2 ">
                <p class="m-2">Razorpay Quick Links:</p>
                <a class="m-2" style="color: white; " href=""> Privacy Policy </a>
                <a class="m-2" style="color: white;" href=""> T&C </a>
                <a class="m-2" style="color: white;" href=""> Shipping </a>
                <a class=" m-2" style="color: white;" href=""> Refund </a>
            </div>
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Powered by TISE</p>

            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>


</body>

</html>
