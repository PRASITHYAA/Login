@extends('layouts.front.master')
@section('content')
    <!-- main -->
    <div class="container">
        <div class="container">
            <div class="progress-bar mt-2" role="progressbar"
                style="width: 100%; background-color: #111;color: white; " aria-valuenow="100" aria-valuemin=""
                aria-valuemax="100%">100%</div>
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
        <h2 class="text-center p-4">ACKNOWLEDGEMENT</h2>
        <!-- paragraph -->
        <p>
            Dear {{ $data->first_name.' '.$data->last_name }},
        </p>
        <p>
            We have received your job application for the position of {{ $data->sector->name.' - '. $data->position->name }} at Technical Institute of Science and Engineering Consultant. We appreciate your interest in joining our team.
        </p>
        <p>
            Please be informed that your application is currently under review. Our hiring team will carefully assess your qualifications and experience in relation to the requirements of the position.
        </p>
        <p>
            If your qualifications match our needs, we will contact you to schedule an interview or discuss the next steps in the hiring process. If you do not hear from us within 4 weeks, please consider your application for this particular position as unsuccessful. However, we may retain your information for future opportunities.
        </p>
        <p>
            We would like to thank you for taking the time to apply to Technical Institute of Science and Engineering Consultant. We value all applicants and the effort you put into your application.
        </p>
        <p>
            Should you have any questions or require further information, please do not hesitate to contact our HR department at info@tisecon.com or +91 44 35862654.
        </p>
        <p>
            As an acknowledgement of your application, you can download a PDF copy of this acknowledgement letter by clicking the following button:
        </p>
        <div class="container text-center">
            <div class="alert alert-success">
                <a href="{{ route('download.pdf', ['id' => $data->id]) }}" class="btn btn-primary m-1">Download PDF</a>
            </div>
        </div>
        <p>
            Once again, thank you for considering Technical Institute of Science and Engineering Consultant as your potential employer. We wish you the best of luck in your job search.
        </p>
    </div>
@endsection
