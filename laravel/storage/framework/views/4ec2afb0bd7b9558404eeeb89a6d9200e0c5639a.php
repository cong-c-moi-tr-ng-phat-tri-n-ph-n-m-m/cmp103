<?php $__env->startSection('content'); ?>
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
				<h1>Chào <?php echo e(Auth::user()->name); ?></h1>
				<div class="col-md-6">
					<div class="panel panel-default calen">
	                    <div class="panel-heading">
	                        <strong style="font-size: 20px;">Lịch</strong>
	                   	</div>
	                    <div class="panel-body">
	                        <p>Hôm nay là: <?php echo e(getWeekDay()); ?>, Ngày <?php echo e(date('d/m/Y')); ?>.</p>
	                        <p>Thời gian hiện tại: <span id="timestamp"></span></p>
	                    </div>
	                </div>
				</div>

				<div class="col-lg-12">
					<div class="panel panel-default calen">
	                    <div class="panel-heading">
	                        <strong style="font-size: 20px;">Danh Sách Bài viết mới cập nhật</strong>
	                   	</div>
	                    <div class="panel-body">
	                    	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                        <thead>
		                            <tr align="center">
		                                <th class="text-center">ID</th>
		                                <th class="text-center">Tiêu Đề</th>
		                                <th class="text-center">Tóm Tắt</th>
		                                <th class="text-center">Thuộc Loại Tin</th>
		                                <th class="text-center">Thuộc Thể Loại</th>
		                                <th class="text-center">Ngày Đăng</th>
		                                <th class="text-center">Số Lượt Xem</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                <tr class="odd gradeX" align="center">
		                                    <td><?php echo e($article->id); ?></td>
		                                    <td><?php echo e($article->TieuDe); ?></td>
		                                    <td><?php echo e($article->TomTat); ?></td>
		                                    <td><?php echo e($article->LoaiTin->Ten); ?></td>
		                                    <td><?php echo e($article->LoaiTin->TheLoai->Ten); ?></td>
		                                    <td>
		                                    	<?php if(empty($article->created_at)): ?>
		                                    		<?php echo e('Không xác định'); ?>

		                                    	<?php else: ?>
		                                    		<?php echo e(dateTimeFormat($article->created_at)); ?>

		                                    	<?php endif; ?>
		                                    </td>
		                                    <td><?php echo e($article->SoLuotXem); ?></td>
		                                </tr>
		                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                        </tbody>
		                    </table>
	                    </div>
	                </div>
					
				</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>