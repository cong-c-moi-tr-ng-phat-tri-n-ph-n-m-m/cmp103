<?php $__env->startSection('content'); ?>
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
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
                        <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <p><label>Chọn Thể Loại</label></p>
                                <select class="form-control input-width catefield" name="cate">
                                    <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitietTL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($chitietTL->id); ?>"><?php echo e($chitietTL->Ten); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Chọn Loại Tin</label></p>
                                <select class="form-control input-width subcatefield" name="sub_cate">
                                    <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitietLT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($chitietLT->id); ?>"><?php echo e($chitietLT->Ten); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Tiêu Đề</label></p>
                                <input type="text" class="form-control input-width" name="article_title" placeholder="Nhập Tiêu Đề Tin Tức" value="<?php echo e(old('article_title')); ?>" />
                            </div>

                            <div class="form-group">
                                <p><label>Tóm Tắt Nội Dung</label></p>
                                <textarea name="article_desc" id="demo" class="form-control ckeditor" rows="3">
                                    <?php echo e(old('article_desc')); ?>

                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Nội Dung Bài Viết</label></p>
                                <textarea name="article_content" id="demo" class="form-control ckeditor" rows="3">
                                    <?php echo e(old('article_content')); ?>

                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Thêm Hình Ảnh</label></p>
                                <input type="file" class="form-control" name="article_img">
                            </div>

                            <div class="form-group">
                                <p><label>Tin Tức Nổi Bật?</label></p>
                                <label class="radio-inline">
                                    <input name="article_rep" value="1" checked="" type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="article_rep" value="0" type="radio">Không
                                </label>
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