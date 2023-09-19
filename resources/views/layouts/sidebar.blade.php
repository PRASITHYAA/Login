
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Level</title>
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
        .red{
            color: red;
        }
    </style>
<!--Main Navigation-->
<header>

    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky mt-5">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('admin') }}" class="list-group-item list-group-item-action py-2 ripple"
                    aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="{{ route('career.job_application.index') }}"
                    class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Forms</span>
                </a>
                <a href="users" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-users fa-fw me-3"></i><span>Customer</span>
                </a>


                <a href="sector" class="list-group-item list-group-item-action py-2  ripple">
                    <i style="padding-right: 12px;" class="fa-solid fa-bezier-curve "></i><span>Sector</span>
                </a>

                <a href="{{ route('position.index') }}" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-solid fa-user-doctor"></i>
                    <span>Position</span>
                </a>

                <a href="training" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                    <span>Training</span>
                </a>
                <a href="course_title" class="list-group-item list-group-item-action py-2  ripple"><i
                    style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                <span>Course </span>
            </a>
                <a href="course_level" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                    <span>Course Level</span>
                </a>


            </div>
        </div>
    </nav>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class=" fas fa-bars"></i>
            </button>
            <div class="container-fluid mx-auto">
                <ul class="navbar-nav">
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                                height="50" alt="Portrait of a Woman" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
