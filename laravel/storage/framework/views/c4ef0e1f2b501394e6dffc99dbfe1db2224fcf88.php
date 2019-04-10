<?php $__env->startSection('content'); ?>
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý Người Dùng
                            <small>> Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Quyền</th>
                                <th class="text-center">Ngày Tạo</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitiet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                    <td><?php echo e($chitiet->id); ?></td>
                                    <td><?php echo e($chitiet->name); ?></td>
                                    <td><?php echo e($chitiet->email); ?></td>
                                    <td>
                                        <?php if($chitiet->quyen == 1): ?>
                                            <?php echo e('Admin'); ?>

                                        <?php else: ?>
                                            <?php echo e('Tài khoản thường'); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(dateTimeFormat($chitiet->created_at)); ?></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/<?php echo e($chitiet->id); ?>">Sửa</a></td>
                                    <td class="center">
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                        <input type="hidden" value="<?php echo e($chitiet->id); ?>">
                                        <a href="#" class="btnDel" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal<?php echo e($chitiet->id); ?>">Xóa</a>
                                        
                                        <div style="text-align: left;" id="myModal<?php echo e($chitiet->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Xác Nhận</h4>
                                                    </div>
            
                                                    <div class="modal-footer">
                                                        <button type="button" data-casetype="user" class="btn btn-default btnConf">Có</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>