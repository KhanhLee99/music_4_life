<?php get_header() ?>
<?php get_sidebar('category') ?>
<div class="content-wrapper">
    <div class="container">
        <?php get_sidebar('content') ?>
        <!-- End Content Wrapper. Contains page content -->
        <!--Start add title-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">Cập nhật thể loại</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Thể loại:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" placeholder="Thể loại" value="<?php echo $cat['name'] ?>">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"></textarea>
                            <!-- <p style="float:left; margin-right:30px; width:80px; text-align:left">Ngày tháng:</p><input style="margin:10px; width:300px" type="date" class="form-control" /> -->

                        </div>
                        <p>
                            <input type="submit" name="btn-update" value="Cập nhật">                
                            <?php echo form_error('success') ?>                         
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <!--Stop add title-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>