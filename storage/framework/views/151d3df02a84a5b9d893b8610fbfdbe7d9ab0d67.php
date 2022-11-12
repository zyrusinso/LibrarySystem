

<?php $__env->startSection('title'); ?>Admin - Books | Library
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('app.components.admin_breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>Books</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item active">Books</li>
<?php if (isset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a)): ?>
<?php $component = $__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a; ?>
<?php unset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Books</h5>
                    <a class="btn btn-primary" href="<?php echo e(route('books.create')); ?>">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Year</th>
                                    <th>Avail Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($books->count() > 0): ?>
                                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($item->title); ?></td>
                                            <td><?php echo e($item->author); ?></td>
                                            <td><?php echo e($item->year); ?></td>
                                            <td><?php echo e($item->avail_stock); ?></td>
                                            <td width="30%">
                                                <a href="<?php echo e(route('books.show', $item->id)); ?>" class="btn btn-secondary">Edit</a>
                                                <a href="#" class="btn btn-danger deleteBtn" data-id="<?php echo e($item->id); ?>" onclick="deleteData(this)">Delete</a>
                                            </td>
                                            <form id="deleteDataForm<?php echo e($item->id); ?>" action="<?php echo e(route('books.destroy', $item->id)); ?>" method="POST" class="d-none" onsubmit="event.preventDefault();">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                            </form>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <th class="text-center text-white" colspan="10" style="background-color: #111727;">
                                            No Data Found
                                        </th>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/sweet-alert2/sweetalert.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>

<script>
    $('#myTable').DataTable({
        "paging":   true,
        "ordering": true,
        "info":     true
    });
</script>

<script>
    function deleteData(el){
        var form = document.getElementById('deleteDataForm'+el.dataset.id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your data has been deleted.',
                    'success'
                ).then((result) => {
                    if(result.isConfirmed){
                        form.submit();
                        // window.location = window.location.pathname;
                    }
                })
            }
        })
    }
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/admin/books/index.blade.php ENDPATH**/ ?>