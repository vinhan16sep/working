<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .error{
        color: red;
    }
</style>
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row modified-mode">
            <div class="col-lg-10 col-lg-offset-0">
                <div class="form-group">
                    <h1 style="text-align:center;">THÔNG TIN SẢN PHẨM</h1>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'product-form'));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên SP/dịch vụ/giải pháp/ứng dụng', 'name');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('name');
                            echo form_input('name', set_value('name'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Đăng ký tham gia lĩnh vực', 'service');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            $options = array(
                                '' => '-- Chọn một dịch vụ --',
                                'Chính phủ điện tử' => 'Chính phủ điện tử',
                                'Ngành y tế' => 'Ngành y tế',
                                'Ngành giáo dục' => 'Ngành giáo dục',
                                'Giao thông' => 'Giao thông',
                                'Xây dựng' => 'Xây dựng',
                                'Các lĩnh vực sản xuất/dịch vụ cho DN' => 'Các lĩnh vực sản xuất/dịch vụ cho DN',
                                'Nội dung số và giải trí điện tử' => 'Nội dung số và giải trí điện tử',
                                'Viễn thông' => 'Viễn thông',
                                'Bảo mật an toàn thông tin' => 'Bảo mật an toàn thông tin',
                                'Tư vấn' => 'Tư vấn'
                            );

                            echo form_dropdown('service', $options, '', 'class="form-control"');

                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Mô tả các công năng của sản phẩm', 'functional');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('functional');
                            echo form_textarea(array(
                                'name' => 'functional',
                                'id' => 'functional',
                                'value' => set_value('functional'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các công nghệ và quy trình chất lượng sử dụng để phát triển sản phẩm', 'process');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('process');
                            echo form_textarea(array(
                                'name' => 'process',
                                'id' => 'process',
                                'value' => set_value('process'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Bảo mật của sản phẩm', 'security');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('security');
                            echo form_textarea(array(
                                'name' => 'security',
                                'id' => 'security',
                                'value' => set_value('security'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các ưu điểm nổi trội của SP/GP/DV', 'positive');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('positive');
                            echo form_textarea(array(
                                'name' => 'positive',
                                'id' => 'positive',
                                'value' => set_value('positive'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('So sánh với các SP/GP/DV khác', 'compare');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('compare');
                            echo form_textarea(array(
                                'name' => 'compare',
                                'id' => 'compare',
                                'value' => set_value('compare'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Doanh thu của SP/GP/DV năm 2016, 2017', 'income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('income');
                            echo form_input('income', set_value('income'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Thị phần của SP/giải pháp/DV', 'area');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('area');
                            echo form_textarea(array(
                                'name' => 'area',
                                'id' => 'area',
                                'value' => set_value('area'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Ngày thương mại hoá/ra mắt dịch vụ', 'open_date');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('open_date');
                            echo form_input('open_date', set_value('open_date'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giá SP/GP/DV', 'price');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('price');
                            echo form_input('price', set_value('price'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('1 số khách hàng tiêu biểu', 'customer');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('customer');
                            echo form_textarea(array(
                                'name' => 'customer',
                                'id' => 'customer',
                                'value' => set_value('customer'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Dịch vụ sau bán hàng', 'after_sale');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('after_sale');
                            echo form_textarea(array(
                                'name' => 'after_sale',
                                'id' => 'after_sale',
                                'value' => set_value('after_sale'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Đội ngũ phát triển sp/gp (bao nhiêu người, trình độ, trong bao lâu...)', 'team');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('team');
                            echo form_textarea(array(
                                'name' => 'team',
                                'id' => 'team',
                                'value' => set_value('team'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các giải thưởng/DH đã nhận được', 'award');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('award');
                            echo form_textarea(array(
                                'name' => 'award',
                                'id' => 'award',
                                'value' => set_value('award'),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giấy chứng nhận bản quyền/cam kết bản quyền', 'certificate');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('certificate');
                            echo form_upload('certificate', set_value('certificate'), 'class="form-control"');
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

    $('#product-form').validate({
        rules: {
            name: {
                required: true
            },
            service: {
                required: true
            },
            functional: {
                required: true
            },
            process: {
                required: true
            },
            security: {
                required: true
            },
            positive: {
                required: true
            },
            compare: {
                required: true
            },
            income: {
                required: true
            },
            area: {
                required: true
            },
            open_date: {
                required: true
            },
            price: {
                required: true
            },
            customer: {
                required: true
            },
            after_sale: {
                required: true
            },
            team: {
                required: true
            },
            award: {
                required: true
            },
            certificate: {
                required: true
            }
        },
        messages :{
            name: {
                required : 'Cần nhập Tên SP/dịch vụ/giải pháp/ứng dụng'
            },
            service: {
                required: 'Cần nhập lĩnh vực'
            },
            certificate: {
                required: 'Cần nhập công năng của sản phẩm'
            },
            process: {
                required: 'Cần nhập công nghệ và quy trình chất lượng'
            },
            security: {
                required: 'Cần nhập Bảo mật của sản phẩm'
            },
            positive: {
                required: 'Cần nhập Các ưu điểm nổi trội'
            },
            compare: {
                required: 'Cần nhập phần So sánh'
            },
            income: {
                required: 'Cần nhập Doanh thu của SP/GP/DV năm 2016, 2017'
            },
            area: {
                required: 'Thị phần của SP/giải pháp/DV'
            },
            open_date: {
                required: 'Ngày thương mại hoá/ra mắt dịch vụ'
            },
            price: {
                required: 'Cần nhập Giá SP/GP/DV'
            },
            customer: {
                required: 'Cần nhập 1 số khách hàng tiêu biểu'
            },
            after_sale: {
                required: 'Cần nhập Dịch vụ sau bán hàng'
            },
            team: {
                required : 'Cần nhập Đội ngũ phát triển'
            },
            award: {
                required: 'Cần nhập Các giải thưởng/DH đã nhận được'
            },
            certificate: {
                required: 'Cần nhập Giấy chứng nhận bản quyền/cam kết bản quyền'
            }
        }
    });
</script>