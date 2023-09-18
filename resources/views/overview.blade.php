@extends('layouts.front.master')
@section('content')
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <main style="">
      <div class="container pt-4">
          <!-- Display success message if available -->
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <div class="row ">
              <div class="col-lg-4">
                  @include('layouts.front.user_sidebar')
              </div>
              <!-- main -->
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="container  border mt-4 p-5  hai">
                              <h4 style="font-weight: bold;">Carrer Click to Apply</h4>
                              <br>
                              <a class="btn btn-warning" href="{{ route('careers') }}">click</a>
                          </div>
                      </div>

                      <div class="col-lg-6">
                          <div class="container  border mt-4 p-5  hai">

                              <h4 style="font-weight: bold;">Click to Apply for Training</h4>
                              <br>
                              <a class="btn btn-warning" href="{{ route('trainings') }}">click</a>
                          </div>

                      </div>
                  </div>
              </div>

          </div>

      </div>


  </main>
  </header>
@endsection
