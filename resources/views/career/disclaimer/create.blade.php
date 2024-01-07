@extends('layouts.front.master')
@section('content')
    <!-- main -->
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="progress m-2  " style="height: 30px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #111;color: white; "
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100%">100%</div>
                </div>
            </div>
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
        <h2 class="text-center p-4">DISCLAIMER</h2>
        @php
            $jobApplication = \App\Models\JobApplication::find(request()->job_application_id ?? $disclaimer->job_application_id ?? '');
        @endphp
        <!-- paragraph -->
        <p>I, {{ $jobApplication->first_name }} {{ $jobApplication->last_name }} understands that this is an Equal Opportunity Employer and is
            committed to excellence through diversity.</p>
        <p>I, {{ $jobApplication->first_name }} {{ $jobApplication->last_name }}, certify
            that my answers are true and honest to the best of my knowledge. If this application leads to my
            eventual employment, I understand and agree that any false or misleading Information in my application or
            interview may result in my employment being terminated.</p>
        <div class="container">
            <!-- heading -->
            <h4 class="p-3">Joining date/Current and Expected Salary Details</h4>

            <form action="{{ isset($disclaimer) ? route('career.disclaimer.update', $disclaimer->id) : route('career.disclaimer.store') }}" class="row g-3" method="POST"
                enctype="multipart/form-data" id="disclaimer_form">
                @csrf
                @if (isset($disclaimer))
                    @method('PUT')
                @endif
                <input type="hidden" name="job_application_id" value="{{ isset($disclaimer) ? $disclaimer->job_application_id : request()->job_application_id }}">
                <!-- Expected date to join -->
                <div class="col-md-4">
                    <label class="form-label">Expected date to join <span class="red">*</span></label>
                    <input type="date" class="form-control bg" placeholder="Expected date to join"
                        id="expected_date_to_join" name="expected_date_to_join"
                        value="{{ old('expected_date_to_join') ?? ($disclaimer->expected_date_to_join ?? '') }}" required>
                </div>
                <!-- Current Salary -->
                <div class="col-md-4">
                    <label class="form-label">Current Salary Per Annum <span class="red">*</span></label>
                    <input type="number" class="form-control bg" id="current_salary" name="current_salary"
                        value="{{ old('current_salary') ?? ($disclaimer->current_salary ?? '') }}" required>
                </div>
                <!-- Expected Salary -->
                <div class="col-md-4 row">
                    <label class="form-label mt-3">Expected Salary Per Annum <span style="color: red;">*</span></label>
                    <div class="col-md-3">
                        <input type="text" class="form-control alphabetic-input" id="currency" name="currency" placeholder="USD" value="{{ old('currency') ?? ($disclaimer->currency ?? '') }}" required>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" placeholder="Expected Salary Per Annum" value="{{ old('expected_salary') ?? ($disclaimer->expected_salary ?? '') }}" required>
                    </div>
                </div>
                <!-- paragraph -->
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp
                    <br>
                    Size Limit: 1MB
                </p>
                <div class="row ">
                    <!-- Signature -->
                    <div class="col-md-4">
                        <label for="disclaimer_signature" class="form-label">Signature <span class="red">*</span></label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="disclaimer_signature" name="disclaimer_signature"
                                accept="image/*" {{ !isset($disclaimer->disclaimer_signature) ? 'required' : '' }}>
                        </div>
                        @if (isset($disclaimer) && $disclaimer->disclaimer_signature)
                            <img src="{{ asset('storage/'.$disclaimer->disclaimer_signature) }}" alt="Disclaimer Image"
                                 style="width: 150px;">
                        @endif
                        <div class="form-group mt-2">
                            <img id="disclaimer_SignaturePreview" src="#" alt="Image Preview"
                                style="max-width:150px; display: none;">
                        </div>
                    </div>
                    <!-- date -->
                    <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input class="form-control bg" style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                            id="currentDate" value="01/08/2023" name="disclaimer_date" readonly>
                    </div>
                    <!-- time -->
                    <div class="col-md-4">
                        <label class="form-label">Time</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control bg" type="text"
                            id="currentTime" name="disclaimer_time" readonly>
                    </div>
                    <div class="row g-3 pt-2">
                        <!-- Print Name -->
                        <div class="col-md-6">
                            <label class="form-label">Print Name</label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" aria-label="Print Name"
                                id="print_name" type="text" class="form-control" name="disclaimer_print_name"
                                value="{{ $jobApplication ? $jobApplication->first_name . ' ' . $jobApplication->last_name : '' }}"
                                readonly>
                            @if (!$jobApplication)
                                <p>Please fill the above forms</p>
                            @endif
                        </div>
                        {{-- place --}}
                        <div class="col-md-6">
                            <label class="form-label">PLACE <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" id="disclaimer_place"
                                type="text" class="form-control alphabetic-input" name="disclaimer_place"
                                   value="{{ old('disclaimer_place') ?? ($disclaimer->disclaimer_place ?? '') }}" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the <a href="https://tisecon.com/terms-and-conditions/">Terms and
                                    Conditions</a> and <a href="https://tisecon.com/privacy-policy/"> Privacy Policy</a>
                            </label>
                        </div>
                        <!-- Payment Item -->
                        <div class="form-check">
                            <p style="font-weight: bold;">Payment Item <span style="color: red;">*</span></p>
                            <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Pay 10 Rs
                            </label>
                        </div>
                    </div>
                </div>

                <!-- buttons -->
                <div style="display: flex;justify-content: end;  " class="groupfinal">
                            @if(request()->option == 'view')
                                <a style="font-weight: bold; " class="btn btn-secondary mx-3 mt-5" href="{{ route('career.achievement.edit', ['id' => request()->achievement_id ?? ($achievement_id ?? ''), 'option' => request()->option]) }}">Previous</a>
                                    <a style="font-weight: bold;" class="btn btn-secondary m-1 mt-5"
                                        href="{{ route('acknowledgement', ['job_application_id' => $disclaimer->job_application_id, 'disclaimer_id' => $disclaimer->id, 'option' => request()->option]) }}">Next</a> 
                            @else
                                <a style="display: flex;align-items: center;" class="btn btn-secondary m-1" href="{{ route('career.achievement.edit', request()->achievement_id ?? ($achievement_id ?? '')) }}">Previous</a>
                                <button class="btn btn-primary m-1 ">Submit Form</button>
                            @endif


                </div>
            </form>
        </div>
    </div>

    <!-- current time -->
    <script>
        // Function to update the current time
        function updateCurrentTime() {
            var currentTimeInput = document.getElementById('currentTime');
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';

            // Convert hours to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // Handle midnight (12:00 am)

            // Add leading zeros to minutes if needed
            minutes = minutes < 10 ? '0' + minutes : minutes;

            // Update the input field with the current time
            currentTimeInput.value = hours + ':' + minutes + ' ' + ampm;
        }

        // Call the function to initially set the current time
        updateCurrentTime();

        // Update the current time every minute
        setInterval(updateCurrentTime, 60000);
    </script>

    {{-- image --}}
    <script>
        const signatureInput = document.getElementById('disclaimer_signature');
        const signaturePreview = document.getElementById('disclaimer_SignaturePreview');
        // signature
        signatureInput.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    signaturePreview.src = e.target.result;
                    signaturePreview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                signaturePreview.src = '#';
                signaturePreview.style.display = 'none';
            }
        });
    </script>


    <!-- current date -->
    <script>
        const currentDate = new Date();
        const day = String(currentDate.getDate()).padStart(2, '0');
        const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const year = currentDate.getFullYear();

        const formattedDate = `${day}/${month}/${year}`;

        document.getElementById('currentDate').value = formattedDate;
    </script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": "{{ 10 * 100 }}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "{{ env('APP_NAME') }}", //your business name
            "description": "job application payment",
            "image": "{{ asset('img/logo.png') }}",
            "order_id": "{{ $res->id }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                $('<input>').attr({
                    type: 'hidden',
                    id: 'payment_id',
                    name: 'payment_id',
                    value: response.razorpay_payment_id
                }).appendTo($('#disclaimer_form'));
                $('<input>').attr({
                    type: 'hidden',
                    id: 'payment_response',
                    name: 'payment_response',
                    value: JSON.stringify(response)
                }).appendTo($('#disclaimer_form'));
                $('#disclaimer_form').submit();
            },
            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                "name": "{{ Auth::user()->name }}", //your customer's name
                "email": "{{ Auth::user()->email ?? '' }}",
                // "contact": "9000090000" //Provide the customer's phone number for better conversion rates
            },
            "notes": {
                "user_id": "{{ auth()->id() }}"
            },
            "theme": {
                "color": "#ff7529"
            }
        };
        var rzp1 = new Razorpay(options);
        $(document).ready(function () {
            $('#disclaimer_form').on('submit', function (e) {
                if($('#payment_id').val() == undefined) {
                    e.preventDefault();
                    rzp1.open();
                }
            })
        });
    </script>
@endsection
