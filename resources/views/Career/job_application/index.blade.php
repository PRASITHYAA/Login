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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($jobApplications as $jobApplication)
                    <tr>
                        <td>{{ $jobApplication->id }}</td>
                        <td>{{ $jobApplication->first_name }}</td>
                        <td>{{ $jobApplication->email }}</td>
                        <td>{{ $jobApplication->phone }}</td>

                        <td>
                            <a href="{{ route('career.job_application.show', $jobApplication->id) }}"
                               class="btn btn-info">View</a>
                            {{-- <a href="{{ route('career.job_application.edit', $jobApplication->id) }}" class="btn btn-warning">Edit</a> --}}
                            <form action="{{ route('career.job_application.destroy', $jobApplication->id) }}"
                                  method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this job application?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
