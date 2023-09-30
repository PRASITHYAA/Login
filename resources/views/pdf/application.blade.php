<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers Form pdf</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
    </style>
</head>

<body>
<header>
    <img src="https://tisecon.com/wp-content/uploads/2023/04/NEW-LOGO-FINAL-1.png" alt="Job Site Logo">
</header>
<h2 class="text-center">Career Form Application Acknowledgment</h2>
<h2 class="text-center border-bottom p-4 ">EMPLOYMENT / JOB APPLICATION</h2>
<table>
    <tr>
        <td class="empty-column">Name</td>
        <td class="empty-column">{{ $first_name }} {{ $last_name }} </td>
    </tr>
    <tr>
        <td class="empty-column">Photo Copy</td>
        <td class="empty-column"> <img style="height:100px" src="{{ asset('storage/' . $image) }}" alt="Image"></td>
    </tr>

    <tr>
        <td class="empty-column">SECTOR APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\Sector::find($sector_id)->name }} </td>
    </tr>
    <tr>
        <td class="empty-column">POSITION APPLIED FOR</td>
        <td class="empty-column">{{ \App\Models\Position::find($position_id)->name }} </td>
    </tr>
    @if (count($employmentEmployer))
        @foreach ($employmentEmployer as $emp)
            <tr>
                <td class="empty-column">YEAR OF EXPERIENCE </td>
                <td class="empty-column">{{ $emp['experience'] }}</td>
            </tr>
            <tr>
                <td class="empty-column">PRESENT EMPLOYER </td>
                <td class="empty-column">{{ $emp['name'] }}</td>
            </tr>
        @endforeach
    @endif
    <tr>
        <td class="empty-column">PRESENT SALARY </td>
        <td class="empty-column">{{ $current_salary }}</td>
    </tr>
    <tr>
        <td class="empty-column">SALARY EXPECTED </td>
        <td class="empty-column">{{ $expected_salary }}</td>
    </tr>
    <tr>
        <td class="empty-column">EXPECTED DATE TO JOIN
        </td>
        <td class="empty-column">{{ $expected_date_to_join }}</td>
    </tr>
</table>

<h2 class="text-center border-bottom-4   p-4  mt-3   ">PERSONAL INFORMATION</h2>
<table>
    <thead>
    <tr>
        <th>Description</th>
        <th>First Name</th>
        {{-- <th>Last Name</th> --}}
        <th>Date of Birth <br>
            (YYYY/MM/DD)</th>
        <th>Phone/Mobile</th>
        <th>Photo (Passport Size)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Name</td>
        <td> {{ $first_name }}{{ $last_name }}</td>
        <td>{{ $dob }}</td>
        <td> {{ $phone }}</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $image) }}" alt="Image"></td>
    </tr>
    <tr>
        <td>Father’s Name</td>
        <td> {{ $father_name }}</td>
        <td>{{ $father_date_of_birth }}</td>
        <td> {{ $father_phone }}</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $father_image) }}" alt="Father's Image"></td>

    </tr>
    <tr>
        <td>Mother’s Name</td>
        <td> {{ $mother_name }}</td>
        <td>{{ $mother_date_of_birth }}</td>
        <td>{{ $mother_phone }}</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $mother_image) }}" alt="Mother's Image"></td>

    </tr>
    <tr>
        <td>Spouse Name (If married)</td>
        <td> {{ $spouse_name }}</td>
        <td>{{ $spouse_date_of_birth }}</td>
        <td>{{ $spouse_phone }}</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $spouse_image) }}" alt="Spouse's Image"></td>

    </tr>
    @if ($siblings == 'yes')
        @foreach ($siblingsData as $sib)
            <tr>
                <td>Sibling 1</td>
                <td>{{ $sib['name'] }}</td>
                <td>{{ $sib['dob'] }}</td>
                <td>{{ $sib['phone'] }}</td>
                <td> </td>
            </tr>
            <tr>
                <td>Sibling 2</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Upload</td>
            </tr>
            <tr>
                <td>Sibling 3</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Upload</td>

            </tr>
            <tr>
                <td>Sibling 4</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Upload</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<h2 class="text-center  p-4  mt-3 ">ADDRESS INFORMATION</h2>
<table>
    <thead>
    <tr>
        <th>Description</th>
        <th>Current Address </th>
        <th>Permanent Adress </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> Address</td>
        <td> {{ $address }}</td>
        <td> {{ $permanent_address }}</td>
    </tr>
    <tr>
        <td>Zip Code</td>
        <td> {{ $postal_code }}</td>
        <td>{{ $permanent_postal_code }}</td>
    </tr>

    <tr>
        <td>District</td>
        <td>{{ $city }}</td>
        <td>{{ $permanent_city }}</td>
    </tr>

    <tr>
        <td>State</td>
        <td> {{ $state }}</td>
        <td>{{ $permanent_city }}</td>
    </tr>
    <tr>
        <td>Country</td>
        <td> {{ $country }}</td>
        <td> {{ $permanent_country }}</td>
    </tr>
    <tr>
        <td>Phone/Mobile Number</td>
        <td>{{ $phone }}</td>
        <td></td>
    </tr>
    <tr>
        <td>Alternate Phone/Mobile <br>Number </td>
        <td>{{ $alternative_phone }}</td>
        <td></td>
    </tr>
    </tbody>
</table>
<br>
<h2 style="margin-top: 150px; " class="text-center   mb-5 "> Personal Networks </h2>
<table class="">
    <thead>
    <tr>
        <th>Description</th>
        <th> Communication</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Phone/Mobile Number</td>
        <td> {{ $phone }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td> {{ $email }}</td>
    </tr>
    <tr>
        <td>Facebook address</td>
        <td>{{ $fb_link }}</td>
    </tr>
    <tr>
        <td>Instagram</td>
        <td>{{ $instagram_link }}</td>
    </tr>
    <tr>
        <td>LinkedIn</td>
        <td> {{ $linked_link }}</td>
    </tr>
    </tbody>
</table>
<h2 class="text-center p-4     mt-3 ">Government-Issued Identification Cards (IDs)</h2>
<table>
    <thead>
    <tr>
        <th>ID TYPE </th>
        <th>AADHAR CARD</th>
        <th>PASSPORT</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Name as per IDs</td>
        <td>{{ $aadhar_name }}</td>
        <td>{{ $passport_name }}</td>
    </tr>
    <tr>
        <td>ID's Number</td>
        <td>{{ $aadhar_id_number }}</td>
        <td>{{ $passport_id_number }}</td>
    </tr>
    <tr>
        <td>Issued Date</td>
        <td></td>
        <td>{{ $passport_issue_date }}</td>
    </tr>
    <tr>
        <td>Expired Date</td>
        <td></td>
        <td> {{ $passport_expired_date }}</td>
    </tr>
    <tr>
        <td>Issued Place</td>
        <td>{{ $aadhar_issued_place }}</td>
        <td>{{ $passport_issued_place }}</td>
    </tr>
    <tr>
        <td>State</td>
        <td>{{ $aadhar_issued_state }}</td>
        <td>{{ $passport_issued_state }}</td>
    </tr>
    <tr>
        <td>Country</td>
        <td>{{ $aadhar_issued_country }}</td>
        <td> {{ $passport_issued_country }}</td>
    </tr>
    <tr>
        <td>Upload ID- 1st Page</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $aadhar_image) }}" alt="Aadhar Image"></td>
        <td> <img style="height:100px" src="{{ asset('storage/' . $passport_image_id) }}" alt="Passport Image"></td>
    </tr>
    <tr>
        <td>Upload ID- 2st Page</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $aadhar_image_page) }}" alt="Aadhar Image Page"></td>
        <td><img style="height:100px" src="{{ asset('storage/' . $passport_image_id_page) }}" alt="Aadhar Image Page"></td>
    </tr>
    </tbody>
</table>
<h2 style="margin-top: 110px" class="text-center mb-5 ">Education</h2>
<!-- education -->
<table>
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">High School</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Institution Name</td>
        <td>{{ $high_school_name }}</td>
    </tr>
    <tr>
        <td>Town/City</td>
        <td>{{ $high_school_city }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $high_school_address }}</td>
    </tr>
    <tr>
        <td>From Date (YYYY/MM/DD)</td>
        <td>{{ $high_school_form_date }}</td>
    </tr>
    <tr>
        <td>To Date(YYYY/MM/DD)</td>
        <td>{{ $high_school_to_date }}</td>
    </tr>
    <tr>
        <td>Year of Passing
            (YYYY/MM/DD) </td>
        <td>{{ $high_school_year_of_passing }}</td>
    </tr>
    <tr>
        <td>GPA/Percentage<br>(in %)</td>
        <td>{{ $high_school_percentage }}</td>
    </tr>
    <tr>
        <td>Class</td>
        <td>{{ $high_school_class }}</td>
    </tr>
    <tr>
        <td>Curriculum </td>
        <td>{{ $high_school_stream }}</td>
    </tr>
    <tr>
        <td>Upload Certificate</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $high_school_image_certificate) }}" alt="High School Image Certificate"></td>
    </tr>
    <tr>
        <td>Upload Mark Sheet</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $high_school_image_mark_sheet) }}" alt="High School Image Mark Sheet"></td>
    </tr>
    </tbody>
</table>

<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <th
            style="border: 1px solid black; padding: 10px; text-align: left; width: 50%; background-color: #f0f0f0;">
            Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Higher Secondary</th>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Institution Name</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_institution_name }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Town/City</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_city }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Address</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_address }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> From Date (YYYY/MM/DD)
        </td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_form_date }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> TO Date (YYYY/MM/DD)</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_to_date }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Year of Passing
            (YYYY/MM/DD) </td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_year_of_passing }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> GPA/Percentage(in %)</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_percentage }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Filed of Specialization</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_stream }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Filed of Interest</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            {{ $higher_secondary_filed_of_interest }}</td>
    </tr>

    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Upload Certificate</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            <img style="height:100px" src="{{ asset('storage/' . $higher_secondary_image_certificate) }}" alt="Higher Secondary  Certificate"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Upload Mark Sheet</td>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">
            <img style="height:100px" src="{{ asset('storage/' . $higher_secondary_image_mark_sheet) }}" alt="Higher Secondary  Mark Sheet"></td>
    </tr>


</table>

<table>
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Diploma</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Institution Name</td>
        <td>{{ $diploma_institution_name }}</td>
    </tr>
    <tr>
        <td>Town/City</td>
        <td>{{ $diploma_city }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $diploma_address }}</td>
    </tr>
    <tr>
        <td>From Date (YYYY/MM/DD)</td>
        <td>{{ $diploma_form_date }}</td>
    </tr>
    <tr>
        <td>To Date
            (YYYY/MM/DD)</td>
        <td>{{ $diploma_to_date }}</td>
    </tr>
    <tr>
        <td>Year of Passing
            (YYYY/MM/DD) </td>
        <td>{{ $diploma_year_of_passing }}</td>
    </tr>
    <tr>
        <td>GPA/Percentage (in %)</td>
        <td>{{ $diploma_percentage }}</td>
    </tr>
    <tr>
        <td>Class</td>
        <td>{{ $diploma_course }}</td>
    </tr>
    <tr>
        <td>Filed of Specialization</td>
        <td>{{ $diploma_major }}</td>
    </tr>
    <tr>
        <td>Filed of Interest</td>
        <td>{{ $diploma_filed_of_interest }}</td>
    </tr>
    <tr>
        <td>Upload Certificate</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $diploma_image_certificate) }}" alt="Diploma Image Certificate"></td>
    </tr>
    <tr>
        <td>Upload Mark Sheet</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $diploma_image_mark_sheet) }}" alt="Diploma Image Mark Sheet"></td>
    </tr>
    </tbody>
</table>
<table>
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Bachelor’s Degree</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Institution Name</td>
        <td>{{ $bachelors_institution_name }}</td>
    </tr>
    <tr>
        <td>Town/City</td>
        <td>{{ $bachelors_city }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $bachelors_address }}</td>
    </tr>
    <tr>
        <td>From Date(YYYY/MM/DD)</td>
        <td>{{ $bachelors_form_date }}</td>
    </tr>
    <tr>
        <td>To Date
            (YYYY/MM/DD)</td>
        <td>{{ $bachelors_to_date }}</td>
    </tr>
    <tr>
        <td>Year of Passing
            (YYYY/MM/DD) </td>
        <td>{{ $bachelors_year_of_passing }}</td>
    </tr>
    <tr>
        <td>GPA/Percentage(in %)</td>
        <td>{{ $bachelors_percentage }}</td>
    </tr>
    <tr>
        <td>Class</td>
        <td>{{ $bachelors_course }}</td>
    </tr>
    <tr>
        <td>Filed of Specialization</td>
        <td>{{ $bachelors_major }}</td>
    </tr>
    <tr>
        <td>Filed of Interest</td>
        <td> {{ $bachelors_filed_of_interest }}
    </tr>
    <tr>
        <td>Upload Certificate</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $bachelors_image_certificate) }}" alt="Bachelors Image Certificate"></td>
    </tr>
    <tr>
        <td>Upload Mark Sheet</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $bachelors_image_mark_sheet) }}" alt="Bachelors Image Mark Sheet"></td>
    </tr>
    </tbody>
</table>
<table>
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;"> Master’s Degree</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Institution Name</td>
        <td>{{ $master_institution_name }}</td>
    </tr>
    <tr>
        <td>Town/City</td>
        <td>{{ $master_city }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $master_address }}</td>
    </tr>
    <tr>
        <td>From Date<br> (YYYY/MM/DD)</td>
        <td>{{ $master_from_date }}</td>
    </tr>
    <tr>
        <td>To Date
            (YYYY/MM/DD)</td>
        <td>{{ $master_to_date }}</td>
    </tr>
    <tr>
        <td>Year of Passing
            (YYYY/MM/DD) </td>
        <td>{{ $master_years_of_passing }}</td>
    </tr>
    <tr>
        <td>GPA/Percentage(in %)</td>
        <td>{{ $master_percentage }}</td>
    </tr>
    <tr>
        <td>Class</td>
        <td>{{ $master_class }}</td>
    </tr>
    <tr>
        <td>Filed of Specialization</td>
        <td>{{ $master_filed_of_specialization }}</td>
    </tr>
    <tr>
        <td>Filed of Interest</td>
        <td>{{ $master_filed_of_interest }}</td>
    </tr>
    <tr>
        <td>Upload Certificate</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $master_image_certificate) }}" alt="Master's Image Certificate"></td>
    </tr>
    <tr>
        <td>Upload Mark Sheet</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $master_image_mark_sheet) }}" alt="Master's Image Mark Sheet"></td>
    </tr>
    </tbody>
</table>
<table>
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Description</th>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 50%;">Doctorate</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Institution Name</td>
        <td>{{ $doctorate_name }}</td>
    </tr>
    <tr>
        <td>Town/City</td>
        <td>{{ $doctorate_city }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $doctorate_address }}</td>
    </tr>
    <tr>
        <td>From Date(YYYY/MM/DD)</td>
        <td>{{ $doctorate_from_date }}</td>
    </tr>
    <tr>
        <td>To Date (YYYY/MM/DD)</td>
        <td>{{ $doctorate_to_date }}</td>
    </tr>
    <tr>
        <td>Year of Passing (YYYY/MM/DD) </td>
        <td>{{ $doctorate_year_of_passing }}</td>
    </tr>
    <tr>
        <td>GPA/Percentage(in %)</td>
        <td>{{ $doctorate_percentage }}</td>
    </tr>
    <tr>
        <td>Class</td>
        <td>{{ $doctorate_class }}</td>
    </tr>
    <tr>
        <td>Filed of Specialization</td>
        <td>{{ $doctorate_filed_of_specialization }}</td>
    </tr>
    <tr>
        <td>Filed of Interest</td>
        <td>{{ $doctorate_filed_of_interest }}</td>
    </tr>
    <tr>
        <td>Upload Certificate</td>
        <td> <img style="height:100px" src="{{ asset('storage/' . $doctorate_image_certificate) }}"alt="Doctorate Image Certificate"></td>
    </tr>
    <tr>
        <td>Upload Mark Sheet</td>
        <td><img style="height:100px" src="{{ asset('storage/' . $doctorate_image_mark_sheet) }}"alt="Doctorate Image Mark Sheet"></td>
    </tr>
    </tbody>
</table>

<!-- emplyment -->

<h2 class="text-center p-4  mt-4 ">PREVIOUS EMPLOYMENT</h2>
<table>
    <thead>
    <tr>
        <th>Description</th>
        <th>EMPLOYER 1</th>
        <th>EMPLOYER 2</th>
        <th>EMPLOYER 3</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Company / Individual</td>
        <td> {{ $emp['name'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>E-MAIL</td>
        <td>{{ $emp['email'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td> Address</td>
        <td> {{ $emp['address'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $emp['phone'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Job Title</td>
        <td>{{ $emp['job_title'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>From date (YYYY/MM/DD)</td>
        <td>{{ $emp['from_date'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>To date (YYYY/MM/DD)</td>
        <td>{{ $emp['to_date'] }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Responsibilities</td>
        <td>{{ $emp['responsibilities'] }}</td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>

<h2 class="text-center p-4     mt-4 ">REFERENCES- (PROFESSIONAL ONLY)</h2>
@if (count($employmentReference))
    @foreach ($employmentReference as $ref)
        <table>
            <thead>
            <tr>
                <th>Description</th>
                <th>EMPLOYER</th>
            </tr>
            </thead>
            <tr>
                <td>Name</td>
                <td>{{ $ref['name'] }}</td>
            </tr>
            <tr>
                <td>Company</td>
                <td> {{ $ref['company'] }} </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>{{ $ref['position'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{ $ref['email'] }}</td>
            </tr>
            <tr>
                <td>Phone/Mobile Number</td>
                <td>{{ $ref['phone'] }}</td>
            </tr>
        </table>
    @endforeach
@endif

<h2 class="text-center p-4  mt-4 ">EMPLOYMENT ELIGIBILITY</h2>
<table>

    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">Are You Legally<br>
            Eligible to Work?</td>
        <td>{{ $eligible_to_work }}</td>
    </tr>
    <tr>
        <th>If No,Explanation</th>
        <td>{{ $eligible_to_work_text }}</td>
    </tr>
</table>
<table>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">
            Have You Ever Worked<br> for This Employer?</td>
        <td>{{ $crime_status }}</td>
    </tr>
    <tr>
        <th>If Yes,Explanation </th>
        <td>{{ $crime_status_text }}</td>
    </tr>
</table>

<!-- acheviment -->

<h2 class="text-center p-4     mt-4 ">ACHIEVEMENTS, PERSONAL QUALITIES, AND SKILLS</h2>
<table>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">List out your
            Acheivements
            here
        </th>
        <td>{{ $achievement }}</td>
    </tr>
</table>
<h2 class="text-center p-4  ">CURRICULUM VITAE</h2>
<table>
    <tbody>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">Have you been
            published
            any conference papers/attended conferences?
        </td>
        <td>{{ $conference_status }}</td>
    </tr>
    <tr>
        <th>Conference</th>
        <td>{{ $conference }}</td>
    </tr>
    </tbody>
</table>
<h2 class="text-center p-4  ">FINAL YEAR PROJECT</h2>
<table>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">Do you worked on any
            final
            year projects?
        </td>
        <td>{{ $final_year_project_status }}</td>
    </tr>
    <tr>
        <th>Final Year Projects</th>
        <td>{{ $final_year_project }}</td>
    </tr>
    <tr>
        <th> All Your Project Documents </th>
        <td>{{ $project_document }}</td>
    </tr>
</table>
<h2 class="text-center p-4  "> CO-CURRICULAR, EXTRA-CURRICULAR SKILLS</h2>
<table>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">Co-Curricular/Extra
            Curricular
        </td>
        <td>{{ $extra_curricular_skills }}</td>
    </tr>
    <tr>
        <th>Curricular/Extracurricular Certificate </th>
        <td>{{ $extra_curricular_skills_project_document }}</td>
    </tr>
</table>
<h2 class="text-center p-4  ">CURRICULUM VITAE</h2>
<table>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">Are You willing to Attach
            Your Curriculum Vitae? </td>
        <td>{{ $curriculum_status }}</td>
    </tr>
    <tr>
        <th style="border: 1px solid black; padding: 10px; text-align: left; width: 70%;">If Yes,Resume </th>
        <td>{{ $yes_curriculum_pdf_format }}</td>
    </tr>
</table>
<table>
    <tr>
        <td style="border: 1px solid black; padding: 10px; text-align: left; width: 30%;">
            Are You Willing to Consent to a Background Check?</td>
        <td>{{ $background_check_status }}</td>
    </tr>
    <tr>
        <th>If No,Explanation </th>
        <td>{{ $no_curriculum_explain }}</td>
    </tr>
</table>
<!-- disclaimer -->
<h2 class="text-center p-4     mt-4 mb-2">DISCLAIMER </h2>

<p>Applicant understands that this is an Equal Opportunity Employer and is committed to excellence through
    diversity. In order to ensure this application is acceptable, please print or type the application that is fully
    completed in order forit to be considered.</p>

<p>Please complete each section EVEN IF you decide to attach a resume.</p>

<p>I, the Applicant, certify that my answers are true and honest to the best of my knowledge. If this
    application leads to my eventual employment, I understand that any false or misleading information in my
    application or interview may result in my employment being terminated</p>


<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Signature</th>
        <td><img style="height:100px" src="{{ asset('storage/' . $disclaimer_signature) }}" alt="Signature"> </td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Date</th>
        <td>{{ $disclaimer_date }}</td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Time</th>
        <td> {{ $disclaimer_time }}</td>
    </tr>
</table><br>
<table>
    <tr>
        <th style="border: 1px solid black; width: 30%;">Place</th>
        <td> {{ $disclaimer_place }}</td>
    </tr>
</table>
