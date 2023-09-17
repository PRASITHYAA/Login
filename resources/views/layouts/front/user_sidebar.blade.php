<nav id="sidebarMenu" class="collapse d-lg-block  collapse bg-white">

    <div class="position-sticky">
        <div class="list-group  mx-4 mt-4">
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action py-2 ripple"
               aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span> Overview</span>
            </a>

            <a href="{{ route('profile') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-lock fa-fw me-3"></i><span>Profile</span></a>
            <a href="{{ route('user.careers.list') }}"
               class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-chart-line fa-fw me-3"></i><span>Careers</span></a>
            <a href="{{ route('user.trainings.list') }}"
               class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-chart-bar fa-fw me-3"></i><span>Training</span></a>
            <a href="{{ route('change.password') }}"
               class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-pie fa-fw me-3"></i><span> Password</span>
            </a>


            <a href="{{ route('logout') }}"
               class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-globe fa-fw me-3"></i><span>Logout</span></a>
            <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
  class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
<a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
  class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
<a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
  class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
<a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
  class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a> -->
        </div>
    </div>


</nav>
