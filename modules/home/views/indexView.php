<?php
get_header();

?>
<!-- header -->
<!------------------------- Menu Left : Start -->
<div class="menuHeader">
    <div class="menuTop">
        <ul class="menuTopList" id="ListMenu">

            <!----------- Index -->
            <li class="dropdown">
                <a class="active_dropdown" href="trangchu.html" title="Trang chủ" style="border-bottom:solid 4px #333;">Trang chủ</a>
            </li>

            <!----------- Bài Hát -->
            <li class="dropdown">
                <a class="active_dropdown" href="baihat.html" title="Bài hát">Bài hát</a>
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
                        <?php
                        $len = count($list_album);
                        $num1 = round($len / 3);
                        $num2 = round($len * 2 / 3);
                        for ($i = 0; $i < $num1; $i++) {
                        ?>
                            <a href="?mod=musics&action=detailMusic&id=1" title="<?php echo $list_album[$i]['name'] ?>"><?php echo $list_album[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                        <!-- <a href="playlist.html" title="Mới & Hót">Mới & hot</a> -->
                        
                    </div>
                    <div class="dropdown_column">
                    <?php
                        for ($i = $num1; $i < $num2; $i++) {
                        ?>
                            <a href="?mod=musics&action=detailMusic&id=1" title="<?php echo $list_album[$i]['name'] ?>"><?php echo $list_album[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="dropdown_column">
                        <?php
                        for ($i = $num2; $i < $len; $i++) {
                        ?>
                            <a href="?mod=musics&action=detailMusic&id=1" title="<?php echo $list_album[$i]['name'] ?>"><?php echo $list_album[$i]['name'] ?></a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </li>

            <!----------- Video -->
            <li class="dropdown">
                <a class="active_dropdown" href="video.html" title="Video">Video</a>
                <div class="dropdown_content">
                    <div class="dropdown_column">
                        <a href="video.html" title="Mới & Hót">Mới & hot</a>
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
                    <a href="#" title="Việt Nam">Việt Nam</a>
                    <a href="#" title="Âu Mỹ">Âu Mỹ</a>
                    <a href="#" title="Trung Đông">Trung Đông</a>
                    <a href="#" title="Phi Châu">Phi Châu</a>
                </div>
            </li>

            <!---------- Nghệ Sĩ -->
            <li class="dropdown">
                <a class="active_dropdown" href="#" title="Nghệ sĩ">Nghệ sĩ</a>
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
<!-- end header -->
<div id="main">

    <?php get_template_part('slider')  ?>
    <!--ket thuc silde-->
    <?php get_template_part('right')  ?>

    <div id="content">
        <div class="title"><span class="title_icon"></span>
            <h1><a href="playlist.html" style=" color:#39C  ">PLAYLIST / ALBUM &gt;</a></h1>
            <!--   <hr width="70%" size="5px" align="center" color="#0000FF"/>--->
        </div>
        <div class="playlist">
            <?php
            if (!empty($list_song)) {
                $count = 0;
                foreach ($list_song as $song) {
                    $count++;
                    if ($count <= 10) {
                        $song_image = get_file_song_image_by_song_id($song['id']);
            ?>
                        <div class="pl1"> <a href="?mod=musics&action=detailMusic&id=<?php echo $song['id'] ?>"><img src="admin/<?php echo $song_image['file'] ?>" alt="" style="width: 160px; height:170px;" /></a>
                            <p><a href="?mod=musics&action=detailMusic&id=<?php echo $song['id'] ?>" style="font-size: 14px " title="<?php echo $song['name'] ?>" class="song-name">
                                    <?php
                                    $text = $song['name'];    // or $yourtext;
                                    $maxPos = 35;           // Max. number of characters
                                    if (strlen($text) > $maxPos) {
                                        $lastPos = ($maxPos - 3) - strlen($text);
                                        $text = substr($text, 0, strrpos($text, ' ', $lastPos)) . '...';
                                    }
                                    echo $text;
                                    // echo $song['name'] 
                                    ?>
                                </a> <br><br>
                                <a href="" title="" class="singer-name"><?php echo get_artist_by_id($song['artist_id'])['name'] ?></a>
                        </div>
            <?php
                    }
                }
            }
            ?>


        </div>
        <div class="title"><span class="title_icon"></span>
            <h1><a href="video.html" style=" color:#39C  ">VIDEO / MV &gt;</a></h1>
        </div>
        <div class="videoleft">
            <div class="vd1"> <a href="Beautiful in White - Westlife  )"><img src="video/a.jpg" alt="Beautiful in White - Westlife" /></a>
                <!--  <p><a href="Beautiful in White - Westlife"    style= "
      font-size: 16px " title="Beautiful in White - Westlife">Beautiful in White - Westlife</a> <br>-->
            </div>
            <div class="vd2"> <a href="Vẫn luôn chờ mong - Hương Tràm   )"><img src="video/c.jpg" alt="Vẫn luôn chờ mong - Hương Tràm   " /></a> </div>
        </div>
        <div class="videoright">
            <div class="vr1"> <a href="Giả vờ nhưng em yêu anh "><img src="video/d.jpg" alt="Giả vờ nhưng em yêu anh" /></a>
                <p> <a href="Giả vờ nhưng em yêu anh" title="Giả vờ nhưng em yêu anh" class="song-name">Giả vờ nhưng em yêu anh - </a> <a href="Miu Lê" title="Miu Lê" class="singer-name">Miu Lê</a>
            </div>
            <div class="vr2"> <a href="Stronger"><img src="video/j.jpg" alt="Stronger" /></a>
                <p><a href="Stronger" title="Stronger" class="song-name">Stronger - </a> <a href="Kelly Clarkson" title="Kelly Clarkson" class="singer-name">Kelly Clarkson</a>
            </div>
            <div class="vr3"> <a href="Samdado News"><img src="video/h.jpg" alt="Samdado News" /></a>
                <p> <a href="Samdado News" title="Samdado News" class="song-name">Samdado News - </a> <a href="KyuHyun" title="KyuHyun" class="singer-name">KyuHyun</a>
            </div>
            <div class="vr4"> <a href="Đống xanh"><img src="video/e.jpg" alt="Đống xanh" /></a>
                <p> <a href="Đống xanh" title="Đống xanh" class="song-name">Đồng xanh - </a> <a href="Vy Oanh" title="Vy Oanh" class="singer-name">Vy Oanh</a>
            </div>
            <div class="vr5"> <a href="Có khi nào rời xa"><img src="video/g.jpg" alt="Có khi nào rời xa" /></a>
                <p> <a href="Có khi nào rời xa" title="Có khi nào rời xa" class="song-name">Có khi nào rời xa - </a> <a href="Bích Phương" title="Bích Phương" class="singer-name">Bích Phương</a>
            </div>
            <div class="vr6"> <a href="Roar"><img src="video/f.jpg" alt="Roar" /></a>
                <p> <a href="Roar" title="Roar" class="song-name">Roar - </a> <a href="Katy Perry" title="Katy Perry" class="singer-name">Katy Perry</a>
            </div>
        </div>

    </div>

    <!--ket thuc content-->
</div>
<?php
get_footer();
?>