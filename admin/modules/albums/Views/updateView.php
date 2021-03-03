<?php get_header() ?>
<?php get_sidebar('category') ?>
<!-- InstanceBeginEditable name="content" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <?php get_sidebar('content') ?>
        <!-- End Content Wrapper. Contains page content -->
        <!--Start add title-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?mod=albums"><span class="glyphicon glyphicon-arrow-left"></span></a>
                <h2 style="color:#4800ff; text-align:center">Cập nhật album</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Tên album:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" value="<?php if (isset($_POST['btn-update'])) {
                                                                                                                                                                                                                    echo get_value('name_album');
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo $album['name'];
                                                                                                                                                                                                                }  ?>" placeholder="Tên album">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"></textarea>
                            
                        </div>
                        <p style="margin: 8px auto">
                            <input type="submit" name="btn-update" value="Cập nhật">
                            <?php echo form_error('success') ?>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <!--Stop add title-->
        <!--start panel_default-->

        <!--end panel_default-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>