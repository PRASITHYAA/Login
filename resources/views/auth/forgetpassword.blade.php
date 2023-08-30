<!DOCTYPE html>
<html lang="en">

<head>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <style>
        .red {
            color: red;
        }

        .bg {
            background-color: rgb(240, 244, 223);
        }

        .bg:hover {
            background-color: white;
        }
    </style>

    {{-- header --}}
    <div class="container-fluild">
        <div class="container mt-5 d-flex align-items-center justify-content-center ">
            <div class="card " style="width: 40%">
                <h2 class="text-center">Reset Password Link</h2>
                <p class=" m-3"> Please provide the email you used to register, as we need it to send you a password reset link. <span class="red" >*</span></p>


                {{--  link send error --}}
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif


                {{-- form start --}}

                <form class="mx-3" method="POST" action="{{ route('forget.password.post') }}">
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email address<span class="red">*</span></label>
                        <input type="email" class="form-control bg" id="email" name="email"
                            placeholder="Enter Your Email" required>
                            @if ($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}
                            </span>
                            @endif

                    </div>
                    <br>
                    {{-- button --}}
                    <div class="col-12 text-center">
                        <button type="submit" style="border-radius: 40px;font-weight: bold;;"
                            class="btn btn-warning px-4 m-2">Send </button>

                    </div>
                    <br>

            </div>
            @csrf
            </form>
        </div>
    </div>
</body>

</html>
