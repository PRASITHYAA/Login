<div class="col-lg-3 pt-4 ">
    <div class="container  border 2px solid black">
        <i class="fas fa-tachometer-alt fa-fw me-3"></i> <a class="side-nav" href="{{ route('dashboard') }}">
            Overview</a>
        <hr>
        <i class="fas fa-lock fa-fw me-3"></i> <a class="side-nav" href="{{ route('profile') }}"> Profile</a>
        <hr>
        <i class="fas fa-chart-line fa-fw me-3"></i> <a class="side-nav" href="{{ route('user.careers.list') }}"> Careers</a>
        <hr>
        <i class="fas fa-chart-bar fa-fw me-3"></i> <a class="side-nav" href="{{ route('user.trainings.list') }}"> Training</a>
        <hr>
        <i class="fas fa-chart-pie fa-fw me-3"></i> <a class="side-nav" href="{{ route('change.password') }}"> Password</a>
        <hr>
        <i class="fas fa-globe fa-fw me-3"></i> <a class="side-nav"  href="{{ route('logout') }}"> Logout</a>
    </div>

</div>
