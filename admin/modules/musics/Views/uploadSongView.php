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
                <a href="?mod=musics"><span class="glyphicon glyphicon-arrow-left"></span></a>
                <h2 style="color:#4800ff; text-align:center">Upload bài hát <?php echo $song['name'] ?></h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <p style="float:left; margin: 0 auto; width:80px; text-align:left">Upload file:</p><input style="margin:10px; width:300px" type="file" class="form-control" name="file">
                        <div style="width: 30%;">
                            <?php echo form_error('type') ?>
                            <?php echo form_error('size') ?>
                            <?php echo form_error('file_exits') ?>
                        </div>
                       
                        <p style="margin: 8px auto">
                            <input type="submit" name="btn-upload" value="Upload">
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