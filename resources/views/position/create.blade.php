<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Position</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <main style="margin-top: 58px;">
            <div class="container border p-4">
                <h1 class="pb-2">Create a New Position</h1>
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
                <form action="{{ route('position.store') }}" method="POST">
                    @csrf
                    <div class="col-lg-6">
                        <!-- sector -->
                        <p>Sectors <span class="red">*</span></p>
                        <select class="form-select bg" name="sector_id" id="sector_id" required>
                            <option value="">Please Select</option>
                            @php
                                $sectors = \App\Models\Sector::all();
                            @endphp
                            @foreach ($sectors as $sector)
                                <option
                                    value="{{ $sector->id }}" {{ (old('sector')==$sector->id)?'selected':''  }}>{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="positionName" class="form-label">Position Name <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            id="positionName" name="name" aria-describedby="positionName">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a class="btn btn-secondary" href="{{ route('position.index') }}">Back</a>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
