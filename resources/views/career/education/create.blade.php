@extends('layouts.front.master')
@section('content')

    <!-- Percentage bar -->
    <div class="container">
        <div class="progress m-2  " style="height: 30px;">
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

            <form
                action="{{ isset($education) ? route('career.education.update', $education->id) : route('career.education.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($education))
                    @method('PUT')
                @endif
                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ isset($education) ? $education->job_application_id : request()->job_application_id }}">
                <h1 class="text-center pt-4 pb-4">EDUCATION</h1>
                <p style="font-weight: bold;">Note: Pleasd fill all completed educational details as applicable</p>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                    Size Limit: 50KB</p>

                <p>Do you have any education qualification? <span style="color: red;">*</span></p>

                <div>
                    <label>
                        <input type="radio" name="radio_option" value="yes"
                            {{ isset($education) ? ($education->radio_option == 'yes' ? 'checked' : '') : '' }}
                            onclick="showCheckboxes()"> Yes
                    </label>
                    <label>
                        <input type="radio" name="radio_option" value="no" onclick="hideCheckboxes()"> No
                    </label>
                </div>

                <div id="checkboxes"
                    style="{{ isset($education) ? ($education->radio_option == 'yes' ? '' : 'display: none;') : 'display: none;' }}">
                    <!-- High School -->
                    <input type="checkbox" onchange="toggleForm('form1')" name="qualification" value="high_school"
                        {{ isset($education->high_school_name) ? 'checked' : '' }}>
                    High School
                    <div id="form1" style="{{ isset($education->high_school_name) ? '' : 'display: none;' }}">
                        <h4>
                            High School
                        </h4>
                        <!-- High school Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label ">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control qualification" placeholder="Institution Name" id="high_school_name"
                                    name="high_school_name" value="{{ $education->high_school_name ?? '' }}">
                            </div>
                            <!-- High school City -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control  qualification" placeholder="Town/City" id="high_school_city"
                                    name="high_school_city" value="{{ $education->high_school_city ?? '' }}">
                            </div>
                            <!-- High school Address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="high_school_address"
                                    name="high_school_address" value="{{ $education->high_school_address ?? '' }}">
                            </div>
                            <!-- High school From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="high_school_form_date"
                                    name="high_school_form_date" value="{{ $education->high_school_form_date ?? '' }}">
                            </div>
                            <!-- High school To Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control qualification" placeholder="To (Date)" id="high_school_to_date"
                                    name="high_school_to_date" value="{{ $education->high_school_to_date ?? '' }}">
                            </div>
                            <!-- High school Year of Passing-->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="high_school_year_of_passing" class="form-control" placeholder="Year of Passing"
                                    id="high_school_year_of_passing"
                                    value="{{ $education->high_school_year_of_passing ?? '' }}">
                            </div>
                            <!-- High school GPA Percentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control qualification" placeholder="0" id="high_school_percentage"
                                    name="high_school_percentage" value="{{ $education->high_school_percentage ?? '' }}">
                            </div>
                            <!-- High school Class -->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control qualification" placeholder="Class" id="high_school_class"
                                    name="high_school_class"
                                    value="{{ old('high_school_class') ?? ($education->high_school_class ?? '') }}">
                            </div>
                            {{-- high aschool curriculum --}}
                            <div class="col-lg-2">
                                <label class="form-label">Curriculum <span style="color: red;">*</span></label>
                                <select class="form-select" id="high_school_stream" name="high_school_stream">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="CBSE"
                                        {{ isset($education) && $education->high_school_stream == 'CBSE' ? 'selected' : '' }}>
                                        CBSE</option>
                                    <option value="ICSE"
                                        {{ isset($education) && $education->high_school_stream == 'ICSE' ? 'selected' : '' }}>
                                        ICSE</option>
                                    <option value="IB"
                                        {{ isset($education) && $education->high_school_stream == 'IB' ? 'selected' : '' }}>
                                        IB</option>
                                    <option value="IGCSE"
                                        {{ isset($education) && $education->high_school_stream == 'IGCSE' ? 'selected' : '' }}>
                                        IGCSE</option>
                                    <option value="STATE BOARD"
                                        {{ isset($education) && $education->high_school_stream == 'STATE BOARD' ? 'selected' : '' }}>
                                        STATE BOARD</option>
                                </select>
                            </div>

                            <!-- High school image Mark Sheet-->
                            <div class="col-lg-3">
                                <label class="form-label">Upload Certificate <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="high_school_image_certificate"
                                        name="high_school_image_certificate">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->high_school_image_certificate) }}"
                                        alt="High School Image Certificate" style="width: 150px;">
                                @endif

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
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->high_school_image_mark_sheet) }}"
                                        alt="High School Image Mark sheet" style="width: 150px;">
                                @endif
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
                    <input type="checkbox" onchange="toggleForm('form2')" name="qualification" value="higher_secondary"
                        {{ isset($education->higher_secondary) ? 'checked' : '' }}>Higher Secondary
                    <div id="form2" style="{{ isset($education->higher_secondary) ? '' : 'display: none;' }}">
                        <!-- Higher Secondary -->
                        <h4> Higher Secondary</h4>
                        <!-- Higher Secondary Institution Name-->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name"
                                    id="higher_secondary_institution_name" name="higher_secondary_institution_name"
                                    value="{{ old('higher_secondary_institution_name') ?? ($education->higher_secondary_institution_name ?? '') }}">
                            </div>
                            <!-- Higher Secondary city-->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="higher_secondary_city"
                                    name="higher_secondary_city"
                                    value="{{ old('higher_secondary_city') ?? ($education->higher_secondary_city ?? '') }}">
                            </div>
                            <!-- Higher Secondary Address-->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="higher_secondary_address"
                                    name="higher_secondary_address"
                                    value="{{ old('higher_secondary_address') ?? ($education->higher_secondary_address ?? '') }}">
                            </div>
                            <!-- Higher Secondary From Date-->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="higher_secondary_form_date"
                                    name="higher_secondary_form_date"
                                    value="{{ old('higher_secondary_form_date') ?? ($education->higher_secondary_form_date ?? '') }}">
                            </div>
                            <!-- Higher Secondary To Date-->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="higher_secondary_to_date"
                                    name="higher_secondary_to_date"
                                    value="{{ old('higher_secondary_to_date') ?? ($education->higher_secondary_to_date ?? '') }}">
                            </div>
                            <!-- Higher Secondary Year of Passing-->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing"
                                    id="higher_secondary_year_of_passing" name="higher_secondary_year_of_passing"
                                    value="{{ old('higher_secondary_year_of_passing') ?? ($education->higher_secondary_year_of_passing ?? '') }}">
                            </div>
                            <!-- Higher Secondary GPAPercentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" name="higher_secondary_percentage"
                                    id="higher_secondary_percentage"
                                    value="{{ old('higher_secondary_percentage') ?? ($education->higher_secondary_percentage ?? '') }}">
                            </div>
                            <!-- Higher Secondary Class-->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Class" id="higher_secondary_class"
                                    name="higher_secondary_class"
                                    value="{{ old('higher_secondary_class') ?? ($education->higher_secondary_class ?? '') }}">
                            </div>
                            <!-- Higher Secondary Stream -->
                            <div class="col-lg-2">
                                <label class="form-label">Stream <span style="color: red;">*</span></label>
                                <select class="form-select" id="higher_secondary_stream" name="higher_secondary_stream">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Maths and Science"
                                        {{ isset($education) && $education->higher_secondary_stream == 'Maths and Science' ? 'selected' : '' }}>
                                        Maths and Science</option>
                                    <option value="Science"
                                        {{ isset($education) && $education->higher_secondary_stream == 'Science' ? 'selected' : '' }}>
                                        Science</option>
                                    <option value="Commerce"
                                        {{ isset($education) && $education->higher_secondary_stream == 'Commerce' ? 'selected' : '' }}>
                                        Commerce</option>
                                    <option value="Others"
                                        {{ isset($education) && $education->higher_secondary_stream == 'Others' ? 'selected' : '' }}>
                                        Others</option>
                                </select>
                            </div>
                            <!-- Higher Secondary Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest"higher_secondary_filed_of_interest
                                    id="higher_secondary_filed_of_interest" name="higher_secondary_filed_of_interest"
                                    value="{{ old('higher_secondary_filed_of_interest') ?? ($education->higher_secondary_filed_of_interest ?? '') }}">
                            </div>
                            <!-- Higher Secondary image Certificate -->
                            <div class="col-lg-2">
                                <label class="form-label">Upload Certificate
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="higher_secondary_image_certificate"
                                        name="higher_secondary_image_certificate">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->higher_secondary_image_certificate) }}"
                                        alt="Higher Secondary Image Certificate" style="width: 150px;">
                                @endif

                                <!-- Preview for Higher Secondary image Certificate -->
                                <div class="form-group">
                                    <img id="highersecondaryimagecertificatePreview" src="#" alt="Image Preview"
                                        style="width:150px; display: none;">
                                </div>
                            </div>

                            <!-- Higher Secondary image Mark Sheet -->
                            <div class="col-lg-2">
                                <label class="form-label">Upload Mark Sheet <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="higher_secondary_image_mark_sheet"
                                        name="higher_secondary_image_mark_sheet">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->higher_secondary_image_mark_sheet) }}"
                                        alt="Higher Secondary Image MarkSheet" style="width: 150px;">
                                @endif
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
                    <input type="checkbox" onchange="toggleForm('form3')" name="qualification" value="diploma"
                        {{ isset($education->diploma) ? 'checked' : '' }}>Diploma

                    <div id="form3" style="{{ isset($education->diploma) ? '' : 'display: none;' }}">
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
                                    name="diploma_institution_name"
                                    value="{{ old('diploma_institution_name') ?? ($education->diploma_institution_name ?? '') }}">
                            </div>
                            <!-- Diploma city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="diploma_city" name="diploma_city"
                                    value="{{ old('diploma_city') ?? ($education->diploma_city ?? '') }}">
                            </div>
                            <!-- Diploma address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="diploma_address"
                                    name="diploma_address"
                                    value="{{ old('diploma_address') ?? ($education->diploma_address ?? '') }}">
                            </div>
                            <!-- Diploma From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="diploma_form_date"
                                    name="diploma_form_date"
                                    value="{{ old('diploma_form_date') ?? ($education->diploma_form_date ?? '') }}">
                            </div>
                            <!-- Diploma to Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="diploma_to_date"
                                    name="diploma_to_date"
                                    value="{{ old('diploma_to_date') ?? ($education->diploma_to_date ?? '') }}">
                            </div>
                            <!-- Diploma Year of Passing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="diploma_year_of_passing"
                                    name="diploma_year_of_passing"
                                    value="{{ old('diploma_year_of_passing') ?? ($education->diploma_year_of_passing ?? '') }}">
                            </div>
                            <!-- Diploma  GPAPercentage-->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="diploma_percentage"
                                    name="diploma_percentage"
                                    value="{{ old('diploma_percentage') ?? ($education->diploma_percentage ?? '') }}">
                            </div>
                            <!-- Diploma Diploma -->
                            <div class="col-lg-2">
                                <label class="form-label">Diploma <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Course" id="diploma_course" name="diploma_course"
                                    value="{{ old('diploma_course') ?? ($education->diploma_course ?? '') }}">
                            </div>
                            <!-- Diploma Major -->
                            <div class="col-lg-2">
                                <label class="form-label">Major <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="CSE" id="diploma_major" name="diploma_major"
                                    value="{{ old('diploma_major') ?? ($education->diploma_major ?? '') }}">
                            </div>
                            <!-- Diploma Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest" id="diploma_filed_of_interest"
                                    name="diploma_filed_of_interest"
                                    value="{{ old('diploma_filed_of_interest') ?? ($education->diploma_filed_of_interest ?? '') }}">
                            </div>
                            <!-- Diploma image Certificate -->
                            <div class="col-lg-2">
                                <label for="diplomaimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="diploma_image_certificate"
                                        name="diploma_image_certificate">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->diploma_image_certificate) }}"
                                        alt="Diploma Image Certificate" style="width: 150px;">
                                @endif
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
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->diploma_image_mark_sheet) }}"
                                        alt="Diploma Image Mark Sheet" style="width: 150px;">
                                @endif

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
                    <input type="checkbox" onchange="toggleForm('form4')" name="qualification" value="bachelor_degree"
                        {{ isset($education->bachelor_degree) ? 'checked' : '' }}>Bachelors Degree

                    <div id="form4" style="{{ isset($education->bachelor_degree) ? '' : 'display: none;' }}">

                        <!-- Bachelors Degree -->
                        <h4>
                            Bachelors Degree
                        </h4>
                        <!-- Bachelors Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Institution Name" id="bachelors_institution_name"
                                    name="bachelors_institution_name"
                                    value="{{ old('bachelors_institution_name') ?? ($education->bachelors_institution_name ?? '') }}">
                            </div>
                            <!-- Bachelors city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Town/City" id="bachelors_city"
                                    name="bachelors_city"
                                    value="{{ old('bachelors_city') ?? ($education->bachelors_city ?? '') }}">
                            </div>
                            <!-- Bachelors address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Address" id="bachelors_address"
                                    name="bachelors_address"
                                    value="{{ old('bachelors_address') ?? ($education->bachelors_address ?? '') }}">
                            </div>
                            <!-- Bachelors From Date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="From (Date)" id="bachelor_form_date"
                                    name="bachelors_form_date"
                                    value="{{ old('bachelors_form_date') ?? ($education->bachelors_form_date ?? '') }}">
                            </div>
                            <!-- Bachelors To Date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="To (Date)" id="bachelors_to_date"
                                    name="bachelors_to_date"
                                    value="{{ old('bachelors_to_date') ?? ($education->bachelors_to_date ?? '') }}">
                            </div>
                            <!-- Bachelors Year of Passing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    class="form-control" placeholder="Year of Passing" id="bachelors_year_of_passing"
                                    name="bachelors_year_of_passing"
                                    value="{{ old('bachelors_year_of_passing') ?? ($education->bachelors_year_of_passing ?? '') }}">
                            </div>
                            <!-- Bachelors GPA Percentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    class="form-control" placeholder="9 GPA" id="bachelors_percentage"
                                    name="bachelors_percentage"
                                    value="{{ old('bachelors_percentage') ?? ($education->bachelors_percentage ?? '') }}">
                            </div>
                            <!-- Bachelors Course -->
                            <div class="col-lg-2">
                                <label for="" class="form-label">Course <span
                                        style="color: red;">*</span></label>
                                <select class="form-select" id="bachelors_course" name="bachelors_course">
                                    <option disabled value="">Choose...</option>
                                    <option value="Bachelor of Engineering"
                                        {{ isset($education) && $education->bachelors_course == 'Bachelor of Engineering' ? 'selected' : '' }}>
                                        Bachelor of Engineering</option>
                                    <option value="BSc"
                                        {{ isset($education) && $education->bachelors_course == 'BSc' ? 'selected' : '' }}>
                                        BSc</option>
                                    <option value="BCom"
                                        {{ isset($education) && $education->bachelors_course == 'BCom' ? 'selected' : '' }}>
                                        BCom</option>
                                    <option value="BA"
                                        {{ isset($education) && $education->bachelors_course == 'BA' ? 'selected' : '' }}>
                                        BA</option>
                                    <option value="Bachelor of Technology"
                                        {{ isset($education) && $education->bachelors_course == 'Bachelor of Technology' ? 'selected' : '' }}>
                                        Bachelor of Technology</option>
                                    <option value="Other"
                                        {{ isset($education) && $education->bachelors_course == 'Other' ? 'selected' : '' }}>
                                        Other</option>
                                </select>
                            </div>
                            <!-- Bachelors Major -->
                            <div class="col-lg-2">
                                <label class="form-label">Major <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Major" id="bachelors_major" name="bachelors_major"
                                    value="{{ old('bachelors_major') ?? ($education->bachelors_major ?? '') }}">
                            </div>
                            <!-- Bachelors Filed of Interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Interest" id="bachelors_filed_of_interest"
                                    name="bachelors_filed_of_interest"
                                    value="{{ old('bachelors_filed_of_interest') ?? ($education->bachelors_filed_of_interest ?? '') }}">
                            </div>
                            {{-- image --}}
                            <div class="col-lg-2">
                                <label class="form-label">Upload Certificate <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bachelors_image_certificate"
                                        name="bachelors_image_certificate">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->bachelors_image_certificate) }}"
                                        alt="Bachelors Image Certificate" style="width: 150px;">
                                @endif

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
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->bachelors_image_mark_sheet) }}"
                                        alt="Bachelors Image Mark Sheet" style="width: 150px;">
                                @endif

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
                    <input type="checkbox" onchange="toggleForm('form5')" name="qualification" value="master_degree"
                        {{ isset($education->master_degree) ? 'checked' : '' }}>Master's Degree
                    <div id="form5" style="{{ isset($education->master_degree) ? '' : 'display: none;' }}">

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
                                    placeholder="Institution Name"
                                    value="{{ old('master_institution_name') ?? ($education->master_institution_name ?? '') }}">
                            </div>
                            <!-- city -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_city" name="master_city" class="form-control" placeholder="Town/City"
                                    value="{{ old('master_city') ?? ($education->master_city ?? '') }}">
                            </div>
                            <!-- address -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="master_address" class="form-control" placeholder="Address" id="master_address"
                                    value="{{ old('master_address') ?? ($education->master_address ?? '') }}">
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    name="master_from_date" class="form-control" id="master_from_date"
                                    placeholder="From (Date)"
                                    value="{{ old('master_from_date') ?? ($education->master_from_date ?? '') }}">
                            </div>
                            <!-- date -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="master_to_date" name="master_to_date" class="form-control"
                                    placeholder="To (Date)"
                                    value="{{ old('master_to_date') ?? ($education->master_to_date ?? '') }}">
                            </div>
                            <!-- years of passing -->master_to_date
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="master_years_of_passing" name="master_years_of_passing" class="form-control"
                                    placeholder="Year of Passing"
                                    value="{{ old('master_years_of_passing') ?? ($education->master_years_of_passing ?? '') }}">
                            </div>
                            <!-- percentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    name="master_percentage" class="form-control" placeholder="9 GPA"
                                    id="master_percentage"
                                    value="{{ old('master_percentage') ?? ($education->master_percentage ?? '') }}">
                            </div>
                            <!-- class -->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_class" name="master_class" class="form-control" placeholder="Class"
                                    value="{{ old('master_class') ?? ($education->master_class ?? '') }}">
                            </div>
                            <!--  Filed of Specialization-->
                            <div class="col-lg-2">
                                <label class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    name="master_filed_of_specialization" class="form-control"
                                    id="master_filed_of_specialization" placeholder="Filed of Specialization"
                                    value="{{ old('master_filed_of_specialization') ?? ($education->master_filed_of_specialization ?? '') }}">
                            </div>
                            <!-- filed of interest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="master_filed_of_interest" name="master_filed_of_interest" class="form-control"
                                    placeholder="Filed of Interest"
                                    value="{{ old('master_filed_of_interest') ?? ($education->master_filed_of_interest ?? '') }}">
                            </div>
                            <div class="col-lg-2">
                                <label for="masterimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="master_image_certificate"
                                        name="master_image_certificate">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->master_image_certificate) }}"
                                        alt="Master Image Certificate" style="width: 150px;">
                                @endif

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
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->master_image_mark_sheet) }}"
                                        alt="Master Image Mark Sheet" style="width: 150px;">
                                @endif

                                <!-- Preview for Master's image Mark Sheet -->
                                <div class="form-group">
                                    <img id="masterimagemarksheetPreview" src="#" alt="Image Preview "
                                        style="width:150px; height: auto; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>

                    <br>

                    {{-- Doctorate Degree --}}
                    <input type="checkbox" onchange="toggleForm('form6')" name="qualification" value="doctorate_degree"
                        {{ isset($education->doctorate_degree) ? 'checked' : '' }}> Doctorate Degree
                    <div id="form6" style="{{ isset($education->doctorate_degree) ? '' : 'display: none;' }}">
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
                                    placeholder="Institution Name"
                                    value="{{ old('doctorate_name') ?? ($education->doctorate_name ?? '') }}">
                            </div>
                            <!-- doctoratecity -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_city" name="doctorate_city" class="form-control"
                                    placeholder="Town/City"
                                    value="{{ old('doctorate_city') ?? ($education->doctorate_city ?? '') }}">
                            </div>
                            <!-- doctorateaddress -->
                            <div class="col-lg-2">
                                <label class="form-label">Address <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_address" name="doctorate_address" class="form-control"
                                    placeholder="Address"
                                    value="{{ old('doctorate_address') ?? ($education->doctorate_address ?? '') }}">
                            </div>
                            <!-- doctoratefromdate -->
                            <div class="col-lg-2">
                                <label class="form-label">From (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_from_date" name="doctorate_from_date" class="form-control"
                                    placeholder="From (Date)"value="{{ old('doctorate_from_date') ?? ($education->doctorate_from_date ?? '') }}">
                            </div>
                            <!-- doctoratetodate -->
                            <div class="col-lg-2">
                                <label class="form-label">To (Date)
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_to_date" name="doctorate_to_date" class="form-control"
                                    placeholder="To (Date)"
                                    value="{{ old('doctorate_to_date') ?? ($education->doctorate_to_date ?? '') }}">
                            </div>
                            <!-- doctorateyearofpassing -->
                            <div class="col-lg-2">
                                <label class="form-label">Year of Passing
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                    id="doctorate_year_of_passing" name="doctorate_year_of_passing" class="form-control"
                                    placeholder="Year of Passing"value="{{ old('doctorate_year_of_passing') ?? ($education->doctorate_year_of_passing ?? '') }}">
                            </div>
                            <!-- doctoratepercentage -->
                            <div class="col-lg-2">
                                <label class="form-label">GPA/Percentage
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                    id="doctorate_percentage" name=" doctorate_percentage" class="form-control"
                                    placeholder="9 GPA"
                                    value="{{ old('doctorate_percentage') ?? ($education->doctorate_percentage ?? '') }}">
                            </div>
                            <!-- doctorateclass -->
                            <div class="col-lg-2">
                                <label class="form-label">Class <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="doctorate_class" class="form-control" name="doctorate_class" placeholder="Class"
                                    value="{{ old('doctorate_class') ?? ($education->doctorate_class ?? '') }}">
                            </div>

                            <!-- doctoratefiledofspecialization -->
                            <div class="col-lg-2">
                                <label class="form-label">Specialization
                                    <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" placeholder="Filed of Specialization"
                                    id="doctorate_filed_of_specialization" name="doctorate_filed_of_specialization"
                                    value="{{ old('doctorate_filed_of_specialization') ?? ($education->doctorate_filed_of_specialization ?? '') }}">
                            </div>
                            <!-- doctoratefiledofinterest -->
                            <div class="col-lg-2">
                                <label class="form-label">Filed of Interest <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control" name="doctorate_filed_of_interest"
                                    id="doctorate_filed_of_interest" placeholder="Filed of Interest"
                                    value="{{ old('doctorate_filed_of_interest') ?? ($education->doctorate_filed_of_interest ?? '') }}">
                            </div>
                            <div class="col-lg-2">
                                <label for="doctorateimagecertificate" class="form-label">Upload Certificate <span
                                        style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="doctorate_image_certificate"
                                        name="doctorate_image_certificate"
                                        value="{{ old('doctorate_image_certificate') ?? ($education->doctorate_image_certificate ?? '') }}">
                                </div>
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->doctorate_image_certificate) }}"
                                        alt="Doctorate Image Certificate" style="width: 150px;">
                                @endif

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
                                @if (isset($education))
                                    <img src="{{ asset('storage/' . $education->doctorate_image_mark_sheet) }}"
                                        alt="Doctorate Image Mark Sheet" style="width: 150px;">
                                @endif

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
                <div style="display: flex;justify-content: end; align-items: center;" class="mt-5">
                    <a style="font-weight: bold; " class="btn btn-secondary mx-3 mt-5"
                        href="{{ route('career.card.edit', request()->card_id ?? ($card_id ?? '')) }}">Previous</a>
                    <button class="btn btn-primary mx-3 mt-5 ">Save And Next </button>

                </div>
            </form>
        </div>
    </div>


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

@endsection
