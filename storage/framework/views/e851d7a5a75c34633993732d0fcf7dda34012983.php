

<?php $__env->startSection('title'); ?>Welcome | Library
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
<h3>Welcome</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item active">Welcome</li>
<?php if (isset($__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e)): ?>
<?php $component = $__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e; ?>
<?php unset($__componentOriginal92624f1dca2be584660e014e1cac83b9a723652e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row" <?php if(auth()->user()): ?> style="display: none" <?php endif; ?>>
        <div class="col-xl-12 col-md-12 box-col-12 des-xl-50 profile-greeting-width">
            <div class="card profile-greeting">
                <div class="card-header">
                    <div class="header-top">

                    </div>
                </div>
                <div class="card-body text-center p-t-0">
                    <h3 class="font-light">Welcome to Library!!</h3>
                    <p>Welcome to the Quezon City University Library! we are glad that you are visite the library. we will be happy to
                        help you on what is your purpose in visiting library.</p>
                        <a href="<?php echo e(route('borrow')); ?>" class="btn btn-light">Borrow Book</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
            <h5>Visitors Details</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8 col-sm-12 offset-lg-2">
                    <form method="POST" action="<?php echo e(route('visitor-logs.store')); ?>" id="visitorsForm">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="inputEmail4">First Name</label>
                                <input class="form-control" id="inputEmail4" type="text" name="fname" value="<?php echo e(old('fname')); ?>">
                                <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputPassword4">Last Name</label>
                                <input class="form-control" id="inputPassword4" type="text" name="lname" value="<?php echo e(old('lname')); ?>">
                                <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputEmail5">Phone</label>
                                <input class="form-control" id="inputEmail5" type="text" name="phone" value="<?php echo e(old('phone')); ?>">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputPassword7">Email Address</label>
                                <input class="form-control" id="inputPassword7" type="email" name="email" value="<?php echo e(old('email')); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputAddress5">Address</label>
                                <input class="form-control" id="inputAddress5" type="text" name="address" value="<?php echo e(old('address')); ?>">
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputAddress6">Postal Code</label>
                                <input class="form-control" id="inputAddress6" type="number" name="postal" value="<?php echo e(old('postal')); ?>">
                                <?php $__errorArgs = ['postal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputAddress6">Teacher/Student ID</label>
                                <input class="form-control" id="inputAddress6" type="text" name="stud_id" value="<?php echo e(old('stud_id')); ?>">
                                <?php $__errorArgs = ['stud_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="inputAddress6">Course</label>
                                <input class="form-control" id="inputAddress6" type="text" name="course" value="<?php echo e(old('course')); ?>">
                                <?php $__errorArgs = ['course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-sm-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" id="gridCheck" type="checkbox" name="terms" <?php echo e(old('terms')? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="gridCheck">Agree to the <a href="#">terms and conditions</a></label>
                                    <?php $__errorArgs = ['terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="display: block !important"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="order-place d-flex justify-content-center">
                            <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('visitorsForm').submit()">Submit</button>
                        </div>
                    </form>
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
<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Laravel\librarySystem\resources\views/app/welcome.blade.php ENDPATH**/ ?>