<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Tài khoản</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item" style="height: 80px !important;">
                                    <b style="height: 80px !important;"><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</b> <a class="pull-right"><?php echo $user->company; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $user->email; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-phone margin-r-5"></i> Điện thoại</b> <a class="pull-right"><?php echo $user->phone; ?></a>
                                </li>
                                <li class="list-group-item" style="height: 80px !important;">
                                    <b style="height: 80px !important;"><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</b> <a class="pull-right"><?php echo $user->address; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin khác</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b style="height: 80px !important;"><i class="fa fa-globe margin-r-5"></i> Website</b> <a class="pull-right"><?php echo $submitted['website']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tên người đại diện pháp luật</b> <a class="pull-right"><?php echo $submitted['legal_representative']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Chức danh</b> <a class="pull-right"><?php echo $submitted['lp_position']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $submitted['lp_email']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Di động</b> <a class="pull-right"><?php echo $submitted['lp_phone']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tên người liên hệ với BTC</b> <a class="pull-right"><?php echo $submitted['connector']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Chức danh</b> <a class="pull-right"><?php echo $submitted['c_position']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $submitted['c_email']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Di động</b> <a class="pull-right"><?php echo $submitted['c_phone']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Link download PĐK của DN</b> <a class="pull-right"><?php echo $submitted['link']; ?></a>
                                </li>
                            </ul>
                            <?php if(!$submitted || $submitted['is_submit'] != 1): ?>
                            <a href="<?php echo base_url('client/information/create_extra'); ?>" class="btn btn-primary btn-block"><b>Chỉnh sửa thông tin</b></a>
                            <?php else: ?>
                            <a href="javascript:void(0);" class="btn btn-danger btn-block" disabled><b>Thông tin đã đăng ký</b></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
</div>

