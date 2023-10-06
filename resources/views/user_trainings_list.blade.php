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
                            <div class="col-md-10">
                            <h1 class="">Training List</h1>
                            <p style="font-weight: bold;">(scroll right for more information) <span style="color: red;">*</span> </p>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" style="margin-top: 50px;margin-left: 0px;" href="{{ route('trainings') }}">Create</a>
                            </div>
                            <div class="">

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
                                    @foreach ($trainings as $training)
                                        <tr>
                                            <td>{{ $training->id }}</td>
                                            <td>{{ $training->first_name . ' ' . $training->last_name }}</td>
                                            <td>{{ $training->primary_email }}</td>
                                            <td>{{ $training->sector->name }}</td>
                                            <td>{{ $training->course_level->name }}</td>
                                            <td>{{ $training->course_title->name }}</td>
                                            <td>
                                                <div class="" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="{{ url('trainings/'. $training->id) }}" title="View"><i class="fa fa-eye text-primary"></i></a>
                                                    <a style="margin: 0 5px 0 5px;" href="{{ route('user.trainings.edit', $training->id) }}" title="Edit"><i class="fa fa-pencil text-success"></i></a>
                                                    <form action="{{ route('user.trainings.destroy', $training->id) }}"
                                                          method="post" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="padding: 3px 1px;font-size: 14px;" type="submit" class="btn btn-link"
                                                                onclick="return confirm('Are you sure you want to delete this training form?')"><i class="fa fa-trash text-danger"></i></button>
                                                    </form>
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
