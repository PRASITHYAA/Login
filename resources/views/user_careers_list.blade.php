@extends('layouts.front.master')
@section('content')
    <div class="container pt-4">
        <div class="row ">
            @include('layouts.front.user_sidebar')
            <!-- main -->
            <div class="col-lg-9 pt-4">
                <!-- <div class="container  col-lg-6 pt-4"> -->
                <div class="container">
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
                    <h1 class="">Careers Form List</h1>
                    <p style="font-weight: bold;">( scroll right for more information) <span style="color: red;">*</span> </p>
                    <div class="">
                        <table class="table table-striped table-hover">
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
                            @foreach ($jobApplications as $jobApplication)
                                <tr>
                                    <td>{{ $jobApplication->id }}</td>
                                    <td>{{ $jobApplication->first_name . ' ' . $jobApplication->last_name }}</td>
                                    <td>{{ $jobApplication->email }}</td>
                                    <td>{{ $jobApplication->sector->name }}</td>
                                    <td>{{ $jobApplication->position->name }}</td>
                                    <td>
                                        <div class="" role="group" aria-label="Basic mixed styles example">
                                            <a href="{{ route('career.job_application.edit', $jobApplication->id) }}"
                                               title="View"><i class="fa fa-eye text-primary"></i></a>
                                            @if($jobApplication->allow_edit == 1)
                                                <a style="margin: 0 5px 0 5px;"
                                                   href="{{ route('career.job_application.edit', $jobApplication->id) }}"
                                                   title="Edit"><i class="fa fa-pencil text-success"></i></a>
                                            @endif
                                            @if(auth()->user()->hasRole('Admin'))
                                                <form
                                                    action="{{ route('career.job_application.destroy', $jobApplication->id) }}"
                                                    method="post" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="padding: 3px 1px;font-size: 14px;" type="submit"
                                                            class="btn btn-link"
                                                            onclick="return confirm('Are you sure you want to delete this job application?')">
                                                        <i class="fa fa-trash text-danger"></i></button>
                                                </form>
                                            @endif
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
