<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php  
                    $i=0;
                ?>
                <?php $__currentLoopData = $data['slide']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($i); ?>" 
                    <?php if($i == 0): ?>
                        class="active"
                    <?php endif; ?>
                    ></li>
                    <?php
                        $i++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <div class="carousel-inner">
                <?php  
                    $i=0;
                ?>
                <?php $__currentLoopData = $data['slide']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item 
                <?php if($i == 0): ?>
                    <?php echo e('active'); ?>

                <?php endif; ?>
                ">
                <?php 
                    $i++; 
                ?>
                    <img class="slide-image" src="upload/slide/<?php echo e($slide->Hinh); ?>" alt="<?php echo e($slide->NoiDung); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<!-- end slide -->