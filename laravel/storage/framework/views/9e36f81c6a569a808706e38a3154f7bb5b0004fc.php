<?php $__env->startSection('content'); ?>
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>> <?php echo e($tintuc->TieuDe); ?></small>
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
                        <form action="admin/tintuc/sua/<?php echo e($tintuc->id); ?>" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <p><label>Chọn Thể Loại</label></p>
                                <select class="form-control input-width catefield" name="cate">
                                    <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitietTL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                        <?php if($tintuc->LoaiTin->TheLoai->id == $chitietTL->id): ?>
                                            <?php echo e('selected'); ?>

                                        <?php endif; ?>
                                         value="<?php echo e($chitietTL->id); ?>"><?php echo e($chitietTL->Ten); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Chọn Loại Tin</label></p>
                                <select class="form-control input-width subcatefield" name="sub_cate">
                                    <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitietLT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                        <?php if($tintuc->LoaiTin->id == $chitietLT->id): ?>
                                            <?php echo e('selected'); ?>

                                        <?php endif; ?>
                                         value="<?php echo e($chitietLT->id); ?>"><?php echo e($chitietLT->Ten); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Tiêu Đề</label></p>
                                <input class="form-control input-width" name="article_title" value="<?php echo e($tintuc->TieuDe); ?>" />
                            </div>

                            <div class="form-group">
                                <p><label>Tóm Tắt Nội Dung</label></p>
                                <textarea name="article_desc" id="demo" class="form-control ckeditor" rows="3">
                                    <?php echo e($tintuc->TomTat); ?>

                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Nội Dung Bài Viết</label></p>
                                <textarea name="article_content" id="demo" class="form-control ckeditor" rows="3">
                                    <?php echo e($tintuc->NoiDung); ?>

                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Thêm Hình Ảnh</label></p>
                                <p>
                                    <img width="400px" src="upload/tintuc/<?php echo e($tintuc->Hinh); ?>">
                                </p>
                                <input type="file" class="form-control" name="article_img">
                            </div>

                            <div class="form-group">
                                <p><label>Tin Tức Nổi Bật?</label></p>
                                <label class="radio-inline">
                                    <input name="article_rep" value="1"
                                    <?php if($tintuc->NoiBat == 1): ?>
                                        <?php echo e('checked'); ?>

                                    <?php endif; ?>
                                     type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="article_rep" value="0"
                                    <?php if($tintuc->NoiBat == 0): ?>
                                        <?php echo e('checked'); ?>

                                    <?php endif; ?>
                                     type="radio">Không
                                </label>
                            </div>

                            <button type="submit" class="btn btn-default">Thực hiện</button>
                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên Người Bình Luận</th>
                                <th class="text-center">Nội Dung</th>
                                <th class="text-center">Ngày Đăng</th>
                                <th class="text-center">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $tintuc->Comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($binhluan->id); ?></td>
                                <td><?php echo e($binhluan->User->name); ?></td>
                                <td><?php echo e($binhluan->NoiDung); ?></td>
                                <td><?php echo e(dateTimeFormat($binhluan->created_at)); ?></td>
                                <td class="center">
                                    <i class="fa fa-trash-o  fa-fw"></i>
                                    <input type="hidden" value="<?php echo e($binhluan->id); ?>">

                                    <a href="#" class="btnDel" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal<?php echo e($binhluan->id); ?>">Xóa</a>
                                        
                                        <div style="text-align: left;" id="myModal<?php echo e($binhluan->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Xác Nhận</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bạn muốn xóa Bình luận có nội dung: "<?php echo e($binhluan->NoiDung); ?>"?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" data-casetype="binhluan" class="btn btn-default btnConf">Có</button>
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

                <!-- end row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>