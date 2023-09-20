
    <!-- Include your sidebar -->
    @include('layouts.sidebar')

    <main style="margin-top: 100px;">
        <div class="container-fluid">
            <h1>Course  List</h1>

            <!-- Display success message if available -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Create and Refresh buttons -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <a class="btn btn-primary me-md-2" href="{{ route('course_title.create') }}">Create</a>
                <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sector</th>
                        <th>Course Level</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coursetitles as $coursetitle)
                        <tr>
                            <td>{{ $coursetitle->id }}</td>
                            <td>{{ $coursetitle->sector->name }}</td>
                            <td>{{ $coursetitle->course_level->name }}</td>
                            <td>{{ $coursetitle->course_code }}</td>
                            <td>{{ $coursetitle->name }}</td>
                            <td>
                                <a href="{{ route('course_title.edit', $coursetitle->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('course_title.destroy', $coursetitle->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this course title?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

