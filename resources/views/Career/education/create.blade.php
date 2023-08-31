<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font acome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        .left-02 {
            /* background-color: #bf9855; */
            background-color: #ebc789;
            height: calc(d-lg-block);


        }

        .btn-00 {
            font-weight: bold;
            border-radius: 40px;
            border: none;
        }

        .btn-00:hover {
            background-color: #111c3a;
            color: white;
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


    <!-- nav bar -->
    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">
            </div>
            <div class=" container  col-lg-10 text-white  navtop">
                <div class="row">
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
                        <!-- Left -->
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
                        <!-- Right -->
                    </section>
                </div>
                <div class="row ">
                    <nav style="background-color: #bf9855 " class=" navbar navbar-expand-lg navbar-light text-white ">
                        <!-- <div class="container-fluid  "> -->
                        <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0  p-1">
                                <li class="nav-item">
                                    <a class="nav-link active mx-4" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-4 " aria-current="page" href="#">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active mx-4 " aria-current="page" href="#">Sectors</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mx-2 " href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item " href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-4 " aria-current="page" href="#">Expertise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active  mx-4" aria-current="page" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-4 " aria-current="page" href="#">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active  mx-4" aria-current="page" href="#">Contact Us
                                    </a>
                                </li>
                                <button class="btn btn-primary btn-nav mx-4 p-3">Feedback</button>

                            </ul>
                        </div>
                </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- main -->
    <!-- Percentage bar -->
    <div class="container">
        <div class="progress m-2  " style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #111;color: white; "
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="60%">60%</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container ">
            {{-- error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- success --}}

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">
                <h1 class="text-center pt-4 pb-4">EDUCATION</h1>
                <p style="font-weight: bold;">Note: Pleasd fill all completed educational details as applicable</p>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                    Size Limit: 50KB</p>

                <p>Do you have any education qualification? <span style="color: red;">*</span></p>

                <div>
                    <label>
                        <input type="radio" name="radioOption" value="yes" onclick="showCheckboxes()"> Yes
                    </label>
                    <label>
                        <input type="radio" name="radioOption" value="no" onclick="hideCheckboxes()"> No
                    </label>
                </div>
                <div id="checkboxes" style="display: none;">

                    <!-- High School -->
                    <input type="checkbox" onchange="toggleForm('form1')"> High School
                    <div id="form1" style="display: none;">
                        <h4>
                            High School
                        </h4>
                        <!-- High school Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label ">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="validationDefault01"
                                    name="highschoolname" required>
                            </div>
                            <!-- High school City -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="validationDefault01"
                                    name="highschoolcity" required>
                            </div>
                            <!-- High school Address -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="validationDefault01"
                                    name="highschooladdress" required>
                            </div>
                            <!-- High school From Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="validationDefault01"
                                    name="highschoolformdate" required>
                            </div>
                            <!-- High school To Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="validationDefault01"
                                    name="highschooltodate" required>
                            </div>
                            <!-- High school Year of Passing-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="highschoolYearofPassing" class="form-control" placeholder="Year of Passing"
                                    id="validationDefault01" required>
                            </div>
                            <!-- High school GPA Percentage-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="0" id="validationDefault01"
                                    name="highschoolgpapercentage" required>
                            </div>
                            <!-- High school Class-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Class <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Class" id="validationDefault01"
                                    name="highschoolclass" required>
                            </div>
                            <!-- High school cir -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Major <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="CSE" id="validationDefault01"
                                    name="diplomamajor" required>
                            </div>

                            <!-- High school image Mark Sheet-->
                            <div class="col-lg-2">
                                <label for="highschoolimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="highschoolimagecertificate"
                                        name="highschoolimagecertificate" required>
                                </div>
                                <!-- Preview for High school image Certificate -->
                                <div class="form-group">
                                    <img id="highschoolimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width:150px; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label for="highschoolimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="highschoolimagemarksheet"
                                        name="highschoolimagemarksheet" required>
                                </div>
                                <!-- Preview for High school image Mark Sheet -->
                                <div class="form-group">
                                    <img id="highschoolMarkSheetPreview" src="#" alt="Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>

                        </div>

                    </div>
                    <br>
                    <!-- Higher Secondary -->

                    <input type="checkbox" onchange="toggleForm('form2')"> Higher Secondary

                    <div id="form2" style="display: none;">
                        <!-- Higher Secondary -->
                        <h4>
                            Higher Secondary
                        </h4>
                        <!-- Higher Secondary Institution Name-->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="validationDefault01"
                                    name="highersecondaryinstitutionname" required>
                            </div>
                            <!-- Higher Secondary city-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="validationDefault01"
                                    name="highersecondarycity" required>
                            </div>
                            <!-- Higher Secondary Address-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="validationDefault01"
                                    name="highersecondaryaddress" required>
                            </div>
                            <!-- Higher Secondary From Date-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="validationDefault01"
                                    name="highersecondaryformdate" required>
                            </div>
                            <!-- Higher Secondary To Date-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="validationDefault01"
                                    name="highersecondarytodate" required>
                            </div>
                            <!-- Higher Secondary Year of Passing-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="validationDefault01"
                                    name="highersecondaryyearofpassing" required>
                            </div>
                            <!-- Higher Secondary GPAPercentage-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="validationDefault01"
                                    name="highersecondarygpapercentage" required>
                            </div>
                            <!-- Higher Secondary Class-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Class <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Class" id="validationDefault01"
                                    name="highersecondaryclass" required>
                            </div>
                            <!-- Higher Secondary Stream -->
                            <div class="col-lg-2">
                                <label for="validationDefault04" class="form-label">Stream <span
                                        style="color: red;">*</span></label>
                                <select class="form-select" id="validationDefault04" name="highersecondarystream"
                                    required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Higher Secondary Filed of Interest -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Filed of Interest <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest" id="validationDefault01"
                                    name="highersecondaryfiledofinterest" required>
                            </div>
                            <!-- Higher Secondary image Certificate -->
                            <div class="col-lg-2">
                                <label for="highersecondaryimagecertificate" class="form-label">Upload Certificate
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="highersecondaryimagecertificate"
                                        name="highersecondaryimagecertificate" required>
                                </div>
                                <!-- Preview for Higher Secondary image Certificate -->
                                <div class="form-group">
                                    <img id="highersecondaryimagecertificatePreview" src="#"
                                        alt="Image Preview" style="width:150px; display: none;">
                                </div>
                            </div>

                            <!-- Higher Secondary image Mark Sheet -->
                            <div class="col-lg-2">
                                <label for="highersecondaryimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="highersecondaryimagemarksheet"
                                        name="highersecondaryimagemarksheet" required>
                                </div>
                                <!-- Preview for Higher Secondary image Mark Sheet -->
                                <div class="form-group">
                                    <img id="highersecondaryimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width:150px; display: none;">
                                </div>
                            </div>

                        </div>

                    </div>
                    <br>


                    {{-- Diploma --}}
                    <input type="checkbox" onchange="toggleForm('form3')"> Diploma

                    <div id="form3" style="display: none;">
                        <!-- Diploma -->
                        <h4>
                            Diploma
                        </h4>
                        <!-- Diploma Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="validationDefault01"
                                    name="diplomainstitutionname" required>
                            </div>
                            <!-- Diploma city -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="validationDefault01"
                                    name="diplomacity" required>
                            </div>
                            <!-- Diploma address -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="validationDefault01"
                                    name="diplomaaddress" required>
                            </div>
                            <!-- Diploma From Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="validationDefault01"
                                    name="diplomaformdate" required>
                            </div>
                            <!-- Diploma to Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="validationDefault01"
                                    name="diplomatodate" required>
                            </div>
                            <!-- Diploma Year of Passing -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="validationDefault01"
                                    name="diplomayearofpassing" required>
                            </div>
                            <!-- Diploma  GPAPercentage-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="validationDefault01"
                                    name="diplomagpapercentage" required>
                            </div>
                            <!-- Diploma Diploma -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Diploma <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Diploma" id="validationDefault01"
                                    name="diplomadiploma" required>
                            </div>
                            <!-- Diploma Major -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Major <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="CSE" id="validationDefault01"
                                    name="diplomamajor" required>
                            </div>
                            <!-- Diploma Filed of Interest -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Filed of Interest <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest" id="validationDefault01"
                                    name="diplomafiledofinterest" required>
                            </div>
                            <!-- Diploma image Certificate -->
                            <div class="col-lg-2">
                                <label for="diplomaimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="diplomaimagecertificate"
                                        name="diplomaimagecertificate" required>
                                </div>
                                <!-- Preview for Diploma image Certificate -->
                                <div class="col-lg-2">
                                    <img id="diplomaCertificatePreview" src="#" alt="Preview"
                                        style="width:150px; height: auto; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label for="diplomaimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="diplomaimagemarksheet"
                                        name="diplomaimagemarksheet" required>
                                </div>
                                <!-- Preview for Diploma image Mark Sheet -->
                                <div class="col-lg-2">
                                    <img id="diplomaMarkSheetPreview" src="#" alt="Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    {{-- Bachelors Degree --}}
                    <input type="checkbox" onchange="toggleForm('form4')"> Bachelors Degree
                    <div id="form4" style="display: none;">
                        <!-- Bachelors Degree -->
                        <h4>
                            Bachelors Degree
                        </h4>
                        <!-- Bachelors Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="validationDefault01"
                                    name="bachelorsinstitutionname" required>
                            </div>
                            <!-- Bachelors city -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="validationDefault01"
                                    name="bachelorscity" required>
                            </div>
                            <!-- Bachelors address -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="validationDefault01"
                                    name="bachelorsaddress" required>
                            </div>
                            <!-- Bachelors From Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="validationDefault01"
                                    name="bachelorformdate" required>
                            </div>
                            <!-- Bachelors To Date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="validationDefault01"
                                    name="bachelorstodate" required>
                            </div>
                            <!-- Bachelors Year of Passing -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="validationDefault01"
                                    name="bachelorsyearofpassing" required>
                            </div>
                            <!-- Bachelors GPA Percentage -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="validationDefault01"
                                    name="bachelorsgpapercentage" required>
                            </div>
                            <!-- Bachelors Course -->
                            <div class="col-lg-2">
                                <label for="validationDefault04" class="form-label">Course <span
                                        style="color: red;">*</span></label>
                                <select class="form-select" id="validationDefault04" name="bachelorscourse" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Bachelors Major -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Major <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Major" id="validationDefault01"
                                    name="bachelorsmajor" required>
                            </div>
                            <!-- Bachelors Filed of Interest -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Filed of Interest <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest" id="validationDefault01"
                                    name="bachelorsfiledofinterest" required>
                            </div>
                            <div class="col-lg-2">
                                <label for="bachelorsimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bachelorsimagecertificate"
                                        name="bachelorsimagecertificate" required>
                                </div>
                                <!-- Preview for Bachelors image Certificate -->
                                <div class="form-group">
                                    <img id="bachelorsimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width: 100%; height: auto; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label for="bachelorsimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bachelorsimagemarksheet"
                                        name="bachelorsimagemarksheet" required>
                                </div>
                                <!-- Preview for Bachelors image Mark Sheet -->
                                <div class="form-group">
                                    <img id="bachelorsimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width: 100%; height: auto; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>



                    {{-- Master's Degree --}}
                    <input type="checkbox" onchange="toggleForm('form5')"> Master's Degree
                    <div id="form5" style="display: none;">
                        <!-- Master's Degree -->
                        <h4>
                            Master's Degree
                        </h4>
                        <!-- Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="masterinstitutionname" class="form-control" placeholder="Institution Name"
                                    id="validationDefault01" required>
                            </div>
                            <!-- city -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="mastercity" class="form-control" placeholder="Town/City"
                                    id="validationDefault01" required>
                            </div>
                            <!-- address -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="masteraddress" class="form-control" placeholder="Address"
                                    id="validationDefault01" required>
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="masterfromdate" class="form-control"
                                    placeholder="From (Date)"id="validationDefault01" required>
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="mastertodate" class="form-control" placeholder="To (Date)"
                                    id="validationDefault01" required>
                            </div>
                            <!-- years of passing -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="masteryearsofpassing" class="form-control" placeholder="Year of Passing"
                                    id="validationDefault01" required>
                            </div>
                            <!-- percentage -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    name="masterpercentage" class="form-control" placeholder="9 GPA"
                                    id="validationDefault01" required>
                            </div>
                            <!-- class -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Class <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="masterclass" class="form-control" placeholder="Class"
                                    id="validationDefault01" required>
                            </div>
                            <!--  Filed of Specialization-->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="masterfiledofspecialization" class="form-control"
                                    placeholder="Filed of Specialization" id="validationDefault01" required>
                            </div>
                            <!-- filed of interest -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Filed of Interest <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="masterfiledofinterest" class="form-control" placeholder="Filed of Interest"
                                    id="validationDefault01" required>
                            </div>
                            <div class="col-lg-2">
                                <label for="masterimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="masterimagecertificate"
                                        name="masterimagecertificate" required>
                                </div>
                                <!-- Preview for Master's image Certificate -->
                                <div class="form-group">
                                    <img id="masterimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label for="masterimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="masterimagemarksheet"
                                        name="masterimagemarksheet" required>
                                </div>
                                <!-- Preview for Master's image Mark Sheet -->
                                <div class="form-group">
                                    <img id="masterimagemarksheetPreview" src="#"
                                        alt="Image Previe "style="width:150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    {{-- Doctorate Degree --}}
                    <input type="checkbox" onchange="toggleForm('form6')"> Doctorate Degree

                    <div id="form6" style="display: none;">
                        <!-- Doctorate Degree -->
                        <h4>
                            Doctorate Degree
                        </h4>
                        <!-- doctoratename -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Institution Name <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name=" doctoratename" class="form-control" placeholder="Institution Name"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctoratecity -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Town/City <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="doctoratecity" class="form-control" placeholder="Town/City"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctorateaddress -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Address <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="doctorateaddress" class="form-control" placeholder="Address"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctoratefromdate -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="doctoratefromdate" class="form-control" placeholder="From (Date)"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctoratetodate -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="doctoratetodate" class="form-control" placeholder="To (Date)"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctorateyearofpassing -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="doctorateyearofpassing" class="form-control" placeholder="Year of Passing"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctoratepercentage -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    name=" doctoratepercentage" class="form-control" placeholder="9 GPA"
                                    id="validationDefault01" required>
                            </div>
                            <!-- doctorateclass -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Class <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" name="doctorateclass" placeholder="Class"
                                    id="validationDefault01" required>
                            </div>

                            <!-- doctoratefiledofspecialization -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Specialization"
                                    id="validationDefault01" name="doctoratefiledofspecialization" required>
                            </div>
                            <!-- doctoratefiledofinterest -->
                            <div class="col-lg-2">
                                <label for="validationDefault01" class="form-label">Filed of Interest <span
                                        style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" name="doctoratefiledofinterest"
                                    placeholder="Filed of Interest" id="validationDefault01" required>
                            </div>
                            <div class="col-lg-2">
                                <label for="doctorateimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="doctorateimagecertificate"
                                        name="doctorateimagecertificate" required>
                                </div>
                                <!-- Preview for Doctorate image Certificate -->
                                <div class="form-group">
                                    <img id="doctorateimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width: 100%; height: auto; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label for="doctorateimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="doctorateimagemarksheet"
                                        name="doctorateimagemarksheet" required>
                                </div>
                                <!-- Preview for Doctorate image Mark Sheet -->
                                <div class="form-group">
                                    <img id="doctorateimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width: 100%; height: auto; display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <!-- BUTTONS -->
                <div style="display: flex;justify-content: end; align-items: center;" class="">
                    <a style="font-weight: bold; " class="btn btn-secondary mt-5" href="card">Previous</a>
                    <button class="btn btn-primary mx-4 mt-5" type="submit">Save & Resume</button>
                    <a style="font-weight: bold;" class="btn btn-secondary mt-5 " href="acheivement">Next</a>
                </div>
            </form>
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

    <!-- checkbok -->
    <script>
        function showCheckboxes() {
            const checkboxesDiv = document.getElementById('checkboxes');
            checkboxesDiv.style.display = 'block';
        }

        function hideCheckboxes() {
            const checkboxesDiv = document.getElementById('checkboxes');
            checkboxesDiv.style.display = 'none';
        }

        function toggleForm(formId) {
            const form = document.getElementById(formId);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>

    <script>
        function setupImagePreview(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function(event) {
                var image = document.getElementById(previewId);
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }

        setupImagePreview('highschoolimagemarksheet', 'highschoolMarkSheetPreview');
        setupImagePreview('highschoolimagecertificate', 'highschoolimagecertificatePreview');

        setupImagePreview('highersecondaryimagecertificate', 'highersecondaryimagecertificatePreview');
        setupImagePreview('highersecondaryimagemarksheet', 'highersecondaryimagemarksheetPreview');

        setupImagePreview('diplomaimagecertificate', 'diplomaCertificatePreview');
        setupImagePreview('diplomaimagemarksheet', 'diplomaMarkSheetPreview');

        setupImagePreview('bachelorsimagemarksheet', 'bachelorsimagemarksheetPreview');
        setupImagePreview('bachelorsimagecertificate', 'bachelorsimagecertificatePreview');

        setupImagePreview('masterimagecertificate', 'masterimagecertificatePreview');
        setupImagePreview('masterimagemarksheet', 'masterimagemarksheetPreview');

        setupImagePreview('doctorateimagecertificate', 'doctorateimagecertificatePreview');
        setupImagePreview('doctorateimagemarksheet', 'doctorateimagemarksheetPreview');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
