<?php get_header() ?>
<?php get_sidebar('admin_resetPass') ?>
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
                    <h2 style="color:#4800ff; text-align:center">Đổi mật khẩu</h2>
                </div>
                <form method="POST">
                    <?php echo form_error('account') ?>
                    <label for="old-password">Mật khẩu hiện tại</label><br>
                    <input type="password" name="old-password" id="old-password" placeholder="Old Password"> <br>
                    <?php echo form_error('old-password') ?>

                    <label for="new-password">Mật khẩu mới</label><br>
                    <input type="password" name="new-password" id="new-password" placeholder="New Password"><br>
                    <?php echo form_error('new-password') ?>

                    <label for="re-new-password">Nhập lại mật khẩu mới</label><br>
                    <input type="password" name="re-new-password" id="re-new-password" placeholder="Re New Password"><br>
                    <?php echo form_error('re-new-password') ?>

                    <button type="submit" name="btn-reset" id="btn-submit">Đổi mật khẩu</button>
                </form>
            </div>
        </div>
        <!--end panel_default-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>