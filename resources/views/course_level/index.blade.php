@extends('layouts.admin_master')
@section('content')
    <main style="margin-top: 100px;">
        <div class="container-fluid">
            <h1>Course Level List</h1>
            <!-- Display success message if available -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- Create and Refresh buttons -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <a class="btn btn-primary me-md-2" href="{{ route('course_level.create') }}">Create</a>
                <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
            </div>
            <!-- Table for listing course levels -->
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sector</th>
                    <th>Course Level</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($courselevels as $courselevel)
                    <tr>
                        <td>{{ $courselevel->id }}</td>
                        <td>{{ $courselevel->sector->name }}</td>
                        <td>{{ $courselevel->name }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('course_level.edit', $courselevel->id) }}"
                               class="btn btn-warning">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('course_level.destroy', $courselevel->id) }}" method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this Course Level?')">
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
