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


            <div class="container">

              <h1 class="">Training List</h1>


              <table class="table table-striped table-hover">
                <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <!-- <a class="btn btn-primary me-md-2" href="./customer_create.html">Create</a> -->
                  <button class="btn btn-success" type="button">Refresh</button>
                </div>
                <!-- head line -->
                <tr>
                  <th>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </th>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>Email</th>
                  <th>SECTOR</th>
                  <th>Course Level</th>
                  <th>Course Title</th>
                  <th>OPERATIONS</th>
                </tr>
                <!-- 1 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>

                  <td>520</td>
                  <td>1</td>
                  <td>s@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>



                  <td>
                    <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                      <!-- <button type="button" class="btn btn-primary ">View</button> -->
                      <a class="btn btn-primary " href="/./live forms - Copy/form1.html">View</a>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <a class="btn btn-danger " href="">Delete</a>
                    </div>
                  </td>
                </tr>
                <!-- 2 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>
                  <td>521</td>
                  <td>2</td>
                  <td>sd@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-primary ">View</button>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <!-- 3 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>
                  <td>523</td>
                  <td>3</td>
                  <td>su@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-primary ">View</button>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
            </div>

            </tr>
            <tr>
              <td>
                <div>
                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                </div>
              </td>
              <!-- 4 coloum -->

              <td>523</td>
              <td>4</td>
              <td>s@gmail.com</td>
              <td>s1</td>
              <td>j1</td>
              <td>s1</td>

              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a class="btn btn-primary " href="">View</a>
                  <a class="btn btn-warning mx-1 " href="">Edit</a>
                  <button type="button" class="btn btn-danger">Delete</button>
              </td>
          </div>
          </tr>
          </table>

        </div>
      </div>

    </main>
  </header>
@endsection
