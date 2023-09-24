@extends('layouts.front.master')

@section('content')
    <!-- Percentage bar -->
    <div class="container">
        <div class="progress m-2" style="height: 30px;">
            <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #111; color: white;"
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="60%">60%</div>
        </div>

        <h2>PREVIOUS EMPLOYMENT</h2>

        @php
            $jobApplication = \App\Models\JobApplication::find(request()->id);
            $employments = $jobApplication->employments;
        @endphp

        <input type="hidden" name="job_application_id" id="job_application_id"
            value="{{ isset($employment) ? $employment->job_application_id : request()->job_application_id }}">

        @foreach ($employments as $employment)
            <label>
                <h6 class="mt-3">Do you have any previous experience? <span class="red">*</span> </h6><br>
                <input type="radio" name="previous_experience" value="yes"
                    {{ old('previous_experience') == 'yes' || (isset($employment) && $employment->previous_experience == 'yes') ? 'checked' : '' }}
                    onclick="showNestedOption(this)" disabled> Yes
                <input type="radio" name="previous_experience" value="no"
                    {{ old('previous_experience') == 'no' || (isset($employment) && $employment->previous_experience == 'no') ? 'checked' : '' }}
                    onclick="showNestedOption(this)" disabled> No
            </label>
            <div id="nested-input" class="mt-2 row"
                style="{{ isset($employment) && $employment->previous_experience == 'yes' ? '' : 'display: none;' }}">
                <!-- Employer Details -->
                <h6 class="mt-3">Employer Details</h6>
                <!-- Company / Individual -->
                <div class="col-md-4">
                    <label class="form-label">
                        Company / Individual </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_company }}" readonly>
                </div>
                <!-- E-MAIL -->
                <div class="col-md-4 ">
                    <label class="form-label">E-MAIL </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_email }}" readonly>
                </div>
                <!-- Address -->
                <div class="col-md-4 ">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_address }}" readonly>
                </div>
                <!-- Phone -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Phone </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_phone }}" readonly>
                </div>
                <!-- Job Title -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Job Title </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_job_title }}" readonly>
                </div>
                <!-- From Date  -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">From Date </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_from_date }}" readonly>
                </div>
                <!-- To Date -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">To Date </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_to_date }}" readonly>
                </div>
                <!-- Experience -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Experience </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_experience }}" readonly>
                </div>
                <!-- Responsibilities -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Responsibilities </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->employer_responsibilities }}" readonly>
                </div>
                <!-- REFERENCE DETAILS FROM PREVIOUS EMPLOYER -->
                <h6 class="mt-4">REFERENCE DETAILS FROM PREVIOUS EMPLOYER</h6>
                <!-- Name -->
                <div class="col-md-4 ">
                    <label class="form-label">Name </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_name }}" readonly>
                </div>
                <!-- company -->
                <div class="col-md-4 ">
                    <label class="form-label">Company </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_company }}" readonly>
                </div>
                <!-- position -->
                <div class="col-md-4 ">
                    <label class="form-label">Position </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_position }}" readonly>
                </div>
                <!-- E-MAIL -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">E-MAIL </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_email }}" readonly>
                </div>
                <!-- Phone -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Phone </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_phone }}" readonly>
                </div>
                <!-- Address -->
                <div class="col-md-4 mt-3">
                    <label class="form-label">Address </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $employment->reference_address }}" readonly>
                </div>

                <label>
                    <h6 class="mb-3 mt-5">Are You Legally Eligible to Work? <span class="red">*</span></h6>
                </label><br>
                <label>
                    <input type="radio" name="eligible_to_work" value="yes" id="yesRadio1"
                        {{ old('eligible_to_work') == 'yes' || (isset($employment) && $employment->eligible_to_work == 'yes') ? 'checked' : '' }}
                        onclick="hideInput('sub-text-input')"disabled> Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="eligible_to_work" value="no" id="noRadio1"
                        {{ old('eligible_to_work') == 'no' || (isset($employment) && $employment->eligible_to_work == 'no') ? 'checked' : '' }}
                        onclick="showInput('sub-text-input'); showNestedOption(this)"disabled> No
                </label>
                <div id="sub-text-input" class="col-md-12"
                style="{{ isset($employment) && $employment->eligible_to_work == 'no' ? '' : 'display: none;' }}">
                    <p style="font-weight: bold;">If No, Please Explain <span class="f5">*</span> </p>
                    <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control sub-text-input"
                        name="eligible_to_work_text">{{ old('eligible_to_work_text') ?? (isset($employment) ? $employment->eligible_to_work_text : '') }}</textarea>
                </div>
                <label>
                    <h6 class="mt-3">Have You Ever Been Convicted of A Crime? <span class="red">*</span></h6>
                </label><br>
                <label>
                    <input type="radio" name="crime_status" id="yesRadio2" onclick="showInput('text-input')"
                        value="yes"
                        {{ old('crime_status') == 'yes' || (isset($employment) && $employment->crime_status == 'yes') ? 'checked' : '' }}
                        disabled> Yes
                </label>
                <label>
                    <input type="radio" name="crime_status" id="noRadio2" onclick="hideInput('text-input')"
                        value="no"
                        {{ old('crime_status') == 'no' || (isset($employment) && $employment->crime_status == 'no') ? 'checked' : '' }}
                        disabled> No
                </label>
                <div id="text-input" class="col-md-12"
                style="{{ isset($employment) && $employment->crime_status == 'yes' ? '' : 'display: none;' }}">
                    <p style="font-weight: bold;">If Yes, Please Explain <span class="f5">*</span> </p>
                    <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control text-input"
                        name="crime_status_text">{{ old('crime_status_text') ?? (isset($employment) ? $employment->crime_status_text : '') }}</textarea>
                </div>
            </div>
            <div style="display: flex;justify-content: end;" class="mt-5 mx-3">
                <a style="font-weight: bold;" class="btn btn-secondary mx-2"
                    href="{{ route('career.education.show', ['id' => $jobApplication->id]) }}">Previous</a>
                <a style="font-weight: bold;" class="btn btn-secondary "
                    href="{{ route('career.achievement.show', ['id' => $jobApplication->id]) }}">Next</a>
            </div>

        @endforeach
    </div>
@endsection
