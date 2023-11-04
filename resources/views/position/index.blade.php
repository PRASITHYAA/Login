@extends('layouts.admin_master')
@section('content')
    <main style="margin-top: 100px;">
        <div class="container-fluid">
            <h1>Position List</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-striped table-hover">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2" href="{{ route('position.create') }}">Create</a>
                    <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
                </div>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Sector</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($positions as $position)
                        <tr>
                            {{--<td>{{ $counter++ }}</td>--}}
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->name }}</td>
                            <td>{{ $position->sector->name }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('position.edit', $position->id) }}" class="btn btn-warning ">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('position.destroy', $position->id) }}" method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger "
                                            onclick="return confirm('Are you sure you want to delete this position?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
