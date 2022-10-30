<?php $__env->startSection('title', 'Region'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="p-md-3">Teyvat</h1>
        <?php $__currentLoopData = $post_region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                    <img src=<?php echo e($post->region_image); ?> class="card-img-top" alt="region_image">
                    <div class="card-body"  style="border: 3px solid black">
                        <h5 class="card-title fs-1 text-center"  style="border-bottom: 1.5px solid black"><?php echo e($post->region_name); ?></h5>
                        <p class="card-text fs-3"><?php echo e($post->region_description); ?></p>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GenshinWeb\resources\views/region.blade.php ENDPATH**/ ?>