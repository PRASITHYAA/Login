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
    </div>


    </div>


    <!-- main -->
    <div>
        <div class="container">
            <!-- percentage -->
            <div class="container   mt-2">
                <div class="progress-bar" role="progressbar"
                    style="width: 30%; background-color: #111;color: white; " aria-valuenow="90" aria-valuemin="0"
                    aria-valuemax="30%">30%</div>
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
                {{--{{ print_r(old()) }}--}}
                <form action="{{ route('job_application.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- sector -->
                            <p>Sectors <span class="red">*</span></p>
                            <select class="form-select bg" name="sector" id="sector" required>
                                <option selected>Open this select menu</option>
                                @php
                                    $sectors = \App\Models\Sector::all();
                                @endphp
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}" {{ (old('sector')==$sector->id)?'selected':''  }}>{{ $sector->sector }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Position -->
                        <div class="col-lg-6">
                            <p>Position Applied For<span class="red">*</span></p>
                            <select class="form-select bg" name="position" id="position" required>
                                <option selected>Open this select menu</option>
                                @php
                                    $jobs = \App\Models\Job::all();
                                @endphp
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}" {{ (old('position')==$job->id)?'selected':''  }}>{{ $job->job }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <!-- heading -->
                    <h2 style="display: flex;justify-content: flex-start;" class="pt-4 pb-4">PERSONAL INFORMATION
                    </h2>
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
                                id="first_name" value="{{ old('first_name') ?? '' }}" required>
                        </div>
                        <!-- lastname -->
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Last name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg" name="last_name" id="last_name" value="{{ old('last_name') ?? '' }}" required>
                        </div>
                        <!-- upload -->
                        <div class="col-md-4">
                            <label for="image" class="form-label">Upload the Latest Passport Size Photo : <span
                                    class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image"
                                    accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width:150px; display: none;">
                            </div>

                        </div>
                        <!-- dateofbirth -->
                        <div class="col-md-4">
                            <label for="dob">Enter your date of birth <span class="red">*</span></label><br>
                            <input class="form-control " type="date" name="dob" id="dob" value="{{ old('dob') ?? '' }}"
                                oninput="calculateAge()" required>
                        </div>
                        <!-- age -->
                        <div class="col-md-4">
                            <label for="ageOutput">Your age is</label><br>
                            <input class="form-control bg " type="text" id="ageOutput" value="{{ old('age') ?? '' }}" name="age" readonly>
                        </div>
                        <!-- space -->
                        <div class="col-md-4">
                        </div>
                        <!-- country -->
                        <div class="col-md-4">
                            <label class="form-label">Country <span class="red">*</span></label>
                            <select class="form-select" name="country" id="country" required>
                                <option selected disabled value="">Choose...</option>
                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                <option data-countryCode="CN" value="86">China (+86)</option>
                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                <option data-countryCode="FR" value="33">France (+33)</option>
                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                <option data-countryCode="IN" value="91">India (+91)</option>
                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)
                                </option>
                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>

                            </select>
                        </div>

                        <!-- state -->
                        <div class="col-md-4">
                            <label class="form-label">State <span class="red">*</span></label>
                            <select class="form-select " name="state" id="state" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <!-- city -->
                        <div class="col-md-4">
                            <label class="form-label">City <span class="red">*</span></label>
                            <select class="form-select" name="city" id="city" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <!--address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span class="red">*</span></label>
                            <input type="text" name="address" class="form-control bg" placeholder="Address"
                                name="address" id="address"value="{{ old('address') ?? '' }}" required>
                        </div>
                        <!-- postal code -->
                        <div class="col-md-4">
                            <label class="form-label">Postal Code
                                <span class="red">*</span></label>
                            <input type="text" class="form-control bg" placeholder="postal code" id="postal_code" value="{{ old('postal_code') ?? '' }}"
                                name="postal_code" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-4">
                            <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                            <input type="tel" class="phoneInputField" name="phone" id="phone" value="{{ old('phone') ?? '' }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- Alternative Phone -->
                        <div class="col-md-4">
                            <label class="form-label">Alternative Phone/Mobile </label>
                            <br>
                            <input type="tel" class="phoneInputField" name="alternative_phone"
                                id="alternative_phone" value="{{ old('alternative_phone') ?? '' }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- email -->
                        <div class="col-md-4">
                            <label class="form-label">Email <span class="red">*</span></label>
                            <input type="email" class="form-control bg" placeholder="Email-Id" id="email" value="{{ old('email') ?? '' }}"
                                name="email" required>
                        </div>
                        <!-- fblink -->
                        <div class="col-md-4">
                            <label class="form-label">FB Profile Link <span class="red">*</span></label>
                            <input type="text" name="fb_link" class="form-control bg"
                                placeholder="FB Profile Link" id="fb_link" value="{{ old('fb_link') ?? '' }}" required>
                        </div>
                        <!-- instalink -->
                        <div class="col-md-4">
                            <label class="form-label">Instagram Profile Link <span class="red">*</span></label>
                            <input type="text" class="form-control bg" placeholder="Instagram Profile Link"
                                name="instagram_link" id="instagram_link" value="{{ old('instagram_link') ?? '' }}" required>
                        </div>
                        <!-- linked link -->
                        <div class="col-md-4">
                            <label class="form-label">LinkedIn Profile Link
                                <span class="red">*</span>
                            </label>
                            <input type="text" class="form-control bg" placeholder="LinkedIn Profile Link"
                                name="linked_link" id="linked_link" value="{{ old('linked_link') ?? '' }}" required>
                        </div>
                        <!-- {{-- Permanentaddress yes OR no --}} -->
                        <div class="col-md-4">
                            <label>Does Your Permanent Address is Different
                                <br>
                                <input type="radio" name="permanent_address_input" value="yes" {{ (old('permanent_address_input') == 'yes') ? 'checked': '' }} id="yesRadio1">
                                Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="permanent_address_input" value="no" {{ (old('permanent_address_input') == 'no') ? 'checked': '' }} id="noRadio1">
                                No
                            </label>

                            <div id="formContainer1" class="{{ (old('permanent_address_input') == 'no') ? 'hidden': '' }}">
                                {{-- country --}}
                                <label class="form-label">Country <span style="color: red;">*</span></label>
                                <select class="form-select bg permanent-address-input" id="permanent_country" name="permanent_country">
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>


                                <!-- permanentcity -->
                                <label class="form-label">City <span class="red">*</span></label>
                                <input type="text" name="permanent_city" class="form-control bg permanent-address-input"
                                    id="permanent_city" value="{{ old('permanent_city') ?? '' }}" placeholder="City">

                                <!-- permanent_address -->
                                <label class="form-label">Address
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control bg permanent-address-input" name="permanent_address"
                                    id="permanent_address" value="{{ old('permanent_address') ?? '' }}" placeholder="Address">

                                <!-- permanentpostalcode -->
                                <label class="form-label">Postal Code
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control bg permanent-address-input" name="permanent_postal_code"
                                    id="permanent_postal_code" value="{{ old('permanent_postal_code') ?? '' }}" placeholder="Postal Code">

                                {{--<!-- permanent phone -->--}}
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label>
                                <br>
                                <input type="tel" class="phoneInputField permanent-address-input" name="permanent_phone"
                                    id="permanent_phone" value="{{ old('permanent_phone') ?? '' }}">
                                <p class="errorText" style="color: red;"></p>

                            </div>
                        </div>

                        <!-- fathername -->
                        <div class="col-md-3">
                            <label class="form-label">Father’s Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" name="father_name" class="form-control bg" id="father_name" value="{{ old('father_name') ?? '' }}"
                                    placeholder="Father's Name" required>
                            </div>
                        </div>
                        <!-- fatherdateofbirth -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" id="father_date_of_birth" value="{{ old('father_date_of_birth') ?? '' }}"
                                name="father_date_of_birth" required>
                        </div>
                        <!-- fatherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <br>
                            <input type="tel" class="phoneInputField" name="father_phone" id="father_phone" value="{{ old('father_phone') ?? '' }}"
                                required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- fatherupload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="father_image" name="father_image"
                                    accept="image/*" required>
                            </div>
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
                                <input type="text" class="form-control bg" id="mother_name" value="{{ old('mother_name') ?? '' }}"
                                    placeholder="mother's name" name="mother_name" required>
                            </div>
                        </div>
                        <!-- mother dob -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" name="mother_date_of_birth"
                                id="mother_date_of_birth" value="{{ old('mother_date_of_birth') ?? '' }}" required>
                        </div>
                        <!-- motherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <input type="tel" class="phoneInputField" name="mother_phone" id="mother_phone" value="{{ old('mother_phone') ?? '' }}"
                                required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- mother upload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="mother_image"
                                    id="mother_image" accept="image/*" required>
                            </div>`
                            <!-- images  -->
                            <div class="form-group">
                                <img id="motherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>

                        </div>
                        <!-- marital status -->
                        <div class="col-lg-6">
                            <p style="font-weight: bold;">Marital Status :</p>
                            <input type="radio" name="marital_status" value="married" {{ (old('marital_status') == 'married') ? 'checked': '' }} id="marital_status_yes" onclick="showInputs()" required>
                            Married
                            <br>
                            <input type="radio" name="marital_status" value="single" {{ (old('marital_status') == 'married') ? 'single': '' }} id="marital_status_no" onclick="hideInputs()" required>
                            Single
                            <div id="marriedInputs" class="{{ (old('marital_status') == 'single') ? 'hidden': '' }}">
                                <div class="col-md-12">
                                    <!-- spousename -->
                                    <label class="form-label pt-2">Spouse Name <span class="red">*</span></label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control bg marital-status-input" id="spouse_name" value="{{ old('spouse_name') ?? '' }}"
                                            name="spouse_name" placeholder="Spouse Name">
                                    </div>
                                    <!-- spousedob -->
                                    <label class="form-label pt-2">Date of Birth <span class="red">*</span></label>
                                    <div class="input-group ">
                                        <input type="date" class="form-control bg marital-status-input" name="spouse_date_of_birth"
                                            id="spouse_date_of_birth" value="{{ old('spouse_date_of_birth') ?? '' }}" placeholder="Date of Birth">
                                    </div>
                                    <!-- spouseemail -->
                                    <label class="form-label pt-2">Email <span class="red">*</span></label>
                                    <div class="input-group pb-2">
                                        <input type="email" class="form-control bg marital-status-input" name="spouse_email"
                                            id="spouse_email" value="{{ old('spouse_email') ?? '' }}" placeholder="Email id">
                                    </div>
                                    <!-- spousephone -->
                                    <label class="form-label pt-2">Phone/Mobile <span class="red">*</span></label>
                                    <div class="input-group ">
                                        <input type="tel" class="phoneInputField marital-status-input" name="spouse_phone"
                                            id="spouse_phone" value="{{ old('spouse_phone') ?? '' }}">
                                        <p class="errorText" style="color: red;"></p>

                                    </div>
                                    <!-- spouseupload -->
                                    <label class="form-label pt-2">Upload the Latest
                                        Passport
                                        Size Photo
                                        <span class="red">*</span>
                                    </label>
                                    <div class="input-group ">
                                        <input type="file" class="form-control marital-status-input" name="spouse_image"
                                            accept="image/*" id="spouse_image" placeholder="">
                                    </div>
                                    <div class="form-group ">
                                        <img id="spouseimagePreview" src="#" alt="Image Preview"
                                            style="max-width: 150px; display: none;">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- single -->
                        <div id="singleInputs" class="{{ (old('marital_status') == 'married') ? 'hidden': '' }}">
                            <!-- Siblings -->
                            <div class="col-lg-6">
                                <p style="font-weight: bold;">Siblings :</p>
                                <label>
                                    <input type="radio" name="siblings" value="yes" id="yesRadio2" {{ (old('siblings') == 'yes') ? 'checked': '' }}> Yes
                                </label> <br>
                                <label>
                                    <input type="radio" name="siblings" value="no" id="noRadio2" {{ (old('siblings') == 'no') ? 'checked': '' }}> No
                                </label>
                                <div id="formContainer2" class="{{ (old('siblings') == 'no') ? 'hidden': '' }}">
                                    <!-- Siblings name -->
                                    <label class="form-label pt-2">Siblings name<span class="red">*</span></label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control bg sibling-name-input" id="siblings_name" value="{{ old('siblings_name') ?? '' }}"
                                            placeholder="Siblings Name" name="siblings_name">
                                    </div>
                                    <!--Siblings  Date of Birth-->
                                    <label class="form-label pt-2">Date of Birth <span class="red">*</span></label>
                                    <input type="date" name="siblings_date_of_birth" class="form-control sibling-name-input"
                                        id="siblings_date_of_birth" value="{{ old('siblings_date_of_birth') ?? '' }}" placeholder="Date of Birth">
                                    <!-- siblings  email -->
                                    <div class="col-lg-12 ">
                                        <label class="form-label pt-2">Email <span class="red">*</span></label>
                                        <input type="email" class="form-control bg sibling-name-input" placeholder="Email-Id"
                                            name="siblings_email" id="siblings_email" value="{{ old('siblings_email') ?? '' }}">
                                        <!--siblings  phone -->
                                        <label class="form-label pt-2">Phone/Mobile <span
                                                class="red">*</span></label><br>
                                        <div class="input-group ">
                                            <input type="tel" class="phoneInputField sibling-name-input" name="siblings_phone"
                                                id="siblings_phone" value="{{ old('siblings_phone') ?? '' }}">
                                            <p class="errorText" style="color: red;"></p>

                                        </div>
                                        <!--siblings  Upload the Latest Passport Size Photo -->
                                        <label class="form-label pt-2">Upload the Latest
                                            Passport
                                            Size
                                            Photo <span class="red">*</span></label>
                                        <div class="input-group ">
                                            <input type="file" class="form-control sibling-name-input" id="siblings_image"
                                                name="siblings_image" accept="image/*">
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
                            <div style="display: flex;justify-content: end; align-items: center; "
                                 class="  ">
                                <!-- button  -->
                                <a style="font-weight: bold;" class="btn btn-secondary m-1"
                                   href="instruction">Previous</a>
                                <button class="btn btn-primary m-1 " type="submit">Save</button>
                                <a style="font-weight: bold;" class="btn btn-secondary m-1"
                                   href="card">Next</a>
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
                    <div class="col-lg-4 col-md-6 mt-5">
                        <h1>About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        {{--<!-- icons -->--}}
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

    <!-- address  Siblings two in one yes or no -->
    <script>
        function setupRadioListener(yesRadio, noRadio, formContainer) {
            yesRadio.addEventListener("change", () => {
                formContainer.classList.remove("hidden");
            });

            noRadio.addEventListener("change", () => {
                formContainer.classList.add("hidden");
            });
        }

        const yesRadio1 = document.getElementById("yesRadio1");
        const noRadio1 = document.getElementById("noRadio1");
        const formContainer1 = document.getElementById("formContainer1");
        setupRadioListener(yesRadio1, noRadio1, formContainer1);

        const yesRadio2 = document.getElementById("yesRadio2");
        const noRadio2 = document.getElementById("noRadio2");
        const formContainer2 = document.getElementById("formContainer2");
        setupRadioListener(yesRadio2, noRadio2, formContainer2);
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
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

{{-- yes or no --}}
    <script>
        $(document).ready(function () {
           $('#yesRadio1').click(function () {
            $('.permanent-address-input').attr('required', true);
           });
            $('#noRadio1').click(function () {
                $('.permanent-address-input').attr('required', false);
            });
            $('#marital_status_yes').click(function () {
                $('.marital-status-input').attr('required', true);
            });
            $('#marital_status_no').click(function() {
                $('.marital-status-input').attr('required', false);
            });

            $('#yesRadio2').click(function () {
                $('.sibling-name-input').attr('required', true);
            });
            $('#noRadio2').click(function() {
                $('.sibling-name-input').attr('required', false);
            });

        });
    </script>
</body>

</html>
