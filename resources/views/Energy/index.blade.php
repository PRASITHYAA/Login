<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


  <style>

    body{
            overflow-x: hidden;
        }
    body {
      background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
      main {
        padding-left: 240px;
      }
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0;
      /* Height of navbar */
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        width: 100%;
      }
    }

    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }
  </style>

  <!--Main Navigation-->
  @include('layouts.sidebar')
<!--Main layout-->
  <main style="margin-top: 50px;">

    <div class="container-fluid">

      <h1>Energy</h1>


      <table class="table table-striped table-hover">
        <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary me-md-2" href="./energy_create.html">Create</a>
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

          <td>
            <div class="btn-group " role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-warning mx-1 " href="./energy_edit.html">Edit</a>
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

          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-warning mx-1 " href="./energy_edit.html">Edit</a>
              <button type="button" class="btn btn-danger">Delete</button>
          </td>
    </div>
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

      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a class="btn btn-warning mx-1 " href="./energy_edit.html">Edit</a>
          <button type="button" class="btn btn-danger">Delete</button>
      </td>o
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

      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a class="btn btn-warning mx-1 " href="./energy_create.html">Edit</a>
          <button type="button" class="btn btn-danger">Delete</button>
      </td>

    </tr>
    </div>

    </table>

    </div>
  </main>

  <!--Main layout-->



  <script>
    document.addEventListener("click", function (event) {
      const dropdowns = document.getElementsByClassName("dropdown-content");
      for (const dropdown of dropdowns) {
        if (!dropdown.contains(event.target)) {
          dropdown.style.display = "none";
        }
      }
    });

  </script>



  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
