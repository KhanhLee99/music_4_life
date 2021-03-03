<?php get_header() ?>
<!-- <?php show_array($list_users) ?> -->
<?php get_sidebar('admin') ?>
<!-- InstanceBeginEditable name="content" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <?php get_sidebar('content') ?>
        <!-- End Content Wrapper. Contains page content -->

        <!--start panel_default-->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:#4800ff; text-align:center">Cài đặt tài khoản</h2>
                </div>
                <div class="panel-body">
                    <!--row-->
                    <div class="row">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Tên Thành Viên</th>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><a><i class="fa fa-pencil"></i> Chỉnh Sửa</a></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><a><i class="fa fa-pencil"></i> Chỉnh Sửa</a></td>
                                </tr>
                                <tr>
                                    <th>Tên đăng nhập</th>
                                    <td><?php echo $user['username'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Địa Chỉ</th>
                                    <td><?php echo $user['address'] ?></td>
                                    <td><a><i class="fa fa-pencil"></i> Chỉnh Sửa</a></td>
                                </tr>
                                <tr>
                                    <th>Số Điện Thoại</th>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><a><i class="fa fa-pencil"></i> Chỉnh Sửa</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--end row-->
                </div>
                <form method="POST">
                    <?php echo form_error('account') ?>
                    <label for="display-name">Tên hiển thị</label><br>
                    <input type="text" name="name" id="display-name" value="<?php echo $user['name'] ?>"> <br>
                    <?php echo form_error('name') ?>
                    <label for="username">Tên đăng nhập</label><br>
                    <input type="text" name="username" id="username" placeholder="admin" readonly="readonly" value="<?php echo $user['username'] ?>" style="cursor: not-allowed;"><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" readonly="readonly" value="<?php echo $user['email'] ?>"><br>
                    <label for="tel">Số điện thoại</label><br>
                    <input type="tel" name="phone" id="tel" value="<?php echo $user['phone'] ?>"><br>
                    <?php echo form_error('phone') ?>
                    <label for="address">Địa chỉ</label><br>
                    <textarea name="address" id="address"><?php echo $user['address'] ?></textarea> <br>
                    <?php echo form_error('address') ?>
                    <button type="submit" name="btn-update" id="btn-submit">Cập nhật</button>
                </form>
            </div>
        </div>
        <!--end panel_default-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>