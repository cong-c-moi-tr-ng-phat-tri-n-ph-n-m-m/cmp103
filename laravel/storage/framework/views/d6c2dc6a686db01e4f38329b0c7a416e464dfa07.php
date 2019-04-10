<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>> Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><?php echo e($err); ?></strong><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <strong><?php echo e(session('error')); ?></strong>
                            </div>
                        <?php endif; ?>

                        <?php if(session('message')): ?>
                            <div class="alert alert-success">
                                <strong><?php echo e(session('message')); ?></strong>
                            </div>
                        <?php endif; ?>
                        <form action="admin/slide/them" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                                <p><label>Tên</label></p>
                                <input type="text" class="form-control input-width" name="slide_name" placeholder="Nhập Tên của Slide" value="<?php echo e(old('slide_name')); ?>" />
                            </div>

                            <div class="form-group">
                                <p><label>Nội Dung</label></p>
                                <textarea name="slide_content" id="demo" class="form-control ckeditor" rows="3">
                                    <?php echo e(old('slide_content')); ?>

                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Đường Dẫn</label></p>
                                <input type="text" class="form-control input-width" name="slide_url" placeholder="Nhập Đường dẫn URL cho Slide (có thể bỏ qua)" value="<?php echo e(old('slide_url')); ?>" />
                            </div>

                            <div class="form-group">
                                <p><label>Thêm Hình Ảnh</label></p>
                                <input type="file" class="form-control" name="slide_img">
                            </div>

                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>