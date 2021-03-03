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
                <h2 style="color:#4800ff; text-align:center">Cập nhật bài hát</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Tên bài hát:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" value="<?php if (isset($_POST['btn-update'])) {
                                                                                                                                                                                                                    echo get_value('name_song');
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo $song['name'];
                                                                                                                                                                                                                }  ?>" placeholder="Thể loại">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea name="description" style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"><?php echo $song['description'] ?></textarea>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Lyric:</p><textarea name="lyric" style="margin:10px; width:300px" class="form-control" placeholder="Lời bài hát"><?php echo $song['lyric'] ?></textarea>

                            <!-- Ca sĩ -->
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Ca sĩ:</p>
                            <select name="artist-id" style="margin:0 0 10px -335px; width:300px; padding: 3px 0 3px 0;">
                                <option value="">--- Chọn ca sĩ ---</option>
                                <?php foreach ($list_artist as $artist) {
                                ?>
                                    <option <?php if ((empty($_POST['btn-update']) && $artist['id'] == $song['artist_id']) || (isset($_POST['btn-update']) && empty($error['artist-id']) && get_value('artist_id') == $artist['id'])) echo "selected ='selected'" ?> value="<?php echo $artist['id'] ?>"><?php echo $artist['name'] ?></option>
                                <?php
                                } ?>
                            </select>
                            <br>
                            <div style="width: 60%;">
                                <?php echo form_error('artist-id') ?>
                            </div>
                            
                            <!-- Thể loại -->
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Thể loại:</p>
                            <select name="cat-id" style="margin-left:-335px; width:300px; padding: 3px 0 3px 0">
                                <option value="">--- Chọn thể loại ---</option>
                                <?php foreach ($list_song_cat as $cat) {
                                ?>
                                    <option <?php if ((empty($_POST['btn-update']) && $cat['id'] == $song['song_cat_id']) || isset($_POST['btn-update']) && empty($error['cat-id']) && get_value('cat_id') == $cat['id']) echo "selected ='selected'" ?> value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                                <?php
                                } ?>
                            </select>
                            <br>

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

        <!--Start add title-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">Upload hình ảnh bài hát</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                Hình ảnh: <img src="<?php echo $song_image['file'] ?>" alt="">
                            </div>
                            <div class="col-xs-8">
                                <form enctype="multipart/form-data" action="" method="POST">
                                    <!-- <div class="them_video" style="margin-left:300px"> -->
                                        <p style="float:left; margin: 0 auto; width:80px; text-align:left">Upload hình ảnh:</p><input style="margin:10px; width:300px" type="file" class="form-control" name="file">
                                        <?php echo form_error2('type') ?>
                                        <?php echo form_error2('size') ?>
                                        <?php echo form_error2('file_exits') ?>
                                        <p style="margin: 8px auto">
                                            <input type="submit" name="btn-upload" value="Upload">
                                            <?php echo form_error2('success') ?>
                                        </p>
                                </form>
                            </div>
                        </div>
                    </div>


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