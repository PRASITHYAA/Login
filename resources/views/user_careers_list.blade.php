@extends('layouts.front.master')
@section('content')
    <div class="container pt-4">
        <div class="row ">
            @include('layouts.front.user_sidebar')
            <!-- main -->
            <div class="col-lg-8 pt-4">
                <!-- <div class="container  col-lg-6 pt-4"> -->
                <div class="container">
                    <h1 class="">Forms List</h1>
                    <div class="scroll-container">
                        <table class="table table-striped table-hover">
                            <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success" type="button"
                                    onclick="window.location.reload();">Refresh</button>
                            </div>
                            <!-- head line -->
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>Email</th>
                                <th>SECTOR</th>
                                <th>JOB</th>
                                <th>OPERATIONS</th>
                            </tr>
                            <!-- 1 coloum -->
                            @foreach (\App\Models\JobApplication::all() as $jobApplication)
                                <tr>
                                    <td>{{ $jobApplication->id }}</td>
                                    <td>{{ $jobApplication->first_name . ' ' . $jobApplication->last_name }}</td>
                                    <td>{{ $jobApplication->email }}</td>
                                    <td>{{ $jobApplication->sector->name }}</td>
                                    <td>{{ $jobApplication->position->name }}</td>
                                    <td>
                                        <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                                            <a class="btn btn-primary " href="/./live forms - Copy/form1.html">View</a>
                                            <a class="btn btn-warning mx-1 "
                                                href="{{ route('career.job_application.edit', $jobApplication->id) }}">Edit</a>
                                            <a class="btn btn-danger "
                                                href="{{ route('career.job_application.destroy', $jobApplication->id) }}">Delete</a>
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
@endsection
