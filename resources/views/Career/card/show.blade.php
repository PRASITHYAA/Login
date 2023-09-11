@extends('layouts.front.master')

@section('content')
    <!-- main -->
    <div class="container-fluid">
        <div class="container">
            <div class="progress m-2" style="height: 30px;">
                <div class="progress-bar" role="progressbar" style="width: 45%; background-color: #111; color: white;"
                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="45%">45%</div>
            </div>
            <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">
            <h2 class="text-center p-4">Government-Issued Identification Cards (IDs)</h2>
            <p style="font-weight: bold;">ID Card You Have </p>
            <label>
                <input type="checkbox" id="aadharcard" name="identity_type" value="aadhar" checked> AADHAR CARD
            </label>

            <label>
                <input type="checkbox" id="passport" name="identity_type" value="passport" checked>
                PASSPORT
            </label>
            <div id="inputFieldsaadharcard">
                <div class="row">
                    @php
                        $jobApplication = \App\Models\JobApplication::find(request()->id);
                        $cards = $jobApplication->cards;
                    @endphp

                    @foreach ($cards as $card)
                        <!-- aadhar card -->
                        <div class="col-lg-6">
                            <h4 class="text-center" style="font-weight: bold;">AADHAR CARD</h4>

                            <div class="col mt-4">
                                <label class="form-label pt-2">Aadhar Name</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->aadhar_name }}" readonly>
                            </div>
                            <!-- aadharidnumber -->
                            <div class="col mt-4">
                                <label class="form-label">IDs Number </label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->aadhar_id_number }}" readonly>

                            </div>
                            <!-- aadharissuedcountry -->
                            <div class="col mt-4">
                                <label for="" class="form-label">Country </label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->aadhar_issued_country }}" readonly>
                            </div>
                            <!-- aadharissuedstate -->
                            <div class="col mt-4">
                                <label class="form-label">State </label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->aadhar_issued_state }}" readonly>

                            </div>
                            <!-- aadharissuedplace -->
                            <div class="col mt-4">
                                <label class="form-label">Issued Place</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->aadhar_issued_place }}" readonly>
                            </div>
                            <!-- aadharimage -->
                            <div class="col mt-4">
                                <label class="form-label">Upload ID- 1st Page </label><br>
                                @if ($card->aadhar_image)
                                    <img id="aadhar_image" src="{{ asset('storage/' . $card->aadhar_image) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                @endif

                            </div>
                            <!-- aadharimagepage  -->
                            <div class="col mt-4">
                                <label for="validationDefaultUpload" class="form-label">Upload ID- 2st Page </label><br>
                                @if ($card->aadhar_image_page)
                                    <img id="aadhar_image_page" src="{{ asset('storage/' . $card->aadhar_image_page) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                @endif
                            </div>
                            <!-- button -->
                            <a style="font-weight: bold;" class="btn btn-secondary mt-5"
                                href="{{ route('career.job_application.show', ['id' => $jobApplication->id - 1]) }}">Previous</a>
                            <a style="font-weight: bold;" class="btn btn-secondary mt-5 mx-3"
                                href="{{ route('career.education.show', ['id' => $jobApplication->id]) }}">Next</a>

                            <br>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <!-- passport -->
                            <h4 class="text-center" style="font-weight: bold;">PASSPORT</h4>
                            <!-- passportname -->
                            <div class="col mt-4">
                                <label class="form-label">Name as per IDs</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_name }}" readonly>
                            </div>
                            <!-- passport id number -->
                            <div class="col mt-4">
                                <label class="form-label">IDs Number</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_id_number }}" readonly>
                            </div>
                            <!-- paasport issued date -->
                            <div class="col mt-4">
                                <label class="form-label">Issued Date</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_issue_date }}" readonly>
                            </div>
                            <!-- passport expired date -->
                            <div class="col mt-4">
                                <label class="form-label">Expired Date</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_expired_date }}" readonly>

                            </div>
                            <!-- passport issued country -->
                            <div class="col mt-4">
                                <label class="form-label">Country</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_issued_country }}" readonly>
                            </div>
                            <!-- passport issued state -->
                            <div class="col mt-4">
                                <label class="form-label">State</label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_issued_state }}" readonly>
                            </div>
                            <!-- passport issued place -->
                            <div class="col mt-4">
                                <label class="form-label">Issued Place
                                </label>
                                <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                    value="{{ $card->passport_issued_place }}" readonly>
                            </div>

                            <!-- passport  upload id -->
                            <div class="col mt-4">
                                <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page</label>
                                @if ($card->passport_image_id)
                                    <img id="passport_image_id" src="{{ asset('storage/' . $card->passport_image_id) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                @endif
                            </div>
                            <!-- passport image id page -->
                            <div class="col mt-4">
                                <label class="form-label">Upload ID- 2st Page </label>
                                <input type="file" class="form-control"
                                    style="background-color: rgba(248, 235, 235, 0.726);" id="passport_image_id_page"
                                    name="passport_image_id_page" readonly>

                                @if ($card->passport_image_id_page)
                                    <img id="passport_image_id_page"
                                        src="{{ asset('storage/' . $card->passport_image_id_page) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                @endif
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
