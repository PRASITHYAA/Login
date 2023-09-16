<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Level List</title>
    <!-- Include CSS libraries here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Include your custom CSS styles if needed -->
    <link rel="stylesheet" href="your-custom-styles.css">
</head>

<body>
    <!-- Include your sidebar -->
    @include('layouts.sidebar')

    <main style="margin-top: 100px;">
        <div class="container-fluid">
            <h1>Course Level List</h1>

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
                            <td>{{ $coursetitle->course_level }}</td>
                            <td>{{ $coursetitle->course_Code }}</td>
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

    <!-- Include JavaScript libraries here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("click", function(event) {
            const dropdowns = document.getElementsByClassName("dropdown-content");
            for (const dropdown of dropdowns) {
                if (!dropdown.contains(event.target)) {
                    dropdown.style.display = "none";
                }
            }
        });
    </script>
</body>

</html>
