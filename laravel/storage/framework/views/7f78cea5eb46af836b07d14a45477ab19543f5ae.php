<?php $__env->startSection('content'); ?>
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý Người Dùng
                            <small>> <?php echo e($user->name); ?></small>
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="admin/user/sua/<?php echo e($user->id); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <p><label>Tên Người Dùng</label></p>
                                <input class="form-control input-width" type="text" name="username" placeholder="Nhập tên người dùng" value="<?php echo e($user->name); ?>" />
                            </div>

                            <div class="form-group">
                                <p><label>Email</label></p>
                                <input class="form-control input-width" type="email" name="email" placeholder="Nhập địa chỉ Email" value="<?php echo e($user->email); ?>" readonly="" />
                            </div>

                            <div class="form-group">
                                <p><label>Bạn có muốn thay đổi mật khẩu?</label></p>
                                <p>
                                    <label class="radio-inline">
                                        <input name="change_password" id="yes" class="radio-change" value="1"
                                         type="radio"><span for="yes">Có</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input name="change_password" id="no" class="radio-change" value="0"
                                         type="radio" checked=""><span for="no">Không</span>
                                    </label>
                                </p>
                                <input class="form-control input-width disabled-field" type="password" name="password" placeholder="Nhập mật khẩu" disabled="" />
                            </div>

                            <div class="form-group">
                                <p><label>Xác nhận Mật khẩu</label></p>
                                <input class="form-control input-width disabled-field" type="password" name="password_again" placeholder="Nhập lại mật khẩu" disabled="" />
                            </div>

                            <div class="form-group">
                                <p><label>Phân Quyền Tài Khoản</label></p>
                                <label class="radio-inline">
                                    <input name="account_type" value="0"
                                    <?php if($user->quyen == 0): ?>
                                        <?php echo e('checked'); ?>

                                    <?php endif; ?>
                                     type="radio">Tài khoản thường
                                </label>
                                <label class="radio-inline">
                                    <input name="account_type" value="1" 
                                    <?php if($user->quyen == 1): ?>
                                        <?php echo e('checked'); ?>

                                    <?php endif; ?>
                                     type="radio">Admin
                                </label>
                            </div>

                            <button type="submit" class="btn btn-default">Thực Hiện</button>
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