<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Trang thông tin: <span style="color:red;"><?php echo $user->company; ?></span></h3>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo site_url('assets/public/img/client.jpg'); ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $user->last_name . ' ' . $user->first_name; ?></h3>

                        <p class="text-muted text-center"><?php echo $user->position; ?></p>

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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin khác</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-clock-o margin-r-5"></i> Thời gian tạo tài khoản</strong>

                        <p class="text-muted">
                            <?php
                                echo date("d-m-Y H:i", $user->created_on);
                            ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-sign-in margin-r-5"></i> Đăng nhập lần cuối</strong>

                        <p class="text-muted">
                            <?php
                            echo date("d-m-Y H:i", $user->last_login);
                            ?>
                        </p>

                        <hr>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin đăng ký</h4>
                            <?php if(!$submitted): ?>
                                <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký</p>
                                <span>
                                    <a href="<?php echo base_url('client/information/create_extra') ?>" class="btn btn-warning btn-block"><b>Nhập thông tin</b></a>
                                </span>
                            <?php else: ?>
                                <a href="<?php echo base_url('client/information/extra') ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>
                                <a href="<?php echo base_url('client/information/edit_extra'); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin</b></a>
<!--                                <p style="color:green;">Doanh nghiệp đã gửi thông tin đăng ký</p>-->
<!--                                <span>-->
<!--                                    <a href="--><?php //echo base_url('client/information/extra') ?><!--" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>-->
<!--                                </span>-->
                            <?php endif; ?>
                        </div>
                        <div class="post">
                            <h4>Thông tin doanh nghiệp</h4>
                            <?php if(!$company_submitted || $company_submitted['is_submit'] == 0): ?>
                                <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký</p>
                                <span>
                                    <a href="<?php echo base_url('client/information/create_company') ?>" class="btn btn-primary btn-block"><b>Chỉnh sửa</b></a>
                                </span>
                            <?php else: ?>
                                <p style="color:green;">Doanh nghiệp đã gửi thông tin đăng ký</p>
                                <span>
                                    <a href="<?php echo base_url('client/information/company') ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="post">
                            <h4>Thông tin sản phẩm/dịch vụ đề cử</h4>
                            <?php if(!$count_product || $count_product < 1): ?>
                                <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin về sản phẩm / dịch vụ</p>
                                <span>
                                    <a href="<?php echo base_url('client/information/create_product') ?>" class="btn btn-primary btn-block"><b>Nhập thông tin</b></a>
                                </span>
                            <?php else: ?>
                                <p style="color:green;">Doanh nghiệp đã đăng ký <?php echo $count_product; ?> sản phẩm / giải pháp / dịch vụ.</p>
                                <span>
                                    <a href="<?php echo base_url('client/information/products') ?>" class="btn btn-success btn-block"><b>Xem thông tin sản phẩm đã đăng ký</b></a>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>

