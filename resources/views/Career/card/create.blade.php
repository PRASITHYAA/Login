<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <!-- {{-- bootstrap --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- mdb -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

</head>

<body>

    <style>
        .red {
            color: red;
        }

        body {
            overflow-x: hidden;
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
    </style>


    <!-- nav-bar -->
    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1 (1).png" alt="">
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

        <div class="container">
            <div class="progress-bar mt-2" role="progressbar" style="width: 45%; background-color: #111;color: white; "
                aria-valuenow="45" aria-valuemin="" aria-valuemax="45%">45%</div>
        </div>
        <div class="container">
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

                <form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data"
                    id="save-later-form">
                    @csrf

                <h2 class="text-center p-4">Government-Issued Identification Cards (IDs)</h2>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                    Size Limit: 50KB</p>
                <p style="font-weight: bold;">ID Card You Have <span class="red">*</span></p>
                <label>
                    <input type="checkbox" id="aadharcard" checked> AADHAR CARD
                </label>

                <label>
                    <input type="checkbox" id="passport" onchange="toggleInputFields()"> PASSPORT
                </label>

                <div id="inputFieldsaadharcard">
                    <div class="row">
                        <!-- aadhar card -->
                        <div class="col-lg-6">
                            <h4 class="text-center" style=" font-weight: bold;">AADHAR CARD</h4>
                            <!-- aadharname -->
                            <div class="col mt-4">
                                <label for="validationDefault01" class="form-label">Name as per IDs <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Name as per IDs" name="aadharname"
                                    id="validationDefault01" required>
                            </div>
                            <!-- aadharidnumber -->
                            <div class="col mt-4">
                                <label for="validationDefault01" class="form-label">IDs Number <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Aadhar Number" name="aadharidnumber" id="aadhaar"
                                    maxlength="12" oninput="updateValidation()" required>
                                <p id="result"></p>
                            </div>
                            <!-- aadharissuedplace -->
                            <div class="col mt-4">
                                <label for="validationDefault01" class="form-label">Issued Place
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Issued Place" name="aadharissuedplace"
                                    id="validationDefault01" required>
                            </div>
                            <!-- aadharissuedcountry -->
                            <div class="col mt-4">
                                <label for="validationDefault04" class="form-label">Country
                                    <span style="color: red;">*</span></label>
                                <select class="form-select" name="aadharissuedcountry" id="validationDefault04"
                                    required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>uk</option>
                                </select>
                            </div>
                            <!-- aadharissuedstate -->
                            <div class="col mt-4">
                                <label for="validationDefault01" class="form-label">State <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="aadharissuedstate" class="form-control" placeholder="Issued Place"
                                    id="validationDefault01" required>
                            </div>
                            <!-- aadharimage -->
                            <div class="col mt-4">
                                <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="aadharimage" name="aadharimage"
                                        accept="image/*" required>
                                </div>
                                <div class="form-group">
                                    <img id="aadharImagePreview" src="#" alt="Image Preview"
                                        style="max-width:150px; display: none;">
                                </div>

                            </div>
                            <!-- aadharimagepage  -->
                            <div class="col mt-4">
                                <label for="validationDefaultUpload" class="form-label">Upload ID- 2st Page
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="aadharimagepage" accept="image/*"
                                        name="aadharimagepage" required>
                                </div>
                                <div class="form-group">
                                    <img id="aadharImagePagePreview" src="#" alt="Image Preview"
                                        style="max-width:150px; display: none;">
                                </div>

                            </div>
                            <!-- button -->
                            <a style="font-weight: bold; " class="btn btn-secondary mt-5"
                                href="job_application">Previous</a>

                                <button class="btn btn-primary mx-4 mt-5" type="submit"> save</button>


                            <a style="font-weight: bold;" class="btn btn-secondary mt-5 "
                                href="education">Next</a>
                            <br>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div id="inputFieldspassport" style="display: none;">
                                <!-- passport -->
                                <h4 class="text-center" style="font-weight: bold;">PASSPORT</h4>
                                <!-- passportname -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">Name as per IDs <span
                                            style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        name="passportname" class="form-control" placeholder="Name as per IDs"
                                        id="validationDefault01" required>
                                </div>
                                <!-- passport id number -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">IDs Number <span
                                            style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                        name="passportidnumber" class="form-control" placeholder="Passport ID Number"
                                        id="validationDefault01" required>
                                </div>
                                <!-- paasport issued date -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">Issued Date <span
                                            style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                        name="paasportissueddate" class="form-control" placeholder="" id="fromDate"
                                        onchange="validateDateRange()" required>
                                </div>
                                <!-- passport expired date -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">Expired Date <span
                                            style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                        name="passportexpireddate" class="form-control" placeholder="" id="toDate"
                                        onchange="validateDateRange()" required>
                                    <p style="color: red;" id="validationMessage" class="error"></p>
                                </div>
                                <!-- passport issued place -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">Issued Place
                                        <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        name="passportissuedplace" class="form-control" placeholder="Issued Place"
                                        id="validationDefault01" required>
                                </div>
                                <!-- passport issued country -->
                                <div class="col mt-4">
                                    <label for="validationDefault04" class="form-label">Country <span
                                            style="color: red;">*</span></label>
                                    <select class="form-select" id="validationDefault04" name="passportissuedcountry"
                                        required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <!-- passport issued state -->
                                <div class="col mt-4">
                                    <label for="validationDefault01" class="form-label">State <span
                                            style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        name="passportissuedstate" class="form-control" placeholder="Issued Place"
                                        id="validationDefault01" required>
                                </div>
                                <!-- passport  upload id -->
                                <div class="col mt-4">
                                    <label for="validationDefaultUpload" class="form-label">Upload ID- 1st
                                        Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="passportimageid"
                                            name="passportimageid" accept="image/*"
                                            aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                    <div class="form-group">
                                        <img id="passportImageIdPreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>

                                </div>
                                <!-- passport image id page -->
                                <div class="col mt-4">
                                    <label for="validationDefaultUpload" class="form-label">Upload ID- 2st
                                        Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="passportimageidpage"
                                            name="passportimageidpage" accept="image/*"
                                            aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                    <div class="form-group">
                                        <img id="passportImageIdPagePreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </form>
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

    <!-- {{-- passport --}} -->
    <script>
        function toggleInputFields() {
            const passport = document.getElementById('passport');
            const inputFieldspassport = document.getElementById('inputFieldspassport');
            if (passport.checked) {
                inputFieldspassport.style.display = 'block';
            } else {
                inputFieldspassport.style.display = 'none';
            }
        }
    </script>

    <!-- {{--  previews image --}} -->
    <script>
        function setupImagePreview(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function (event) {
                var image = document.getElementById(previewId);
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }
        setupImagePreview('aadharimage', 'aadharImagePreview');
        setupImagePreview('aadharimagepage', 'aadharImagePagePreview');
        setupImagePreview('passportimageid', 'passportImageIdPreview');
        setupImagePreview('passportimageidpage', 'passportImageIdPagePreview');
    </script>

    <!-- aadhar number validation -->
    <script>
        // Verhoeff algorithm functions (same as before)

        function validateAadhaar(aadhaar) {
            if (aadhaar.length !== 12) {
                return false;
            }

            var c = 0;
            var invertedAadhaar = aadhaar.split('').reverse().map(Number);

            for (var i = 0; i < invertedAadhaar.length; i++) {
                c = D(c + inv(invertedAadhaar[i]));
            }

            return (c === 0);
        }

        function updateValidation() {
            var aadhaarNumber = document.getElementById("aadhaar").value;
            var resultElement = document.getElementById("result");

            if (!isNaN(aadhaarNumber) && aadhaarNumber.length === 12 && validateAadhaar(aadhaarNumber)) {
                resultElement.innerText = "Aadhaar Number is valid.";
            } else {
                resultElement.innerText = "Please enter a valid 12-digit Aadhaar Number.";
            }
        }
    </script>
    <!-- passport date validation fromdate todate -->
    <script>
        function validateDateRange() {
            const fromDate = new Date(document.getElementById("fromDate").value);
            const toDate = new Date(document.getElementById("toDate").value);
            const validationMessage = document.getElementById("validationMessage");

            if (fromDate > toDate) {
                validationMessage.textContent = "'The 'Issued Date' must be before the 'Expired Date.'";
                validationMessage.style.display = "block";
            } else {
                validationMessage.textContent = "";
                validationMessage.style.display = "none";
            }
        }
    </script>



    <!-- {{-- bootstrap --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>
