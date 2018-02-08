<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content row">
        <a type="button" href="<?php echo site_url('admin/users/create'); ?>" class="btn btn-primary">THÊM MỚI</a>
        <div class="container col-md-12">
            <div>
                <span><?php echo $this->session->flashdata('message'); ?></span>
            </div>
            <?php if ($users): ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        <table class="table table-hover table-bordered table-condensed admin">
                            <tr>
                                <td><b><a href="#">Username</a></b></td>
                                <td><b><a href="#">Họ tên</a></b></td>
                                <td><b><a href="#">Công ty / Nơi làm việc</a></b></td>
                                <td><b><a href="#">Điện thoại</a></b></td>
                                <td><b><a href="#">Email</a></b></td>
                                <td><b>Quản lý</b></td>
                            </tr>

                            <?php foreach ($users as $user): ?>

                                <tr class="row_<?php echo $user->id; ?>">
                                    <td><?php echo $user->username; ?></td>
                                    <td><?php echo $user->first_name . ' ' . $user->last_name; ?></td>
                                    <td><?php echo $user->company; ?></td>
                                    <td><?php echo $user->phone; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td>
                                        <form class="form_ajax">
                                            <a href="<?php echo base_url('admin/users/edit/' . $user->id); ?>" title="Chỉnh sửa">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            &nbsp&nbsp
                                            <a href="javascript:void(0);" onclick="deleteItem(<?php echo $user->id; ?>, '<?php echo base_url('admin/users/delete'); ?>')" >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        <table class="table table-hover table-bordered table-condensed">
                            <tr>Chưa có bài viết</tr>
                        </table>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
</div>