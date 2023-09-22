@extends('layouts.front.master')
@section('content')
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <main style="">
            <div class="container pt-4">

                <div class="row ">
                        @include('layouts.front.user_sidebar')
                    <!-- main -->
                    <div class="col-lg-9 pt-4">
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
                        <form class="container border  " method="POST" action="{{ route('profile') }}">
                            @csrf
                            <h3 class="mt-4">  Account Details</h3>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"> Name:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ auth()->user()->email }}">
                            </div>
                            <button type="submit" style="border-radius: 30px;" class="btn btn-warning mb-3">Update</button>
                        </form>
                    </div>

                </div>

            </div>

            </div>


        </main>
    </header>
@endsection
