<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!--Main layout-->
    <div class="container">

        <main style="margin-top: 58px;">
            <div class="container border 2px p-4">
                <h1 class="pb-2">Edit position deatils</h1>
                {{-- error --}}
                @if ($errors->any())
                    <div class=" container text-center alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- success --}}

                @if (session('success'))
                    <div class=" container text-center alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('position.update', $position->id) }}" method="POST">
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
                                    value="{{ $sector->id }}" {{ ($position->sector_id==$sector->id)?'selected':''  }}>{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="positionName" class="form-label">Position Name <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            id="name" name="name" value="{{ $position->name }}" >
                    </div>
                     <div class="mb-3">
                        <label  class="form-label">Description <span style="color: red;">*</span></label>
                            <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control editor" id="description"
                            name="description" rows="3">{{ $position->description }}</textarea>

                    </div>


                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-secondary" href="{{ route('position.index') }}">Back</a>



                </form>
            </div>
        </main>
    </div>

    </div>

    <!--Main layout-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/xupxa3g67qxzkl4gwmmb0sg2fgv5xvdluxdkfsdfcrj65fin/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: 'textarea.editor',
                skin: 'bootstrap',
                plugins: 'lists, link, image, media',
                toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
                menubar: false,
            });
        });
    </script>
</body>

</html>
