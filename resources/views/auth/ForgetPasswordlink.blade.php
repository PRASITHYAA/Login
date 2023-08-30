<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <style>
        .bg {
            background-color: rgb(240, 244, 223);
        }

        .bg:hover {
            background-color: white;
        }

        .red {
            color: red;
        }
    </style>

    <div class="container-fluild">
        <div class="container mt-5 d-flex align-items-center justify-content-center ">
            <div class="card " style="width: 35%">

                {{-- form start --}}
                <form class="mt-3 mx-3" action="{{ route('reset.password.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <h2>Reset PassWord</h2>
                    <p>Please fill in the information below<span class="red">*</span> </p>
                    {{-- email --}}
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email address<span class="red">*</span></label>
                        <input type="email" class="form-control bg" id="email" name="email"
                            placeholder="Enter Your Email" required>
                    </div>
                    {{-- password --}}
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="col-form-label">Password<span
                                class="red">*</span></label>
                        <input type="password" class="form-control bg @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password"
                            placeholder="Enter Your Password" required>
                    </div>
                    {{-- confirm password --}}
                    <div class="col">
                        <label for="confirmPwd" class="col-form-label">Confirm Password<span
                                class="red">*</span></label>
                        <input type="password" class="form-control bg @error('password') is-invalid @enderror" id="confirmPwd" name="password_confirmation"
                            placeholder="Confirm Your Password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    {{-- button --}}
                    <button type="submit" class="btn btn-warning px-4 m-2 " style="border-radius: 40px;font-weight: bold;">
                        Reset Password
                    </button>
                </form>
        </div>

</body>

</html>
