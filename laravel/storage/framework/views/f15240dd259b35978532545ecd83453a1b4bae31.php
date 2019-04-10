<?php $__env->startSection('title'); ?>
	<?php echo e($tintuc->TieuDe); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="container">
	<div class="row">

		<!-- Blog Post Content Column -->
		<div class="col-lg-9">

			<!-- Blog Post -->

			<!-- Title -->
			<h1><?php echo e($tintuc->TieuDe); ?></h1>

			<!-- Author -->
			<p class="lead">
				by <a href="#">Admin</a>
			</p>

			<!-- Preview Image -->
			<img class="img-responsive" src="upload/tintuc/<?php echo e($tintuc->Hinh); ?>" alt="Hình ảnh của bài viết">

			<!-- Date/Time -->
			<p><span class="glyphicon glyphicon-time"></span>
				<?php if(!empty($tintuc->created_at)): ?>
					<?php echo e(dateTimeFormat($tintuc->created_at)); ?>

				<?php else: ?>
					<?php echo e('Không Xác Định'); ?>

				<?php endif; ?>
			</p>
			<hr>

			<!-- Post Content -->
			<p class="lead">
				<?php echo $tintuc->TomTat; ?>

			</p>

			<p>
				<?php echo $tintuc->NoiDung; ?>

			</p>

		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-3">

			<div class="panel panel-default">
				<div class="panel-heading"><b>Tin liên quan</b></div>
				<div class="panel-body">
					<?php $__currentLoopData = $tinlienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tlq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!-- item -->
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-5">
								<a href="tin-tuc/<?php echo e($tlq->TieuDeKhongDau); ?>.html">
									<img class="img-responsive" src="upload/tintuc/<?php echo e($tlq->Hinh); ?>" alt="Hình ảnh của bài viết">
								</a>
							</div>
							<div class="col-md-7">
								<a href="tin-tuc/<?php echo e($tlq->TieuDeKhongDau); ?>.html"><b><?php echo e($tlq->TieuDe); ?></b></a>
							</div>
							<p class="sum-p">
								<?php echo $tlq->TomTat; ?>

							</p>
							<div class="break"></div>
						</div>
						<!-- end item -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><b>Tin nổi bật</b></div>
				<div class="panel-body">
					<?php $__currentLoopData = $tinnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tnb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!-- item -->
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-5">
								<a href="tin-tuc/<?php echo e($tnb->TieuDeKhongDau); ?>.html">
									<img class="img-responsive" src="upload/tintuc/<?php echo e($tnb->Hinh); ?>" alt="Hình ảnh của bài viết">
								</a>
							</div>
							<div class="col-md-7">
								<a href="tin-tuc/<?php echo e($tnb->TieuDeKhongDau); ?>.html"><b><?php echo e($tnb->TieuDe); ?></b></a>
							</div>
							<p class="sum-p">
								<?php echo $tnb->TomTat; ?>

							</p>
							<div class="break"></div>
						</div>
						<!-- end item -->
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