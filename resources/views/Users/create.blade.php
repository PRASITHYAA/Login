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
            {{-- error display --}}
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif

        <main style="margin-top: 58px;">
            <div class="container border 2px p-4">
                <h1 class="pb-2">Create a new customer</h1>


                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- name --}}
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" name="name"type="text"
                            class="form-control" id="Name" name="name" required>
                    </div>

                    {{-- email --}}
                    <div class="mb-3">
                        <label for="validationDefault04" class="form-label">Email address <span
                                style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" name="email"type="email"
                            class="form-control" id="exampleInputEmail1" name="email" required>
                    </div>

                    {{-- password --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password <span
                                style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required>
                    </div>

                    {{-- confirm password --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> confirm Password <span
                                style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" name="confirmpassword"
                            type="password" class="form-control register @error('password') is-invalid @enderror" id="exampleInputPassword1"
                            name="confirm password">
                            @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                    {{-- button --}}
                    <div>
                        <button class="btn btn-success">Save</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>


                </form>
            </div>
        </main>
    </div>

    </div>

    <!--Main layout-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
