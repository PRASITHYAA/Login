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
                            <!-- <div class="container  col-lg-6 pt-4"> -->
                                <div class="container   border ">
                                    <p style="font-weight: bold;">Account Details</p>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label"> Name:</label>
                                        <input  type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Email:</label>
                                        <input  type="email" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Another input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Example label</label>
                                        <input  type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Another label</label>
                                        <input  type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Another input placeholder">
                                    </div>
                                    <a style="border-radius: 40px;" class="btn btn-warning  mb-3" href="">Update</a>
                                </div>
                            </div>

                    </div>

                </div>

            </div>


        </main>
    </header>
@endsection
