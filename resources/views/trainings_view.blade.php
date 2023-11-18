@extends('layouts.front.master')

@section('content')
    <!-- main -->
    <div class="container-fluid">
        <!-- back-img -->
        <div class="container-fluid  careers-back-img">

            <h1 style="padding-top: 75px; color: white;" class="text-center">Sector: {{ $courseTitle->sector->name }}</h1>
            <h4 style=" padding-top: 10px; color: white;" class="text-center">Course Title: {{ $courseTitle->name }}</h4>
            <h4 style=" padding-top: 10px; color: white;" class="text-center">CODE: {{ $courseTitle->course_code }}</h4>
            <h4 style=" padding-top: 10px; padding-bottom: 75px; color: white;" class="text-center">{{ $courseTitle->course_location }}
                | Registration Fee: ₹{{ $courseTitle->course_registration_fee }}</h4>
<!-- <button class="text-center">thr</button> -->
        </div>
        <!-- forms -->
    </div>
    <!-- total folder -->
    <div class="container">
        <div class="row">
            <!-- 1 coloum -->
            <div  class="col-lg-8">

                <div style="width: 100%; padding-left: 50px;" class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-floppy-disk pb-4 "></i>

                    <h2 class="head-gold">Workshop Description</h2>
                    <p>{!! $courseTitle->course_description !!}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end; color: white;" class="fa-solid fa-floppy-disk  "></i>
                </div>
                <!-- 2 box -->
                <div style=" width: 100%; padding-left: 50px; " class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-user-group pb-4 "></i>

                    <h2 class="head-gold">Who Should Attend</h2>
                    <p>{!! $courseTitle->course_description !!}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end;;color: white;;" class="fa-solid fa-user-group  "></i>
                </div>
                <!-- box-3 -->
                <div style=" width: 100%; padding-left: 50px; " class="border 4px solid mt-4 pt-4 hai ">
                    <i style="font-size: 50px;" class="fa-regular fa-circle-check  pb-4 "></i>
                    <h2 class="head-gold">Prerequisites</h2>
                    <p>{!! $courseTitle->eligible_to_participate !!}</p>
                    <i style="font-size: 90px; display: flex;justify-content: end;color: white;" class="fa-regular fa-circle-check  "></i>

                </div>

            </div>
            <!-- 2 coloum   right-->
            <div class="col-lg-4">
                <!-- date -->
                <div style="width: 100%; " class="border 4px solid text-center mt-5  pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-calendar-days pb-4 "></i>
                    <h5 class="head-gold">Date & Time / Duration</h5>
                    <p>{{ $courseTitle->from_date. ' - '. $courseTitle->to_date }} </p>
                    <p>{{ ' At '. $courseTitle->time }}</p>
                    <p>{{ 'Duration : '.$courseTitle->duration }}</p>
                    <i style="font-size: 70px;display: flex;justify-content: end;color: white;" class="fa-solid fa-calendar-days "></i>
                </div>
                <!-- location -->
                <div style="width: 100%;" class="border 4px solid text-center mt-5 pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-location-dot pb-4 "></i>
                    <h5 class="head-gold">Location </h5>
                    <p>{{ $courseTitle->course_location }}</p>
                    <i style="font-size: 70px; display: flex;justify-content: end; color: white; " class="fa-solid fa-location-dot  "></i>
                </div>
                <!-- training -->
                <div style="width: 100%; padding-left: 50px;" class="border 4px solid  mt-5 pt-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-calendar-days pb-4 "></i>
                    <h5 class="head-gold"> Training Schedule</h5>
                    <p>{!! $courseTitle->course_training_schedule !!}</p>
                    <i style="font-size: 70px; display: flex;justify-content: end;color: white; " class="fa-solid fa-calendar-days "></i>

                </div>

                <!-- final box -->
                <div style="width: 100%;" class="border 4px solid text-center mt-5 pt-4 mb-4  hai ">
                    <i style="font-size: 50px;" class="fa-solid fa-pen-to-square pb-4 "></i>
                    <h5 class="head-gold">Registration Fee</h5>
                    <p>Registration Fee of Rs.{{ $courseTitle->course_registration_fee }}/- Applicable</p>
                    <i style="font-size: 70px; display: flex;justify-content: end;color: white; " class="fa-solid fa-pen-to-square  fly-out-up    "></i>
                    <div class="ekit-wid-con">
                        	<div class="ekit-btn-wraper">
                            <a href="{{ route('trainings.apply', ['sector_id' => $courseTitle->sector_id, 'course_level_id' => $courseTitle->course_level_id, 'course_title_id' => $courseTitle->id]) }}" class="btn btn-primary">
                                <i aria-hidden="true" class="far fa-building"></i>
                                Apply For Training</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
