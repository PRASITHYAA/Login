@extends('layouts.front.master')

@section('content')
    <!-- Percentage bar -->
    <div class="container">
        <div class="progress m-2" style="height: 30px;">
            <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #111; color: white;"
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="60%">60%</div>
        </div>

        <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">
        <h1 class="text-center pt-4 pb-4">EDUCATION</h1>

        <p>Do you have any education qualifications?</p>
        @php
            $jobApplication = \App\Models\JobApplication::find(request()->id);
            $educations = $jobApplication->educations;
        @endphp
        @foreach ($educations as $education)
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
                <input type="checkbox" onchange="toggleForm('form1')" name="qualification" value="high_school">
                High School
                <div id="form1" style="display: none;">
                    <h4>
                        High School
                    </h4>
                    <!-- High school Institution Name -->
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="form-label ">Institution Name </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_name }}" readonly>
                        </div>
                        <!-- High school City -->
                        <div class="col-lg-2">
                            <label class="form-label">Town/City </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_city }}" readonly>
                        </div>
                        <!-- High school Address -->
                        <div class="col-lg-2">
                            <label class="form-label">Address </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_address }}" readonly>
                        </div>
                        <!-- High school From Date -->
                        <div class="col-lg-2">
                            <label class="form-label">From (Date)
                            </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_form_date }}" readonly>

                        </div>
                        <!-- High school To Date -->
                        <div class="col-lg-2">
                            <label class="form-label">To (Date)
                            </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_to_date }}" readonly>

                        </div>
                        <!-- High school Year of Passing-->
                        <div class="col-lg-2">
                            <label class="form-label">Year of Passing
                            </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_year_of_passing }}" readonly>

                        </div>
                        <!-- High school GPA Percentage-->
                        <div class="col-lg-2">
                            <label class="form-label">GPA/Percentage
                            </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_percentage }}" readonly>

                        </div>

                        <!-- High school Class-->
                        <div class="col-lg-2">
                            <label class="form-label">Class </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_class }}" readonly>

                        </div>
                        {{-- high aschool curriculum --}}
                        <div class="col-lg-2">
                            <label class="form-label">Curriculum </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->high_school_stream }}" readonly>

                        </div>
                        <!-- High school image Mark Sheet-->
                        <div class="col-lg-3">
                            <label class="form-label">Upload Certificate </label><br>
                            @if ($education->high_school_image_certificate)
                                <img id="high_school_image_certificate"
                                    src="{{ asset('storage/' . $education->high_school_image_certificate) }}"
                                    alt="Job Application Image" style="max-width: 100%;">
                            @endif
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">Upload Mark Sheet </label>
                            @if ($education->high_school_image_mark_sheet)
                                <img id="high_school_image_mark_sheet"
                                    src="{{ asset('storage/' . $education->high_school_image_mark_sheet) }}"
                                    alt="Job Application Image" style="max-width: 100%;">
                            @endif
                        </div>
                    </div>
                </div>
                <br>

                <!-- Higher Secondary -->

                <input type="checkbox" onchange="toggleForm('form2')" name="qualification" value="higher_secondary">
                Higher Secondary

                <div id="form2" style="display: none;">
                    <!-- Higher Secondary -->
                    <h4>
                        Higher Secondary
                    </h4>
                    <!-- Higher Secondary Institution Name-->
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="form-label">Institution Name </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_institution_name }}" readonly>
                        </div>
                        <!-- Higher Secondary city-->
                        <div class="col-lg-2">
                            <label class="form-label">Town/City </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_city }}" readonly>
                        </div>
                        <!-- Higher Secondary Address-->
                        <div class="col-lg-2">
                            <label class="form-label">Address </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_address }}" readonly>
                        </div>
                        <!-- Higher Secondary From Date-->
                        <div class="col-lg-2">
                            <label class="form-label">From (Date) </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_form_date }}" readonly>
                        </div>
                        <!-- Higher Secondary To Date-->
                        <div class="col-lg-2">
                            <label class="form-label">To (Date) </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_to_date }}" readonly>
                        </div>
                        <!-- Higher Secondary Year of Passing-->
                        <div class="col-lg-2">
                            <label class="form-label">Year of Passing</label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_year_of_passing }}" readonly>
                        </div>
                        <!-- Higher Secondary GPAPercentage-->
                        <div class="col-lg-2">
                            <label class="form-label">GPA/Percentage</label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_percentage }}" readonly>
                        </div>
                        <!-- Higher Secondary Class-->
                        <div class="col-lg-2">
                            <label class="form-label">Class </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_class }}" readonly>
                        </div>
                        <!-- Higher Secondary Stream -->
                        <div class="col-lg-2">
                            <label class="form-label">Stream </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_stream }}" readonly>
                        </div>
                        <!-- Higher Secondary Filed of Interest -->
                        <div class="col-lg-2">
                            <label class="form-label">Filed of Interest </label>
                            <input class="form-control qualification" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->higher_secondary_filed_of_interest }}" readonly>
                        </div>
                        <!-- Higher Secondary image Certificate -->
                        <div class="col-lg-2">
                            <label class="form-label">Upload Certificate </label><br>
                            @if ($education->higher_secondary_image_certificate)
                                <img id="higher_secondary_image_certificate"
                                    src="{{ asset('storage/' . $education->higher_secondary_image_certificate) }}"
                                    alt="Job Application Image" style="max-width: 100%;">
                            @endif
                        </div>

                        <!-- Higher Secondary image Mark Sheet -->
                        <div class="col-lg-2">
                            <label class="form-label">Upload Mark Sheet </label><br>
                            @if ($education->higher_secondary_image_mark_sheet)
                                <img id="higher_secondary_image_mark_sheet"
                                    src="{{ asset('storage/' . $education->higher_secondary_image_mark_sheet) }}"
                                    alt="Job Application Image" style="max-width: 100%;">
                            @endif
                        </div>

                    </div>

                </div>
                <br>
        @endforeach
    @endsection

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
