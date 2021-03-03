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
                <h2 style="color:#4800ff; text-align:center">Thêm ca sĩ</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form enctype="multipart/form-data" style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Tên ca sĩ:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" value="<?php echo get_value('name_artist') ?>" placeholder="Tên ca sĩ">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea name="description" style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"></textarea>
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
                <h2 style="color:#4800ff; text-align:center">Danh sách ca sĩ</h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>
                    
                    <input type="text" name="search-info" placeholder="Nhập vào tên ca sĩ" value="<?php echo get_value('search_info') ?>">

                    <!-- <input type="submit" value="Xóa"> -->
                    <input type="submit" name="btn-search" value="Tìm kiếm">
                    <?php echo form_error2('search-info') ?>
                </form>
            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_artist)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>STT</th>
                                    <th>Tên nghệ sĩ</th>
                                    <th>Đăng bởi</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody id="list-song">
                                <?php
                                $data = empty($artist_search) ? $list_artist : $artist_search;
                                $stt = 0;
                                foreach ($data as $artist) {
                                    $stt++;
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td ><?php echo $stt ?></td>
                                        <td style="text-align:left"><?php echo $artist['name'] ?></td>
                                        <td style="text-align:left"><?php if (!empty($artist['user_id'])) echo get_user_by_id($artist['user_id'])['username'] ?></td>
                                        <td>
                                            <a style="color: green;" href="?mod=artists&action=delete&id=<?php echo $artist['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            <a style="color: black;" href="?mod=artists&action=update&id=<?php echo $artist['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
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
    </div>
</div>
<!-- InstanceEndEditable -->
<?php get_footer() ?>