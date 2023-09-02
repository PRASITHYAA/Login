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

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
                        </div>
                </nav>
            </div>

        </div>
    </div>


    <!-- percentage -->
    <div class="container   mt-2">
        <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #111;color: white; "
            aria-valuenow="90" aria-valuemin="0" aria-valuemax="90%">90%</div>

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
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('achievement.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">

                <h2 class="text-center p-4">ACHEIVEMENTS, CO-CURRICULAR, EXTRA-CURRICULAR DETAILS</h2>
                <p>Please use this section to indicate how far you meet each of the competencies required for the post.
                    Indicate specific experience, achievements, knowledge, personal <br> qualities, and skills, which
                    you feel are relevant, for this particular post that you, applying for. Please limit your writing
                    for this part to a maximum of 500 words
                </p>

                <p class="border-bottom">List out your Acheivements here <span class="form-label red">*</span> </p>
                <div class="mb-3">

                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                        name="achievement" id="achievement" placeholder="">
                </div>
                <h4>Have you been published any conference papers/attended conferences? </h4>
                <!-- first one -->

                <label>
                    <input type="radio" name="open-input" value="yes" id="yesRadio1" onclick="showInput()">
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input" value="no" id="noRadio1" onclick="hideInput()">
                    No
                </label>
                <div id="input-field" style="display: none;">
                    <!-- Conference -->
                    <div class="mb-3">
                        <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                            limit
                            your writing for this part to a maximum of 500 words.</p>
                        <label for="exampleFormControlInput1" class="form-label">Conference</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type=""
                            class="form-control" name="Conference" id="Conference" placeholder="">
                    </div>
                </div>
                <!-- second one -->
                <h2 class="pt-4 pb-4"> FINAL YEAR PROJECT</h2>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, pdf bmp <br> Size
                    Limit: 50KB </p>
                <p> Do you worked on any final year projects?</p>

                <label>
                    <input type="radio" name="open-input-2" value="yes" id="yesRadio2">
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input-2" value="no" id="noRadio2">
                    No
                </label>

                <div id="input-field-2" style="display: none;">
                    <p class="border-bottom">Please use this section to indicate the final year project. Please
                        limit your writing for this part to a maximum of 500 words and upload the detailed project file.
                    </p>
                    <label for="exampleFormControlInput1" class="form-label">Final Year Projects </label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);"
                        class="form-control open-input-2-input " name="final_year_project" id="final_year_project">

                    <div class="col-md-3  p-2">
                        <label class="form-label">Upload All Your Project Documents Here
                            <div class="input-group">
                                <input type="file" class="form-control open-input-2-input" id="project_document"
                                    name="project_document">
                            </div>
                    </div>
                </div>
                <div>
                    <h2 class="pt-4 pb-4">Cocurricular/Extra Curricular Skills</h2>
                    </p>
                    <div class="mb-3">
                        <label class="form-label"> Please use this section to
                            indicate
                            the Personal Quality Skills. Please limit your writing for this part to a maximum of 500
                            words and upload the Co- <br> Curricular/Extracurricular Records <span
                                class="red">*</span>
                        </label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="extra_curricular_skills"
                            name="extra_curricular_skills" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-3  mt-4 mb-5">
                    <label class="form-label">Upload All Your Project Documents Here

                        <div class="input-group">
                            <input type="file" class="form-control" id="extra_curricular_skills_project_document"
                                name="extra_curricular_skills_project_document" required>
                        </div>
                </div>


                {{-- CURRICULUM --}}
                <div>
                    <h2 class="pt-4 pb-4">CURRICULUM VITAE</h2>
                    <p> Are You willing to Attach Your Curriculum Vitae <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="open-input-3" value="yes" id="yesRadio3">
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input-3" value="no" id="noRadio3">
                        No
                    </label>

                    <div id="input-field-3" style="display: none;">
                        <div class="col-md-3  p-2">
                            <label class="form-label open-input-3-input">Attach Your resume: In PDF Format
                                <span class="red">*</span>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control open-input-3-input"
                                    id="yes_curriculum_pdf_format" name="yes_curriculum_pdf_format">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p> Are You willing to Attach Your Curriculum Vitae <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="open-input-4" value="yes" id="yesRadio4">
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input-4" value="no" id="noRadio4">
                        No
                    </label>

                    <div id="input-field-4" style="display: none;">
                        <div class="p-2">
                            <div class="mb-3">
                                <label class="form-label">Please explain here</label>
                                <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="no_curriculum_explain"
                                    name="no_curriculum_explain" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- buttons -->
                <div style="display: flex;justify-content:end;" class="pt-5">
                    <a class="btn btn-secondary m-1" href="employment">Previous</a>
                    <button class="btn btn-primary m-1">Save </button>
                    <a class="btn btn-secondary m-1" href="disclaimer">Next</a>
                </div>
            </form>
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
                                <a style="text-decoration: none;padding-right: 10px;" href=""
                                    class=" text-reset">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a style="text-decoration: none;padding-right: 10px;" href=""
                                    class=" text-reset">
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


        <script>
            $(document).ready(function() {
                $('#yesRadio1').click(function() {
                    $('#input-field').show();
                    $('.Conference').attr('required', true);
                });

                $('#noRadio1').click(function() {
                    $('#input-field').hide();
                    $('.Conference').attr('required', false);
                });

                $('#yesRadio2').click(function() {
                    $('#input-field-2').show();
                    $('.open-input-2-input').attr('required', true);

                });
                $('#noRadio2').click(function() {
                    $('#input-field-2').hide();
                    $('.open-input-2-input').attr('required', false);

                });
                $('#yesRadio3').click(function() {
                    $('#input-field-3').show();

                });
                $('#noRadio3').click(function() {
                    $('#input-field-3').hide();

                });

                $('#yesRadio4').click(function() {
                    $('#input-field-4').show();
                });
                $('#noRadio4').click(function() {
                    $('#input-field-4').hide();
                });
            });
        </script>

        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
