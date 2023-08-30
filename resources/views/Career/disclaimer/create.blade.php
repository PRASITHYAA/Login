<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
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
        /* img back */
        body {
            overflow-x: hidden;
        }

        .bg {
            background-color: rgba(248, 235, 235, 0.726);
        }

        .red {
            color: red;
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

        .nav-bg {
            background-color: #bf9855;
            color: black;
        }
    </style>

    <!-- nav bar -->

    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1 (1).png"
                    alt="">
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
                </nav>
            </div>

        </div>
    </div>


    <!-- main -->
    <div class="container">
        <div class="container">
            <div class="progress-bar mt-2" role="progressbar"
                style="width: 100%; background-color: #111;color: white; " aria-valuenow="100" aria-valuemin=""
                aria-valuemax="100%">100%</div>
                                {{-- error --}}
                                @if ($errors->any())
                                <div class=" alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- success --}}

                            @if (session('success'))
                                <div class=" container  alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

        </div>
        <h2 class="text-center p-4">DISCLAIMER</h2> disclaimer
        <!-- paragraph -->
        <p>Applicant understands that this is an Equal Opportunity Employer and is
            committed to excellence through diversity. In order to ensure this application is acceptable,
            please print or type the application that is fully completed in order for it to be considered.
            Please complete each section EVEN IF you decide to attach a resume. I, the Applicant, certify
            that my answers are true and honest to the best of my knowledge. If this application leads to my
            eventual employment, I understand that any false or misleading Information in my application or
            interview may result in my employment being terminated.</p>
        <div class="container">
            <!-- heading -->
            <h4 class="p-3">Joining date/Current and Expected Salary Details</h4>

            <form action="{{ route('disclaimer.store') }}" class="row g-3" method="POST"
                enctype="multipart/form-data">
                @csrf

                <!-- Expected date to join -->
                <div class="col-md-4">
                    <label class="form-label">Expected date to join <span class="red">*</span></label>
                    <input type="date" class="form-control bg"placeholder="Expected date to join"
                        id="expected_date_to_join" name="expected_date_to_join" required>
                </div>
                <!-- Current Salary -->
                <div class="col-md-4">
                    <label class="form-label">Current Salary <span class="red">*</span></label>
                    <input type="number" class="form-control bg" id="current_salary" name="current_salary"
                        required>
                </div>
                <!-- Expected Salary -->
                <div class="col-md-4">
                    <label class="form-label">Expected Salary <span style="color: red;">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary"
                            placeholder="Expected Salary" required>
                    </div>
                </div>
                <!-- paragraph -->
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp
                    <br>
                    Size Limit: 50KB
                </p>
                <div class="row ">
                    <!-- Signature -->
                    <div class="col-md-4">
                        <label for="disclaimer_Signature" class="form-label">Signature <span
                                class="red">*</span></label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="disclaimer_Signature"
                                name="disclaimer_signature" accept="image/*" required>
                        </div>
                        <div class="form-group mt-2">
                            <img id="disclaimer_SignaturePreview" src="#" alt="Image Preview"
                                style="max-width:150px; display: none;">
                        </div>
                    </div>
                    <!-- date -->
                    <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input class="form-control bg" type="text" id="currentDate" value="01/08/2023"
                            name="disclaimer_date" readonly>
                    </div>
                    <!-- time -->
                    <div class="col-md-4 ">
                        <label class="form-label">Time</label>
                        <input class="form-control bg" type="text" id="currentTime" value="04.20 am"
                            name="disclaimer_time" readonly>
                    </div>
                    <div class="row g-3 pt-2">

                        <!-- Print Name -->
                        <div class="col-md-6">
                            <label class="form-label">Print Name</label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control"
                                type="text" value="Print Name" aria-label="Disabled input example"
                                id="print_name" name="disclamer_print_name" readonly>
                        </div>
                        <!-- PLACE -->
                        <div class="col-md-6">
                            <label class="form-label">PLACE <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="disclaimer_place" name="disclaimer_place"
                                style="background-color: rgba(248, 235, 235, 0.726);" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label>
                        </div>
                        <!-- Payment Item -->
                        <div class="form-check">
                            <p style="font-weight: bold;">Payment Item <span style="color: red;">*</span></p>
                            <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Pay 10 Rs
                            </label>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <!-- buttons -->
        <div style="display: flex;justify-content: end;  " class="groupfinal">
            <a style="display: flex;align-items: center;" class="btn btn-secondary m-1 "
                href="Acheivements.html">Previous</a>
            <a class="btn btn-primary m-1 " href="">Submit Form</a>
            <a class="btn btn-secondary m-1 " href="">Export Pdf</a>
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
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class="   text-reset">
                                <i class="icons-1  fab fa-facebook-f g-5 "></i>
                            </a>
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class=" text-reset ">
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

    <!-- current time -->
    <script>
        function updateCurrentTime() {
            const currentTimeInput = document.getElementById('currentTime');
            const currentTime = new Date().toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });
            currentTimeInput.value = currentTime;
        }
        updateCurrentTime();
        setInterval(updateCurrentTime, 60000);
    </script>
    <script>
        const signatureInput = document.getElementById('disclaimer_Signature');
        const signaturePreview = document.getElementById('disclaimer_SignaturePreview');
        // signature
        signatureInput.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    signaturePreview.src = e.target.result;
                    signaturePreview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                signaturePreview.src = '#';
                signaturePreview.style.display = 'none';
            }
        });
    </script>


    <!-- current date -->
    <script>
        const currentDate = new Date().toISOString().split('T')[0];
        document.getElementById('currentDate').value = currentDate;
    </script>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
