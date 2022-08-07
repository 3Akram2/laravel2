

<?php $__env->startSection('title' , 'Home'); ?>

<?php $__env->startSection('content'); ?>

<?php echo e(print_r($req->all())); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3Akram\Desktop\lab2\resources\views/users/store.blade.php ENDPATH**/ ?>