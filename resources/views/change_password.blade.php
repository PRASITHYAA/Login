@extends('layouts.front.master')
@section('content')
    <div class="container pt-4">
        <div class="row ">
            @include('layouts.front.user_sidebar')
            <!-- main -->
            <div class="col-lg-8 pt-4">
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
                <form class="container border mt-3" method="POST" action="{{ route('change.password') }}">
                    @csrf
                    <h3 class="mt-4 mb-3">Change Password</h3>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"> Current password:</label>
                        <input type="password" class="form-control" name="old_password" id="formGroupExampleInput"
                            placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">New password:</label>
                        <input type="password" class="form-control" name="password" id="formGroupExampleInput2"
                            placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Password confirmation:</label>
                        <input type="password" class="form-control" name="password_confirmation" id="formGroupExampleInput"
                            placeholder="">
                    </div>
                    <button type="submit" style="border-radius: 40px;" class="btn btn-warning mb-4">Change
                        password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
