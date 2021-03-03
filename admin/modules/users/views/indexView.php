<?php get_header() ?>
<?php get_sidebar('users') ?>
<!-- InstanceBeginEditable name="content" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <?php get_sidebar('content') ?>
        <!-- End Content Wrapper. Contains page content -->

        <!--start panel_default-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">
                    <?php
                    if ($role == 2) {
                        echo "Danh sách Admin";
                    } elseif ($role == 3) {
                        echo "Danh sách người dùng";
                    } else {
                        echo "Danh sách tất cả thành viên";
                    }
                    ?>
                </h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    <select style="float:right; height:25px; width:100px; margin-right:10px" id="type-users">
                        <option value="0">Tất cả</option>
                        <option value="3">Thành viên</option>
                        <option value="2">Admin</option>
                    </select>
                    <input type="search" placeholder="Tìm kiếm">
                    <input type="submit" value="Xóa">
                    <input type="submit" value="Cập nhật">
                </form>
                <!-- /.btn-group -->
                <span><a href="?mod=users" style="text-decoration: underline;<?php if (empty($role)) echo "font-weight:bold;"; ?>">All</a> | <a href="?mod=users&role=3" style="text-decoration: underline;<?php if ($role == 3) echo "font-weight:bold;"; ?>">User</a> | <a href="?mod=users&role=2" style="text-decoration: underline;<?php if ($role == 2) echo "font-weight:bold;"; ?>">Admin</a></span>

            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_users)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Tên tài khoản</th>
                                    <th>Email</th>
                                    <th>Ngày tạo</th>
                                    <!-- <th>Trạng thái</th> -->
                                    <th>Chức vụ</th>
                                    <th>Điều chỉnh</th>
                                </tr>
                            </thead>
                            <tbody id="list-users">
                                <?php 
                                    $stt = 0;
                                    foreach ($list_users as $user) {
                                        $stt++;
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $user['name'] ?></td>
                                        <td><?php echo $user['username'] ?></td>
                                        <td><?php echo $user['email'] ?></td>
                                        <td><?php echo $user['created_at'] ?></td>
                                        <td>
                                            <?php
                                                if($user['role'] == 3) echo "Người dùng";
                                                if($user['role'] == 2) echo "Admin";
                                                if($user['role'] == 1) echo "Quản lý";
                                            ?>
                                        </td>
                                        <!-- <td><a href="#"><span class="glyphicon glyphicon-ok"></span></a></td> -->
                                        <td>
                                            <?php if ((is_admin() && $user['role'] == 3) || (is_big_admin() && ($user['role'] == 2 || $user['role'] == 3))) {
                                            ?>
                                                <a href="?mod=users&action=delete&id=<?php echo $user['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                                <a href="?mod=users&action=update&id=<?php echo $user['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <?php
                                            } ?>

                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <form style="text-align: right; margin-right:30px;">
                            <input style="background-color:#b2abab" type="submit" value="<< Quay lại">
                            <input style="background-color:#0094ff" type="submit" value="1">
                            <input style="background-color:#b2abab" type="submit" value="2">
                            <input style="background-color:#b2abab" type="submit" value="Kế tiếp >>">
                        </form>
                    <?php
                    } else {
                        echo "<b style='color: red; margin-left: 15px;'>(Danh sách trống)</b>";
                    } ?>

                    <div class="pull-right">
                        <div class="btn-group">
                            <ul class="pagination"></ul>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                </div>
                <!--end row-->

            </div>
        </div>
        <!--end panel_default-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>