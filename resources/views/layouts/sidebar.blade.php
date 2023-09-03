<!--Main Navigation-->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky mt-5">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{ route('admin') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple">
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
            <a href="energy" class="list-group-item list-group-item-action py-2  ripple"><i
                    style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                <span>Energy</span>
            </a>

        </div>
    </div>
</nav>
