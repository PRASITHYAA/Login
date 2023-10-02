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
                        <div class="containe row">
                            <div class="col-md-10">
                            <h1 class="">Training List</h1>
                            <p style="font-weight: bold;">(scroll right for more information) <span style="color: red;">*</span> </p>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" style="margin-top: 50px;margin-left: 0px;" href="{{ route('trainings') }}">Create</a>
                            </div>
                            <div class="scroll-container">

                                <table class="table table-striped table-hover">
                                    <!-- head line -->
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>SECTOR</th>
                                        <th>Course Level</th>
                                        <th>Course Title</th>
                                        <th>OPERATIONS</th>
                                    </tr>
                                    <!-- 1 coloum -->
                                    @foreach (\App\Models\Training::where('user_id', auth()->user()->id)->get() as $training)
                                        <tr>
                                            <td>{{ $training->id }}</td>
                                            <td>{{ $training->first_name . ' ' . $training->last_name }}</td>
                                            <td>{{ $training->primary_email }}</td>
                                            <td>{{ $training->sector->name }}</td>
                                            <td>{{ $training->course_level->name }}</td>
                                            <td>{{ $training->course_title->name }}</td>
                                            <td>
                                                <div class="btn-group " role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a class="btn btn-primary "
                                                        href="/./live forms - Copy/form1.html">View</a>
                                                    <a class="btn btn-warning mx-1 "
                                                        href="{{ route('trainings.view', $training->id) }}">Edit</a>
                                                    <a class="btn btn-danger "
                                                        href="{{ route('trainings.destroy', $training->id) }}">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </header>
@endsection
