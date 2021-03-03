<?php
get_header();
?>

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
                        <div class="pl1"> <a href="?mod=musics&action=detailMusic&id=<?php echo $song['id'] ?>"><img src="admin/<?php echo $song_image['file']?>" alt="" style="width: 160px; height:170px;" /></a>
                            <p><a href="?mod=musics&action=detailMusic&id=<?php echo $song['id'] ?>" style="font-size: 14px " title="<?php echo $song['name'] ?>"  class="song-name">
                            <?php
                                $text = $song['name'];    // or $yourtext;
                                $maxPos = 35;           // Max. number of characters
                                if (strlen($text) > $maxPos)
                                {
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
        <div class="title"><span class="title_icon"></span>
            <h1><a href="baihat.html" style=" color:#39C  ">BÀI HÁT &gt;</a></h1>

            <div class="BaiHat">

                <!----  bat dau bai hat trai ---->
                <div class="baihat_trai">
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Thật bất ngờ</a><a href="#" title="Trúc Nhân" class="singer-name"> - Trúc Nhân</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="#" title="Thật bất ngờ" class="song-name">Người tôi yêu</a><a href="#" title="Trúc Nhân" class="singer-name"> - Chi Dân</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="#" title="Thật bất ngờ" class="song-name">Chờ ngày mưa tan</a><a href="#" title="Trúc Nhân" class="singer-name"> - Noo Phước Thịnh</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Đơn phương</a><a href="#" title="Trúc Nhân" class="singer-name"> - Nam Du</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Giấc mơ của anh</a><a href="#" title="Trúc Nhân" class="singer-name"> - Mr.Siro</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Tri kỉ</a><a href="#" title="Trúc Nhân" class="singer-name"> - Phan Mạnh Quỳnh/a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Lấy anh đi</a><a href="#" title="Trúc Nhân" class="singer-name"> - Nam Cường</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Đừng đi</a><a href="#" title="Trúc Nhân" class="singer-name"> - Hồ Ngọc Hà</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Vô vọng</a><a href="#" title="Trúc Nhân" class="singer-name"> - Hồ Quang Hiếu</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                </div>
                <!--ket thuc bai hat trai-->
                <div class="baihat_phai">
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Thôi</a><a href="#" title="Trúc Nhân" class="singer-name"> - Giang Hồng Ngọc</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Vẫn luôn chờ mong</a><a href="#" title="Trúc Nhân" class="singer-name"> - Hương Tràm</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Thất tình</a><a href="#" title="Trúc Nhân" class="singer-name"> - Trịnh Đình Quang</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Người ta nói đúng</a><a href="#" title="Trúc Nhân" class="singer-name"> - Lương Bích Hữu</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Con tim anh nằm đâu</a><a href="#" title="Trúc Nhân" class="singer-name"> - Bảo Thy</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Chỉ là thoáng qua</a><a href="#" title="Trúc Nhân" class="singer-name"> - Thùy Chi</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Để trái tim nghỉ ngơi</a><a href="#" title="Trúc Nhân" class="singer-name"> - Khắc Việt</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Dựa</a><a href="#" title="Trúc Nhân" class="singer-name"> - Maya</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                    <li class="listitembaihat">
                        <div class="item_content">
                            <a href="thatbatngo_baihat.html" title="Thật bất ngờ" class="song-name">Phải chi em biết</a><a href="#" title="Trúc Nhân" class="singer-name"> - Lệ Quyên</a>
                        </div>
                        <div class="item_listen">
                            <img src="video/Headphone.png">
                            <p>13.242.245</p>
                        </div>

                    </li>
                </div>
                <!--ket thuc bai hat phai-->

            </div>
        </div>

    </div>

    <!--ket thuc content-->
</div>
<?php
get_footer();
?>