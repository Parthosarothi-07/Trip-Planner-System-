
<?php $__env->startSection("content"); ?>
    <div class="custom-product">
        <div class="col-sm-4">
            <a href="/">Go Back</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="searched-item">
                        <a href="detail/<?php echo e($item['id']); ?>">
                            <img class="trending-image" src="<?php echo e($item['gallery']); ?>">
                            <div class="">
                                <h2><?php echo e($item['name']); ?></h2>
                                <h5><?php echo e($item['description']); ?></h5>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Us\Desktop\Trip_Planner\resources\views/search.blade.php ENDPATH**/ ?>