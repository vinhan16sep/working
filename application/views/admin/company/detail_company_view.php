<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Thông tin doanh nghiệp</h3>
    </div>
    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin khác</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b style="height: 80px !important;"><i class="fa fa-globe margin-r-5"></i> Website</b> <a class="pull-right"><?php echo $company['website'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tên người đại diện pháp luật</b> <a class="pull-right"><?php echo $company['legal_representative'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Chức danh</b> <a class="pull-right"><?php echo $company['position'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $company['lp_email'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Di động</b> <a class="pull-right"><?php echo $company['lp_phone'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tên người liên hệ với BTC</b> <a class="pull-right"><?php echo $company['connector'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Chức danh</b> <a class="pull-right"><?php echo $company['c_position'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $company['c_email'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Di động</b> <a class="pull-right"><?php echo $company['c_phone'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Link download PĐK của DN</b> <a class="pull-right"><?php echo $company['link'] ?></a>
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
                                    <b><i class="fa fa-globe margin-r-5"></i> Vốn điều lệ năm 2015 (triệu VND)</b> <a class="pull-right"><?php echo $company['equity_2015'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Vốn điều lệ năm 2016 (triệu VND)</b> <a class="pull-right"><?php echo $company['equity_2016'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Vốn điều lệ năm 2017 (triệu VND)</b> <a class="pull-right"><?php echo $company['equity_2017'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Vốn chủ sở hữu (triệu VND)</b> <a class="pull-right"><?php echo $company['owner_equity'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Tổng doanh thu DN</b> <a class="pull-right"><?php echo $company['total_income'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-user margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm (Triệu VND)</b> <a class="pull-right"><?php echo $company['software_income'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-star margin-r-5"></i> Tổng doanh thu dịch vụ CNTT (triệu VND)</b> <a class="pull-right"><?php echo $company['it_income'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-envelope margin-r-5"></i> Tổng DT xuất khẩu (USD)</b> <a class="pull-right"><?php echo $company['export_income'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-mobile margin-r-5"></i> Tổng số lao động của DN</b> <a class="pull-right"><?php echo $company['total_labor'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Tổng số LTV</b> <a class="pull-right"><?php echo $company['total_ltv'] ?></a>
                                </li>
                                <li class="list-group-item" style="min-height:200px;">
                                    <b><i class="fa fa-link margin-r-5"></i> Giới thiệu chung</b> <a class="pull-right"><?php echo $company['description'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> SP dịch vụ chính của DN</b> <a class="pull-right"><?php echo $company['main_service'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-link margin-r-5"></i> Thị trường chính</b> <a class="pull-right"><?php echo $company['main_market'] ?></a>
                                </li>
                            </ul>
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

