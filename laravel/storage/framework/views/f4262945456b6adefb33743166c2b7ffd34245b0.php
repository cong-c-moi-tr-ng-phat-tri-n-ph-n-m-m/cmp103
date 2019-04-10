<?php $__env->startSection('title'); ?>
	Đăng Nhập
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Đăng nhập</h4></div>
				<div class="panel-body">
					
				
					<?php if(session('message')): ?>
						<div class="alert alert-danger">
							<strong><?php echo e(session('message')); ?></strong>
						</div>
					<?php endif; ?>
					<form action="dang-nhap" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div>
                            <label>Email</label>
                            <input type="email" class="form-control input" placeholder="Địa Chỉ Email" name="email" value="<?php echo e(old('email')); ?>"
                            >
                        </div>
                        <?php if($errors->first('email')): ?>
                            <div class="alert alert-danger error-sec">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </div>
                        <?php endif; ?>
                        <br>    
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật Khẩu" name="password">
                        </div>
                        <?php if($errors->first('password')): ?>
                            <div class="alert alert-danger error-sec">
                                <strong><?php echo e($errors->first('password')); ?></strong><br/>
                            </div>
                        <?php endif; ?>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Đăng nhập
                            </button>    
                        </div>
                        <div class="form-group" style="text-align: right; margin-bottom: 3em;">
                            <a href="">Quên Mật Khẩu?</a>    
                        </div>
                    </form>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<!-- end slide -->
</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>