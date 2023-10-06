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

                <a href="{{ route('position.index') }}"
                   class="list-group-item list-group-item-action py-2  ripple"><i style="padding-right: 12px;"
                                                                                  class="fa-solid fa-user-doctor"></i>
                    <span>Position</span>
                </a>
                <a href="training" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                    <span>Training</span>
                </a>
                <a href="course_title" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-solid fa-shapes"></i>
                    <span>Course </span>
                </a>

                <a href="course_level" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-solid fa-layer-group"></i>
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
                           id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                           aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                                 class="rounded-circle" height="50" alt="Portrait of a Woman" loading="lazy"/>
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


