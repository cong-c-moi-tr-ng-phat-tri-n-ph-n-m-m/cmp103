<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>> <?php echo e($theloai->Ten); ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/theloai/sua/<?php echo e($theloai->id); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <strong><?php echo e($err); ?></strong><br/>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(session('message')): ?>
                                <div class="alert alert-success">
                                    <strong><?php echo e(session('message')); ?></strong>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <p>
                                    <label>Tên hiện tại của Thể Loại</label>
                                    <input class="form-control input-width" name="current_cate" value="<?php echo e($theloai->Ten); ?>" disabled="true" />
                                </p>

                                <p>
                                    <label>Thay đổi tên Thể Loại</label>
                                    <input class="form-control input-width" name="cate_changed" placeholder="Nhập tên mới cho Thể Loại" />
                                </p>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thực hiện</button>

                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>