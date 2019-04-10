<?php $__env->startSection('title'); ?>
    <?php echo e($loaitin->Ten); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <?php echo $__env->make('block.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b><?php echo e($loaitin->Ten); ?></b></h4>
                </div>

                <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitiet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="tin-tuc/<?php echo e($chitiet->TieuDeKhongDau); ?>.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="upload/tintuc/<?php echo e($chitiet->Hinh); ?>" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3><a href="tin-tuc/<?php echo e($chitiet->TieuDeKhongDau); ?>.html"><?php echo e($chitiet->TieuDe); ?></a></h3>
                            <p><?php echo $chitiet->TomTat; ?></p>
                            <a class="btn btn-primary" href="tin-tuc/<?php echo e($chitiet->TieuDeKhongDau); ?>.html">Xem Thêm.. <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Pagination -->
                <div class="row text-center">
                    <?php echo e($tintuc->links()); ?>

                </div>
                <!-- /.row -->

            </div>
        </div> 

    </div>

</div>
<!-- end Page Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>