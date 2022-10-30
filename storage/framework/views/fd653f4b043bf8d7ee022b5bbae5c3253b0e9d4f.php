<?php $__env->startSection('title', 'Demo'); ?>

<?php $__env->startSection('content'); ?>

<h1>Character Demo</h1>
<?php $__currentLoopData = $post_demo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1><?php echo e($demo->character_name); ?></h1>
    <video src=<?php echo e($demo->character_demo); ?> controls></video>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GenshinWeb\resources\views/demo.blade.php ENDPATH**/ ?>