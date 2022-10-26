<header class="main-nav">
    <div class="sidebar-user text-center" >
        <img class="" src="<?php echo e(asset('assets/img/Library.png')); ?>" alt="" width="180px" height="130px" style="border-width: 0px;"/>
        <div style="color: #168eea;">
            <h4>GROUP 2</h4>
            <hr style="height: 3px">
            <h6>LIBRARY MANAGEMENT SYSTEM</h6>
        </div>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav active <?php echo e(routeActive('index')); ?>" href="<?php echo e(route('index')); ?>"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Manage</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/widgets')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Monitoring</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/widgets')); ?>;">
                            <li><a href="<?php echo e(route('general-widget')); ?>" class="<?php echo e(routeActive('general-widget')); ?>">General</a></li>
                            <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">Chart</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH G:\xampp\htdocs\Laravel\librarySystem2\resources\views/app/layouts/partials/sidebar.blade.php ENDPATH**/ ?>