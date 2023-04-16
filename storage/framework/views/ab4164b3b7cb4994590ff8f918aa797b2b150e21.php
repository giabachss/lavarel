<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
        <div class="row pt-5">
            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4">
                <img src = "/storage/<?php echo e($post->image); ?>" class="w-100">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <img src = "https://tse3.mm.bing.net/th?id=OIP.gOECfnl0ky0NKan2XcXyYwHaFk&pid=Api&P=0" class="w-100">
            </div>
            <div class="col-4">
                <img src = "https://images.hdqwalls.com/wallpapers/cute-kitten-4k-im.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src = "http://images4.fanpop.com/image/photos/16100000/Cute-Kitten-kittens-16122061-1280-800.jpg" class="w-100">
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ass1\resources\views/home.blade.php ENDPATH**/ ?>