<!-- <?php show_array($list_song) ?> -->
<?php get_header() ?>
<?php get_sidebar('category') ?>
<!-- InstanceBeginEditable name="content" -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <?php get_sidebar('content') ?>
        <!-- End Content Wrapper. Contains page content -->
        
        <!--start panel_default-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">Danh sách bài hát của album <?php echo $album['name'] ?></h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    
                    <input type="text" name="search-info" placeholder="Nhập vào bài hát" value="<?php echo get_value('search_info') ?>">
                    <input type="submit" name="btn-search" value="Tìm kiếm">
                    <input type="submit" name="btn-delete" value="Xóa khỏi album">
                    <?php echo form_error2('search-info') ?>
                </form>
            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_song)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>ID</th>
                                    <th>Tên tên bài hát</th>
                                    <th>Nghệ sĩ</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody id="list-song">
                                <?php
                                $data = empty($song_search) ? $list_song : $song_search;
                                foreach ($data as $song) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td id="song-id"><?php echo $song['id'] ?></td>
                                        <td id="song-name" style="text-align:left"><?php echo $song['name'] ?></td>
                                        <td id="song-artist" style="text-align:left"><?php echo get_artist_by_id($song['artist_id'])['name'] ?></td>
                                        <td>
                                            <a style="color: green;" href="?mod=albums&action=deleteSong&song_id=<?php echo $song['id'] ?>&album_id=<?php echo $album['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            <a style="color: black;" href="?mod=musics&action=updateSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
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
        
        <!--start panel_default-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">Danh sách bài hát không thuộc album <?php echo $album['name'] ?></h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    
                    <input type="text" name="search-info" placeholder="Nhập vào bài hát" value="<?php echo get_value('search_info') ?>">
                    <input type="submit" name="btn-search" value="Tìm kiếm">
                    <input type="submit" name="btn-delete" value="Xóa khỏi album">
                    <?php echo form_error2('search-info') ?>
                </form>
            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_song_other)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>ID</th>
                                    <th>Tên tên bài hát</th>
                                    <th>Nghệ sĩ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="list-song">
                                <?php
                                $data = empty($song_search) ? $list_song_other : $song_search;
                                foreach ($data as $song) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td id="song-id"><?php echo $song['id'] ?></td>
                                        <td id="song-name" style="text-align:left"><?php echo $song['name'] ?></td>
                                        <td id="song-artist" style="text-align:left"><?php echo get_artist_by_id($song['artist_id'])['name'] ?></td>
                                        <td><a href="?mod=albums&action=addSong&album_id=<?php echo $album['id'] ?>&song_id=<?php echo $song['id'] ?>">Thêm vào album</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
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