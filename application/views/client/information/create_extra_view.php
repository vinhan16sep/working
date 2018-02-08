<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="">
            <div class="col-lg-10 col-lg-offset-0">
                <div class="col-sm-3 col-md-3 col-sx-12">
                </div>
                <div class="col-sm-9 col-md-9 col-sx-12">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="post">
                                <h4>Thông tin đăng ký tài khoản</h4>
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
            </div>
        </div>
        <div class="row modified-mode">
            <div class="col-lg-10 col-lg-offset-0">
                <div class="form-group">
                    <h1 style="text-align:center;">THÔNG TIN ĐĂNG KÝ</h1>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal'));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Website', 'website');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('website');
                            echo form_input('website', set_value('website'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên người đại diện pháp luật', 'legal_representative');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('legal_representative');
                            echo form_input('legal_representative', set_value('legal_representative'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Chức danh', 'lp_position');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_position');
                            echo form_input('lp_position', set_value('lp_position'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Email', 'lp_email');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_email');
                            echo form_input('lp_email', set_value('lp_email'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Di động', 'lp_phone');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_phone');
                            echo form_input('lp_phone', set_value('lp_phone'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên người liên hệ với BTC', 'connector');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('connector');
                            echo form_input('connector', set_value('connector'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Chức danh', 'c_position');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_position');
                            echo form_input('c_position', set_value('c_position'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Email', 'c_email');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_email');
                            echo form_input('c_email', set_value('c_email'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Di động', 'c_phone');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_phone');
                            echo form_input('c_phone', set_value('c_phone'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Link download PĐK của DN', 'link');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('link');
                            echo form_input('link', set_value('link'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group make-sure">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <p style="color:red;">Chú ý: thông tin đã nhập ở trên sẽ không thể thay đổi sau khi gửi đi.
                                <a class="btn btn-default cancel pull-right" href="javascript:window.history.go(-1);">Quay lại</a></p>
                            <?php
                            echo form_error('link');
                            $js = 'onClick="make_sure()"';
                            echo form_label(form_checkbox('is_submit', '', FALSE, $js) . ' Tôi đã chắc chắn về thông tin bên trên.');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-12 text-right submit-extra-form" style="display:none;">
                    <div class="col-sm-3 col-md-3 col-sx-12">
                    </div>
                    <div class="col-sm-9 col-md-9 col-sx-12">
                        <?php
                        echo form_submit('submit', 'OK', 'class="btn btn-primary pull-left" style="width:40%"');
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    if($('input[name="is_submit"]').is(':checked') === true){
        $('.submit-extra-form').show();
    }else{
        $('.submit-extra-form').hide();
    };

    function make_sure(){
        if($('input[name="is_submit"]').is(':checked') === true){
            $('.submit-extra-form').show();
        }else{
            $('.submit-extra-form').hide();
        }
    }
</script>