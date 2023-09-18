@extends('layouts.front.master')
@section('content')
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <main style="">
            <div class="container pt-4">

                <div class="row ">
                    <div class="col-lg-4">
                        @include('layouts.front.user_sidebar')
                    </div>
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
                            <!-- <div class="container  col-lg-6 pt-4"> -->
                                <form class="container border" method="POST" action="{{ route('change.password') }}">
                                    @csrf
                                    <p style="font-weight: bold;">Change password</p>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label"> Current password:</label>
                                        <input type="password" class="form-control" name="old_password" id="formGroupExampleInput"
                                            placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">New password:</label>
                                        <input  type="password" class="form-control" name="password" id="formGroupExampleInput2"
                                            placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Password confirmation:</label>
                                        <input  type="password" class="form-control" name="password_confirmation" id="formGroupExampleInput"
                                            placeholder="">
                                    </div>
                                    <button type="submit" style="border-radius: 40px;" class="btn btn-warning mb-3">Change password</button>
                                </form>
                            </div>

                    </div>

                </div>

            </div>
        </main>
    </header>
@endsection
