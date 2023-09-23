
    @include('layouts.sidebar')

    <!--Main layout-->
    <main style="margin-top: 100px">

        <div class="container-fluid ">
            <h1>Sectors List</h1>
            {{-- error --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped table-hover">
                <div style="margin-bottom: 20px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2" href="{{ route('sector.create') }}">Create</a>
                    <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($sectors as $sector)
                        <tr>
                            <td>{{ $sector->id }}</td>
                            <td>{{ $sector->name }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('sector.edit', $sector->id) }}"
                                    class="btn btn-warning ">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('sector.destroy', $sector->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger "
                                        onclick="return confirm('Are you sure you want to delete this sector?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </main>
