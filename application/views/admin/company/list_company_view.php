<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Danh sách doanh nghiệp</h3><a type="button" href="<?php echo site_url('admin/company/export'); ?>" class="btn btn-success">EXPORT DATA</a>
    </div>

    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <?php if ($companies): ?>
                        <?php $stt = 1; ?>
                        <div class="post">
                            <table class="table">
                                <th>STT</th>
                                <th>Tên Doanh Nghiệp</th>
                                <th style="text-align: center;">Thao Tác</th>
                                <?php foreach ($companies as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $stt++ ?></td>
                                        <td><?php echo $value['company'] ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?php echo base_url('admin/company/detail/' . $value['id']) ?>" class="btn btn-info">Xem chi tiết</a>
                                            <a href="<?php echo base_url('admin/product/index/' . $value['client_id']) ?>" class="btn btn-info">Sản phẩm</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                        <?php else: ?>
                            <div class="post">Chưa có doanh nghiệp đăng ký!</div>
                        <?php endif ?>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div class="col-md-6 col-md-offset-5 page">
                    <?php echo $page_links ?>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>

