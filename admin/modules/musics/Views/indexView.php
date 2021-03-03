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
                <h2 style="color:#4800ff; text-align:center">Thêm bài hát</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Tên bài hát:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" value="<?php echo get_value('name_song') ?>" placeholder="Tên bài hát">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea name="description" style="margin:10px; width:300px" class="form-control" placeholder="Mô tả"></textarea>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Lyric:</p><textarea name="lyric" style="margin:10px; width:300px" class="form-control" placeholder="Lời bài hát"></textarea>
                            <!-- <p style="float:left; margin-right:30px; width:80px; text-align:left">Ngày tháng:</p><input style="margin:10px; width:300px" type="date" class="form-control" /> -->
                            <!-- Ca sĩ -->
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Ca sĩ:</p>
                            <select name="artist-id" style="margin:0 0 10px -335px; width:300px; padding: 3px 0 3px 0;">
                                <!-- <option value="">--- Chọn ca sĩ ---</option> -->
                                <?php foreach ($list_artist as $artist) {
                                ?>
                                    <option <?php if (isset($_POST['btn-add']) && empty($error['artist-id']) && get_value('artist_id') == $artist['id']) echo "selected ='selected'" ?> value="<?php echo $artist['id'] ?>"><?php echo $artist['name'] ?></option>
                                <?php
                                } ?>
                            </select>
                            <br><div style="width: 60%;">
                                <?php echo form_error('artist-id') ?>
                            </div>
                            
                            <!-- Thể loại -->
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Thể loại:</p>
                            <select name="cat-id" style="margin-left:-335px; width:300px; padding: 3px 0 3px 0">
                                <!-- <option value="">--- Chọn thể loại ---</option> -->
                                <?php foreach ($list_song_cat as $cat) {
                                ?>
                                    <option <?php if($cat['id'] == 1) echo "selected ='selected'" ?> value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                                <?php
                                } ?>
                            </select>
                            <br>

                        </div>
                        <p style="margin: 8px auto">
                            <input type="submit" name="btn-add" value="Thêm">
                            <?php echo form_error('success') ?>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <!--Stop add title-->
        <!--start panel_default-->
        <div class="panel panel-default">
            <form style="text-align: left;" action="" method="post">
                <div class="panel-heading">
                    <h2 style="color:#4800ff; text-align:center">Danh sách bài hát</h2>
                </div>

                <div class="mailbox-controls">
                    <!-- Check all button -->

                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    <select style="float:right; height:25px; width:150px; margin-right:10px" id="list-cat">
                        <option value="0">Thể loại</option>
                        <?php foreach ($list_song_cat as $cat) {
                        ?>
                            <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                        <?php
                        } ?>
                    </select>

                    <select style="float:right; height:25px; width:150px; margin-right:10px" id="list-artist">
                        <option value="0" id="artist">Ca sĩ</option>
                        <?php foreach ($list_artist as $artist) {
                        ?>
                            <option value="<?php echo $artist['id'] ?>"><?php echo $artist['name'] ?></option>
                        <?php
                        } ?>
                    </select>
                    <input type="text" name="search-info" placeholder="Nhập vào bài hát" value="<?php echo get_value('search_info') ?>">
                    <input type="submit" name="btn-search" value="Tìm kiếm">
                    <input type="submit" name="btn-delete" value="Xóa">
                    <?php echo form_error2('search-info') ?>
                    <?php echo form_error2('song-id') ?>
                    <?php echo form_error2('delete-success') ?>

                </div>
                <div class="panel-body">
                    <!--row-->
                    <div class="row">
                        <?php if (!empty($list_song)) {
                        ?>
                            <!-- <form action="" method='POST'> -->
                            <!-- <input type="submit" name="btn-delete" value="Xóa">
                            <?php echo form_error2('song-id') ?> -->
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>STT</th>
                                        <th>Tên tên bài hát</th>
                                        <th>Nghệ sĩ</th>
                                        <th>Thể loại</th>
                                        <th>Đăng bởi</th>
                                        <th>Views</th>
                                        <th>Play</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody id="list-song">
                                    <?php
                                    $data = empty($song_search) ? $list_song : $song_search;
                                    $stt = 0;
                                    foreach ($data as $song) {
                                        $stt++;
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="checkbox" name="song-id[]" value="<?php echo $song['id'] ?>" /></td>
                                            <td><?php echo $stt ?></td>
                                            <td id="song-name" style="text-align:left"><?php echo $song['name'] ?></td>
                                            <td id="song-artist" style="text-align:left"><?php echo get_artist_by_id($song['artist_id'])['name'] ?></td>
                                            <td id="" style="text-align:left"><?php if (!empty($song['song_cat_id'])) echo get_song_cat_by_id($song['song_cat_id'])['name'] ?></td>
                                            <td id="" style="text-align:left"><?php if (!empty($song['user_id'])) echo get_user_by_id($song['user_id'])['username'] ?></td>
                                            <td><?php if (!empty($song['view'])) echo number_format($song['view']); else echo 0;?></td>
                                            <td>
                                                <?php if (!empty(get_file_song_by_song_id($song['id']))) {
                                                ?>
                                                    <a style="color: blue;" href="?mod=musics&action=uploadSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-refresh"></span></a>
                                                    <audio controls loop style="width: 160px; height: 25px;">
                                                        <source src="<?php echo get_file_song_by_song_id($song['id'])['file'] ?>" type="audio/mpeg">
                                                    </audio>
                                                    <a style="color: red;" href="?mod=musics&action=deleteFileSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a href="?mod=musics&action=uploadSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-plus"></span></a>
                                                <?php
                                                } ?>
                                            </td>
                                            <td>
                                                <a style="color: green;" href="?mod=musics&action=delete&id=<?php echo $song['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa bài hát <?php echo $song['name'] ?>?')"><span class="glyphicon glyphicon-trash"></span></a>
                                                <a style="color: black;" href="?mod=musics&action=updateSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- </form> -->
                            <!-- <form style="text-align: right; margin-right:30px;">
                                <input style="background-color:#b2abab" type="submit" value="<< Quay lại">
                                <input style="background-color:#0094ff" type="submit" value="1">
                                <input style="background-color:#b2abab" type="submit" value="2">
                                <input style="background-color:#b2abab" type="submit" value="Kế tiếp >>">
                            </form> -->
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
            </form>

        </div>
        <!--end panel_default-->
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>
