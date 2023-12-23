<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Form pdf</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header img {
            max-width: 150px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        td.empty-column {
            width: 0;
        }

        td.image-upload-column {
            width: 33%;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            width: 50%;
            /* Equal width for each column */
        }

        th {
            background-color: #f0f0f0;
        }

        /* . { */
        /* background-color: rgba(113, 106, 97, 0.439); */
        /* background-color: rgba(213, 213, 213, 0.637); */
        /* } */

         #header,
         #footer {
             position: fixed;
             left: 0;
             right: 0;
             color: #aaa;
             font-size: 0.9em;
         }
        #header {
            top: 0;
            border-bottom: 0.1pt solid #aaa;
        }
        #footer {
            bottom: 0;
            border-top: 0.1pt solid #aaa;
        }
        .page-number:before {
            content: "Page " counter(page);
        }
         .page-break {
             page-break-after: always;
         }
    </style>
</head>

<body>
<script type="text/php">
    if (isset($pdf)) {
        $pageText = "page {PAGE_NUM} / {PAGE_COUNT}";
        $dateText = date('Y-m-d H:i:s');
        $size = 10;
        $font = $fontMetrics->getFont("Verdana");

        // Calculate the width of each text block
        $pageWidth = $fontMetrics->get_text_width($pageText, $font, $size);
        $dateWidth = $fontMetrics->get_text_width($dateText, $font, $size);

        // Calculate the total width of the footer
        $footerWidth = $pageWidth + $dateWidth;

        // Calculate the starting X position for the page number
        $pageX = ($pdf->get_width() - $footerWidth) / 2;

        // Calculate the starting X position for the date (right-aligned)
        $dateX = $pageX + $pageWidth;

        // Set the Y position for both texts
        $y = $pdf->get_height() - 35;

        // Add the date text on the right side
        $pdf->page_text($dateX, $y, $dateText, $font, $size, [0, 0, 0], 0, 0, 0, 0);

        // Add the page number text
        $pdf->page_text($pageX, $y, $pageText, $font, $size, [0, 0, 0], 0, 0, 0, 0);
    }
</script>
<div id="footer">
    <div class="page-number"></div>
</div>
<header>
    <img src="https://tisecon.com/wp-content/uploads/2023/04/NEW-LOGO-FINAL-1.png" alt="Job Site Logo">
</header>
<h2 class="text-center">Training Form Acknowledgement</h2>
<h2 class="text-center border-bottom p-4 ">Training Form</h2>
<table>
    <tr>
        <td class="empty-column">Applicant Name</td>
        <td class="empty-column">{{ $first_name }} {{ $last_name }} </td>
    </tr>
    <tr>
        <td class="empty-column">Photo</td>
        <td class="empty-column"><img style="height:100px" src="{{ public_path('storage/' . $photo) }}" alt="Image"></td>
    </tr>

    <tr>
        <td class="empty-column">SECTOR APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\Sector::find($sector_id)->name }} </td>
    </tr>
    <tr>
        <td class="empty-column">COURSE CODE APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\CourseTitle::find($course_title_id)->course_code }} </td>
    </tr>
    <tr>
        <td class="empty-column">COURSE TITLE APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\CourseTitle::find($course_title_id)->name }} </td>
    </tr>
    <tr>
        <td class="empty-column">COURSE LEVEL APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\CourseLevel::find($course_level_id)->name }} </td>
    </tr>
</table>
<h2 class="text-center border-bottom-4 p-4 mt-3">QUALIFICATION</h2>
<table>
    <tr>
        <td class="empty-column">Qualification</td>
        <td class="empty-column">{{ str_replace('_', ' ', ucwords($qualification)) }}</td>
    </tr>
</table>
<h2 class="text-center p-4 mt-3">ORGANIZATION DETAILS (IF APPLICABLE)</h2>
<table>
{{--    <thead>
    <tr>
        <th>Description</th>
        <th>Current Address </th>
        <th>Permanent Address </th>
    </tr>
    </thead>
    <tbody>--}}
    <tr>
        <td>Do You Have Any Prior Experience?</td>
        <td> {{ $experience_status }}</td>
    </tr>
    <tr>
        <td>Company Name</td>
        <td>{{ $company_name }}</td>
    </tr>
    <tr>
        <td>Job Title</td>
        <td>{{ $job_title }}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td> {{ $gender }}</td>
    </tr>
    <tr>
        <td>Year of Experience</td>
        <td>{{ $year_of_experience }}</td>
    </tr>
    <tr>
        <td>Primary Mobile Number</td>
        <td>{{ $primary_mobile_number }}</td>
    </tr>
    <tr>
        <td>Secondary Mobile Number</td>
        <td>{{ $secondary_mobile_number }}</td>
    </tr>
    <tr>
        <td>Primary Email</td>
        <td>{{ $primary_email }}</td>
    </tr>
    <tr>
        <td>Secondary Email</td>
        <td>{{ $secondary_email }}</td>
    </tr>
    <tr>
        <td>Describe your duty and job description</td>
        <td>{{ $job_description }}</td>
    </tr>
    <tr>
        <td>What you are expecting from this training session?</td>
        <td>{{ $training_session }}</td>
    </tr>
    </tbody>
</table>
<h2 class="text-center p-4 mt-3">ADDRESS INFORMATION</h2>
<table>
    <thead>
    <tr>
        <th>Description</th>
        <th>Current Address</th>
        <th>Permanent Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> Address Line 1</td>
        <td> {{ $address_line_1 }}</td>
        <td> {{ $permanent_address_line_1 ?? $address_line_1}}</td>
    </tr>
    <tr>
        <td> Address Line 2</td>
        <td> {{ $address_line_2 }}</td>
        <td> {{ $permanent_address_line_2 ?? $address_line_2}}</td>
    </tr>
    <tr>
        <td>Zip Code</td>
        <td> {{ $zip_code }}</td>
        <td>{{ $permanent_zip_code ?? $zip_code }}</td>
    </tr>

    <tr>
        <td>District</td>
        <td>{{ $city_name }}</td>
        <td>{{ $permanent_city_name ?? $city_name }}</td>
    </tr>

    <tr>
        <td>State</td>
        <td> {{ $state_name }}</td>
        <td>{{ $permanent_state_name ?? $state_name }}</td>
    </tr>
    <tr>
        <td>Country</td>
        <td> {{ $country_name }}</td>
        <td> {{ $permanent_country_name ?? $country_name }}</td>
    </tr>
    </tbody>
</table>
<div class="page-break"></div>
<!-- disclaimer -->
<h2 class="text-center p-4 mt-4 mb-2">PLEASE CONFIRM THAT THE BELOW COURSE YOU SELECTED</h2>
<table>
    <tr class="col-lg-2">
        <td class="form-label">Sector </td>
        <td class="form-label">Course Level </td>
        <td class="form-label">Course Title </td>
    </tr>
    <tr>
        <td>{{ \App\Models\Sector::find($sector_id)->name }}</td>
        <td>{{ \App\Models\CourseLevel::find($course_level_id)->name }}</td>
        <td>{{ \App\Models\CourseTitle::find($course_title_id )->name }}</td>
    </tr>
</table>
<div class="col-lg-6 mt-4">
    <h4>Terms and conditions:</h4>
    <span>1. The mode of instruction during training will remain as English</span> <br>
    <span>2. The training fee entitles the trainee to participate in teaching and practical
                            classes on all days, reading and writing material and course Completion certificate
                            after successful completion of training.
                        </span><br>
    <span>3. The trainees will also be served refreshment/lunch during the training.
                        </span><br>
    <span>4. Course fees will not be refunded. However, could be rescheduled to next
                            available date/course, if not attended due to unforeseen situation.
                        </span><br>
    <span>5. Transportation and accommodation are not included in the course fees.</span><br>
    <span>6. Visa and any other travel expenses are not included in the course fees.</span>
    <br>
    <!-- checkbox -->
    <div class="form-check mt-4">
        <input type="checkbox" value="" id="flexCheckDefault" checked>
        <label class="form-check-label" for="flexCheckDefault " required="">
            I have read and agree to the Terms and Conditions and Privacy Policy
        </label>
    </div>
</div>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Signature</th>
        <td><img style="height:100px" src="{{ asset('storage/' . $signature) }}" alt="Signature"> </td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Date</th>
        <td>{{ $date }}</td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Time</th>
        <td> {{ $time }}</td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Print Name</th>
        <td> {{ $first_name }} {{ $last_name }}</td>
    </tr>
</table>
<br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Place</th>
        <td> {{ $place }}</td>
    </tr>
</table>

</body>
</html>
