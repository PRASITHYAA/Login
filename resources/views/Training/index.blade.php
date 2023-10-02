
        @include('layouts.sidebar')

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
                        <th>OPERATIONS</th>
                    </tr>
                </thead>
                {{-- table body --}}
                <tbody>
                    @foreach ($trainings as $training)
                        {{-- data --}}
                        <tr>
                            <td>{{ $training->id }}</td>
                            <td>{{ $training->first_name }}</td>
                            <td>{{ $training->sector->name }}</td>
                            <td>{{ $training->course_level->name }}</td>
                            <td>{{ $training->course_title->name }}</td>
                            <td>
                                <a href="{{ route('training.view', $training->id) }}" class="btn btn-warning">View</a>

                                <!-- Delete Button -->
                                <form action="{{ route('training.destroy', $training->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Training form?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>

