@extends('layouts.front.master')
@section('content')
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <main style="">
            <div class="container pt-4">
                <div class="row ">
                    @include('layouts.front.user_sidebar')
                    <!-- main -->
                    <div class="col-lg-9 pt-4">
                        <div class="container">
                            <h1 class="">Training List</h1>
                            <p style="font-weight: bold;">( Scroll Right to More) <span style="color: red;">*</span> </p>
                            <div class="scroll-container">

                                <table class="table table-striped table-hover">
                                    <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                                         <button class="btn btn-success mb-3" type="button">Refresh</button>
                                    </div>
                                    <!-- head line -->
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>SECTOR</th>
                                        <th>Course Level</th>
                                        <th>Course Title</th>
                                        <th>OPERATIONS</th>
                                    </tr>
                                    <!-- 1 coloum -->
                                    @foreach (\App\Models\CourseTitle::all() as $courseTitle)
                                        <tr>
                                            <td>{{ $courseTitle->id }}</td>
                                            <td>{{ $courseTitle->first_name . ' ' . $courseTitle->last_name }}</td>
                                            <td>{{ $courseTitle->email }}</td>
                                            <td>{{ $courseTitle->sector->name }}</td>
                                            <td>{{ $courseTitle->course_level->name }}</td>
                                            <td>{{ $courseTitle->name }}</td>
                                            <td>
                                                <div class="btn-group " role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a class="btn btn-primary "
                                                        href="/./live forms - Copy/form1.html">View</a>
                                                    <a class="btn btn-warning mx-1 "
                                                        href="{{ route('trainings.view', $courseTitle->id) }}">Edit</a>
                                                    <a class="btn btn-danger "
                                                        href="{{ route('trainings.destroy', $courseTitle->id) }}">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </header>
@endsection
