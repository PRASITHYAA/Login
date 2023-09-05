<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font acome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- mdb -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <style>
        body {
            overflow-x: hidden;
        }

        .left-02 {
            background-color: #ebc789;
            height: calc(d-lg-block);
        }

        .btn-00 {
            font-weight: bold;
            border-radius: 40px;
            border: none;
        }

        .btn-00:hover {
            background-color: #111c3a;
            color: white;
        }

        .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }

        .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }

        .nav-bg {
            background-color: #bf9855;
            color: black;
        }
    </style>


    <div class="container-fluid">
        <div class="container ">
            {{-- error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- success --}}

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">
                <div>
                    <label>
                        <input type="radio" name="radio_option" value="yes" onclick="showCheckboxes()"> Yes
                    </label>
                    <label>
                        <input type="radio" name="radio_option" value="no" onclick="hideCheckboxes()"> No
                    </label>
                </div>

                <div id="checkboxes" style="display: none;">

                    <!-- High School -->
                    <input type="checkbox" onchange="toggleForm('form1')" name="qualification" value="high_school">
                    High School
                    <div id="form1" style="display: none;">
                        <h4>
                            High School
                        </h4>
                        <!-- High school Institution Name -->
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label ">Institution Name <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control qualification" placeholder="Institution Name" id="high_school_name"
                                    name="high_school_name">
                            </div>
                            <!-- High school City -->
                            <div class="col-lg-2">
                                <label class="form-label">Town/City <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    class="form-control qualification" placeholder="Town/City" id="high_school_city"
                                    name="high_school_city">
                            </div>
                        </div>
                    </div>
                </div>
                <button>save</button>
            </form>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function () {
                    // Function to show checkboxes
                    function showCheckboxes() {
                        $('#checkboxes').show();
                    }

                    // Function to hide checkboxes and form1
                    function hideCheckboxes() {
                        $('#checkboxes').hide();
                        $('#form1').hide();
                    }

                    // Function to toggle form1 based on checkbox selection
                    function toggleForm1() {
                        $('#form1').toggle();
                    }

                    // Handle radio button click events
                    $('input[name="radio_option"]').on('change', function () {
                        if ($(this).val() === 'yes') {
                            showCheckboxes();
                        } else {
                            hideCheckboxes();
                        }
                    });

                    // Handle checkbox change event
                    $('input[name="qualification"]').on('change', function () {
                        if ($(this).is(':checked')) {
                            toggleForm1();
                        }
                    });
                });
            </script>


