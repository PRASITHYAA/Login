@extends('layouts.front.master')

@section('content')
<div class="container-fluild">
    <div class="container">
        <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #111;color: white; "
            aria-valuenow="90" aria-valuemin="0" aria-valuemax="90%">90%</div>
        <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">

        <h2 class="text-center p-4">ACHEIVEMENTS, CO-CURRICULAR, EXTRA-CURRICULAR DETAILS</h2>
        <p>Please use this section to indicate how far you meet each of the competencies required for the post.
            Indicate specific experience, achievements, knowledge, personal <br> qualities, and skills, which
            you feel are relevant, for this particular post that you, applying for. Please limit your writing
            for this part to a maximum of 500 words
        </p>
        <p class="border-bottom">List out your Acheivements here <span class="form-label red">*</span> </p>
        @php
        $jobApplication = \App\Models\JobApplication::find(request()->id);
        $achievements = $jobApplication->achievements;
        @endphp
        @foreach ($achievements as $achievement)
        <div class="mb-3">
            <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                value="{{ $achievement->achievements }}" readonly>
        </div>
        <label class="form-label">Have you been published any conference papers/attended conferences?</label>
        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
            value="{{ $achievement->open-input }}" readonly>
        <!-- Conference -->
        <div class="mb-3">
            <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                limit
                your writing for this part to a maximum of 500 words.</p>
            <label for="exampleFormControlInput1" class="form-label">Conference</label>
            <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                value="{{ $achievement->Conference }}" readonly>
        </div>
        <!-- second one -->
        <h2 class="pt-4 pb-4"> FINAL YEAR PROJECT</h2>
        <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, pdf bmp <br> Size
            Limit: 50KB </p>
        <label class="form-label">Do you worked on any final year projects?</label>
        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
            value="{{ $achievement->open-input- }}" readonly>
        <label for="exampleFormControlInput1" class="form-label">Final Year Projects </label>
        <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
            value="{{ $achievement->final_year_project }}" readonly>
        <div class="col-md-3  p-2">
            <label class="form-label">Upload All Your Project Documents Here
                <div class="input-group">
                    <input type="file" class="form-control open-input-2-input" id="project_document"
                        name="project_document">
                </div>
        </div>
    </div>

    <h2 class="pt-4 pb-4">Cocurricular/Extra Curricular Skills</h2>
    </p>
    <div class="mb-3">
        <label class="form-label"> Please use this section to
            indicate
            the Personal Quality Skills. Please limit your writing for this part to a maximum of 500
            words and upload the Co- <br> Curricular/Extracurricular Records 
        </label>
        <textarea class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
            value="{{ $achievement->extra_curricular_skills }}" readonly></textarea>
    </div>

    <div class="col-md-3  mt-4 mb-5">
        <label class="form-label">Upload All Your Project Documents Here
            <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                value="{{ $achievement->extra_curricular_skills_project_document }}" readonly>
    </div>


    {{-- CURRICULUM --}}
    <div>
        <h2 class="pt-4 pb-4">CURRICULUM VITAE</h2>
        <p>Are You willing to Attach Your Curriculum Vitae? </p>
        <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
            value="{{ $achievements->achievements }}" readonly>

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
                    
                </label>
                <div class="input-group">
                    <input type="file" class="form-control open-input-3-input" id="yes_curriculum_pdf_format"
                        name="yes_curriculum_pdf_format">
                </div>
            </div>
        </div>
    </div>
    <div>
        <p> Are You Willing to Consent to a Background Check? </p>

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
                    <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control"
                        id="no_curriculum_explain" name="no_curriculum_explain" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>


    <!-- buttons -->
    <div style="display: flex;justify-content:end;" class="pt-5">
        <a style="display: flex;align-items: center;" class="btn btn-secondary m-1 " href="employment">Previous</a>

        <button class="btn btn-primary mx-2">Save & Next </button>
    </div>
    </form>
</div>
</div>