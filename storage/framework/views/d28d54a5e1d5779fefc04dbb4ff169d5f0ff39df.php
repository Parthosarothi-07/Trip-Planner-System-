
<?php $__env->startSection("content"); ?>
    <div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="View">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item <?php echo e($item['id']==1?'active':''); ?>">
                        <a href="detail/<?php echo e($item['id']); ?>">
                            <img class="slider-img" src="<?php echo e($item['gallery']); ?>">
                            <div class="carousel-caption slider-text">
                                <h3><?php echo e($item['name']); ?></h3>
                                <p><?php echo e($item['description']); ?></p>
                            </div>
                        </a>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-wrapper">
            <h3>Recommended Hotels</h3>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="trending-item">
                    <a href="detail/<?php echo e($item['id']); ?>">
                        <img class="trending-image" src="<?php echo e($item['gallery']); ?>">
                        <div class="">
                            <h3><?php echo e($item['name']); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Us\Desktop\Trip_Planner\resources\views/product.blade.php ENDPATH**/ ?>