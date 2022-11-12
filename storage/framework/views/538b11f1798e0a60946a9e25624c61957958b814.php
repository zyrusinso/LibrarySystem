<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Library System for QCU to help in monitoring and management of books and visitors.">
    <meta name="keywords" content="library, Quezon City University, QCU, Library System, System">
    <meta name="author" content="zyrusinso">
    <link rel="icon" href="<?php echo e(asset('assets/img/Library.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/Library.png')); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Google font-->
    
    <?php if ($__env->exists('app.layouts.partials.js-init')) echo $__env->make('app.layouts.partials.js-init', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Font Awesome-->
    <?php if ($__env->exists('app.layouts.partials.css')) echo $__env->make('app.layouts.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <?php if ($__env->exists('app.layouts.partials.header')) echo $__env->make('app.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <?php if ($__env->exists('app.layouts.partials.sidebar')) echo $__env->make('app.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body" style="margin-top: 20px">
          <!-- Container-fluid starts-->
          <?php echo $__env->yieldContent('content'); ?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright <?php echo e(date('Y')); ?>-<?php echo e(date('y', strtotime('+1 year'))); ?> © <a href="https://zyrusinso.me" target="_blank">ZYRUSINSO</a> All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-primary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <?php if ($__env->exists('app.layouts.partials.js')) echo $__env->make('app.layouts.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/layouts/master.blade.php ENDPATH**/ ?>