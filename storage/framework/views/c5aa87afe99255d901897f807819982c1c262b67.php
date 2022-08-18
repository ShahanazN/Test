



<?php $__env->startSection('content'); ?>

<p> WELCOME </p>
 <?php echo e((Auth::user()->name)); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sample projects\salford\resources\views/home.blade.php ENDPATH**/ ?>