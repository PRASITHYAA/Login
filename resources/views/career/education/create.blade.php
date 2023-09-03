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
                        <input type="radio" name="radio_option" value="yes" onclick="showCheckboxes()"> Yes
                    </label>
                    <label>
                        <input type="radio" name="radio_option" value="no" onclick="hideCheckboxes()"> No
                    </label>
                </div>

                <div id="checkboxes" style="display: none;">

                    <!-- High School -->
                    <input type="checkbox" onchange="toggleForm('form1')" name="qualification" value="high_school"> High School
                    <div id="form1" style="display: none;">
                        <h4>
                            High School
                        </h4>
                        <!-- High school Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label ">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="high_school_name"
                                    name="high_school_name">
                            </div>
                            <!-- High school City -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="high_school_city"
                                    name="high_school_city">
                            </div>
                            <!-- High school Address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="high_school_address"
                                    name="high_school_address">
                            </div>
                            <!-- High school From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="high_school_form_date"
                                    name="high_school_form_date">
                            </div>
                            <!-- High school To Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="high_school_to_date"
                                    name="high_school_to_date">
                            </div>
                            <!-- High school Year of Passing-->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="high_school_year_of_passing" class="form-control"
                                    placeholder="Year of Passing" id="high_school_year_of_passing">
                            </div>
                            <!-- High school GPA Percentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="0" id="high_school_percentage"
                                    name="high_school_percentage">
                            </div>

                            <!-- High school Class-->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Class" id="high_school_class"
                                    name="high_school_class">
                            </div>
                            {{-- high aschool curriculum --}}
                            <div class="col-lg-2">
                                <label class="form-label">Curriculum <span style="color: red;">*</span></label>
                                <select class="form-select" id="high_school_stream" name="high_school_stream">
                                    <option selected disabled value="">Choose...</option>
                                    <option>CBSE</option>
                                    <option>ICSE</option>
                                    <option>IB</option>
                                    <option>IGCSE</option>
                                    <option>STATE BOARD</option>


                                </select>
                            </div>
                            <!-- High school image Mark Sheet-->
                            <div class="col-lg-3">
                                <label class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="high_school_image_certificate"
                                        name="high_school_image_certificate">
                                </div>
                                <!-- Preview for High school image Certificate -->
                                <div class="form-group">
                                    <img id="highschoolimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width:150px; display: none;">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <label class="form-label">Upload Mark Sheet <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="high_school_image_mark_sheet"
                                        name="high_school_image_mark_sheet">
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

                    <input type="checkbox" onchange="toggleForm('form2')" name="qualification" value="higher_secondary"> Higher Secondary

                    <div id="form2" style="display: none;">
                        <!-- Higher Secondary -->
                        <h4>
                            Higher Secondary
                        </h4>
                        <!-- Higher Secondary Institution Name-->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name"
                                    id="higher_secondary_institution_name" name="higher_secondary_institution_name">
                            </div>
                            <!-- Higher Secondary city-->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="higher_secondary_city"
                                    name="higher_secondary_city">
                            </div>
                            <!-- Higher Secondary Address-->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="higher_secondary_address"
                                    name="higher_secondary_address">
                            </div>
                            <!-- Higher Secondary From Date-->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="higher_secondary_form_date"
                                    name="higher_secondary_form_date">
                            </div>
                            <!-- Higher Secondary To Date-->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="higher_secondary_to_date"
                                    name="higher_secondary_to_date">
                            </div>
                            <!-- Higher Secondary Year of Passing-->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing"
                                    id="higher_secondary_year_of_passing" name="higher_secondary_year_of_passing">
                            </div>
                            <!-- Higher Secondary GPAPercentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" name="higher_secondary_percentage">
                            </div>
                            <!-- Higher Secondary Class-->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Class" id="higher_secondary_class"
                                    name="higher_secondary_class">
                            </div>
                            <!-- Higher Secondary Stream -->
                            <div class="col-lg-2">
                                <label class="form-label">Stream <span style="color: red;">*</span></label>
                                <select class="form-select" id="higher_secondary_stream"
                                    name="higher_secondary_stream">
                                    <option selected disabled value="">Choose...</option>
                                    <option>Maths and Science</option>
                                    <option>Science</option>
                                    <option>Commerce</option>
                                    <option>Others</option>

                                </select>
                            </div>
                            <!-- Higher Secondary Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest"
                                    id="higher_secondary_filed_of_interest" name="higher_secondary_filed_of_interest">
                            </div>
                            <!-- Higher Secondary image Certificate -->
                            <div class="col-lg-2">
                                <label class="form-label">Upload Certificate
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control"
                                        id="higher_secondary_image_certificate"
                                        name="higher_secondary_image_certificate">
                                </div>
                                <!-- Preview for Higher Secondary image Certificate -->
                                <div class="form-group">
                                    <img id="highersecondaryimagecertificatePreview" src="#"
                                        alt="Image Preview" style="width:150px; display: none;">
                                </div>
                            </div>

                            <!-- Higher Secondary image Mark Sheet -->
                            <div class="col-lg-2">
                                <label class="form-label">Upload Mark Sheet <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="higher_secondary_image_mark_sheet"
                                        name="higher_secondary_image_mark_sheet">
                                </div>
                                <!-- Preview  Higher Secondary image Mark Sheet -->
                                <div class="form-group">
                                    <img id="highersecondaryimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width:150px; display: none;">
                                </div>
                            </div>

                        </div>

                    </div>
                    <br>


                    {{-- Diploma --}}
                    <input type="checkbox" onchange="toggleForm('form3')" name="qualification" value="diploma"> Diploma

                    <div id="form3" style="display: none;">
                        <!-- Diploma -->
                        <h4>
                            Diploma
                        </h4>
                        <!-- Diploma Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="diploma_institution_name"
                                    name="diploma_institution_name">
                            </div>
                            <!-- Diploma city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="diploma_city"
                                    name="diploma_city">
                            </div>
                            <!-- Diploma address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="diploma_address"
                                    name="diploma_address">
                            </div>
                            <!-- Diploma From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="diploma_form_date"
                                    name="diploma_form_date">
                            </div>
                            <!-- Diploma to Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="diploma_to_date"
                                    name="diploma_to_date">
                            </div>
                            <!-- Diploma Year of Passing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="diploma_year_of_passing"
                                    name="diploma_year_of_passing">
                            </div>
                            <!-- Diploma  GPAPercentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="diploma_percentage"
                                    name="diploma_percentage">
                            </div>
                            <!-- Diploma Diploma -->
                            <div class="col-lg-2">
                                <label class="form-label">Diploma <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Course" id="diploma_course"
                                    name="diploma_course">
                            </div>
                            <!-- Diploma Major -->
                            <div class="col-lg-2">
                                <label class="form-label">Major <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="CSE" id="diploma_major" name="diploma_major">
                            </div>
                            <!-- Diploma Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest"
                                    id="diploma_filed_of_interest" name="diploma_filed_of_interest">
                            </div>
                            <!-- Diploma image Certificate -->
                            <div class="col-lg-2">
                                <label for="diplomaimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="diploma_image_certificate"
                                        name="diploma_image_certificate">
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
                                    <input type="file" class="form-control" id="diploma_image_mark_sheet"
                                        name="diploma_image_mark_sheet">
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
                    <input type="checkbox" onchange="toggleForm('form4')" name="qualification" value="bachelor_degree"> Bachelors Degree
                    <div id="form4" style="display: none;">
                        <!-- Bachelors Degree -->
                        <h4>
                            Bachelors Degree
                        </h4>
                        <!-- Bachelors Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name"
                                    id="bachelors_institution_name" name="bachelors_institution_name">
                            </div>
                            <!-- Bachelors city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="bachelors_city"
                                    name="bachelors_city">
                            </div>
                            <!-- Bachelors address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="bachelors_address"
                                    name="bachelors_address">
                            </div>
                            <!-- Bachelors From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="bachelor_form_date"
                                    name="bachelors_form_date">
                            </div>
                            <!-- Bachelors To Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="bachelors_to_date"
                                    name="bachelors_to_date">
                            </div>
                            <!-- Bachelors Year of Passing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="bachelors_year_of_passing"
                                    name="bachelors_year_of_passing">
                            </div>
                            <!-- Bachelors GPA Percentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="bachelors_percentage"
                                    name="bachelors_percentage">
                            </div>
                            <!-- Bachelors Course -->
                            <div class="col-lg-2">
                                <label for="" class="form-label">Course <span
                                        style="color: red;">*</span></label>
                                <select class="form-select" id="bachelors_course" name="bachelors_course">
                                    <option selected disabled value="">Choose...</option>
                                    <option>Bachelor of Engineering</option>
                                    <option>BSc</option>
                                    <option>BCom</option>
                                    <option>BA</option>
                                    <option>Bachelor of Technology</option>
                                    <option> Other</option>
                                </select>

                            </div>
                            <!-- Bachelors Major -->
                            <div class="col-lg-2">
                                <label class="form-label">Major <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Major" id="bachelors_major"
                                    name="bachelors_major">
                            </div>
                            <!-- Bachelors Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest"
                                    id="bachelors_filed_of_interest" name="bachelors_filed_of_interest">
                            </div>
                            {{-- image --}}
                            <div class="col-lg-2">
                                <label class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bachelors_image_certificate"
                                        name="bachelors_image_certificate">
                                </div>
                                <!-- Preview for Bachelors image Certificate -->
                                <div class="form-group">
                                    <img id="bachelorsimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>
                            {{-- marksheet --}}

                            <div class="col-lg-2">
                                <label class="form-label">Upload Mark Sheet <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bachelors_image_mark_sheet"
                                        name="bachelors_image_mark_sheet">
                                </div>
                                <!-- Preview for Bachelors image Mark Sheet -->
                                <div class="form-group">
                                    <img id="bachelorsimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    {{-- Master's Degree --}}
                    <input type="checkbox" onchange="toggleForm('form5')" name="qualification" value="master_degree"> Master's Degree
                    <div id="form5" style="display: none;">
                        <!-- Master's Degree -->
                        <h4>
                            Master's Degree
                        </h4>
                        <!-- Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_institution_name" name="master_institution_name" class="form-control"
                                    placeholder="Institution Name">
                            </div>
                            <!-- city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_city" name="master_city" class="form-control"
                                    placeholder="Town/City">
                            </div>
                            <!-- address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="master_address" class="form-control" placeholder="Address"
                                    id="master_address">
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="master_from_date" class="form-control" id="master_from_date"
                                    placeholder="From (Date)">
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="master_to_date" name="master_to_date" class="form-control"
                                    placeholder="To (Date)">
                            </div>
                            <!-- years of passing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="master_years_of_passing" name="master_years_of_passing" class="form-control"
                                    placeholder="Year of Passing">
                            </div>
                            <!-- percentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    name="master_percentage" class="form-control" placeholder="9 GPA"
                                    id="master_percentage">
                            </div>
                            <!-- class -->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_class" name="master_class" class="form-control" placeholder="Class">
                            </div>
                            <!--  Filed of Specialization-->
                            <div class="col-lg-2">
                                <label class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="master_filed_of_specialization" class="form-control"
                                    id="master_filed_of_specialization" placeholder="Filed of Specialization">
                            </div>
                            <!-- filed of interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_filed_of_interest" name="master_filed_of_interest"
                                    class="form-control" placeholder="Filed of Interest">
                            </div>
                            <div class="col-lg-2">
                                <label for="masterimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="master_image_certificate"
                                        name="master_image_certificate">
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
                                    <input type="file" class="form-control" id="master_image_mark_sheet"
                                        name="master_image_mark_sheet">
                                </div>
                                <!-- Preview for Master's image Mark Sheet -->
                                <div class="form-group">
                                    <img id="masterimagemarksheetPreview" src="#"
                                        alt="Image Preview "style="width:150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    {{-- Doctorate Degree --}}
                    <input type="checkbox" onchange="toggleForm('form6')" name="qualification" value="doctorate_degree"> Doctorate Degree

                    <div id="form6" style="display: none;">
                        <!-- Doctorate Degree -->
                        <h4>
                            Doctorate Degree
                        </h4>
                        <!-- doctoratename -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="doctorate_name" name=" doctorate_name" class="form-control"
                                    placeholder="Institution Name">
                            </div>
                            <!-- doctoratecity -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_city" name="doctorate_city" class="form-control"
                                    placeholder="Town/City">
                            </div>
                            <!-- doctorateaddress -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_address" name="doctorate_address" class="form-control"
                                    placeholder="Address">
                            </div>
                            <!-- doctoratefromdate -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_from_date" name="doctorate_from_date" class="form-control"
                                    placeholder="From (Date)">
                            </div>
                            <!-- doctoratetodate -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_to_date" name="doctorate_to_date" class="form-control"
                                    placeholder="To (Date)">
                            </div>
                            <!-- doctorateyearofpassing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_year_of_passing" name="doctorate_year_of_passing"
                                    class="form-control" placeholder="Year of Passing">
                            </div>
                            <!-- doctoratepercentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    id="doctorate_percentage" name=" doctorate_percentage" class="form-control"
                                    placeholder="9 GPA">
                            </div>
                            <!-- doctorateclass -->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_class" class="form-control" name="doctorate_class"
                                    placeholder="Class">
                            </div>

                            <!-- doctoratefiledofspecialization -->
                            <div class="col-lg-2">
                                <label class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Specialization"
                                    id="doctorate_filed_of_specialization" name="doctorate_filed_of_specialization">
                            </div>
                            <!-- doctoratefiledofinterest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" name="doctorate_filed_of_interest"
                                    id="doctorate_filed_of_interest" placeholder="Filed of Interest">
                            </div>
                            <div class="col-lg-2">
                                <label for="doctorateimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="doctorate_image_certificate"
                                        name="doctorate_image_certificate">
                                </div>
                                <!-- Preview for Doctorate image Certificate -->
                                <div class="form-group">
                                    <img id="doctorateimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>
                            {{-- mark sheet --}}
                            <div class="col-lg-2">
                                <label for="doctorateimagemarksheet" class="form-label">Upload Mark Sheet <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="doctorate_image_mark_sheet"
                                        name="doctorate_image_mark_sheet">
                                </div>
                                <!-- Preview for Doctorate image Mark Sheet -->
                                <div class="form-group">
                                    <img id="doctorateimagemarksheetPreview" src="#" alt="Image Preview"
                                        style="width: 150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                </div>
                <!-- BUTTONS -->
                <div style="display: flex;justify-content: end; align-items: center;" class="">
                    <a style="font-weight: bold; " class="btn btn-secondary mt-5" href="card">Previous</a>
                    <button class="btn btn-primary mx-4 mt-5" type="submit">Save </button>
                    <a style="font-weight: bold;" class="btn btn-secondary mt-5 " href="employment">Next</a>
                </div>
            </form>
        </div>
    </div>





    <footer class="bg-dark  text-white mt-4">
        <div class="container-fluid  p-4">
            <!-- link -->
            <section class="container">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5  ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch
                            expertise and
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
                                <a href="#!" class="text-white">Cancellation & Refund Policy –
                                    Training</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy –
                                    Job</a>
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


    {{-- image --}}
    <script>
        function setupImagePreview(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function(event) {
                var image = document.getElementById(previewId);
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }

        setupImagePreview('high_school_image_mark_sheet', 'highschoolMarkSheetPreview');
        setupImagePreview('high_school_image_certificate', 'highschoolimagecertificatePreview');

        setupImagePreview('higher_secondary_image_certificate', 'highersecondaryimagecertificatePreview');
        setupImagePreview('higher_secondary_image_mark_sheet', 'highersecondaryimagemarksheetPreview');

        setupImagePreview('diploma_image_certificate', 'diplomaCertificatePreview');
        setupImagePreview('diploma_image_mark_sheet', 'diplomaMarkSheetPreview');

        setupImagePreview('bachelors_image_mark_sheet', 'bachelorsimagemarksheetPreview');
        setupImagePreview('bachelors_image_certificate', 'bachelorsimagecertificatePreview');

        setupImagePreview('master_image_certificate', 'masterimagecertificatePreview');
        setupImagePreview('master_image_mark_sheet', 'masterimagemarksheetPreview');

        setupImagePreview('doctorate_image_certificate', 'doctorateimagecertificatePreview');
        setupImagePreview('doctorate_image_mark_sheet', 'doctorateimagemarksheetPreview');
    </script>


    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
