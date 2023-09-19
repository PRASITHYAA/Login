<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <style>
        body {
            overflow-x: hidden;
        }

        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>

    <header>
        @include('layouts.sidebar')
    </header>

    <!--Main layout-->
    <main style="margin-top: 100px;">
        <div class="container-fluid">
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

            <h1 class="bg-light">
                Training List</h1>

            <table class="table table-striped table-hover">
                <div style="margin-bottom: 20px;" class="d-grid gap-2 d-md-flex justify-content-md-end">

                    {{-- refresh --}}
                    <button type="button" class="btn btn-primary" onclick="window.location.reload();">Refresh</button>
                    <a href="{{ route('training.create') }}" class="btn btn-success me-md-2">Create</a>

                </div>
                {{-- table header --}}
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Sector</th>
                        <th>Course Level  </th>
                        <th>Course Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                {{-- table body --}}
                <tbody>
                    @foreach ($trainings as $training)
                        {{-- data --}}
                        <tr>
                            <td>{{ $training->id }}</td>
                            <td>{{ $training->first_name }}</td>
                            <td>{{ $training->sector }}</td>
                            <td>{{ $training->course_level }}</td>
                            <td>{{ $training->course_title }}</td>
                            <td>
                                <a href="{{ route('training.view', $training->id) }}" class="btn btn-warning">View</a>

                                <!-- Delete Button -->
                                <form action="{{ route('training.destroy', $training->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>

    <!--Main layout-->


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



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
