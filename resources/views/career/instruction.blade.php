@extends('layouts.front.master')
@section('content')
    <div class="container">
        <!-- Percentage bar -->
        <div class="progress m-2  " style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width: 15%; background-color: #111;color: white; "
                aria-valuenow="15" aria-valuemin="0" aria-valuemax="15%">15%</div>
        </div>
    </div>
    <div class="container">
        <h1 style="font-size: 44px;" class="text-center">INSTRUCTION</h1>
        <ol class="">
            <li>Please ensure the following document are readily available prior to start the application.
                <ol>
                    <li>Passport Size Photo (Candidate, Father, Mother, Spouse, Siblings as applicable. Photo should be
                        taken within six months and size <br>
                        should not exceed 35 mm in width and 45mm in height)</li>
                    <li>Educational Certificates (10, 12, Diploma, Degree Certificates as applicable) in PDF format
                    </li>
                    <li>Experience Certificates, if available (in PDF format)
                    </li>
                    <li>Valid Aadhar/Passport copy (PDF, JPEG)
                    </li>
                    <li>Final Year Projects (PDF)
                    </li>
                    <li>Conference paper, if published
                    </li>
                    <li>Extracurricular/Co-curricular certificates (PDF), if available
                    </li>
                </ol>
            <li>Please provide working email/working mobile/telephone details for communication.
            </li>
            <li>Please complete each section EVEN IF you decide to attach a curriculum vitae.
            </li>
            <li>Application can be saved and resumed at any level. Please copy and save the link to resume the
                application at a later stage.
            </li>
            <li>Application fees of INR 1500 to be paid prior to submission.
            </li>
            <li>Please read the company terms and conditions, payment policy, and refund policy carefully prior to
                submitting the application.
            </li>
            <li>You may contact us if you face any difficulties/queries while applying and our team will guide you for
                further completion.
            </li>
            <li>You will receive a confirmation email after successful completion and our team will contact you for
                further interviews. <br>
                “ Wishing you all the Very Best ”</li>
            </li>
        </ol>
        <div style="display: flex;justify-content: end;">
            <a style="font-weight: bold;" class="btn btn-secondary" href="{{ route('job_application', ['sector_id' => request()->sector_id, 'position_id' => request()->position_id]) }}">Next</a>
            {{-- <a href="{{ route('job_application', $position->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}

        </div>
    </div>
@endsection
