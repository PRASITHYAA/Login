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
    <!-- paragraph -->
    <p>Applicant understands that this is an Equal Opportunity Employer and is
        committed to excellence through diversity. In order to ensure this application is acceptable,
        please print or type the application that is fully completed in order for it to be considered.
        Please complete each section EVEN IF you decide to attach a resume. I, the Applicant, certify
        that my answers are true and honest to the best of my knowledge. If this application leads to my
        eventual employment, I understand that any false or misleading Information in my application or
        interview may result in my employment being terminated.</p>
    <div class="container">
        <!-- heading -->
        <h4 class="p-3">Joining date/Current and Expected Salary Details</h4>

        <form action="{{ route('career.disclaimer.store') }}" class="row g-3" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="job_application_id" value="{{ $jobApplication->id ?? '' }}">
            <!-- Expected date to join -->
            <div class="col-md-4">
                <label class="form-label">Expected date to join <span class="red">*</span></label>
                <input type="date" class="form-control bg" placeholder="Expected date to join"
                    id="expected_date_to_join" name="expected_date_to_join"
                    value="{{ old('expected_date_to_join') ?? ($disclaimer->expected_date_to_join ?? '') }}" required>
            </div>
            <!-- Current Salary -->
            <div class="col-md-4">
                <label class="form-label">Current Salary <span class="red">*</span></label>
                <input type="number" class="form-control bg" id="current_salary" name="current_salary"
                    value="{{ old('current_salary') ?? ($disclaimer->current_salary ?? '') }}" required>
            </div>
            <!-- Expected Salary -->
            <div class="col-md-4">
                <label class="form-label">Expected Salary <span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="expected_salary" name="expected_salary"
                    placeholder="Expected Salary" value="{{ old('expected_salary') }}" required>
            </div>
            <!-- paragraph -->
            <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp
                <br>
                Size Limit: 50KB
            </p>
            <div class="row ">
                <!-- Signature -->
                <div class="col-md-4">
                    <label for="disclaimer_Signature" class="form-label">Signature <span class="red">*</span></label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="disclaimer_Signature" name="disclaimer_signature"
                            accept="image/*" required>
                    </div>
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
                        @php
                        $jobApplication = \App\Models\JobApplication::find(request()->id);
                        @endphp
                        <input style="background-color: rgba(248, 235, 235, 0.726);" aria-label="Print Name"
                            id="print_name" type="text" class="form-control" name="disclaimer_print_name"
                            value="{{ $jobApplication ? $jobApplication->expected_date_to_join . ' ' . $jobApplication->last_name : '' }}"
                            readonly>
                        @if (!$jobApplication)
                        <p>Please fill the above forms</p>
                        @endif
                    </div>
                    {{--place --}}
                    <div class="col-md-6">
                        <label class="form-label">PLACE <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" id="disclaimer_place" type="text"
                            class="form-control" name="disclaimer_place" value="{{ old('disclaimer_place') }}" required>
                    </div>
                    <!-- checkbox -->
                    <div class="form-check pb-3">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I have read and agree to the <a href="https://tisecon.com/terms-and-conditions/">Terms and
                                Conditions</a> and <a href="https://tisecon.com/privacy-policy/"> Privacy Policy</a>
                        </label>
                    </div>
                    <!-- Payment Item -->
                    <div class="form-check">
                        <p style="font-weight: bold;">Payment Item <span style="color: red;">*</span></p>
                        <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Pay 10 Rs
                        </label>
                    </div>
                </div>
            </div>

            <!-- buttons -->
            <div style="display: flex;justify-content: end;  " class="groupfinal">
                <a style="display: flex;align-items: center;" class="btn btn-secondary m-1 "
                    href="achievement">Previous</a>
                <button class="btn btn-primary m-1 ">Submit Form</button>

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
    const signatureInput = document.getElementById('disclaimer_Signature');
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
@endsection