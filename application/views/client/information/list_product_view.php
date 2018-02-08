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
                                    <a><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</a> <p class="pull-right"><?php echo $user->company; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $user->email; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-phone margin-r-5"></i> Điện thoại</a> <p class="pull-right"><?php echo $user->phone; ?></p>
                                </li>
                                <li class="list-group-item" style="height: 80px !important;">
                                    <a><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</a> <p class="pull-right"><?php echo $user->address; ?></p>
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
                            <h4>Danh sách đã đăng ký</h4>
                            <div class="row">
                                <div class="col-lg-12" style="margin-top: 10px;">
                                    <?php
                                    echo '<table class="table table-hover table-bordered table-condensed">';
                                    echo '<tr>';
                                    echo '<td><b>STT</b></td>';
                                    echo '<td><b>Tên SP/dịch vụ/giải pháp/ứng dụng</b></td>';
                                    echo '</tr>';
                                    if (!empty($products)) {
                                        foreach ($products as $key => $product):
                                            echo '<tr>';
                                            echo '<td>' . ($key + 1) . '</td>';
                                            echo '<td><a href="' . base_url('client/information/detail_product/' . $product['id']) . '">' . $product['name'] . '</a></td>';
                                            echo '</tr>';
                                        endforeach;
                                    }else {
                                        echo '<tr class="odd"><td colspan="9">No records</td></tr>';
                                    }
                                    echo '</table>';
                                    ?>
                                    <div class="col-md-6 col-md-offset-5">
                                        <?php echo $page_links; ?>
                                    </div>
                                </div>
                            </div>
<!--                            --><?php //if(!$submitted || $submitted['is_submit'] != 1): ?>
<!--                            <a href="--><?php //echo base_url('client/information/create_extra'); ?><!--" class="btn btn-primary btn-block"><b>Chỉnh sửa thông tin</b></a>-->
<!--                            --><?php //else: ?>
<!--                            <a href="javascript:void(0);" class="btn btn-danger btn-block" disabled><b>Thông tin đã đăng ký</b></a>-->
<!--                            --><?php //endif; ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
</div>

