

<?php $__env->startSection('title'); ?>Admin - Visitor Logs | Library
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('app.components.admin_breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>View Material</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item">Material Monitoring</li>
<li class="breadcrumb-item active">View</li>
<?php if (isset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a)): ?>
<?php $component = $__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a; ?>
<?php unset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="row">
                        <div class="d-flex justify-content-between col-xl-7 col-md-7 col-8">
                            <a href="<?php echo e(route('monitor.index')); ?>"><i data-feather="arrow-left-circle"></i></a>
                            <h5>Material Details</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8 col-sm-12 offset-lg-2">
                            <form method="POST" action="<?php echo e(route('monitor.update', $monitor->id)); ?>" id="updateForm">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>

                                <div class="row d-flex justify-content-center">
                                    <div class="mb-3 col-sm-6">
                                        <label for="inputEmail4">First Name</label>
                                        <input class="form-control" id="inputEmail4" type="text" name="name" value="<?php echo e(old('name') ?? $monitor->name); ?>">
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
                                        <label for="inputEmail5">Title</label>
                                        <input class="form-control" id="inputEmail5" type="text" name="title" value="<?php echo e(old('title') ?? $monitor->title); ?>">
                                        <?php $__errorArgs = ['title'];
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
                                        <label for="inputPassword7">Status</label>
                                        <input class="form-control" id="inputPassword7" type="text" name="status" value="<?php echo e(old('status') ?? ($monitor->status == 'Lended')? $monitor->status : 'Returned: '.\Carbon\Carbon::parse($monitor->updated_at)->format('M j Y')); ?>" readonly>
                                        <?php $__errorArgs = ['status'];
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
                            </form>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary mx-2" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('updateForm').submit();">Update</a>
                                <?php if($monitor->status == 'Lended'): ?>
                                <a href="javascript:void(0)" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('markupdateForm').submit();">Mark as Returned</a>
                                <?php endif; ?>
                            </div>

                            <form id="markupdateForm" action="<?php echo e(route('monitor.mark-update', $monitor->id)); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/sweet-alert2/sweetalert.all.min.js')); ?>"></script>

<script>
    var submitTypes = '';

    function createData(el){
        var form = document.getElementById('createForm');
        submitTypes = el;
        if(el == 'another'){
            var input = document.createElement('input');
            input.name = 'another';
            input.type = 'hidden';
            form.appendChild(input);
        }
        form.submit();
    }

    function submittedForm(){
        Swal.fire(
            'Created!',
            'Your data has been successfully created.',
            'success'
        ).then((result) => {
            if(result.isConfirmed){
                if(submitTypes == 'create'){
                    window.location = "<?php echo e(route('books.index')); ?>";
                }else{
                    window.location = window.location.pathname;
                }
            }
        })
    }

</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/admin/monitor/show.blade.php ENDPATH**/ ?>