@extends('layouts.front.master')
@section('content')
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <main style="">
            <div class="container pt-4">
                <div class="row ">
                    <div class="col-lg-4">
                        @include('layouts.front.user_sidebar')
                    </div>
                    <!-- main -->
                    <div class="col-lg-8 pt-4">
                        <!-- <div class="container  col-lg-6 pt-4"> -->
                        <div class="container">
                            <h1 class="">Training List</h1>
                            <table class="table table-striped table-hover">
                                <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <!-- <a class="btn btn-primary me-md-2" href="./customer_create.html">Create</a> -->
                                    <button class="btn btn-success" type="button">Refresh</button>
                                </div>
                                <!-- head line -->
                                <tr>
                                    {{--<th>
                                      <div>
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                    </th>--}}
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>SECTOR</th>
                                    <th>Course Level</th>
                                    <th>Course Title</th>
                                    <th>OPERATIONS</th>
                                </tr>
                                <!-- 1 coloum -->
                                @foreach(\App\Models\CourseTitle::all() as $courseTitle)
                                    <tr>
                                        {{--<td>
                                          <div>
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                          </div>
                                        </td>--}}
                                        <td>{{ $courseTitle->id }}</td>
                                        <td>{{ $courseTitle->first_name.' '.$courseTitle->last_name }}</td>
                                        <td>{{ $courseTitle->email }}</td>
                                        <td>{{ $courseTitle->sector->name }}</td>
                                        <td>{{ $courseTitle->course_level->name }}</td>
                                        <td>{{ $courseTitle->name }}</td>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                                                <!-- <button type="button" class="btn btn-primary ">View</button> -->
                                                <a class="btn btn-primary " href="/./live forms - Copy/form1.html">View</a>
                                                <a class="btn btn-warning mx-1 " href="{{ route('trainings.view', $courseTitle->id) }}">Edit</a>
                                                <a class="btn btn-danger " href="{{ route('trainings.destroy', $courseTitle->id) }}">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </header>
@endsection
