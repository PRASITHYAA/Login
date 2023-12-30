@extends('layouts.admin_master')
@section('content')
    <main style="margin-top: 100px;">
        <div class="container-fluid">
            <h1>Forms</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Sector</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Submitted On</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($jobApplications as $jobApplication)
                    <tr>
                        <td>{{ $jobApplication->id }}</td>
                        <td>{{ $jobApplication->first_name }}</td>
                        <td>{{ $jobApplication->last_name }}</td>
                        <td>{{ $jobApplication->sector->name }}</td>
                        <td>{{ $jobApplication->position->name }}</td>
                        <td>{{ $jobApplication->email }}</td>
                        <td>{{ $jobApplication->phone }}</td>
                        <td>{{ \Carbon\Carbon::parse($jobApplication->created_at)->format('d-m-Y h:i A') }}</td>
                        <td>@if($jobApplication->allow_edit == 0)
                                <span class="status btn-success">Completed</span>
                            @else
                                <span class="status btn-warning">In Progress</span>
                            @endif
                        </td>
                        <td>
                            {{--<a href="{{ route('career.job_application.show', $jobApplication->id) }}"
                               class="btn btn-info">View</a>--}}
                            <a href="{{ route('career.job_application.access', $jobApplication->id) }}"
                               title="Give Edit Access"><i class="fa fa-user-pen text-primary"></i></a>
                            <a href="{{ route('career.job_application.edit', ['id' => $jobApplication->id, 'option' => 'view']) }}"
                               title="View" target="_blank"><i class="fa fa-eye text-primary"></i></a>
                            {{-- <a href="{{ route('career.job_application.edit', $jobApplication->id) }}" class="btn btn-warning">Edit</a> --}}
                            <form
                                action="{{ route('career.job_application.destroy', $jobApplication->id) }}"
                                method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button style="padding: 3px 1px;font-size: 14px;" type="submit" title="Delete"
                                        class="btn btn-link"
                                        onclick="return confirm('Are you sure you want to delete this job application?')">
                                    <i class="fa fa-trash text-danger"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </main>
    <style>
        .status {
            font-size: xx-small;
            padding: 3px;
            border-radius: 5px;
        }
    </style>
@endsection
