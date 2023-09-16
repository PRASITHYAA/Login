<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!--Main layout-->
    <div class="container">
        @if ($errors->any())
            <div class=" alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- success --}}

        @if (session('success'))
            <div class=" alert-success">
                {{ session('success') }}
            </div>
        @endif

        <main style="margin-top: 58px;">
            <div class="container border 2px p-4">
                <h1 class="pb-2">Create a new course level</h1>

                <form action="{{ route('course_title.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">sector <span style="color: red;">*</span></label>
                        <select class="form-select " name="sector_id" id="sector_id"
                            style="background-color: rgba(248, 235, 235, 0.726);" required>
                            <option value="">Please Select</option>
                            @php
                                $sectors = \App\Models\Sector::all();
                            @endphp
                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}"
                                    {{ old('sector') == $sector->id ? 'selected' : '' }}>
                                    {{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Level <span style="color: red;">*</span></label>
                        <select style="background-color: rgba(248, 235, 235, 0.726);" class="form-select"
                            name="course_level" id="course_level">
                            <option value="level1">Level 1</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Course Title <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="name" id="Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Code <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="course_Code" id="course_Code">
                    </div>
                    <div class="row" id="experienceForm">
                        <div class=" col-md-4 mb-3">
                            <label class="form-label"> From Date <span style="color: red;">*</span></label>
                            <input class="form-control" type="date" id="fromDate" name="from_date"
                                style="background-color: rgba(248, 235, 235, 0.726);" required>
                        </div>

                        <div class=" col-md-4 mb-3">
                            <label class="form-label"> From Date <span style="color: red;">*</span></label>
                            <input class="form-control" type="date"  id="toDate" name="to_date"
                                style="background-color: rgba(248, 235, 235, 0.726);" required>
                        </div>

                        <div class=" col-md-4 mb-3">
                            <label class="form-label">Duration <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);"
                                class="form-control" name="duration"  id="totalExperience" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="time" class="form-control" name="time" id="time">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Course Location <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="course_location" id="course_location">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Registration Fee <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="course_registration_fee" id="course_registration_fee">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Description <span style="color: red;">*</span></label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726); width: 100%; height: 150px;" type="text"
                            class="form-control" name="course_description" id="myeditorinstance"></textarea>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Training Schedule <span style="color: red;">*</span></label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726); width: 100%; height: 150px;"" type="text"
                            class="form-control" rows="5" name="course_training_schedule" id="myeditorinstance"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Eligible To Participate <span style="color: red;">*</span></label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726); width: 100%; height: 150px;"" type="text"
                            class="form-control" rows="5" name="eligible_to_participate" id="myeditorinstance"></textarea>
                    </div>


                    <button class="btn btn-success">Save</button>
                    <a class="btn btn-secondary" href="{{ route('course_title.index') }}">Back</a>

                </form>
            </div>
        </main>
    </div>

    <script>
        const fromDateInput = document.getElementById("fromDate");
        const toDateInput = document.getElementById("toDate");
        const totalExperienceInput = document.getElementById("totalExperience");

        fromDateInput.addEventListener("input", calculateExperience);
        toDateInput.addEventListener("input", calculateExperience);

        function calculateExperience() {
            const fromDate = new Date(fromDateInput.value);
            const toDate = new Date(toDateInput.value);

            if (!isNaN(fromDate.getTime()) && !isNaN(toDate.getTime())) {
                // Calculate the difference in days
                const timeDifference = toDate - fromDate;
                const daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

                // Display the total experience in the input field
                totalExperienceInput.value = daysDifference + " days";
            } else {
                // If the input dates are not valid, clear the total experience field
                totalExperienceInput.value = '';
            }
        }
    </script>
      <!--Main layout-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
