<!-- resources/views/user_edit.blade.php -->

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
                <h1 class="pb-2">Edit customer deatils </h1>

                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- name --}}
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            id="Name" name="name" value="{{ $user->name }}">
                    </div>
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="validationDefault04" class="form-label">Email address <span
                                style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="email" class="form-control"
                            id="exampleInputEmail1" name="email" value="{{ $user->email }}">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update </button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>


                    </div>

                </form>
            </div>
        </main>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
