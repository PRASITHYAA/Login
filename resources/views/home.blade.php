@extends('layouts.front.master')
@section('content')
    <!-- percentage -->
    <div class="container mt-2">
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
    {{-- <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <p>Hi {{ auth()->user()->name }},</p>
                    <p>Welcome to TISE Job Application Dashboard!</p>
                    <p>We're thrilled to have you here on your journey to career success. This personalized dashboard is
                        your central hub for managing your job applications, exploring exciting opportunities, and
                        fine-tuning your job search.</p>
                    <a href="{{ route('job_application') }}">Apply For a Job</a>
                </div>
            </div>
        </div>


    </div> --}}
    <div class="container-fluid careers-back-img">

        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2 ">
                <h1 style="color  : white;display: flex;justify-content: center;align-items: center; padding-top: 150px;">
                    Careers</h1>
            </div>
            <div class="col-lg-4">

            </div>
            <div style="display: flex;align-items: center;justify-content: center;padding-top: 150px;" class="col-lg-2">
                <a style="text-decoration: none;font-weight: bold;color: white;font-size: 20px;padding-right: 20px;"
                    href="">Home</a>
                <i class="fa-regular fa-circle-right" style="color: yellow;"></i>
                <span style="color:white ;font-weight: bold;font-size: 20px;padding-left: 10px;"> Careers</span>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 style="font-weight: bold;display: flex;justify-content: center;padding-top: 38px;">Grow With TISE</h3>

        <p style="padding-top: 10px;" class="text-center">Join our team at TISE! With a commitment to investing in our
            employees’ growth and development, you’ll work on challenging projects and gain valuable experience. <br>
            <span style="padding-bottom: 28px;" class="text-center"> Browse our open positions and apply now.</span>
        </p>

    </div>

    <div class="container-fluid">
        <div class="container  ">
            <h3 style="font-weight: bold;display: flex;justify-content: start;padding-top: 38px;">Information Technology
            </h3>
        </div>
        <div class="container border">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="row py-3 px-3">
                    <div class="col-lg-10">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    style="background-color:rgb(212, 149, 31);color: black;font-weight: bold;"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Financial Advisor

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse none"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    ₹ 10,000/- to 15,000/-
                                    <br>
                                    Experience: 2 Years to 3 Years

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a style="color: white; display: flex ;justify-content: center;align-items: end;padding: 13PX; text-decoration: none ;"
                            type="button" class=" btn01 text-center" href="./instruction.html">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
