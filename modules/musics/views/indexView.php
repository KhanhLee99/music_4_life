<?php
get_header('musics');
?>
<!------------------------- Menu Left : Start -->
<div class="menuHeader">
    <div class="menuTop">
        <ul class="menuTopList" id="ListMenu">

            <!----------- Index -->
            <li class="dropdown">
                <a class="active_dropdown" href="trangchu.html" title="Trang chủ">Trang chủ</a>
            </li>

            <!----------- Bài Hát -->
            <li class="dropdown">
                <a class="active_dropdown" href="baihat.html" title="Bài hát" style="border-bottom:solid 4px #333;">Bài hát</a>
                <div class="dropdown_content">
                    <div class="dropdown_column">
                        <?php
                        $len = count($list_song_cat);
                        $num1 = round($len / 3);
                        $num2 = round($len * 2 / 3);
                        for ($i = 1; $i < $num1; $i++) {
                        ?>
                            <a href="?mod=musics&action=index&id=<?php echo $list_song_cat[$i]['id'] ?>" title="<?php echo $list_song_cat[$i]['name'] ?>"><?php echo $list_song_cat[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                        <!-- <a href="baihat.html" title="Mới & Hót">Mới & hot</a> -->

                    </div>
                    <div class="dropdown_column">
                        <?php
                        for ($i = $num1; $i < $num2; $i++) {
                        ?>
                            <a href="?mod=musics&action=index&id=<?php echo $list_song_cat[$i]['id'] ?>" title="<?php echo $list_song_cat[$i]['name'] ?>"><?php echo $list_song_cat[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="dropdown_column">
                        <?php
                        for ($i = $num2; $i < $len; $i++) {
                        ?>
                            <a href="?mod=musics&action=index&id=<?php echo $list_song_cat[$i]['id'] ?>" title="<?php echo $list_song_cat[$i]['name'] ?>"><?php echo $list_song_cat[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </li>

            <!----------- Playlist -->
            <li class="dropdown">
                <a class="active_dropdown" href="playlist.html" title="Playlist">Playlist</a>
                <div class="dropdown_content">
                    <div class="dropdown_column">
                        <a href="#" title="Mới & Hót">Mới & hot</a>
                        <a href="#" title="Cách Mạng">Cách mạng</a>
                        <a href="#" title="Không Lời">Không lời</a>
                        <a href="#" title="Rock Việt">Rock Việt</a>
                        <a href="#" title="Nhạc Hoa">Nhạc Hoa</a>
                    </div>
                    <div class="dropdown_column">
                        <a href="#" title="Nhạc Trẻ">Nhạc trẻ</a>
                        <a href="#" title="Tiền Chiến">Tiền chiến</a>
                        <a href="#" title="Thiếu Nhi">Thiếu nhi</a>
                        <a href="#" title="Âu Mỹ">Âu Mỹ</a>
                        <a href="#" title="Nhạc Nhật">Nhạc Nhật</a>
                    </div>
                    <div class="dropdown_column">
                        <a href="#" title="Trữ Tình">Trữ tình</a>
                        <a href="#" title="Nhạc Trịnh">Nhạc Trịnh</a>
                        <a href="#" title="Rap Việt">Rap Việt</a>
                        <a href="#" title="Hàn Quốc">Hàn Quốc</a>

                    </div>
                </div>
            </li>

            <!----------- Video -->
            <li class="dropdown">
                <a class="active_dropdown" href="video.html" title="Video">Video</a>
                <div class="dropdown_content">
                    <div class="dropdown_column">
                        <a href="#" title="Mới & Hót">Mới & hot</a>
                        <a href="#" title="Hàn Quốc">Hàn Quốc</a>
                        <a href="#" title="Clip Vui">Clip vui</a>
                        <a href="#" title="Giải Trí Khác">Giải trí </a>
                    </div>
                    <div class="dropdown_column">
                        <a href="videovietnam.html" title="Việt Nam">Việt Nam</a>
                        <a href="#" title="Nhạc Hoa">Nhạc Hoa</a>
                        <a href="#" title="Hài Kịch">Hài kịch</a>

                    </div>
                    <div class="dropdown_column">
                        <a href="#" title="Âu Mỹ">Âu Mỹ</a>
                        <a href="#" title="Nhạc Nhật">Nhạc Nhật</a>
                        <a href="#" title="Phim">Phim</a>
                    </div>
                </div>
            </li>

            <!---------- Bảng XH -->
            <li class="dropdown">
                <a class="active_dropdown" href="BXH.html" title="Bảng xếp hạng">BXH</a>
                <div class="dropdown_content">
                    <a href="BXH.html" title="Việt Nam">Việt Nam</a>
                    <a href="#" title="Âu Mỹ">Âu Mỹ</a>
                    <a href="#" title="Trung Đông">Trung Đông</a>
                    <a href="#" title="Phi Châu">Phi Châu</a>
                </div>
            </li>

            <!---------- Nghệ Sĩ -->
            <li class="dropdown">
                <a class="active_dropdown" href="nghesi.html" title="Nghệ sĩ">Nghệ sĩ</a>
            </li>
        </ul>
    </div>
    <!---------------------- Menu Left : End -->

    <!---------- Menu Right -->
    <div class="menuRight">
        <a href="#" class="btt_star">Music4Life VIP</a>
        <a href="#" class="btt_music" title="Music4Life">Music For Life</a>
        <a href="#" class="btt_upload">Upload</a>
    </div>
</div>
<div class="clr"></div>
<!-- MenuHeader : End -->
<div id="main">

    <!--bat dau silde-->

    <!--ket thuc silde-->


    <!--ket thuc right-->
    <div id="content">

        <!--ket thuc list bai hat-->
        <!--bat dau list cac bai hat-->
        <div class="listbaihat">
            <div class="tieude"><a href="#">Bài hát > <?php echo $cat['name'] ?></a></div>
            <div class="btn_view_select">
                <a href="#" title="Nhạc Trẻ" style="background-color:#C30; color:#FFF">Hot nhất</a>
                <a href="#" title="Trữ Tình">Mới nhất</a>
            </div>

        </div>
        <div class="khungbaihat">
            <?php
            if (isset($list_musics_cat)) {
                foreach ($list_musics_cat as $music) {
            ?>
                    <li>
                        <div class="item_content">
                            <a href="?mod=musics&action=detailMusic&id=<?php echo $music['id'] ?>" title="Thật bất ngờ" class="tenbaihat"><?php echo $music['name'] ?></a><a href="#" title="Trúc Nhân" class="tencasi"> - <?php echo $music['name_artist'] ?></a>
                        </div>
                        <div class="item_listen">
                            <img src="public/video/Headphone.png">
                            <p><?php echo number_format($music['view']) ?></p>
                        </div>
                        <div class="item_play">
                            <a href="?mod=musics&action=detailMusic&id=<?php echo $music['id'] ?>"><img src="public/video/Toolbar - Play.png"></a>
                            <a href="#"><img src="public/video/addlove.png"></a>
                        </div>
                    </li>
            <?php
                }
            }
            ?>


            <div class="nextpage">
                <div class="itemnext">
                    <a href="" style="color:#00F">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">Trang cuối</a>
                </div>
            </div>

        </div>
        <!--ket thuc list cac bai hat-->

    </div>
    <!-- ket thuc content-->
</div>
<?php
get_footer();
?>