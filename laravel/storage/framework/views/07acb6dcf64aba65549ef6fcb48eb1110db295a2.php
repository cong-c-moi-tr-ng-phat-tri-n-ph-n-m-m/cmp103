<?php $__env->startSection('title'); ?>
    Trang Chủ
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<!-- Page Content -->
    <div class="container">

        <?php echo $__env->make('block.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="space20"></div>


        <div class="row main-left">
            <?php echo $__env->make('block.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
                    </div>

                    <div class="panel-body">
                        <?php $__currentLoopData = $data['theloai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theloai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($theloai->LoaiTin) > 0): ?>
                            <!-- item -->
                            <div class="row-item row">
                                <h3>
                                    <a class="cate-list"><?php echo e($theloai->Ten); ?></a> |  
                                    <?php $__currentLoopData = $theloai->LoaiTin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loaitin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <small><a href="loai-tin/<?php echo e($loaitin->TenKhongDau); ?>"><i><?php echo e($loaitin->Ten); ?></i></a>/</small>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </h3>
                                <?php
                                    $data = $theloai->TinTuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
                                    $chosen_article = $data->shift();
                                ?>
                                <div class="col-md-8 border-right">
                                    <div class="col-md-5">
                                        <a href="tin-tuc/<?php echo e($chosen_article['TieuDeKhongDau']); ?>.html">
                                            <img class="img-responsive" src="upload/tintuc/<?php echo e($chosen_article['Hinh']); ?>" alt="Hình ảnh đại diện của bài viết">
                                        </a>
                                    </div>

                                    <div class="col-md-7">
                                        <h3><a href="tin-tuc/<?php echo e($chosen_article['TieuDeKhongDau']); ?>.html"><?php echo e($chosen_article['TieuDe']); ?></a></h3>
                                        <p><?php echo $chosen_article['TomTat']; ?></p>
                                        <a class="btn btn-primary" href="tin-tuc/<?php echo e($chosen_article['TieuDeKhongDau']); ?>.html">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>

                                </div>
                                

                                <div class="col-md-4">
                                    <?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remaining_article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="tin-tuc/<?php echo e($remaining_article['TieuDeKhongDau']); ?>.html">
                                            <h4>
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                <?php echo e($remaining_article['TieuDe']); ?>

                                            </h4>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>