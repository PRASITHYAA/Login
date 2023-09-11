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

        <p>Do you have any education s?</p>
        @php
            $jobApplication = \App\Models\JobApplication::find(request()->id);
            $educations = $jobApplication->educations;
        @endphp
        @foreach ($educations as $education)
            <div class="col-md-6">
                <label class="form-label">Marital Status </label>
                <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                    value="{{ $education->radio_option }}" readonly>
            </div>
            <br>
            <h4>
                High School
            </h4>
            <!-- High school Institution Name -->
            <div class="row">
                <div class="col-lg-2">
                    <label class="form-label ">Institution Name </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_name }}" readonly>
                </div>
                <!-- High school City -->
                <div class="col-lg-2">
                    <label class="form-label">Town/City </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_city }}" readonly>
                </div>
                <!-- High school Address -->
                <div class="col-lg-2">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_address }}" readonly>
                </div>
                <!-- High school From Date -->
                <div class="col-lg-2">
                    <label class="form-label">From (Date)
                    </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_form_date }}" readonly>

                </div>
                <!-- High school To Date -->
                <div class="col-lg-2">
                    <label class="form-label">To (Date)
                    </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_to_date }}" readonly>

                </div>
                <!-- High school Year of Passing-->
                <div class="col-lg-2">
                    <label class="form-label">Year of Passing
                    </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_year_of_passing }}" readonly>

                </div>
                <!-- High school GPA Percentage-->
                <div class="col-lg-2">
                    <label class="form-label">GPA/Percentage
                    </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_percentage }}" readonly>

                </div>

                <!-- High school Class-->
                <div class="col-lg-2">
                    <label class="form-label">Class </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->high_school_class }}" readonly>

                </div>
                {{-- high aschool curriculum --}}
                <div class="col-lg-2">
                    <label class="form-label">Curriculum </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
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
            <br>

            <!-- Higher Secondary -->
            <h4>
                Higher Secondary
            </h4>
            <!-- Higher Secondary Institution Name-->
            <div class="row">
                <div class="col-lg-2">
                    <label class="form-label">Institution Name </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_institution_name }}" readonly>
                </div>
                <!-- Higher Secondary city-->
                <div class="col-lg-2">
                    <label class="form-label">Town/City </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_city }}" readonly>
                </div>
                <!-- Higher Secondary Address-->
                <div class="col-lg-2">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_address }}" readonly>
                </div>
                <!-- Higher Secondary From Date-->
                <div class="col-lg-2">
                    <label class="form-label">From (Date) </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_form_date }}" readonly>
                </div>
                <!-- Higher Secondary To Date-->
                <div class="col-lg-2">
                    <label class="form-label">To (Date) </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_to_date }}" readonly>
                </div>
                <!-- Higher Secondary Year of Passing-->
                <div class="col-lg-2">
                    <label class="form-label">Year of Passing</label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_year_of_passing }}" readonly>
                </div>
                <!-- Higher Secondary GPAPercentage-->
                <div class="col-lg-2">
                    <label class="form-label">GPA/Percentage</label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_percentage }}" readonly>
                </div>
                <!-- Higher Secondary Class-->
                <div class="col-lg-2">
                    <label class="form-label">Class </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_class }}" readonly>
                </div>
                <!-- Higher Secondary Stream -->
                <div class="col-lg-2">
                    <label class="form-label">Stream </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->higher_secondary_stream }}" readonly>
                </div>
                <!-- Higher Secondary Filed of Interest -->
                <div class="col-lg-2">
                    <label class="form-label">Filed of Interest </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
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
            <br>
            <!-- Diploma -->
            <h4>
                Diploma
            </h4>
            <!-- Diploma Institution Name -->
            <div class="row">
                <div class="col-lg-2">
                    <label class="form-label">Institution Name </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_institution_name }}" readonly>

                </div>
                <!-- Diploma city -->
                <div class="col-lg-2">
                    <label class="form-label">Town/City </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_city }}" readonly>

                </div>
                <!-- Diploma address -->
                <div class="col-lg-2">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_address }}" readonly>

                </div>
                <!-- Diploma From Date -->
                <div class="col-lg-2">
                    <label class="form-label">From (Date)</label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_form_date }}" readonly>

                </div>
                <!-- Diploma to Date -->
                <div class="col-lg-2">
                    <label class="form-label">To (Date)</label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_to_date }}" readonly>

                </div>
                <!-- Diploma Year of Passing -->
                <div class="col-lg-2">
                    <label class="form-label">Year of Passing </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_year_of_passing }}" readonly>

                </div>
                <!-- Diploma  GPAPercentage-->
                <div class="col-lg-2">
                    <label class="form-label">GPA/Percentage </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_percentage }}" readonly>
                </div>
                <!-- Diploma Diploma -->
                <div class="col-lg-2">
                    <label class="form-label">Diploma </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_course }}" readonly>

                </div>
                <!-- Diploma Major -->
                <div class="col-lg-2">
                    <label class="form-label">Major </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_major }}" readonly>
                </div>
                <!-- Diploma Filed of Interest -->
                <div class="col-lg-2">
                    <label class="form-label">Filed of Interest </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->diploma_filed_of_interest }}" readonly>
                </div>
                <!-- Diploma image Certificate -->
                <div class="col-lg-2">
                    <label for="diplomaimagecertificate" class="form-label">Upload Certificate <span
                            style="color: red;">*</label>
                    @if ($education->diploma_image_certificate)
                        <img id="diploma_image_certificate"
                            src="{{ asset('storage/' . $education->diploma_image_certificate) }}"
                            alt="Job Application Image" style="max-width: 100%;">
                    @endif
                </div>
                <div class="col-lg-2">
                    <label for="diplomaimagemarksheet" class="form-label">Upload Mark Sheet <span
                            style="color: red;">*</label>
                    @if ($education->diploma_image_mark_sheet)
                        <img id="diploma_image_mark_sheet"
                            src="{{ asset('storage/' . $education->diploma_image_mark_sheet) }}"
                            alt="Job Application Image" style="max-width: 100%;">
                    @endif
                </div>
            </div>
            <br>
            <!-- Bachelors Degree -->
            <h4>
                Bachelors Degree
            </h4>
            <!-- Bachelors Institution Name -->
            <div class="row">
                <div class="col-lg-2">
                    <label class="form-label">Institution Name </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_institution_name }}" readonly>
                </div>
                <!-- Bachelors city -->
                <div class="col-lg-2">
                    <label class="form-label">Town/City </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_city }}" readonly>
                </div>
                <!-- Bachelors address -->
                <div class="col-lg-2">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_address }}" readonly>
                </div>
                <!-- Bachelors From Date -->
                <div class="col-lg-2">
                    <label class="form-label">From (Date)</label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelor_form_date }}" readonly>
                </div>
                <!-- Bachelors To Date -->
                <div class="col-lg-2">
                    <label class="form-label">To (Date) </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_to_date }}" readonly>

                </div>
                <!-- Bachelors Year of Passing -->
                <div class="col-lg-2">
                    <label class="form-label">Year of Passing </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_year_of_passing }}" readonly>
                </div>
                <!-- Bachelors GPA Percentage -->
                <div class="col-lg-2">
                    <label class="form-label">GPA/Percentage </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_percentage }}" readonly>
                </div>
                <!-- Bachelors Course -->
                <div class="col-lg-2">
                    <label class="form-label">Course </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_course }}" readonly>
                </div>
                <!-- Bachelors Major -->
                <div class="col-lg-2">
                    <label class="form-label">Major </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_major }}" readonly>
                </div>
                <!-- Bachelors Filed of Interest -->
                <div class="col-lg-2">
                    <label class="form-label">Filed of Interest </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $education->bachelors_filed_of_interest }}" readonly>
                </div>
                {{-- image --}}
                <div class="col-lg-2">
                    <label class="form-label">Upload Certificate </label>
                    @if ($education->bachelors_image_certificate)
                        <img id="bachelors_image_certificate"
                            src="{{ asset('storage/' . $education->bachelors_image_certificate) }}"
                            alt="Job Application Image" style="max-width: 100%;">
                    @endif
                </div>
                    {{-- marksheet --}}
                    <div class="col-lg-2">
                        <label class="form-label">Upload Mark Sheet </label>
                        @if ($education->bachelors_image_mark_sheet)
                            <img id="bachelors_image_mark_sheet"
                                src="{{ asset('storage/' . $education->bachelors_image_mark_sheet) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                </div>
                <br>
                <!-- Master's Degree -->
                <h4>
                    Master's Degree
                </h4>
                <!-- Institution Name -->
                <div class="row">
                    <div class="col-lg-2">
                        <label class="form-label">Institution Name </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_institution_name }}" readonly>
                    </div>
                    <!-- city -->
                    <div class="col-lg-2">
                        <label class="form-label">Town/City </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_city }}" readonly>
                    </div>
                    <!-- address -->
                    <div class="col-lg-2">
                        <label class="form-label">Address </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_address }}" readonly>
                    </div>
                    <!-- date -->
                    <div class="col-lg-2">
                        <label class="form-label">From (Date) </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_from_date }}" readonly>
                    </div>
                    <!-- date -->
                    <div class="col-lg-2">
                        <label class="form-label">To (Date)</label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_to_date }}" readonly>
                    </div>
                    <!-- years of passing -->
                    <div class="col-lg-2">
                        <label class="form-label">Year of Passing </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_years_of_passing }}" readonly>
                    </div>
                    <!-- percentage -->
                    <div class="col-lg-2">
                        <label class="form-label">GPA/Percentage</label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_percentage }}" readonly>
                    </div>
                    <!-- class -->
                    <div class="col-lg-2">
                        <label class="form-label">Class </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_class }}" readonly>
                    </div>
                    <!--  Filed of Specialization-->
                    <div class="col-lg-2">
                        <label class="form-label">Specialization</label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_filed_of_specialization }}" readonly>
                    </div>
                    <!-- filed of interest -->
                    <div class="col-lg-2">
                        <label class="form-label">Filed of Interest </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->master_filed_of_interest }}" readonly>
                    </div>
                    <div class="col-lg-2">
                        <label for="masterimagecertificate" class="form-label">Upload Certificate </label>
                        @if ($education->master_image_certificate)
                            <img id="master_image_certificate"
                                src="{{ asset('storage/' . $education->master_image_certificate) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <label for="masterimagemarksheet" class="form-label">Upload Mark Sheet </label>
                        @if ($education->master_image_mark_sheet)
                            <img id="master_image_mark_sheet"
                                src="{{ asset('storage/' . $education->master_image_mark_sheet) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                </div>
                <br>
                <!-- Doctorate Degree -->
                <h4>
                    Doctorate Degree
                </h4>
                <!-- doctoratename -->
                <div class="row">
                    <div class="col-lg-2">
                        <label class="form-label">Institution Name </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_name }}" readonly>

                    </div>
                    <!-- doctoratecity -->
                    <div class="col-lg-2">
                        <label class="form-label">Town/City </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_city }}" readonly>

                    </div>
                    <!-- doctorateaddress -->
                    <div class="col-lg-2">
                        <label class="form-label">Address </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_address }}" readonly>

                    </div>
                    <!-- doctoratefromdate -->
                    <div class="col-lg-2">
                        <label class="form-label">From (Date)
                        </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_from_date }}" readonly>

                    </div>
                    <!-- doctoratetodate -->
                    <div class="col-lg-2">
                        <label class="form-label">To (Date)
                            <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $education->doctorate_to_date }}" readonly>

                    </div>
                    <!-- doctorateyearofpassing -->
                    <div class="col-lg-2">
                        <label class="form-label">Year of Passing
                        </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_year_of_passing }}" readonly>

                    </div>
                    <!-- doctoratepercentage -->
                    <div class="col-lg-2">
                        <label class="form-label">GPA/Percentage
                        </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_percentage }}" readonly>

                    </div>
                    <!-- doctorateclass -->
                    <div class="col-lg-2">
                        <label class="form-label">Class </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_class }}" readonly>

                    </div>

                    <!-- doctoratefiledofspecialization -->
                    <div class="col-lg-2">
                        <label class="form-label">Specialization </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_filed_of_specialization }}" readonly>

                    </div>
                    <!-- doctoratefiledofinterest -->
                    <div class="col-lg-2">
                        <label class="form-label">Filed of Interest </label>
                        <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $education->doctorate_filed_of_interest }}" readonly>
                    </div>
                    <div class="col-lg-2">
                        <label for="doctorateimagecertificate" class="form-label">Upload Certificate <span
                                style="color: red;">*</span></label>
                        @if ($education->doctorate_image_certificate)
                            <img id="doctorate_image_certificate"
                                src="{{ asset('storage/' . $education->doctorate_image_certificate) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                    {{-- mark sheet --}}
                    <div class="col-lg-2">
                        <label for="doctorateimagemarksheet" class="form-label">Upload Mark Sheet <span
                                style="color: red;">*</span></label>
                        @if ($education->doctorate_image_mark_sheet)
                            <img id="doctorate_image_mark_sheet"
                                src="{{ asset('storage/' . $education->doctorate_image_mark_sheet) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div style="display: flex;justify-content: end; align-items: center;" class="">
                <a style="font-weight: bold;" class="btn btn-secondary mt-5"
                href="{{ route(career.card.show'', ['id' => $jobApplication->id ]) }}">Previous</a>
                {{-- <a style="font-weight: bold;" class="btn btn-secondary mt-5 mx-3"
                href="{{ route('career.employment.show', ['id' => $jobApplication->id]) }}">Next</a> --}}
            </div>

    </div>
    @endforeach
@endsection
