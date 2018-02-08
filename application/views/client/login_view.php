<div class="content-wrapper" style="min-height: 916px; margin-left: 0px !important;">
    <section class="content row">
        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Client Login</h1>
                <?php echo $this->session->flashdata('login_message'); ?>
                <?php echo form_open('client/user/login', array('class' => 'form-horizontal')); ?>
                <div class="form-group">
                    <?php echo form_label('Email', 'identity'); ?>
                    <?php echo form_error('identity'); ?>
                    <?php echo form_input('identity', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Mật khẩu', 'password'); ?>
                    <?php echo form_error('password'); ?>
                    <?php echo form_password('password', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label>
                        <?php echo form_checkbox('remember', '1', FALSE); ?> Remember me
                    </label>
                </div>
                <?php echo form_submit('login', 'Đăng nhập', 'class="btn btn-primary btn-lg btn-block"'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Or client register</h1>
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open('client/user/register', array('class' => 'form-horizontal')); ?>
                <div class="form-group">
                    <?php echo form_label('Họ: ', 'last_name'); ?>
                    <?php echo form_error('last_name'); ?>
                    <?php echo form_input('last_name', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Tên: ', 'first_name'); ?>
                    <?php echo form_error('first_name'); ?>
                    <?php echo form_input('first_name', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Chức danh: ', 'position'); ?>
                    <?php echo form_error('position'); ?>
                    <?php echo form_input('position', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Công ty: ', 'companyname'); ?>
                    <?php echo form_error('companyname'); ?>
                    <?php echo form_input('companyname', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Tên đăng nhập: ', 'username'); ?>
                    <?php echo form_error('username'); ?>
                    <?php echo form_input('username', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Email: ', 'email'); ?>
                    <?php echo form_error('email'); ?>
                    <?php echo form_input('email', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Điện thoại: ', 'phone'); ?>
                    <?php echo form_error('phone'); ?>
                    <?php echo form_input('phone', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Mật khẩu: ', 'register_password'); ?>
                    <?php echo form_error('register_password'); ?>
                    <?php echo form_password('register_password', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Xác nhận mật khẩu: ', 'password_confirm'); ?>
                    <?php echo form_error('password_confirm'); ?>
                    <?php echo form_password('password_confirm', '', 'class="form-control"'); ?>
                </div>
                <?php echo form_submit('register', 'Đăng ký', 'class="btn btn-primary btn-lg btn-block"'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>