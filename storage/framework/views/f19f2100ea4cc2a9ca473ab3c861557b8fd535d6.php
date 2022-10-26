

<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/whether-icon.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('app.components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>Dashboard</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item active">Dashboard</li>
<?php if (isset($__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e)): ?>
<?php $component = $__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e; ?>
<?php unset($__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 box-col-12 des-xl-50 profile-greeting-width">
            <div class="card profile-greeting">
                <div class="card-header">
                    <div class="header-top">

                    </div>
                </div>
                <div class="card-body text-center p-t-0">
                    <h3 class="font-light">Welcome back <?php echo e(auth()->user()->name); ?>!</h3>
                    <p>Welcome to the Quezon City University Library!</p>
                        <a href="#" class="btn btn-light">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/general-widget.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/admin/app.blade.php ENDPATH**/ ?>