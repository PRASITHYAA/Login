@php use App\Models\Sector; @endphp
@php use App\Models\Position; @endphp
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

    <!-- phone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

</head>

<body>
    <style>
        body {
            overflow-x: hidden;
        }

        .bg {
            background-color: rgba(248, 235, 235, 0.726);
        }

        .red {
            color: red;
        }

        .hidden {
            display: none;
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
                <img class="" style="width: 180px;height: 140px;" src="{{ asset('img/logo.png') }}" alt="">
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
    </div>


    </div>


    <!-- main -->
    <div>
        <div class="container">
            <!-- percentage -->
            <div class="container   mt-2">
                <div class="progress-bar" role="progressbar" style="width: 30%; background-color: #111;color: white; "
                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="30%">30%
                </div>
            </div>
        </div>
        <h2 class="text-center">EMPLOYMENT / JOB APPLICATION</h2>

        <!-- main -->
        <div class="container-fuild">
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
                {{-- {{ print_r(old()) }} --}}
                <form
                    action="{{ isset($jobApplication) ? route('career.job_application.update', $jobApplication->id) : route('career.job_application.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($jobApplication))
                    @method('PUT')
                    @endif
                    <input type="hidden" name="job_application_id" value="{{ $jobApplication->id ?? '' }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- sector -->
                            <p>Sectors <span class="red">*</span></p>
                            <select class="form-select bg" name="sector_id" id="sector_id" required>
                                <option value="">--Please Select Sector--</option>
                                @php
                                $sectors = Sector::all();
                                @endphp
                                @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}" {{ old('sector')==$sector->id || request()->sector_id
                                    == $sector->id || (isset($jobApplication) && $jobApplication->sector_id ==
                                    $sector->id) ? 'selected' : '' }}>
                                    {{ $sector->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Position -->
                        <div class="col-lg-6">
                            <p>Position Applied For<span class="red">*</span></p>
                            <select class="form-select bg" name="position_id" id="position_id" required>
                                <option value="">--Please Select Position--</option>
                                @php
                                $positions = Position::all();
                                @endphp
                                @foreach ($positions as $position)
                                <option value="{{ $position->id }}" {{ old('position')==$position->id ||
                                    request()->position_id == $position->id || (isset($jobApplication) &&
                                    $jobApplication->position_id == $position->id) ? 'selected' : '' }}>
                                    {{ $position->name }}
                                </option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <!-- heading -->
                    <h2 style="display: flex;justify-content: flex-start;" class="pt-4 pb-4">PERSONAL INFORMATION</h2>
                    <p style="font-weight: bold;">
                        Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                        Size Limit: 50KB
                    </p>
                    <!-- firstname -->
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">First name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg" name="first_name" placeholder="First Name"
                                id="first_name" value="{{ old('first_name') ?? ($jobApplication->first_name ?? '') }}"
                                required>
                        </div>
                        <!-- lastname -->
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Last name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg" name="last_name" id="last_name"
                                value="{{ old('last_name') ?? ($jobApplication->last_name ?? '') }}" required>
                        </div>
                        <!-- upload -->
                        <div class="col-md-4">
                            <label for="image" class="form-label">Upload the Latest Passport Size Photo : <span
                                    class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                    required>
                            </div>
                            @if (isset($jobApplication))
                            <img src="{{ asset('storage/' . $jobApplication->image) }}" alt="Job Application Image"
                                style="max-width: 100%;">
                            @endif
                            <div class="form-group">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width:150px; display: none;">
                            </div>

                        </div>
                        <!-- dateofbirth -->
                        <div class="col-md-4">
                            <label for="dob">Enter your date of birth <span class="red">*</span></label><br>
                            <input class="form-control " type="date" name="dob" id="dob"
                                value="{{ old('dob') ?? ($jobApplication->dob ?? '') }}" oninput="calculateAge()"
                                required>
                        </div>
                        <!-- age -->
                        <div class="col-md-4">
                            <label for="ageOutput">Your age is</label><br>
                            <input class="form-control bg " type="text" id="ageOutput"
                                value="{{ old('age') ?? ($jobApplication->age ?? '') }}" name="age" readonly>
                        </div>
                        <!-- space -->
                        <div class="col-md-4">
                        </div>
                        <!-- country -->
                        <div class="col-md-4">
                            <label class="form-label">Country <span class="red">*</span></label>
                            <select class="form-select" name="country" id="country" required>
                                <option value="1">India</option>
                            </select>

                        </div>

                        <!-- State -->
                        <div class="col-md-4">
                            <label class="form-label">State <span class="red">*</span></label>
                            <select class="form-select" name="state" id="state" required>
                                <option value="">--Select State--</option>
                                @foreach (\App\Models\State::all() as $state)
                                <option value="{{ $state->id }}" {{ isset($jobApplication) && $state->id ==
                                    $jobApplication->state_id ? 'selected' : '' }}>
                                    {{ $state->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- city -->
                        <div class="col-md-4">
                            <label class="form-label">City <span class="red">*</span></label>
                            <select class="form-select" name="city" id="city" required>
                                <option value="">--Select City--</option>
                                @foreach (\App\Models\City::all() as $city)
                                <option value="{{ $city->id }}" {{ isset($jobApplication) && $city->id ==
                                    $jobApplication->city_id ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!--address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span class="red">*</span></label>
                            <input type="text" name="address" class="form-control bg" placeholder="Address"
                                name="address" id="address"
                                value="{{ old('address') ?? ($jobApplication->address ?? '') }}" required>
                        </div>
                        <!-- postal code -->
                        <div class="col-md-4">
                            <label class="form-label">Postal Code
                                <span class="red">*</span></label>
                            <input type="number" class="form-control bg" placeholder="postal code" id="postal_code"
                                value="{{ old('postal_code') ?? ($jobApplication->postal_code ?? '') }}"
                                name="postal_code" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-4">
                            <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                            <input type="tel" class=" form-control phoneInputField" name="phone" id="phone"
                                value="{{ old('phone') ?? ($jobApplication->phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- Alternative Phone -->
                        <div class="col-md-4">
                            <label class="form-label">Alternative Phone/Mobile </label>
                            <br>
                            <input type="tel" class=" form-control phoneInputField" name="alternative_phone"
                                id="alternative_phone"
                                value="{{ old('alternative_phone') ?? ($jobApplication->alternative_phone ?? '') }}">
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- email -->
                        <div class="col-md-4">
                            <label class="form-label">Email <span class="red">*</span></label>
                            <input type="email" class="form-control bg" placeholder="Email-Id" id="email"
                                value="{{ old('email') ?? ($jobApplication->email ?? '') }}" name="email" required>
                        </div>
                        <!-- fblink -->
                        <div class="col-md-4">
                            <label class="form-label">FB Profile Link <span class="red">*</span></label>
                            <input type="text" name="fb_link" class="form-control bg" placeholder="FB Profile Link"
                                id="fb_link" value="{{ old('fb_link') ?? ($jobApplication->fb_link ?? '') }}" required>
                        </div>
                        <!-- instalink -->
                        <div class="col-md-4">
                            <label class="form-label">Instagram Profile Link <span class="red">*</span></label>
                            <input type="text" class="form-control bg" placeholder="Instagram Profile Link"
                                name="instagram_link" id="instagram_link"
                                value="{{ old('instagram_link') ?? ($jobApplication->instagram_link ?? '') }}" required>
                        </div>
                        <!-- linked link -->
                        <div class="col-md-4">
                            <label class="form-label">LinkedIn Profile Link
                                <span class="red">*</span>
                            </label>
                            <input type="text" class="form-control bg" placeholder="LinkedIn Profile Link"
                                name="linked_link" id="linked_link"
                                value="{{ old('linked_link') ?? ($jobApplication->linked_link ?? '') }}" required>
                        </div>

                        <!-- {{-- Permanentaddress yes OR no --}} -->
                        <div class="col-md-4">
                            <label>Does Your Permanent Address is Different
                                <br>
                                <input type="radio" name="permanent_address_input" value="yes" {{
                                    old('permanent_address_input')=='yes' || (isset($jobApplication) &&
                                    $jobApplication->permanent_address_input == 'yes') ? 'checked' : '' }}
                                id="yesRadio1">
                                Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="permanent_address_input" value="no" {{
                                    old('permanent_address_input')=='no' || (isset($jobApplication) &&
                                    $jobApplication->permanent_address_input == 'no') ? 'checked' : '' }}
                                id="noRadio1">
                                No
                            </label>
                        </div>
                        <div id="formContainer1"
                            class=" row g-3  {{ old('permanent_address_input') == 'no' || (isset($jobApplication) && $jobApplication->permanent_address_input == 'no') ? 'hidden' : '' }}">
                            {{-- country --}}
                            <div class="col-md-4">

                                <label class="form-label">Country <span style="color: red;">*</span></label>
                                <select class="form-select bg permanent-address-input" id="permanent_country"
                                    name="permanent_country">
                                    <option value="1">India</option>
                                </select>
                            </div>
                            <!-- permanentcity -->
                            <div class="col-md-4">
                                <label class="form-label">City <span class="red">*</span></label>
                                <input type="text" name="permanent_city" class="form-control bg permanent-address-input"
                                    id="permanent_city"
                                    value="{{ old('permanent_city') ?? ($jobApplication->permanent_city ?? '') }}"
                                    placeholder="City">
                            </div>
                            <!-- permanent_address -->
                            <div class="col-md-4">
                                <label class="form-label">Address
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control bg permanent-address-input"
                                    name="permanent_address" id="permanent_address"
                                    value="{{ old('permanent_address') ?? ($jobApplication->permanent_address ?? '') }}"
                                    placeholder="Address">
                            </div>
                            <!-- permanentpostalcode -->
                            <div class="col-md-4">
                                <label class="form-label">Postal Code
                                    <span class="red">*</span></label>
                                <input type="number" class="form-control bg permanent-address-input"
                                    name="permanent_postal_code" id="permanent_postal_code"
                                    value="{{ old('permanent_postal_code') ?? ($jobApplication->permanent_postal_code ?? '') }}"
                                    placeholder="Postal Code">
                            </div>
                            {{--
                            <!-- permanent phone --> --}}
                            <div class="col-md-4">
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label>
                                <br>
                                <input type="tel" class=" form-control phoneInputField permanent-address-input"
                                    name="permanent_phone" id="permanent_phone"
                                    value="{{ old('permanent_phone') ?? ($jobApplication->permanent_phone ?? '') }}">
                                <p class="errorText" style="color: red;"></p>
                            </div>
                        </div>
                    </div><br>
                    <!-- fathername -->
                    <div class="row g-3 ">
                        <div class="col-md-3">
                            <label class="form-label">Father’s Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" name="father_name" class="form-control bg" id="father_name"
                                    value="{{ old('father_name') ?? ($jobApplication->father_name ?? '') }}"
                                    placeholder="Father's Name" required>
                            </div>
                        </div>
                        <!-- fatherdateofbirth -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" id="father_date_of_birth"
                                value="{{ old('father_date_of_birth') ?? ($jobApplication->father_date_of_birth ?? '') }}"
                                name="father_date_of_birth" required>
                        </div>
                        <!-- fatherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <br>
                            <input type="tel" class="phoneInputField form-control " name="father_phone"
                                id="father_phone"
                                value="{{ old('father_phone') ?? ($jobApplication->father_phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- fatherupload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="father_image" name="father_image"
                                    accept="image/*" required>
                            </div>
                            @if (isset($jobApplication))
                            <img src="{{ asset('storage/' . $jobApplication->father_image) }}" alt="Job Application Image"
                                style="max-width: 100%;">
                            @endif
                            <!-- images  -->
                            <div class="form-group">
                                <img id="fatherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>
                        </div>
                        <!-- mothername -->
                        <div class="col-md-3">
                            <label class="form-label">Mother's Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control bg" id="mother_name"
                                    value="{{ old('mother_name') ?? ($jobApplication->mother_name ?? '') }}"
                                    placeholder="mother's name" name="mother_name" required>
                            </div>
                        </div>
                        <!-- mother dob -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" name="mother_date_of_birth"
                                id="mother_date_of_birth"
                                value="{{ old('mother_date_of_birth') ?? ($jobApplication->mother_date_of_birth ?? '') }}"
                                required>
                        </div>
                        <!-- motherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label><br>
                            <input type="tel" class="form-control  phoneInputField" name="mother_phone"
                                id="mother_phone" style="width:100%;"
                                value="{{ old('mother_phone') ?? ($jobApplication->mother_phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- mother upload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="mother_image" id="mother_image"
                                    accept="image/*" required>
                            </div>
                            @if (isset($jobApplication))
                            <img src="{{ asset('storage/' . $jobApplication->mother_image) }}" alt="Job Application Image"
                                style="max-width: 100%;">
                            @endif

                            <!-- images  -->
                            <div class="form-group">
                                <img id="motherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>

                        </div>
                        <!-- marital status -->
                        <div class="col">
                            <p style="font-weight: bold;">Marital Status :</p>
                            <input type="radio" name="marital_status" value="married" {{
                                old('marital_status')=='married' || (isset($jobApplication) &&
                                $jobApplication->marital_status == 'married') ? 'checked' : '' }}
                            id="marital_status_yes" onclick="showInputs()" required>
                            Married
                            <br>
                            <input type="radio" name="marital_status" value="single" {{ old('marital_status')=='single'
                                || (isset($jobApplication) && $jobApplication->marital_status == 'single') ? 'checked' :
                            '' }}
                            id="marital_status_no" onclick="hideInputs()" required>
                            Single
                            <div id="singleInputs" style="display: none;">
                            </div>

                            <div id="marriedInputs"
                                class="{{ old('marital_status') == 'single' || (isset($jobApplication) && $jobApplication->marital_status == 'single') ? 'hidden' : '' }}">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <!-- spousename -->
                                        <label class="form-label pt-2">Spouse Name <span class="red">*</span></label>
                                        <input type="text" class="form-control bg marital-status-input" id="spouse_name"
                                            value="{{ old('spouse_name') ?? ($jobApplication->spouse_name ?? '') }}"
                                            name="spouse_name" placeholder="Spouse Name">

                                    </div>
                                    <!-- spousedob -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Date of Birth <span class="red">*</span></label>
                                        <input type="date" class="form-control bg marital-status-input"
                                            name="spouse_date_of_birth" id="spouse_date_of_birth"
                                            value="{{ old('spouse_date_of_birth') ?? ($jobApplication->spouse_date_of_birth ?? '') }}"
                                            placeholder="Date of Birth">

                                    </div>
                                    <!-- spouseemail -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Email <span class="red">*</span></label>
                                        <input type="email" class="form-control bg marital-status-input"
                                            name="spouse_email" id="spouse_email"
                                            value="{{ old('spouse_email') ?? ($jobApplication->spouse_email ?? '') }}"
                                            placeholder="Email id">
                                    </div>
                                    <!-- spousephone -->
                                    <div class="col-md-3">
                                        <label for="spouse_phone" class="form-label pt-2">Phone/Mobile <span
                                                class="red">*</span></label>
                                        <input type="tel" class="form-control phoneInputField marital-status-input"
                                            name="spouse_phone" id="spouse_phone"
                                            value="{{ old('spouse_phone', $jobApplication->spouse_phone ?? '') }}">
                                        <p class="errorText" style="color: red;"></p>
                                    </div>
                                    <!-- spouseupload -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Upload the Latest Passport Size Photo <span
                                                class="red">*</span> </label>
                                        <div class="input-group">
                                            <input type="file" class="form-control marital-status-input"
                                                name="spouse_image" accept="image/*" id="spouse_image" placeholder="">
                                        </div>
                                        @if (isset($jobApplication))
                                        <img src="{{ asset('storage/' . $jobApplication->spouse_image) }}" alt="Job Application Image"
                                            style="max-width: 100%;">
                                        @endif
            
                                        <div class="form-group">
                                            <img id="spouseimagePreview" src="#" alt="Image Preview"
                                                style="max-width: 150px; display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single -->
                        <div id="singleInputs"
                            class="{{ old('marital_status') == 'married' || (isset($jobApplication) && $jobApplication->marital_status == 'married') ? 'hidden' : '' }}">
                            <!-- Siblings -->
                            <div class="col">
                                <p style="font-weight: bold;">Siblings :</p>
                                <label>
                                    <input type="radio" name="siblings" value="yes" id="yesRadio2" {{
                                        old('siblings')=='yes' || (isset($jobApplication) && $jobApplication->siblings
                                    == 'yes') ? 'checked' : '' }}>
                                    Yes
                                </label> <br>
                                <label>
                                    <input type="radio" name="siblings" value="no" id="noRadio2" {{
                                        old('siblings')=='no' || (isset($jobApplication) && $jobApplication->siblings ==
                                    'no') ? 'checked' : '' }}>
                                    No
                                </label>
                                <div id="formContainer2"
                                    class="{{ old('siblings') == 'no' || (isset($jobApplication) && $jobApplication->siblings == 'no') ? 'hidden' : '' }}">
                                    <!-- Siblings name -->
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Siblings name<span
                                                    class="red">*</span></label>
                                            <input type="text" class="form-control bg sibling-name-input"
                                                id="siblings_name"
                                                value="{{ old('siblings_name') ?? ($jobApplication->siblings_name ?? '') }}"
                                                placeholder="Siblings Name" name="siblings_name">
                                        </div>
                                        <!--Siblings  Date of Birth-->
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Date of Birth <span
                                                    class="red">*</span></label>
                                            <input type="date" name="siblings_date_of_birth"
                                                class="form-control sibling-name-input bg" id="siblings_date_of_birth"
                                                value="{{ old('siblings_date_of_birth') ?? ($jobApplication->siblings_date_of_birth ?? '') }}"
                                                placeholder="Date of Birth">
                                        </div>
                                        <!-- siblings  email -->
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Email <span class="red">*</span></label>
                                            <input type="email" class="form-control bg sibling-name-input"
                                                placeholder="Email-Id" name="siblings_email" id="siblings_email"
                                                value="{{ old('siblings_email') ?? ($jobApplication->siblings_email ?? '') }}">
                                        </div>
                                        <!--siblings  phone -->
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Phone/Mobile <span
                                                    class="red">*</span></label><br>
                                            <input type="tel" class="phoneInputField  form-control sibling-name-input"
                                                name="siblings_phone" id="siblings_phone"
                                                value="{{ old('siblings_phone') ?? ($jobApplication->siblings_phone ?? '') }}">
                                            <p class="errorText" style="color: red;"></p>
                                        </div>
                                        <!--siblings  Upload the Latest Passport Size Photo -->
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Upload the Latest Passport Size Photo
                                                <span class="red">*</span></label>
                                            <input type="file" class="form-control sibling-name-input"
                                                id="siblings_image" name="siblings_image" accept="image/*">
                                                @if (isset($jobApplication))
                                                <img src="{{ asset('storage/' . $jobApplication->siblings_image) }}" alt="Job Application Image"
                                                    style="max-width: 100%;">
                                                @endif
        
                                            <!-- images  -->
                                            <div class="form-group  ">
                                                <img id="siblingsimagePreview" src="#" alt="Image Preview"
                                                    style="max-width: 150px; display: none;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div style="display: flex;justify-content: end; align-items: center; " class="  ">
                                <!-- button  -->
                                <a style="font-weight: bold;" class="btn btn-secondary m-1"
                                    href="instruction">Previous</a>
                                <button class="btn btn-primary mx-2">Save & Next</button>
                            </div>

                        </div>

                    </div>
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
                    <div class="col-lg-4 col-md-6 mt-5">
                        <h1>About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        {{--
                        <!-- icons --> --}}
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

    <!-- preview image -->

    <script>
        function handleImagePreview(inputElement, previewElement) {
            inputElement.addEventListener('change', function(event) {
                var image = previewElement;
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }

        handleImagePreview(document.getElementById('image'), document.getElementById('imagePreview'));
        handleImagePreview(document.getElementById('father_image'), document.getElementById('fatherimagePreview'));
        handleImagePreview(document.getElementById('mother_image'), document.getElementById('motherimagePreview'));
        handleImagePreview(document.getElementById('spouse_image'), document.getElementById('spouseimagePreview'));
        handleImagePreview(document.getElementById('siblings_image'), document.getElementById('siblingsimagePreview'));
    </script>

    <!-- marriage  -->
    <script>
        function showInputs() {
            document.getElementById("marriedInputs").style.display = "block";
            document.getElementById("singleInputs").style.display = "none";
        }

        function hideInputs() {
            document.getElementById("marriedInputs").style.display = "none";
            document.getElementById("singleInputs").style.display = "block";
        }
    </script>


    <!-- age  -->
    <script>
        function calculateAge() {
            const dobInput = document.getElementById("dob").value;

            if (!dobInput) {
                document.getElementById("ageOutput").value = "";
                return;
            }

            const dob = new Date(dobInput);
            const currentDate = new Date();

            if (dob >= currentDate) {
                alert("Please enter a valid date of birth.");
                document.getElementById("ageOutput").value = "";
                return;
            }
            const ageInMilliseconds = currentDate - dob;
            const ageInYears = Math.floor(ageInMilliseconds / (1000 * 60 * 60 * 24 * 365));

            document.getElementById("ageOutput").value = ageInYears;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var existing = "{{ old('first_name') || isset($jobApplication) ? true : false }}";
            // Function to hide the form container initially
            function hideFormContainer(formContainer) {
                formContainer.addClass("hidden");
            }

            // Function to set up event listeners for radio buttons and form containers
            function setupRadioListener(yesRadio, noRadio, formContainer) {
                yesRadio.change(function() {
                    formContainer.removeClass("hidden");
                });

                noRadio.change(function() {
                    formContainer.addClass("hidden");
                });
            }

            // Hide form containers initially
            var formContainer1 = $("#formContainer1");
            var formContainer2 = $("#formContainer2");
            if (existing == false) {
                hideFormContainer(formContainer1);
                hideFormContainer(formContainer2);
                $('#marriedInputs').addClass('hidden');
                $('#singleInputs').addClass('hidden');
            }

            // Set up event listeners for radio buttons and form containers
            var yesRadio1 = $("#yesRadio1");
            var noRadio1 = $("#noRadio1");
            setupRadioListener(yesRadio1, noRadio1, formContainer1);

            var yesRadio2 = $("#yesRadio2");
            var noRadio2 = $("#noRadio2");
            setupRadioListener(yesRadio2, noRadio2, formContainer2);
        });
    </script>


    <!-- phone -->
    <!-- Include the intlTelInput library and utilsScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

    <!-- Your JavaScript code -->
    <script>
        function getIp(callback) {
            fetch('https://ipinfo.io/json?token=<your token>', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: 'in', // Default to India
                    };
                })
                .then((resp) => callback(resp.country));
        }

        const phoneInputFields = document.querySelectorAll('.phoneInputField');
        const errorTexts = document.querySelectorAll('.errorText');

        phoneInputFields.forEach((phoneInputField, index) => {
            const phoneInput = window.intlTelInput(phoneInputField, {
                initialCountry: "in", // Set the initial country code to India (+91)
                geoIpLookup: getIp,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            // Add an event listener to validate the phone number on input
            phoneInputField.addEventListener('input', function() {
                const selectedCountryData = phoneInput.getSelectedCountryData();
                const isValid = phoneInput.isValidNumber();

                if (isValid && selectedCountryData) {
                    errorTexts[index].textContent = ''; // Clear error message
                    phoneInputField.setCustomValidity('');
                } else {
                    errorTexts[index].textContent = 'Invalid phone number';
                    phoneInputField.setCustomValidity('Invalid phone number');
                }
            });
        });
    </script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- yes or no --}}
    <script>
        $(document).ready(function() {
            // Sector dropdown change event
            $('#sector_id').change(function() {
                var selectedSector = $(this).val();

                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('positions.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        sector: selectedSector
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#position_id').empty();
                        $.each(data, function(key, value) {
                            $('#position_id').append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });

            // City dropdown change event
            $('#state').change(function() {
                var selectedSector = $(this).val();

                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('cities.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        state_id: selectedSector
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#city').empty();
                        //$('#city').append($('<option>').text('--Select City--').val(''));
                        $.each(data, function(key, value) {
                            $('#city').append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });

            $('#yesRadio1').click(function() {
                $('.permanent-address-input').attr('required', true);
            });
            $('#noRadio1').click(function() {
                $('.permanent-address-input').attr('required', false);
            });
            $('#marital_status_yes').click(function() {
                $('.marital-status-input').attr('required', true);
            });
            $('#marital_status_no').click(function() {
                $('.marital-status-input').attr('required', false);
            });

            $('#yesRadio2').click(function() {
                $('.sibling-name-input').attr('required', true);
            });
            $('#noRadio2').click(function() {
                $('.sibling-name-input').attr('required', false);
            });

        });
    </script>
</body>

</html>