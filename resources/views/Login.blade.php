<html>

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
        .login {
            background-color: rgb(240, 244, 223);
        }

        .login:hover {
            background-color: white;
        }

        .red {
            color: red;
        }
    </style>

    <div class="container-fluild">
        <div class="container mt-5 d-flex align-items-center justify-content-center ">
            <div class="card " style="width: 30%">

                <!-- Display the error message if it exists in the session -->
               @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

{{-- form start --}}
                <form class="mt-3 mx-3" method="POST" action="{{ url('/authenticate') }}">
                    <h2>LOGIN FORM</h2>
                    <p>Please fill in the information below </p>
{{-- email --}}
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email address<span class="red">*</span></label>
                        <input type="email" class="form-control login" id="email" name="email"
                            placeholder="Enter Your Email" required>
                    </div>
                    {{-- password --}}
                    <div class="form-group">
                        <label for="pwd" class="col-form-label">Password<span class="red">*</span></label>
                        <input type="password" class="form-control login" id="pwd" name="password"
                            placeholder="Enter Your Password" required>
                    </div><br>
                    {{-- checkbox --}}
                    <div class="row">
                        <div class="col  ">
                            <div class="mb-3 form-check ">
                                <input type="checkbox" class="form-check-input  " id="autoSizingCheck">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                        </div>
                        <div class="col ">
                            {{-- <a style="color: black;" href="{{ route('forget.password.get') }}">Forgot password</a> --}}
                        </div>
                    </div><br>
                    {{-- button --}}
                    <div>
                        <button type="submit" style="border-radius: 40px;font-weight: bold;;"
                            class="btn btn-warning px-4">LOGIN</button>
                            <P>Don't have an account? <a  href="/">Create Account</a> </P>

                    </div>
            </div>
            @csrf
            </form>
        </div>
    </div>
</body>

</html>
