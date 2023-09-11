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
    body {
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

  @include('layouts.sidebar')

  <main style="margin-top: 100px;">

    <div class="container-fluid">
        <h1>Forms </h1>
        @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif




<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" href="{{ route('position.create') }}">Create</a>
            <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
          </div>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobApplications as $jobApplication)
                <tr>
                    <td>{{ $jobApplication->id }}</td>
                    <td>{{ $jobApplication->first_name }}</td>
                    <td>{{ $jobApplication->email }}</td>
                    <td>{{ $jobApplication->phone }}</td>
                    {{-- @foreach($positions as $position)
                    <td>{{ $position->sector->name }}</td>
                    <td>{{ $position->name }}</td>
                    @endforeach --}}

                    <td>
                        <a href="{{ route('career.job_application.show', $jobApplication->id) }}" class="btn btn-info">View</a>
                        {{-- <a href="{{ route('career.job_application.edit', $jobApplication->id) }}" class="btn btn-warning ">Edit</a> --}}
                        <form action="{{ route('career.job_application.destroy', $jobApplication->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job application?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <a href="{{ route('job_applications.create') }}" class="btn btn-success">Create New Job Application</a> --}}
</div>
