<header class="main-nav <?php if(!auth()->user()): ?> close_icon <?php endif; ?>">
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
                    <?php if(auth()->guard()->guest()): ?>
                     
                    <?php else: ?>
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('admin.dashboard')); ?>" href="<?php echo e(route('admin.dashboard')); ?>"><i data-feather="home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Manage</h6>
                            </div>
                        </li>
                        

                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('books.index')); ?>" href="<?php echo e(route('books.index')); ?>"><i data-feather="book"></i><span>Books</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('visitor-logs.index')); ?>" href="<?php echo e(route('visitor-logs.index')); ?>"><i data-feather="edit"></i><span>Visitor Logs</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('monitor.index')); ?>" href="<?php echo e(route('monitor.index')); ?>"><i data-feather="airplay"></i><span>Material Monitoring</span></a>
                        </li>

                        <li class="sidebar-main-title">
                            <div>
                                <h6>Pages</h6>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('index')); ?>" href="<?php echo e(route('index')); ?>"><i data-feather="globe"></i><span>Welcome</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav <?php echo e(routeActive('borrow')); ?>" href="<?php echo e(route('borrow')); ?>"><i data-feather="book-open"></i><span>Borrow Books</span></a>
                        </li>
                    <?php endif; ?>
                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH F:\xampp\htdocs\Laravel\librarySystem\resources\views/app/layouts/partials/sidebar.blade.php ENDPATH**/ ?>