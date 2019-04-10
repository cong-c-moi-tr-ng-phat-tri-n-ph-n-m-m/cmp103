<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Danh Sách Thể Loại
        </li>
        <?php $__currentLoopData = $data['theloai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($cate->LoaiTin) > 0): ?>
            <li class="list-group-item menu1 cate-list">
                <?php echo e($cate->Ten); ?>

            </li>
            <ul>
                <?php $__currentLoopData = $cate->LoaiTin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <a href="loai-tin/<?php echo e($subcate->TenKhongDau); ?>"><?php echo e($subcate->Ten); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>