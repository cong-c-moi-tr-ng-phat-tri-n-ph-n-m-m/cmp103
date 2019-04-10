<?php $__env->startSection('title'); ?>
	Đăng Ký
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
			<div class="panel-heading"><h4>Đăng ký tài khoản</h4></div>
				<div class="panel-body">
					<?php if(count($errors) > 0): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger">
                                <strong><?php echo e($err); ?></strong><br/>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
				
					<?php if(session('message')): ?>
						<div class="alert alert-success">
							<strong><?php echo e(session('message')); ?></strong>
						</div>
					<?php endif; ?>
					<form method="POST" action="dang-ky-tai-khoan">
						<?php echo e(csrf_field()); ?>

						<div>
							<label>Tên Người Dùng</label>
							<input type="text" class="form-control" placeholder="Nhập tên của bạn" name="username" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Địa Chỉ Email</label>
							<input type="email" class="form-control" placeholder="Nhập Địa Chỉ Email" name="email" aria-describedby="basic-addon1"
							>
						</div>
						<br>	
						<div>
							<label>Mật khẩu</label>
							<input type="password" class="form-control" name="password" aria-describedby="basic-addon1" placeholder="Nhập Mật Khẩu">
						</div>
						<br>
						<div>
							<label>Xác Nhận mật khẩu</label>
							<input type="password" class="form-control" name="password_again" aria-describedby="basic-addon1" placeholder="Nhập lại Mật Khẩu">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Đăng Ký
						</button>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<!-- end slide -->
</div>
<!-- end Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>