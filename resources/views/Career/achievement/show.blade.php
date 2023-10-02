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
                        value="{{ $achievement->achievement }}" readonly>
                </div>
                <label class="form-label">Have you been published any conference papers/attended conferences?</label><br>

                <label>
                    <input type="radio" name="conference_status" value="yes" id="yesRadio1" onclick="showInput()"
                        {{ old('conference_status') == 'yes' || (isset($achievement) && $achievement->conference_status == 'yes') ? 'checked' : '' }}
                        disabled> Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="conference_status" value="no" id="noRadio1" onclick="hideInput()"
                        {{ old('conference_status') == 'no' || (isset($achievement) && $achievement->conference_status == 'no') ? 'checked' : '' }}
                        disabled> No
                </label>
                <br>
                <!-- Conference -->
                <div id="input-field"
                    style="{{ isset($achievement) && $achievement->conference_status == 'yes' ? '' : 'display: none;' }}">
                    <div class="mb-3 mt-3">
                        <p class="border-bottom ">Please use this section to indicate the Conference Details. Please limit
                            your writing for this part to a maximum of 500 words.</p>
                        <label class="form-label">Conference</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $achievement->conference }}" readonly>
                    </div>
                </div>
                <!-- second one -->
                <h2 class="mt-5"> FINAL YEAR PROJECT</h2>
                <label class="form-label">Do you worked on any final year projects?</label>
                <br>
                <label>
                    <input type="radio" name="final_year_project_status" value="yes" id="yesRadio2"
                        {{ old('final_year_project_status') == 'yes' || (isset($achievement) && $achievement->{'final_year_project_status'} == 'yes') ? 'checked' : '' }}
                        disabled> Yes</label>
                <br>
                <label>
                    <input type="radio" name="final_year_project_status" value="no" id="noRadio2"
                        {{ old('final_year_project_status') == 'no' || (isset($achievement) && $achievement->{'final_year_project_status'} == 'no') ? 'checked' : '' }}
                        disabled> No </label>
                <div id="input-field-2"
                    style="{{ isset($achievement) && $achievement->final_year_project_status == 'yes' ? '' : 'display: none;' }}">
                    <p class="border-bottom mt-2">Please use this section to indicate the final year project. Please
                        limit your writing for this part to a maximum of 500 words and upload the detailed project
                        file.
                    </p>
                    <label class="form-label">Final Year Projects </label>
                    <input type="radio " class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $achievement->final_year_project }}" readonly>
                    <div class="col">
                        <label class="form-label mt-3">Upload All Your Project Documents Here</label>
                        <br>
                        @if (isset($achievement) && $achievement->project_document)
                            <img src="{{ asset('storage/' . $achievement->project_document) }}" alt="Project Document"
                                style="width: 100px;">
                        @endif
                    </div>
                </div>
                <div>
                    <h2 class="mt-5">Co-Curricular/Extra Curricular Skills</h2>
                    <div>
                        <label class="form-label"> Please use this section to
                            indicate the Personal Quality Skills. Please limit your writing for this part to a maximum of
                            500
                            words and upload the Co- <br> Curricular/Extracurricular Records
                        </label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control mt-3" id="extra_curricular_skills"
                            name="extra_curricular_skills" rows="3" required>{{ old('extra_curricular_skills') ?? ($achievement->extra_curricular_skills ?? '') }}</textarea>
                    </div>
                    <div class="col-md-3 mt-4 mb-4">
                        <label class="form-label">Upload All Your Project Documents Here</label>
                        @if (isset($achievement) && $achievement->extra_curricular_skills_project_document)
                            <img src="{{ asset('storage/' . $achievement->extra_curricular_skills_project_document) }}"
                                alt="Extra Curricular Skills Project Document" style="width: 100px;">
                        @endif
                    </div>
                </div>
                <div>
                    <h2 class="mb-3">CURRICULUM VITAE</h2>
                    <p>Are You willing to Attach Your Curriculum Vitae?</p>

                    <label>
                        <input type="radio" name="curriculum_status" value="yes" id="yesRadio3"
                            {{ old('curriculum_status') == 'yes' || (isset($achievement) && $achievement->{'curriculum_status'} == 'yes') ? 'checked' : '' }}
                            disabled> Yes </label>
                    <br>
                    <label>
                        <input type="radio" name="curriculum_status" value="no" id="noRadio3"
                            {{ old('curriculum_status') == 'no' || (isset($achievement) && $achievement->{'curriculum_status'} == 'no') ? 'checked' : '' }}
                            disabled> No </label>

                    <div id="input-field-3"
                        style="{{ isset($achievement) && $achievement->curriculum_status == 'yes' ? '' : 'display: none;' }}">
                        <div class="col-md-3  p-2">
                            <label class="form-label open-input-3-input">Attach Your resume: In PDF Format </label>
                            @if (isset($achievement) && $achievement->yes_curriculum_pdf_format)
                                <img src="{{ asset('storage/' . $achievement->yes_curriculum_pdf_format) }}"
                                    alt="Curriculum Document" style="width: 100px;">
                            @endif
                        </div>
                    </div>
                </div>
                <p> Are You Willing to Consent to a Background Check? <span class="red">*</span></p>

                <label>
                    <input type="radio" name="background_check_status" value="yes" id="yesRadio4"
                        {{ old('background_check_status') == 'yes' || (isset($achievement) && $achievement->{'background_check_status'} == 'yes') ? 'checked' : '' }}
                        disabled> Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="background_check_status" value="no" id="noRadio4"
                        {{ old('background_check_status') == 'no' || (isset($achievement) && $achievement->{'background_check_status'} == 'no') ? 'checked' : '' }}
                        disabled> No
                </label>
                <div id="input-field-4"
                    style="{{ isset($achievement) && $achievement->background_check_status == 'no' ? '' : 'display: none;' }}">
                    <div class="mb-3">
                        <label class="form-label">Please explain here</label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="no_curriculum_explain"
                            name="no_curriculum_explain" rows="3">{{ old('no_curriculum_explain') ?? ($achievement->no_curriculum_explain ?? '') }}</textarea>
                    </div>
                </div>
            @endforeach
            <div style="display: flex; justify-content: end;" class="mt-5 mx-3">
                <a style="font-weight: bold;" class="btn btn-secondary mx-2"
                    href="{{ route('career.employment.show', ['id' => $jobApplication->id]) }}">Previous</a>
                <a style="font-weight: bold;" class="btn btn-secondary"
                    href="{{ route('career.disclaimer.show', ['id' => $jobApplication->id]) }}">Next</a>
            </div>
        </div>
    </div>
@endsection
