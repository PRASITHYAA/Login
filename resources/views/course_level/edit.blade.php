<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit courseLevel Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Main layout -->
    <div class="container">
        <main style="margin-top: 58px;">
            <div class="container border 2px p-4">
                <h1 class="pb-2">Edit courseLevel details</h1>
                {{-- error --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('course_level.update',  $courseLevel->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <!-- sector -->
                        <label  class="form-label">sector <span style="color: red;">*</span></label>
                        <select class="form-select " name="sector_id" id="sector_id" style="background-color: rgba(248, 235, 235, 0.726);"  required>
                            <option value="">Please Select</option>
                            @php
                                $sectors = \App\Models\Sector::all();
                            @endphp
                            @foreach ($sectors as $sector)
                                <option
                                    value="{{ $sector->id }}" {{ ($courseLevel->sector_id==$sector->id)?'selected':''  }}>{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">courseLevel Name <span
                                style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="name" id="name" value="{{ $courseLevel->name }}" required>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-secondary" href="{{ route('course_level.index') }}">Back</a>
                </form>
            </div>
        </main>
    </div>

    <!-- Main layout -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
