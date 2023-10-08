@extends('layouts.front.master')

@section('content')


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
            <form
                action="{{ isset($achievement) ? route('career.achievement.update', $achievement->id) : route('career.achievement.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($achievement))
                    @method('PUT')
                @endif
                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ isset($achievement) ? $achievement->job_application_id : request()->job_application_id }}">

                <h2 class="text-center p-4">ACHEIVEMENTS, CO-CURRICULAR, EXTRA-CURRICULAR DETAILS</h2>
                <p>Please use this section to indicate how far you meet each of the competencies required for the post.
                    Indicate specific experience, achievements, knowledge, personal <br> qualities, and skills, which
                    you feel are relevant, for this particular post that you, applying for. Please limit your writing
                    for this part to a maximum of 500 words
                </p>

                <div class="mb-3">
                    <p class="border-bottom">List out your Achievements here <span class="form-label red">*</span> </p>

                    <div class="form-container">
                        <div class="form-fields">
                            <input style="background-color: rgba(248, 235, 235, 0.726); " type="text"
                                class="form-control  mt-4" name="achievement" id="exampleFormControlInput1" placeholder=""
                                value="{{ old('achievement') ?? ($achievement->achievement ?? '') }}" required>

                            <button class="remove-field-button  btn-right m-2 " style="display: none;">-</button>

                        </div>

                        <button class="add-field-button btn-right m-2 ">+</button>

                    </div>

                </div>

                <h4>Have you been published any conference papers/attended conferences?<span class="red">*</span></h4>
                <!-- first one -->

                <label>
                    <input type="radio" name="conference_status" value="yes" id="yesRadio1"
                        {{ old('conference_status') == 'yes' || (isset($achievement) && $achievement->conference_status == 'yes') ? 'checked' : '' }}>
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="conference_status" value="no" id="noRadio1"
                        {{ old('conference_status') == 'no' || (isset($achievement) && $achievement->conference_status == 'no') ? 'checked' : '' }}>
                    No
                </label>
                <div id="input-field"
                    class="{{ old('conference_status') == 'yes' || (isset($achievement) && $achievement->conference_status == 'yes') ? '' : 'hidden' }}">
                    <!-- Conference -->
                    <div class="mb-3">
                        <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                            limit
                            your writing for this part to a maximum of 500 words.</p>
                        <label for="exampleFormControlInput1" class="form-label">Conference<span class="red">*</span></label>
                            <div class="form-container">
                                <div class="form-fields">
                                    <!-- Initial set of form fields -->
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type=""
                                        class="form-control mt-4 " name="conference" id="conference" placeholder=""
                                        value="{{ old('conference') ?? ($achievement->conference ?? '') }}">

                                    <button class="remove-field-button  btn-right m-2 " style="display: none;">-</button>
                                </div>
                                <button class="add-field-button  btn-right  m-2 ">+</button>
                            </div>
                    </div>
                </div>
                <!-- second one -->
                <h2 class="pt-4 pb-4"> FINAL YEAR PROJECT</h2>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, pdf bmp <br>
                    Size
                    Limit: 50KB </p>
                <p> Do you worked on any final year projects?<span class="red">*</span></p>

                <label>
                    <input type="radio" name="final_year_project_status" value="yes" id="yesRadio2" required
                        {{ old('final_year_project_status') == 'yes' || (isset($achievement) && $achievement->{'final_year_project_status'} == 'yes') ? 'checked' : '' }}>
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="final_year_project_status" value="no" id="noRadio2" required
                        {{ old('final_year_project_status') == 'no' || (isset($achievement) && $achievement->{'final_year_project_status'} == 'no') ? 'checked' : '' }}>
                    No
                </label>

                <div id="input-field-2"
                    class="{{ old('final_year_project_status') == 'yes' || (isset($achievement) && $achievement->{'final_year_project_status'} == 'yes') ? '' : 'hidden' }}">
                    <p class="border-bottom">Please use this section to indicate the final year project. Please
                        limit your writing for this part to a maximum of 500 words and upload the detailed project
                        file.
                    </p>
                    <label for="exampleFormControlInput1" class="form-label">Final Year Projects<span class="red">*</span></label>
                        <div class="form-container">
                            <div class="form-fields">
                                <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control open-input-2-input  mt-4"
                                name="final_year_project" id="final_year_project"
                                value="{{ old('final_year_project') ?? ($achievement->final_year_project ?? '') }}">

                                <button class="remove-field-button  btn-right m-2" style="display: none;">-</button>
                                <!-- Add Remove button -->
                            </div>
                            <button class="add-field-button btn-right m-2">+</button>
                        </div>

                    <div class="col-md-3  p-2">
                        <label class="form-label">Upload All Your Project Documents Here<span class="red">*</span>
                            <div class="input-group">
                                <input type="file" class="form-control open-input-2-input" id="project_document"
                                    name="project_document">
                            </div>
                            @if (isset($achievement) && $achievement->project_document)
                                @if(isset($achievement->project_document) && explode('.', $achievement->project_document)[1]  == 'pdf')
                                    <a href="{{ asset('storage/' . $achievement->project_document) }}" target="_blank"
                                       alt="Project document" style="width: 150px;">View</a>
                                @else
                                    <img src="{{ asset('storage/' . $achievement->project_document) }}"
                                         alt="Project document" style="width: 100px;">
                                @endif
                            @endif
                    </div>
                </div>
                <div>
                    <h2 class="pt-4 pb-4">Co-Curricular/Extra Curricular Skills</h2>
                    </p>
                    <div class="mb-3">
                        <label class="form-label"> Please use this section to
                            indicate
                            the Personal Quality Skills. Please limit your writing for this part to a maximum of 500
                            words and upload the Co- <br> Curricular/Extracurricular Records <span class="red">*</span>
                        </label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="extra_curricular_skills"
                            name="extra_curricular_skills" rows="3" required>{{ old('extra_curricular_skills') ?? ($achievement->extra_curricular_skills ?? '') }}</textarea>
                    </div>
                </div>
                <div class="col-md-3  mt-4 mb-5">
                    <label class="form-label">Upload Your Curricular/Extracurricular Certificate Here<span class="red">*</span>
                        <div class="input-group">
                            <input type="file" class="form-control" id="extra_curricular_skills_project_document"
                                name="extra_curricular_skills_project_document"
                                {{ !isset($achievement->extra_curricular_skills_project_document) ? 'required' : '' }}>
                        </div>
                        @if (isset($achievement) && $achievement->extra_curricular_skills_project_document)
                            @if(isset($achievement->extra_curricular_skills_project_document) && explode('.', $achievement->extra_curricular_skills_project_document)[1]  == 'pdf')
                                <a href="{{ asset('storage/' . $achievement->extra_curricular_skills_project_document) }}"
                                   target="_blank"
                                   alt="Extra Curricular document" style="width: 150px;">View</a>
                            @else
                                <img
                                    src="{{ asset('storage/' . $achievement->extra_curricular_skills_project_document) }}"
                                    alt="Extra Curricular document" style="width: 100px;">
                            @endif
                        @endif
                </div>


                {{-- CURRICULUM --}}
                <div>
                    <h2 class="pt-4 pb-4">CURRICULUM VITAE</h2>
                    <p>Are You willing to Attach Your Curriculum Vitae? <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="curriculum_status" value="yes" id="yesRadio3" required
                            {{ old('curriculum_status') == 'yes' || (isset($achievement) && $achievement->{'curriculum_status'} == 'yes') ? 'checked' : '' }}>
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="curriculum_status" value="no" id="noRadio3" required
                            {{ old('curriculum_status') == 'no' || (isset($achievement) && $achievement->curriculum_status == 'no') ? 'checked' : '' }}>
                        No
                    </label>

                    <div id="input-field-3"
                        class="{{ old('curriculum_status') == 'yes' || (isset($achievement) && $achievement->curriculum_status == 'yes') ? '' : 'hidden' }}">
                        <div class="col-md-3  p-2">
                            <label class="form-label open-input-3-input">Attach Your resume: In PDF Format
                                <span class="red">*</span>
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control open-input-3-input"
                                    id="yes_curriculum_pdf_format" name="yes_curriculum_pdf_format">
                            </div>
                            @if (isset($achievement) && $achievement->yes_curriculum_pdf_format)
                                @if(isset($achievement->yes_curriculum_pdf_format) && explode('.', $achievement->yes_curriculum_pdf_format)[1]  == 'pdf')
                                    <a href="{{ asset('storage/' . $achievement->yes_curriculum_pdf_format) }}"
                                       target="_blank"
                                       alt="Extra Curricular document" style="width: 150px;">View</a>
                                @else
                                    <img
                                        src="{{ asset('storage/' . $achievement->yes_curriculum_pdf_format) }}"
                                        alt="Extra Curricular document" style="width: 100px;">
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <p> Are You Willing to Consent to a Background Check? <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="background_check_status" value="yes" id="yesRadio4" required
                            {{ old('background_check_status') == 'yes' || (isset($achievement) && $achievement->{'background_check_status'} == 'yes') ? 'checked' : '' }}>
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="background_check_status" value="no" id="noRadio4" required
                            {{ old('background_check_status') == 'no' || (isset($achievement) && $achievement->{'background_check_status'} == 'no') ? 'checked' : '' }}>
                        No
                    </label>

                    <div id="input-field-4"
                        class="{{ old('background_check_status') == 'no' || (isset($achievement) && $achievement->{'background_check_status'} == 'no') ? '' : 'hidden' }}">
                        <div class="p-2">
                            <div class="mb-3">
                                <label class="form-label">Please explain here</label>
                                <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="no_curriculum_explain"
                                    name="no_curriculum_explain" rows="3">{{ old('no_curriculum_explain') ?? ($achievement->no_curriculum_explain ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- buttons -->
                <div style="display: flex;justify-content: end; align-items: center;">
                    <a style="display: flex;align-items: center;; " class="btn btn-secondary mx-3 mt-5"
                        href="{{ route('career.employment.edit', request()->employment_id ?? ($employment_id ?? '')) }}">Previous</a>
                    <button class="btn btn-primary mt-5 mx-3 ">Save And Next </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".add-field-button").click(function() {
                const formFields = $(this).prev(".form-fields");
                const clonedFields = formFields.clone(true);
                clonedFields.find(".remove-field-button").show(); // Show the Remove button
                formFields.after(clonedFields);
            });

            $(document).on("click", ".remove-field-button", function() {
                $(this).closest(".form-fields").remove(); // Remove the associated form fields
            });
        });
    </script>




    <script>
        $(document).ready(function() {
            $('#yesRadio1').click(function() {
                $('#input-field').removeClass('hidden');
                $('#conference').attr('required', true);
            });

            $('#noRadio1').click(function() {
                $('#input-field').addClass('hidden');
                $('#conference').attr('required', false);
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
                $('#yes_curriculum_pdf_format').attr('required', true);

            });
            $('#noRadio3').click(function() {
                $('#input-field-3').hide();
                $('#yes_curriculum_pdf_format').attr('required', false);
            });
            $('#yesRadio4').click(function() {
                $('#input-field-4').hide();
                $('#no_curriculum_explain').prop('required', false);
            });

            $('#noRadio4').click(function() {
                $('#input-field-4').show();
                $('#no_curriculum_explain').prop('required', true);
            });
        });
    </script>

@endsection
