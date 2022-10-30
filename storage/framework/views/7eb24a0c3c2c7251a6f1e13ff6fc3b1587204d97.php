<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="p-md-2 text-center"
        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px; border-bottom: 1.5px solid black">
        Character</h1>

    <div class="row p-md-6">
        <?php $__currentLoopData = $post_character; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 p-3" style="display: flex; flex-wrap: wrap">
                <div class="card" style="border: 1px solid black; ">
                    <img src=<?php echo e($post->character_image); ?> class="card-img-top" alt="character_image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="border-top: 1px solid black;">
                            <?php echo e($post->character_name); ?></h5>
                        <p class="card-text"><?php echo e($post->background); ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Weapon : <?php echo e($post->weapon); ?></li>
                        <li class="list-group-item">Region : <?php echo e($post->region); ?></li>
                        <li class="list-group-item">Vision : <?php echo e($post->vision); ?></li>
                    </ul>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GenshinWeb\resources\views/home.blade.php ENDPATH**/ ?>