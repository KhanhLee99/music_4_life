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
                <h2 style="color:#4800ff; text-align:center">Thêm thể loại</h2>
            </div>
            <div class="panel-body">
                <!--box-->
                <div class="box-content">
                    <form style="text-align: center;" action="" method="POST">
                        <div class="them_video" style="margin-left:300px">
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Thể loại:</p><input style="margin:10px; width:300px" type="text" class="form-control" name="name" placeholder="Thể loại">
                            <div style="width: 60%;">
                                <?php echo form_error('name') ?>
                            </div>
                            <p style="float:left; margin-right:30px; width:80px; text-align:left">Mô tả:</p><textarea style="margin:10px; width:300px" class="form-control" name="description" placeholder="Mô tả"></textarea>
                            <!-- <p style="float:left; margin-right:30px; width:80px; text-align:left">Ngày tháng:</p><input style="margin:10px; width:300px" type="date" class="form-control" /> -->

                        </div>
                        <p>
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
                <h2 style="color:#4800ff; text-align:center">Danh sách thể loại</h2>
            </div>
            <div class="mailbox-controls">
                <!-- Check all button -->

                <form style="text-align: left;" action="" method="post">
                    <select style="float:right; height:25px; width:100px; margin-right:10px">
                        <option>Mới nhất</option>
                        <option>Cũ nhất</option>
                    </select>

                    <input type="search" placeholder="Tìm kiếm">
                    <input type="submit" value="Xóa">
                    <input type="submit" value="Cập nhật">
                </form>
            </div>
            <div class="panel-body">
                <!--row-->
                <div class="row">
                    <?php if (!empty($list_cat)) {
                    ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkbox" /></th>
                                    <th>STT</th>
                                    <th>Tên thể loại</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Điều chỉnh</th>
                                </tr>
                            </thead>
                            <tbody id="list-song">
                                <?php 
                                    $stt = 0;
                                    foreach ($list_cat as $cat) {
                                        $stt++;
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" /></td>
                                        <td id="song-id"><?php echo $stt ?></td>
                                        <td id="song-name" style="text-align:left"><?php echo $cat['name'] ?></td>
                                        <td id="" style="text-align:right"></td>
                                        <td>
                                            <a href="?mod=musics&action=deleteCat&id=<?php echo $cat['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa ?')"><span class="glyphicon glyphicon-trash"></span></a>
                                            <a href="?mod=musics&action=updateCat&id=<?php echo $cat['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
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