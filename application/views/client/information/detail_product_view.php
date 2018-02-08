<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin sản phẩm cơ bản</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item" style="text-align: center;">
                                    <b><i class="fa fa-globe margin-r-5"></i> Giấy chứng nhận bản quyền/cam kết bản quyền</b>
                                    <br>
                                    <img src="<?php echo base_url('assets/upload/product/'. $product['certificate']); ?>" alt="" style="width: 200px;">
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-globe margin-r-5"></i> Tên SP/dịch vụ/giải pháp/ứng dụng</b> <a class="pull-right"><?php echo $product['name']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Đăng ký tham gia lĩnh vực</b> <a class="pull-right"><?php echo $product['service']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Ngày thương mại hoá/ra mắt dịch vụ</b> <a class="pull-right"><?php echo $product['open_date']; ?></a>
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
                                    <b><i class="fa fa-star margin-r-5"></i> Mô tả các công năng của sản phẩm</b> <a class="pull-right"><?php echo $product['functional']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Các công nghệ và quy trình chất lượng sử dụng để phát triển sản phẩm</b> <a class="pull-right"><?php echo $product['process']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Bảo mật của sản phẩm</b> <a class="pull-right"><?php echo $product['security']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Các ưu điểm nổi trội của SP/GP/DV</b> <a class="pull-right"><?php echo $product['positive']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> So sánh với các SP/GP/DV khác</b> <a class="pull-right"><?php echo $product['compare']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Doanh thu của SP/GP/DV năm 2016, 2017</b> <a class="pull-right"><?php echo $product['income']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Thị phần của SP/giải pháp/DV</b> <a class="pull-right"><?php echo $product['area']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Giá SP/GP/DV</b> <a class="pull-right"><?php echo $product['price']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> 1 số khách hàng tiêu biểu</b> <a class="pull-right"><?php echo $product['customer']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Dịch vụ sau bán hàng</b> <a class="pull-right"><?php echo $product['after_sale']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Đội ngũ phát triển sp/gp</b> <a class="pull-right"><?php echo $product['team']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Các giải thưởng/DH đã nhận được</b> <a class="pull-right"><?php echo $product['award']; ?></a>
                                </li>

                            </ul>
<!--                            --><?php //if(!$submitted || $submitted['is_submit'] != 1): ?>
<!--                                <a href="--><?php //echo base_url('client/information/create_extra'); ?><!--" class="btn btn-primary btn-block"><b>Chỉnh sửa thông tin</b></a>-->
<!--                            --><?php //else: ?>
<!--                                <a href="javascript:void(0);" class="btn btn-danger btn-block" disabled><b>Thông tin đã đăng ký</b></a>-->
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

