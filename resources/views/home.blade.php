@extends('layouts.front.master')
@section('content')
    <!-- percentage -->
    <div class="container mt-2">
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

    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <p>Hi {{ auth()->user()->name }},</p>
                    <p>Welcome to TISE Job Application Dashboard!</p>
                    <p>We're thrilled to have you here on your journey to career success. This personalized dashboard is
                        your central hub for managing your job applications, exploring exciting opportunities, and
                        fine-tuning your job search.</p>
                    <a href="{{ route('job_application') }}">Apply For a Job</a>
                </div>
            </div>
        </div>


    </div>
@endsection
