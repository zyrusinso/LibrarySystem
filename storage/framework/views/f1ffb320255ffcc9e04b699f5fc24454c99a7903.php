<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <?php echo e($breadcrumb_title ?? ''); ?>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
              <?php echo e($slot ?? ''); ?>

          </ol>
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li>
                <a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group form-control-search">
                    <input type="text" placeholder="Search..">
                  </div>
                </form>
              </li>
            </ul>
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div><?php /**PATH F:\xampp\htdocs\Laravel\librarySystem\resources\views/app/components/breadcrumb.blade.php ENDPATH**/ ?>