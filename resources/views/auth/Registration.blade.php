<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    <style>
        .star {
            color: red;
        }

        .bg {
            background-color: rgb(240, 244, 223);
        }

        .bg:hover {
            background-color: white;
        }
    </style>
    <div class="container-fluid">
        <div class="container mt-5  d-flex align-items-center justify-content-center ">
            <div class="col-lg-5 border">

            {{-- error display --}}
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif

            {{-- form start --}}
            <form class="mt-3 mx-3 " method="POST" action="{{ url('/store') }}" id="RegistrationForm">
                <h2>REGISTRATION FORM</h2>
                <p>Please fill in the information below </p>
                {{-- name --}}
                <div class="col">
                    <label for="name" class="col-form-label">First Name<span class="star">*</span></label>
                    <input type="text" class="form-control bg alphabetic-input" id="first_name" name="first_name"
                        placeholder="Enter Your First Name" value="{{ old('first_name') }}" required>
                </div>
                <div class="col">
                    <label for="name" class="col-form-label">Last Name<span class="star">*</span></label>
                    <input type="text" class="form-control bg alphabetic-input" id="last_name" name="last_name"
                           placeholder="Enter Your Last Name" value="{{ old('last_name') }}" required>
                </div>
                {{-- email --}}
                <div class="col">
                    <label for="email" class="col-form-label">Email<span class="star">*</span></label>
                    <input type="email" class="form-control bg" id="email" name="email"
                        placeholder="Enter Your Email" value="{{ old('email') }}" required>
                </div>
                {{-- password --}}
                <div class="col">
                    <label for="pwd" class="col-form-label">Password<span class="star ">*</span></label>
                    <input type="password" class="form-control bg @error('password') is-invalid @enderror" id="confirmPwd" id="pwd" name="password"
                        placeholder="Enter Your Password" required>


                </div>
                {{-- confirm password --}}
                <div class="col">
                    <label for="confirmPwd" class="col-form-label">Confirm Password<span class="star">*</span></label>
                    <input type="password" class="form-control bg @error('password') is-invalid @enderror" id="confirmPwd" name="password_confirmation"
                        placeholder="Confirm Your Password" required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <!-- check box -->

                <div class=" form-check ">
                    <input type="checkbox" class="form-check-input  " id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I agree to <a href="https://tisecon.com/terms-and-conditions/" target="_blank">Terms & Conditions</a>.</label>
                </div>
                {{-- button --}}
                <button type="submit" style="border-radius: 40px;font-weight: bold;"
                    class="btn btn-warning px-4 m-2">REGISTER</button>
                <P>Have an account already? <a  href="login">Login</a> </P>
                @csrf
            </form>
        </div>

</body>
<script>
$(document).ready(function() {
    $('.alphabetic-input').on('input', function() {
        var inputValue = $(this).val();
        var alphabeticValue = inputValue.replace(/[^A-Za-z ]/g, '');
        $(this).val(alphabeticValue);
    });    
  $('#RegistrationForm').submit(function(event) {
    // Prevent the form from submitting

    // Get the email value
    var email = $('#email').val();

    // Regular expression for basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if the email is valid
    if (emailRegex.test(email)) {
      // If valid, submit the form
        $('#email').parent().find('.email_error').remove();
      // You can replace the alert with the actual form submission code here
    } else {
      // If not valid, show an error message or perform any other action
      $('#email').parent().find('.email_error').remove();
        $('#email').parent().append('<span class="email_error text-danger">Invalid email address. Please enter a valid email.</span>');
        event.preventDefault();
    }
  });
});
</script>
</html>
