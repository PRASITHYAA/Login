@extends('layouts.front.master')
@section('content')
    <!-- main -->
    <div class="container">
        <div class="container">
            <div class="progress m-2  " style="height: 30px;">
                <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #111;color: white; "
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100%">100%</div>
            </div>
            <h2 class="text-center p-4">DISCLAIMER</h2>
            @php
                $jobApplication = \App\Models\JobApplication::find(request()->id);
                $disclaimers = $jobApplication->disclaimers;
            @endphp

            <input type="hidden" name="job_application_id"
                value="{{ isset($disclaimer) ? $disclaimer->job_application_id : request()->job_application_id }}">

            @foreach ($disclaimers as $disclaimer)
                <!-- paragraph -->
                <p>Applicant understands that this is an Equal Opportunity Employer and is
                    committed to excellence through diversity. In order to ensure this application is acceptable,
                    please print or type the application that is fully completed in order for it to be considered.
                    Please complete each section EVEN IF you decide to attach a resume. I, the Applicant, certify
                    that my answers are true and honest to the best of my knowledge. If this application leads to my
                    eventual employment, I understand that any false or misleading Information in my application or
                    interview may result in my employment being terminated.</p>
                <div class="container row">
                    <!-- heading -->
                    <h4 class="p-3">Joining date/Current and Expected Salary Details</h4>
                    <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">
                    <!-- Expected date to join -->
                    <div class="col-md-4">
                        <label class="form-label">Expected date to join </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $disclaimer->expected_date_to_join }}" readonly>
                    </div>
                    <!-- Current Salary -->
                    <div class="col-md-4">
                        <label class="form-label">Current Salary Per Annum </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $disclaimer->current_salary }}" readonly>
                    </div>
                    <!-- Expected Salary -->
                    <div class="col-md-4">
                        <label class="form-label">Expected Salary Per Annum </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $disclaimer->expected_salary }}" readonly>
                    </div>
                    <!-- paragraph -->
                    <p style="font-weight: bold;" class="mt-3">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp
                        <br>
                        Size Limit: 50KB
                    </p>
                    <div class="row ">
                        <!-- Signature -->
                        <div class="col-md-4">
                            <label for="disclaimer_Signature" class="form-label">Signature </label>
                            <br>
                            @if (isset($disclaimer) && $disclaimer->disclaimer_signature)
                            <img src="{{ asset('storage/'.$disclaimer->disclaimer_signature) }}" alt="Disclaimer Image"
                                 style="width: 150px;">
                        @endif
                        </div>
                        <!-- date -->
                        <div class="col-md-4">
                            <label class="form-label">Date</label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $disclaimer->disclaimer_date }}" readonly>
                        </div>
                        <!-- time -->
                        <div class="col-md-4">
                            <label class="form-label">Time</label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $disclaimer->disclaimer_time }}" readonly>
                        </div>
                        <div class="row g-3 pt-2">
                            <!-- Print Name -->
                            <div class="col-md-6">
                                <label class="form-label">Print Name</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $disclaimer->disclaimer_print_name }}" readonly>
                            </div>
                            {{-- place --}}
                            <div class="col-md-6">
                                <label class="form-label">PLACE </label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $disclaimer->disclaimer_place }}" readonly>
                            </div>
                            <!-- checkbox -->
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and agree to the <a href="https://tisecon.com/terms-and-conditions/">Terms
                                        and
                                        Conditions</a> and <a href="https://tisecon.com/privacy-policy/"> Privacy Policy</a>
                                </label>
                            </div>
                            <!-- Payment Item -->
                            <div class="form-check">
                                <p style="font-weight: bold;">Payment Item </p>
                                <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2"
                                    checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Pay 10 Rs
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: end;" class="mt-5 mx-3">
                    <a style="font-weight: bold;" class="btn btn-secondary mx-2"
                        href="{{ route('career.achievement.show', ['id' => $jobApplication->id]) }}">Previous</a>
                </div>
                        </div>
        @endforeach

    </div>
@endsection
