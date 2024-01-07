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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


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
            <div class="col-lg-4 border">
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                            @php session()->forget('success'); @endphp
                        </div>
                    @endif

                {{-- form start --}}
                <form class="mt-3 mx-3" method="POST" action="{{ url('/authenticate') }}" id="LoginForm">
                    <h2>LOGIN </h2>
                    <p>Please fill in the information below </p>
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
                        <input type="password" class="form-control bg" id="exampleInputPassword1" name="password"
                            placeholder="Enter Your Password" required>
                    </div><br>
                    {{-- checkbox --}}
                    <div class="row">
                        <div class="col  ">
                            <div class="mb-3 form-check ">
                                <input type="checkbox" class="form-check-input bg " id="autoSizingCheck" >
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <label>
                                <a href="{{ route('forget.password.get') }}"> Forget Password?</a>
                            </label>
                        </div>
                        {{-- button --}}
                        <div>
                            <button type="submit" style="border-radius: 40px;font-weight: bold;;"
                                class="btn btn-warning px-4">LOGIN</button>
                            <br>
                            <P>Don't have an account? <a href="/">Create Account</a> </P>

                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>

</body>
</html>
