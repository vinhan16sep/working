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
                    <h1 style="text-align:center;">THÔNG TIN DOANH NGHIỆP</h1>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'company-form'));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Vốn điều lệ ( triệu VND)', 'equity_2015');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                            <?php
                            echo form_label('Năm 2015', 'equity_2015');
                            echo form_error('equity_2015');
                            echo form_input('equity_2015', set_value('equity_2015'), 'class="form-control"');
                            ?>
                            </div>
                            <div class="row">
                            <?php
                            echo form_label('Năm 2016', 'equity_2015');
                            echo form_error('equity_2016');
                            echo form_input('equity_2016', set_value('equity_2016'), 'class="form-control"');
                            ?>
                            </div>
                            <div class="row">
                            <?php
                            echo form_label('Năm 2017', 'equity_2015');
                            echo form_error('equity_2017');
                            echo form_input('equity_2017', set_value('equity_2017'), 'class="form-control"');
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Vốn chủ sở hữu (triệu VND)', 'owner_equity');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('owner_equity');
                            echo form_input('owner_equity', set_value('owner_equity'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng doanh thu DN', 'total_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('total_income');
                            echo form_input('total_income', set_value('total_income'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng DT lĩnh vực sx phần mềm (Triệu VND)', 'software_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('software_income');
                            echo form_input('software_income', set_value('software_income'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng doanh thu dịch vụ CNTT (triệu VND)', 'it_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('it_income');
                            echo form_input('it_income', set_value('it_income'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng DT xuất khẩu (USD)', 'export_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('export_income');
                            echo form_input('export_income', set_value('export_income'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng số lao động của DN', 'total_labor');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('total_labor');
                            echo form_input('total_labor', set_value('total_labor'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng số LTV', 'total_ltv');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('total_ltv');
                            echo form_input('total_ltv', set_value('total_ltv'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giới thiệu chung về DN (nêu thông tin về lịch sử hình thành, đội ngũ lãnh đạo DN, định hướng phát triển/chiến lược của DN, thế mạnh của DN...)', 'description');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('description');
                            echo form_textarea('description', set_value('description'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('SP dịch vụ chính của DN', 'main_service');
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

                                echo form_dropdown('main_service', $options, '', 'class="form-control"');

                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Thị trường chính', 'main_market');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12" style="padding-left: 30px;">
                            <strong>Trong nước</strong>
                            <div class="row">
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Thị trường Chính phủ', '', "id='main_market_1'"); ?> Thị trường Chính phủ
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Thị trường doanh nghiệp', '', "id='main_market_2'"); ?> Thị trường doanh nghiệp
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Thị trường người tiêu dùng (TT mass)', '', "id='main_market_3'"); ?> Thị trường người tiêu dùng (TT mass)
                                </label>
                            </div>
                            <br>
                            <strong>Quốc tế</strong>
                            <div class="row">
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Gia công xuất khẩu', '', "id='main_market_4'"); ?> Gia công xuất khẩu
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu SP/Giải pháp', '', "id='main_market_5'"); ?> Xuất khẩu SP/Giải pháp
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu nhân lực CNTT', '', "id='main_market_6'"); ?> Xuất khẩu nhân lực CNTT
                                </label>
                            </div>
                            <div class="row">
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu mục tiêu - Mỹ và các nước Bắc Mỹ', '', "id='main_market_7'"); ?> Xuất khẩu mục tiêu - Mỹ và các nước Bắc Mỹ
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu mục tiêu - Châu Âu', '', "id='main_market_8'"); ?> Xuất khẩu mục tiêu - Châu Âu
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu mục tiêu - Nhật Bản', '', "id='main_market_9'"); ?> Xuất khẩu mục tiêu - Nhật Bản
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu mục tiêu - Các nước trong khu vực', '', "id='main_market_10'"); ?> Xuất khẩu mục tiêu - Các nước trong khu vực
                                </label>
                                &nbsp;&nbsp;&nbsp;
                                <label for="main_market_1">
                                    <?php echo form_radio('main_market', 'Xuất khẩu mục tiêu - Khác (nêu rõ)', '', "id='main_market_11'"); ?> Xuất khẩu mục tiêu - Khác (nêu rõ)
                                </label>
                            </div>
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

    $('#company-form').validate({
        rules: {
            equity_2015: {
                required: true
            },
            equity_2016: {
                required: true
            },
            equity_2017: {
                required: true
            },
            owner_equity: {
                required: true
            },
            total_income: {
                required: true
            },
            software_income: {
                required: true
            },
            it_income: {
                required: true
            },
            export_income: {
                required: true
            },
            total_labor: {
                required: true
            },
            total_ltv: {
                required: true
            },
            description: {
                required: true
            },
            main_market: {
                required: true
            },
            main_service: {
                required: true
            }
        },
        messages :{
            equity_2015: {
                required : 'Cần nhập Vốn điều lệ 2015'
            },
            equity_2016: {
                required: 'Cần nhập Vốn điều lệ 2016'
            },
            equity_2017: {
                required: 'Cần nhập Vốn điều lệ 2017'
            },
            owner_equity: {
                required: 'Cần nhập Vốn chủ sở hữu'
            },
            total_income: {
                required: 'Cần nhập Tổng doanh thu DN'
            },
            software_income: {
                required: 'Cần nhập Tổng DT lĩnh vực sx phần mềm'
            },
            it_income: {
                required: 'Cần nhập Tổng doanh thu dịch vụ CNTT'
            },
            export_income: {
                required: 'Cần nhập Tổng DT xuất khẩu'
            },
            total_labor: {
                required: 'Cần nhập Tổng số lao động của DN'
            },
            total_ltv: {
                required: 'Cần nhập Tổng số LTV'
            },
            description: {
                required: 'Cần nhập Giới thiệu chung'
            },
            main_market: {
                required: 'Cần nhập Thị trường chính'
            },
            main_service: {
                required: 'Cần nhập SP dịch vụ chính của DN'
            }
        }
    });
</script>