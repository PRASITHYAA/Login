<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Acknowledgment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header img {
            max-width: 150px;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li strong {
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<header>
    <img src="https://tisecon.com/wp-content/uploads/2023/04/NEW-LOGO-FINAL-1.png" alt="Job Site Logo">
</header>
<h1>Job Application Acknowledgment</h1>

<h2>Personal Information</h2>
<ul>
    <li><strong>Sector:</strong> {{ $sector }}</li>
    <li><strong>Position:</strong> {{ $position }}</li>
    <li><strong>First Name:</strong> {{ $first_name }}</li>
    <li><strong>Last Name:</strong> {{ $last_name }}</li>
    <li><strong>Date of Birth:</strong> {{ $dob }}</li>
    <li><strong>Age:</strong> {{ $age }}</li>
    <li><strong>Country:</strong> {{ $country }}</li>
    <li><strong>State:</strong> {{ $state }}</li>
    <li><strong>City:</strong> {{ $city }}</li>
    <li><strong>Address:</strong> {{ $address }}</li>
    <li><strong>Postal Code:</strong> {{ $postal_code }}</li>
    <li><strong>Phone:</strong> {{ $phone }}</li>
    <li><strong>Alternative Phone:</strong> {{ $alternative_phone }}</li>
    <li><strong>Email:</strong> {{ $email }}</li>
    <li><strong>Facebook Link:</strong> {{ $fb_link }}</li>
    <li><strong>Instagram Link:</strong> {{ $instagram_link }}</li>
    <li><strong>LinkedIn Link:</strong> {{ $linked_link }}</li>
</ul>
<h2>Permanent Address</h2>
<ul>
    <li><strong>Permanent Address Input:</strong> {{ $permanent_address_input }}</li>
    <li><strong>Permanent City:</strong> {{ $permanent_city }}</li>
    <li><strong>Permanent Postal Code:</strong> {{ $permanent_postal_code }}</li>
    <li><strong>Permanent Phone:</strong> {{ $permanent_phone }}</li>
    <li><strong>Permanent Country:</strong> {{ $permanent_country }}</li>
    <li><strong>Permanent Address:</strong> {{ $permanent_address }}</li>
</ul>

<h2>Father Information</h2>
<ul>
    <li><strong>Father Name:</strong> {{ $father_name }}</li>
    <li><strong>Father Date of Birth:</strong> {{ $father_date_of_birth }}</li>
    <li><strong>Father Phone:</strong> {{ $father_phone }}</li>
    <li><strong>Father Image:</strong> <img src="{{ $father_image }}" alt="Father's Image"></li>
</ul>

<h2>Mother Information</h2>
<ul>
    <li><strong>Mother Name:</strong> {{ $mother_name }}</li>
    <li><strong>Mother Date of Birth:</strong> {{ $mother_date_of_birth }}</li>
    <li><strong>Mother Phone:</strong> {{ $mother_phone }}</li>
    <li><strong>Mother Image:</strong> <img src="{{ $mother_image }}" alt="Mother's Image"></li>
</ul>

<h2>Marital Status</h2>
<ul>
    <li><strong>Marital Status:</strong> {{ $marital_status }}</li>
    <li><strong>Spouse Name:</strong> {{ $spouse_name }}</li>
    <li><strong>Spouse Date of Birth:</strong> {{ $spouse_date_of_birth }}</li>
    <li><strong>Spouse Email:</strong> {{ $spouse_email }}</li>
    <li><strong>Spouse Phone:</strong> {{ $spouse_phone }}</li>
    <li><strong>Spouse Image:</strong> <img src="{{ $spouse_image }}" alt="Spouse's Image"></li>
</ul>
<h2>Siblings Information</h2>
<ul>
    <li><strong>Siblings:</strong> {{ $siblings }}</li>
    <li><strong>Siblings Name:</strong> {{ $siblings_name }}</li>
    <li><strong>Siblings Date of Birth:</strong> {{ $siblings_date_of_birth }}</li>
    <li><strong>Siblings Email:</strong> {{ $siblings_email }}</li>
    <li><strong>Siblings Phone:</strong> {{ $siblings_phone }}</li>
    <!-- Add more sibling information fields here -->
</ul>

<!-- Aadhar Information -->
<h2>Aadhar Information</h2>
<ul>
    <li><strong>Name (Aadhar):</strong> {{ $aadhar_name }}</li>
    <li><strong>Aadhar ID Number:</strong> {{ $aadhar_id_number }}</li>
    <li><strong>Issued Country:</strong> {{ $aadhar_issued_country }}</li>
    <li><strong>Issued State:</strong> {{ $aadhar_issued_state }}</li>
    <li><strong>Issued Place:</strong> {{ $aadhar_issued_place }}</li>
    <li><strong>Aadhar Image:</strong> <img src="{{ $aadhar_image }}" alt="Aadhar Image"></li>
    <li><strong>Aadhar Image (Page):</strong> <img src="{{ $aadhar_image_page }}" alt="Aadhar Image Page"></li>
</ul>

<!-- Passport Information -->
<h2>Passport Information</h2>
<ul>
    <li><strong>Name (Passport):</strong> {{ $passport_name }}</li>
    <li><strong>Passport ID Number:</strong> {{ $passport_id_number }}</li>
    <li><strong>Issue Date:</strong> {{ $passport_issue_date }}</li>
    <li><strong>Expiration Date:</strong> {{ $passport_expired_date }}</li>
    <li><strong>Issued Country:</strong> {{ $passport_issued_country }}</li>
    <li><strong>Issued State:</strong> {{ $passport_issued_state }}</li>
    <li><strong>Issued Place:</strong> {{ $passport_issued_place }}</li>
    <li><strong>Passport Image ID:</strong> {{ $passport_image_id }}</li>
    <li><strong>Passport Image ID (Page):</strong> {{ $passport_image_id_page }}</li>
</ul>

<!-- Diploma Information -->
<h2>Diploma Information</h2>
<ul>
    <li><strong>Institution Name (Diploma):</strong> {{ $diploma_institution_name }}</li>
    <li><strong>City:</strong> {{ $diploma_city }}</li>
    <li><strong>Address:</strong> {{ $diploma_address }}</li>
    <li><strong>From Date:</strong> {{ $diploma_form_date }}</li>
    <li><strong>To Date:</strong> {{ $diploma_to_date }}</li>
    <li><strong>Year of Passing:</strong> {{ $diploma_year_of_passing }}</li>
    <li><strong>Percentage:</strong> {{ $diploma_percentage }}</li>
    <li><strong>Course:</strong> {{ $diploma_course }}</li>
    <li><strong>Major:</strong> {{ $diploma_major }}</li>
    <li><strong>Field of Interest:</strong> {{ $diploma_filed_of_interest }}</li>
    <li><strong>Image Certificate:</strong> <img src="{{ $diploma_image_certificate }}" alt="Diploma Image Certificate"></li>
    <li><strong>Image Mark Sheet:</strong> <img src="{{ $diploma_image_mark_sheet }}" alt="Diploma Image Mark Sheet"></li>
</ul>

<!-- Bachelors Information -->
<h2>Bachelors Information</h2>
<ul>
    <li><strong>Institution Name (Bachelors):</strong> {{ $bachelors_institution_name }}</li>
    <li><strong>City:</strong> {{ $bachelors_city }}</li>
    <li><strong>Address:</strong> {{ $bachelors_address }}</li>
    <li><strong>From Date:</strong> {{ $bachelors_form_date }}</li>
    <li><strong>To Date:</strong> {{ $bachelors_to_date }}</li>
    <li><strong>Year of Passing:</strong> {{ $bachelors_year_of_passing }}</li>
    <li><strong>Percentage:</strong> {{ $bachelors_percentage }}</li>
    <li><strong>Course:</strong> {{ $bachelors_course }}</li>
    <li><strong>Major:</strong> {{ $bachelors_major }}</li>
    <li><strong>Field of Interest:</strong> {{ $bachelors_filed_of_interest }}</li>
    <li><strong>Image Certificate:</strong> <img src="{{ $bachelors_image_certificate }}" alt="Bachelors Image Certificate"></li>
    <li><strong>Image Mark Sheet:</strong> <img src="{{ $bachelors_image_mark_sheet }}" alt="Bachelors Image Mark Sheet"></li>
</ul>
<!-- Master's Information -->
<h2>Master's Information</h2>
<ul>
    <li><strong>Institution Name (Master's):</strong> {{ $master_institution_name }}</li>
    <li><strong>City:</strong> {{ $master_city }}</li>
    <li><strong>Address:</strong> {{ $master_address }}</li>
    <li><strong>From Date:</strong> {{ $master_from_date }}</li>
    <li><strong>To Date:</strong> {{ $master_to_date }}</li>
    <li><strong>Years of Passing:</strong> {{ $master_years_of_passing }}</li>
    <li><strong>Percentage:</strong> {{ $master_percentage }}</li>
    <li><strong>Class:</strong> {{ $master_class }}</li>
    <li><strong>Field of Specialization:</strong> {{ $master_filed_of_specialization }}</li>
    <li><strong>Field of Interest:</strong> {{ $master_filed_of_interest }}</li>
    <li><strong>Image Certificate:</strong> <img src="{{ $master_image_certificate }}" alt="Master's Image Certificate"></li>
    <li><strong>Image Mark Sheet:</strong> <img src="{{ $master_image_mark_sheet }}" alt="Master's Image Mark Sheet"></li>
</ul>

<!-- Doctorate Information -->
<h2>Doctorate Information</h2>
<ul>
    <li><strong>Name (Doctorate):</strong> {{ $doctorate_name }}</li>
    <li><strong>City:</strong> {{ $doctorate_city }}</li>
    <li><strong>Address:</strong> {{ $doctorate_address }}</li>
    <li><strong>From Date:</strong> {{ $doctorate_from_date }}</li>
    <li><strong>To Date:</strong> {{ $doctorate_to_date }}</li>
    <li><strong>Year of Passing:</strong> {{ $doctorate_year_of_passing }}</li>
    <li><strong>Percentage:</strong> {{ $doctorate_percentage }}</li>
    <li><strong>Class:</strong> {{ $doctorate_class }}</li>
    <li><strong>Field of Specialization:</strong> {{ $doctorate_filed_of_specialization }}</li>
    <li><strong>Field of Interest:</strong> {{ $doctorate_filed_of_interest }}</li>
    <li><strong>Image Certificate:</strong> <img src="{{ $doctorate_image_certificate }}" alt="Doctorate Image Certificate"></li>
    <li><strong>Image Mark Sheet:</strong> <img src="{{ $doctorate_image_mark_sheet }}" alt="Doctorate Image Mark Sheet"></li>
</ul>
<!-- Experience Information -->
<h2>Experience Information</h2>
<ul>
    <li><strong>Company:</strong> {{ $employer_company }}</li>
    <li><strong>Email:</strong> {{ $employer_email }}</li>
    <li><strong>Address:</strong> {{ $employer_address }}</li>
    <li><strong>Phone:</strong> {{ $employer_phone }}</li>
    <li><strong>Job Title:</strong> {{ $employer_job_title }}</li>
    <li><strong>From Date:</strong> {{ $employer_from_date }}</li>
    <li><strong>To Date:</strong> {{ $employer_to_date }}</li>
    <li><strong>Experience:</strong> {{ $employer_experience }}</li>
    <li><strong>Responsibilities:</strong> {{ $employer_responsibilities }}</li>
</ul>

<!-- Reference Information -->
<h2>Reference Information</h2>
<ul>
    <li><strong>Name (Reference):</strong> {{ $reference_name }}</li>
    <li><strong>Company:</strong> {{ $reference_company }}</li>
    <li><strong>Position:</strong> {{ $reference_position }}</li>
    <li><strong>Email:</strong> {{ $reference_email }}</li>
    <li><strong>Phone:</strong> {{ $reference_phone }}</li>
    <!-- Note: You have 'reference_phone' listed twice in the PHP variables; you may want to correct this if it's not intentional. -->
</ul>
<!-- Achievement -->
<h2>Achievement</h2>
<p>{{ $achievement }}</p>

<!-- Open Input and Conference -->
<h2>Open Input and Conference</h2>
<ul>
    {{--<li><strong>Open Input:</strong> {{ $open-input }}</li>--}}
    <li><strong>Conference:</strong> {{ $Conference }}</li>
</ul>

<!-- Open Input 2 and Final Year Project -->
<h2>Open Input 2 and Final Year Project</h2>
<ul>
    {{--<li><strong>Open Input 2:</strong> {{ $open-input-2 }}</li>--}}
    <li><strong>Final Year Project:</strong> {{ $final_year_project }}</li>
</ul>

<!-- Project Document -->
<h2>Project Document</h2>
<p>{{ $project_document }}</p>

<!-- Extra Curricular Skills -->
<h2>Extra Curricular Skills</h2>
<p>{{ $extra_curricular_skills }}</p>

<!-- Extra Curricular Skills Project Document -->
<h2>Extra Curricular Skills Project Document</h2>
<p>{{ $extra_curricular_skills_project_document }}</p>

<!-- Curriculum PDF Format -->
<h2>Curriculum PDF Format</h2>
<p>{{ $yes_curriculum_pdf_format }}</p>

<!-- No Curriculum Explain -->
<h2>No Curriculum Explain</h2>
<p>{{ $no_curriculum_explain }}</p>
<!-- You can add more sections for permanent address, father, mother, marital status, siblings, etc. -->

<h2>Disclaimer</h2>
<p>
    I acknowledge that the information provided in this job application is accurate and complete to the best of my knowledge. I understand that any false statements or omissions may result in disqualification from employment or termination if employed.
</p>

<p>
    <strong>Signature:</strong> {{ $disclaimer_signature }}
</p>
<p>
    <strong>Date:</strong> {{ $disclaimer_date }}
</p>
<p>
    <strong>Time:</strong> {{ $disclaimer_time }}
</p>
<p>
    <strong>Print Name:</strong> {{ $disclaimer_print_name }}
</p>
<p>
    <strong>Place:</strong> {{ $disclaimer_place }}
</p>
</body>
</html>
