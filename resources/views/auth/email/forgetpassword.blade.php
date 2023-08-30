<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        body {
            overflow-x: hidden;
        }
    </style>
    <!-- login-page -->
    <div class="row">
        <div class="col-lg-4">
            <!-- space -->
        </div>
        <div class="col-lg-4">
            <div style="border: solid 1px;background-color:  rgb(240, 244, 223) ;" class="container p-5 mt-5  text-center">
                <div style="border: solid 1px;background-color: white ;" class="container p-5 mt-5  text-center">

                <form>
                    <h2  style="font-style: italic;" class="p-2">Tisecon</h2>
                    <img style="width: 100px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">

                    <h2 class="p-4">Forgot your password</h2>

                    <span> That's okay it happens! Click on the button</span> <br>
                    <span>below to rest your password</span>
                    <br>
                    <a   style="font-weight: bold;" class= "btn btn-dark  p-3 mt-4" href="{{ route('reset.password.get', $token) }}">RESET YOUR PASSWORD</a>
                </form>
            </div>

            </div>
        </div>
        <div class="col-lg-4">
            <!-- space -->
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
