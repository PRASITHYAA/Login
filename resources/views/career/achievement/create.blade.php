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
            <form action="{{ route('career.achievement.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ request()->job_application_id }}">

                <h2 class="text-center p-4">ACHEIVEMENTS, CO-CURRICULAR, EXTRA-CURRICULAR DETAILS</h2>
                <p>Please use this section to indicate how far you meet each of the competencies required for the post.
                    Indicate specific experience, achievements, knowledge, personal <br> qualities, and skills, which
                    you feel are relevant, for this particular post that you, applying for. Please limit your writing
                    for this part to a maximum of 500 words
                </p>

                <p class="border-bottom">List out your Acheivements here <span class="form-label red">*</span> </p>
                <div class="mb-3">

                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                        name="achievement" id="achievement" placeholder="" required>
                </div>
                <h4>Have you been published any conference papers/attended conferences? </h4>
                <!-- first one -->

                <label>
                    <input type="radio" name="open-input" value="yes" id="yesRadio1" onclick="showInput()" >
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input" value="no" id="noRadio1" onclick="hideInput()" >
                    No
                </label>
                <div id="input-field" style="display: none;">
                    <!-- Conference -->
                    <div class="mb-3">
                        <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                            limit
                            your writing for this part to a maximum of 500 words.</p>
                        <label for="exampleFormControlInput1" class="form-label">Conference</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="" class="form-control"
                            name="Conference" id="Conference" placeholder="">
                    </div>
                </div>
                <!-- second one -->
                <h2 class="pt-4 pb-4"> FINAL YEAR PROJECT</h2>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, pdf bmp <br> Size
                    Limit: 50KB </p>
                <p> Do you worked on any final year projects?</p>

                <label>
                    <input type="radio" name="open-input-2" value="yes" id="yesRadio2"  >
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input-2" value="no" id="noRadio2" >
                    No
                </label>

                <div id="input-field-2" style="display: none;">
                    <p class="border-bottom">Please use this section to indicate the final year project. Please
                        limit your writing for this part to a maximum of 500 words and upload the detailed project file.
                    </p>
                    <label for="exampleFormControlInput1" class="form-label">Final Year Projects </label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control open-input-2-input "
                        name="final_year_project" id="final_year_project">

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
                            words and upload the Co- <br> Curricular/Extracurricular Records <span class="red">*</span>
                        </label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" id="extra_curricular_skills"
                            name="extra_curricular_skills" rows="3" required></textarea>
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
                    <p>Are You willing to Attach Your Curriculum Vitae? <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="open-input-3" value="yes" id="yesRadio3" >
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input-3" value="no" id="noRadio3" >
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
                    <p> Are You Willing to Consent to a Background Check? <span class="red">*</span></p>

                    <label>
                        <input type="radio" name="open-input-4" value="yes" id="yesRadio4" >
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input-4" value="no" id="noRadio4" >
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
                    <a style="display: flex;align-items: center;" class="btn btn-secondary m-1 "
                        href="employment">Previous</a>

                    <button class="btn btn-primary mx-2">Save & Next </button>
                </div>
            </form>
        </div>
    </div>





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
            $('#input-field-4').hide();
            $('#no_curriculum_explain').prop('required',
                true);
        });

        $('#noRadio4').click(function() {
            $('#input-field-4').show();
            $('#no_curriculum_explain').prop('required',
                false);
        });
    });
</script>

@endsection
