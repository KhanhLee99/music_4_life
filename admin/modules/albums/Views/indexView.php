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
                <h2 style="color:#4800ff; text-align:center">Thêm Album</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Tên album:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" value="<?php echo get_value('name_album') ?>" placeholder="Tên album">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                           
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"></textarea>
                            <!-- <p style="float:left; margin-right:30px; width:80px; text-align:left">Ngày tháng:</p><input style="margin:10px; width:300px" type="date" class="form-control" /> -->
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
            <div class="panel-heading">
                <h2 style="color:#4800ff; text-align:center">Danh sách album</h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    
                    <input type="text" name="search-info" placeholder="Nhập vào tên album" value="<?php echo get_value('search_info') ?>">

                    <!-- <input type="submit" value="Xóa"> -->
                    <input type="submit" name="btn-search" value="Tìm kiếm">
                    <?php echo form_error2('search-info') ?>
                </form>
            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_album)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>STT</th>
                                    <th>Tên Album</th>
                                    <th>Đăng bởi</th>
                                    <th>Setting</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="list-song">
                                <?php
                                $data = empty($album_search) ? $list_album : $album_search;
                                $stt = 0;
                                foreach ($data as $album) {
                                    $stt++;
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td ><?php echo $stt ?></td>
                                        <td style="text-align:left"><?php echo $album['name'] ?></td>
                                        <td style="text-align:left"><?php if (!empty($album['user_id'])) echo get_user_by_id($album['user_id'])['username'] ?></td>
                                        <td>
                                            <a style="color: green;" href="?mod=albums&action=delete&id=<?php echo $album['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            <a style="color: black;" href="?mod=albums&action=update&id=<?php echo $album['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                        <td><a href="?mod=albums&action=detail&id=<?php echo $album['id'] ?>">Xem</a></td>

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