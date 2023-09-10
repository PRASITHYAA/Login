@extends('layouts.front.master')

@section('content')
    <div class="container mt-2">
        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Display success message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="container-fluid careers-back-img">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <h1 class="text-center text-white" style="padding-top: 150px;">Careers</h1>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-2 d-flex align-items-center justify-content-center" style="padding-top: 150px;">
                <a href="#" class="text-decoration-none font-weight-bold text-white" style="font-size: 20px;">
                    Home
                </a>
                <i class="fa-regular fa-circle-right text-warning" style="font-size: 20px;"></i>
                <span class="font-weight-bold text-white" style="font-size: 20px;">Careers</span>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="text-center font-weight-bold mt-4">Grow With TISE</h3>
        <p class="text-center">
            Join our team at TISE! With a commitment to investing in our employees’ growth and development, you’ll work on
            challenging projects and gain valuable experience.
            <br>
            <span class="font-weight-bold">Browse our open positions and apply now.</span>
        </p>
    </div>

    <div class="container-fluid">
        @php
            $sectors = \App\Models\Sector::with('positions')->get();
        @endphp

        @foreach ($sectors as $sector)
            <div class="container mt-4 px-4">
                <h3 class="font-weight-bold">{{ $sector->name }}</h3>
            </div>

            <div class="container border">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach ($sector->positions as $position)
                        <div class="row py-3 px-3">
                            <div class="col-lg-10">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading-{{ $position->id }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapse-{{ $position->id }}"
                                                style="background-color:#bf9855;color: black;font-weight: bold;"
                                                aria-expanded="false">

                                                {{ $position->name }}
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-{{ $position->id }}" class="accordion-collapse collapse none"
                                         aria-labelledby="panelsStayOpen-heading-{{ $position->id }}">
                                        <div class="accordion-body">
                                            <!-- Add content for the accordion panel here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                               <a href="{{ route('career.instruction', ['sector_id' => $sector->id, 'position_id' => $position->id]) }}" class="btn btn-warning text-center"
                                   style="display: flex; justify-content: center; align-items: flex-end; padding: 14px; text-decoration: none; color: white; height: 50px; font-weight: bold; background-color:#bf9855  ">
                                    Apply Now
                                </a>
                                {{-- <a href="{{ route('', $position->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
