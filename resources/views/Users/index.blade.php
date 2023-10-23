@extends('layouts.admin_master')
@section('content')
    <main style="margin-top: 100px;">
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
        <div class="container-fluid">
            <h1 class="bg-light">Customer List</h1>
            <table class="table table-striped table-hover">
                <div style="margin-bottom: 20px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                    {{-- button create --}}
                    <a href="{{ route('users.create') }}" class="btn btn-success me-md-2">Create</a>
                    {{-- refresh --}}
                    <button type="button" class="btn btn-primary" onclick="window.location.reload();">Refresh</button>
                </div>
                {{-- table header --}}
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                {{-- table body --}}
                <tbody>
                    @foreach ($users as $user)
                        {{-- data --}}
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning ">Edit</a>
                                <!-- Delete Button -->
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger "
                                            onclick="return confirm('Are you sure you want to delete this customer?')">
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
