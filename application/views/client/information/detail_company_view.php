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
                            <h4>Thông tin doanh nghiệp</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b><i class="fa fa-globe margin-r-5"></i> Vốn điều lệ năm 2015 (triệu VND)</b> <a class="pull-right"><?php echo $submitted['equity_2015']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Vốn điều lệ năm 2016 (triệu VND)</b> <a class="pull-right"><?php echo $submitted['equity_2016']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Vốn điều lệ năm 2017 (triệu VND)</b> <a class="pull-right"><?php echo $submitted['equity_2017']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Vốn chủ sở hữu (triệu VND)</b> <a class="pull-right"><?php echo $submitted['owner_equity']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Tổng doanh thu DN</b> <a class="pull-right"><?php echo $submitted['total_income']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm (Triệu VND)</b> <a class="pull-right"><?php echo $submitted['software_income']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Tổng doanh thu dịch vụ CNTT (triệu VND)</b> <a class="pull-right"><?php echo $submitted['it_income']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Tổng DT xuất khẩu (USD)</b> <a class="pull-right"><?php echo $submitted['export_income']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Tổng số lao động của DN</b> <a class="pull-right"><?php echo $submitted['total_labor']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Tổng số LTV</b> <a class="pull-right"><?php echo $submitted['total_ltv']; ?></a>
                                </li>
                                <li class="list-group-item" style="min-height:200px;">
                                    <b><i class="fa fa-link margin-r-5"></i> Giới thiệu chung</b> <a class="pull-right"><?php echo $submitted['description']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> SP dịch vụ chính của DN</b> <a class="pull-right"><?php echo $submitted['main_service']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Thị trường chính</b> <a class="pull-right"><?php echo $submitted['main_market']; ?></a>
                                </li>
                            </ul>
                            <?php if(!$submitted || $submitted['is_submit'] != 1): ?>
                                <a href="<?php echo base_url('client/information/create_company'); ?>" class="btn btn-primary btn-block"><b>Chỉnh sửa thông tin</b></a>
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

