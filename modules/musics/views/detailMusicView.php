<?php
get_header('music');
?>
<div id="main">
    <?php get_template_part('right') ?>

    <div id="content">
        <!--bat dau video-->
        <div id="video">
            <audio class="phatnhac" controls>
                <source src="admin/<?php echo $song_file['file'] ?>" type="audio/mpeg">
            </audio>

            <div class="noidungbaihat">
                <div class="tencasi">
                    <span id="dem"><?php echo $song['id'] ?></span>
                    <p><?php echo $song['name'] ?> -</p>
                    <p><a href="#"><?php echo $artist['name'] ?></a></p>
                </div>

                <div class="luotxem"><img src="public/video/headphone-icon.png">
                    <p><?php echo number_format($song['view']) ?></p>
                </div>

            </div>
            <!-- ket thuc noi dung bai hat-->
            <div class="dichvu">
                <div class="themtaishare">
                    <li><button type="button" data-toggle="collapse" data-target="#themvao" class="btn btn-primary"><img src="public/video/addlike.png">Thêm vào</button></li>
                    <li>
                        <button type="button" data-toggle="collapse" data-target="#taivideo" class="btn btn-primary"><img src="public/video/down.png">Tải Video</button>
                    </li>
                    <li><button type="button" data-toggle="collapse" data-target="#chiase" class="btn btn-primary"><img src="public/video/share.png">Chia sẻ</button></li>
                    <li><button type="button" data-toggle="collapse" data-target="#phanhoi" class="btn btn-primary"><img src="public/video/report.png">Lyric Suggest</button></li>
                    <!--Tải video-->
                </div>

                <div class="dichvufacebook">
                    <div data-share="true" class="fb-like" data-width="50" data-show-faces="true">
                    </div>
                </div>
                <!--ket thuc dich vu facebook-->

            </div>
            <div class="motavideo">
                <div class="motanoidung">
                    <!-- <p>Bài hát "Thật bất ngờ" do ca sĩ <a href="#">Trúc Nhân</a> thể hiện, thuộc thể loại <a
                            href="#">Bài hát Việt Nam</a>, <a href="#">Bài hát Nhạc trẻ</a>. Các bạn có thể nghe,
                        download bài hát "Thật bất ngờ" miễn phí tại MusicForLife.com.</p> -->
                    <p><?php echo $song['description'] ?></p>
                </div>
                <div class="motanguoidang">
                    <img src="public/video/user.jpg">
                    <p>Upload bởi:</br><a href="#"><?php echo $user['username'] ?></a></p>
                </div>
            </div>
            <div id="themvao" class="collapse">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <fieldset>
                            <div class="x_content"> <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="width:100%; float:right;">
                                            <p style="color:#000; text-align:center">Bạn đã thêm video vào trong
                                                Playlist</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Kết thuc tải video-->
            <div id="taivideo" class="collapse">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <fieldset>
                            <div class="x_content"> <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="width:100%; float:right;">
                                            <button type="submit" class="btn btn-primary" style="margin-left:20px; background-color:#06F; width:300px"><img src="video/down.png">Tải Video 480p</button>
                                            <button type="submit" class="btn btn-primary" style="margin-left:100px; background-color:#CCC; width:300px"><img src="video/down.png">Tải Video 720p</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Kết thuc tải video-->
            <div id="chiase" class="collapse">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <fieldset>
                            <div class="x_content"> <br />
                                <div class="form-group">
                                    <label class="chiaselink" for="first-name"> Embed </label>
                                    <input class="linkembed" type="text" value="http://www.nhaccuatui.com/vh/auto/OCXcr8nCMop2G">
                                    <span class="box-checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">Bình
                                            thường</label></span>
                                    <span class="box-checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">Tự động
                                            play</label></span>
                                    <span class="box-checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">Nhạc
                                            nền</label></span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Kết thuc tải video-->
            <div id="phanhoi" class="collapse">
                <div class="col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #333">
                    <div class="x_panel">
                        <fieldset>
                            <div class="x_content"> <br />
                                <div class="form-group">
                                    <span class="phanhoi_checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">
                                            <p>Không play được</p>
                                        </label></span>
                                    <span class="phanhoi_checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">
                                            <p>Không tải được</p>
                                        </label></span>
                                    <span class="phanhoi_checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">
                                            <p>Chất lượng kém</p>
                                        </label></span>
                                    <span class="phanhoi_checkbox"><input type="radio" id="radioNormal" key="OCXcr8nCMop2G" rel="video" name="type_embed"><label for="radioNormal">
                                            <p>Lỗi khác</p>
                                        </label></span>
                                    <button type="submit" class="btn btn-primary" style="margin-left:2
                          0px; background-color:#06F; color:#FFF; font-weight:bold">Gửi báo lỗi</button>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Kết thuc tải video-->
        </div>
        <!--ket thuc dich vu-->
        <!--bat dau mo ta loi bai hat-->

        <div class="loibaihat">
            <div class="lbh">

                <div class="lyric" id="_divLyricHtml" style="min-height: 331px;">
                    <div class="pd_name_lyric">
                        <h2 class="name_lyric" style=" font-family:Arial, Helvetica, sans-serif; font-size:22px"><b>Lời
                                bài hát: <?php echo $song['name'] ?></b></h2>
                        <p class="name_post">

                        </p>

                        <p class="name_post">Lời đăng bởi: <a rel="nofollow" href="http://www.nhaccuatui.com/user/thuha304.html" title="thuha304">PhuongNguyen</a>
                        </p>
                    </div>
                    <p id="divLyric" class="pd_lyric trans" style="height:auto;max-height:255px;overflow:hidden;">
                        <?php echo $song['lyric'] ?>
                        <!-- <br>
                        <br>Trên báo những thông tin chen nhau đi một hàng
                        <br>Người đàn bà hở hang
                        <br>Xong đến chuyện người thì nở nang
                        <br>Xong đến chuyện mặt hàng thời trang
                        <br>Lôi cuốn người người đọc vào ban sáng.
                        <br> -->
                </div>



                <input type="hidden" id="inpLyricId" value="1092812">
            </div>

            <!------ket thuc loi bai hat------>

        </div>
        <br>
        <div class="list_video">
            <div class="fram_select">
                <div class="tile_box_key">
                    <h2 class="title_of_box_video"><a title="Video | MV" href="http://www.nhaccuatui.com/video-am-nhac-viet-nam.html" onclick="_gaq.push(['_trackEvent', 'Video - MV', 'Click', 'Viet Nam']);">Video | MV ></a>
                    </h2>
                </div>
                <!--@end div tile_box_key-->
                <div class="video_list">
                    <li>
                        <div class="box_absolute">
                            <a href="http://www.nhaccuatui.com/video/cause-i-love-you-noo-phuoc-thinh.V42OO50HHWD2U.html" class="img">
                                <span class="view_mv">
                                    <span class="icon_view"></span><span id="NCTCounter_sg_4419843" wgct="1">310.445</span></span>
                                <span class="icon_play"></span>
                                <img class="mv_img" src="http://avatar.nct.nixcdn.com/mv/2016/04/28/f/f/e/b/1461816372987_640.jpg" data-src="http://avatar.nct.nixcdn.com/mv/2016/04/28/f/f/e/b/1461816372987_640.jpg">
                            </a>
                            <span class="icon_time_video">06:11</span>
                        </div>
                        <h3><a href="http://www.nhaccuatui.com/video/cause-i-love-you-noo-phuoc-thinh.V42OO50HHWD2U.html" class="name_song" title="Cause I Love You - Noo Phước Thịnh">Cause i love you</a></h3>
                        <h4><a href="http://www.nhaccuatui.com/nghe-si-noo-phuoc-thinh.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Noo Phước Thịnh trình bày" target="_blank">Noo Phước Thịnh</a></h4>
                    </li>
                </div>
            </div>
        </div>
        <!--ket thuc list video-->
        <!--bat dau list cac bai hat-->
        <div class="listbaihat">
            <h2><a title="Bài hát" href="#">Bài hát ></a></h2>
            <li>
                <div class="item_content">
                    <a href="#" title="Thật bất ngờ" class="tenbaihat">Thật bất ngờ</a><a href="#" title="Trúc Nhân" class="tencasi"> - Trúc Nhân</a>
                </div>
                <div class="item_listen">
                    <img src="public/video/Headphone.png">
                    <p>13.242.245</p>
                </div>
                <div class="item_play">
                    <a href="#"><img src="public/video/Toolbar - Play.png"></a>
                    <a href="#"><img src="public/video/addlove.png"></a>
                </div>
            </li>


        </div>
        <!--ket thuc list cac bai hat-->

        <div class="binhluanvideo" style="clear:both">
            <h1>Bình luận</h1>
            <!-- <div class="fb-comments" data-href="http://music4life.azurewebsites.net/thatbatngo_baihat.html"
                data-colorscheme="light" data-numposts="10" data-width="800"></div> -->
            <!-- bat dau cmt -->
            <!-- <form action="" method="POST"> -->
            <p style="float:left; margin-right:30px; width:80px; text-align:left">Lyric:</p><textarea id="mytextarea" name="lyric" style="margin:10px; width:600px" class="form-control" placeholder="Viết Bình Luận"></textarea>
            <!-- <input type="submit" name="btn-cmt" value="Bình luận" id="mybutton"> -->
            <button id="mybutton">Binh luận</button>
            <!-- </form> -->
            <br>
            <div class="noidungbinhluan">
                <?php
                foreach ($comments_detail as $comment) {
                ?>
                    <div id="comment_<?php echo $comment['id'] ?>">
                        <b style="color: black; font-size: 15px"><?php echo $comment['username'] ?></b>
                        <span style="color: gray; font-size: 13px; padding-left: 10px;"><?php echo $comment['created_at'] ?></span>
                        <p style="color: black; font-size: 15px"><?php echo $comment['content'] ?></p>
                        <?php
                        if (is_login()) {
                            if ($_SESSION['username'] == $comment['username']) {
                        ?>
                                <p style="color: black; font-size: 15px"><span data-id=<?php echo $comment['id'] ?> class="delete_comment">Xóa</span> | <span data-id=<?php echo $comment['id'] ?> class="edit_comment">Sửa</span></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div id="ndbl"></div>

            <!-- ket thuc cmt -->
        </div>
    </div>
    <!-- ket thuc content-->
</div>

<?php
get_footer();
?>
<script src="public/js/thu1.js" type="text/javascript"></script>
<script src="public/js/app.js" type="text/javascript"></script>