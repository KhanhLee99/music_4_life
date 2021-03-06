<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="public/css/main.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link href="public/css/baihat.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/SpryAssets_AN/SpryTabbedPanels_AN.css" rel="stylesheet" type="text/css" />
    <title>Music4Life</title>
    <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/css/header.css" />
    <link rel="stylesheet" type="text/css" href="public/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="public/css/footer.css" />
    <script src="public/SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>
    <script src="http://vjs.zencdn.net/4.11/video.js"></script>
    <script src="public/js/jquery.dataTables.min.js"></script>
    <script src="public/js/jquery-1.12.0.min.js"></script>
    <script src="public/js/bootstraap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/binhluan.css" />
    
</head>

<body>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '861536773969679',
                xfbml: true,
                version: 'v2.6'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Header : Start -->
    <div class="header">
        <div class="logo"> <a href="?"><img src="public/images/logo.png" width="120"></a> </div>
        <div class="language">
            <div>Ngôn ngữ: </div>
            <a href="#" title="Vienamese"><img style="height:20px" ; width="25px"
                    src="public/images/vietnam_texture.gif" alt="vn" /></a> <a href="#" title="English"><img
                    style="height:20px" ; width="25px" src="public/images/en-flag.jpg" alt="en" /></a>
        </div>
        <div class="user">
            <?php if (is_login()) {
            ?>
            <img src="public/images/user.png" alt="imgUser" />
            <a href=""><?php echo user_login() ?></a><span> | </span><a href="?mod=users&action=logout">Đăng xuất</a>
            <?php
            } else {
            ?>
            <img src="public/images/user.png" alt="imgUser" />
            <a href="?mod=users&action=login">Đăng nhập</a> <span>|</span> <a href="?mod=users&action=register">Đăng
                ký</a>
            <?php
            } ?>

        </div>
        <div class="search">
            <input class="searchInput" name="textSearch" type="text"
                placeholder="Tìm bài hát, video, playlist, ca sĩ" />
            <input class="seatchButton" name="buttonSearch" type="button" value="Tìm kiếm" />
        </div>
    </div>
    <!-- Header : End -->
    <!------------------------- Menu Left : Start -->
    <div class="menuHeader">
        <div class="menuTop">
            <ul class="menuTopList" id="ListMenu">

                <!----------- Index -->
                <li class="dropdown">
                    <a class="active_dropdown" href="trangchu.html" title="Trang chủ"
                        style="border-bottom:solid 4px #333;">Trang chủ</a>
                </li>

                <!----------- Bài Hát -->
                <li class="dropdown">
                    <a class="active_dropdown" href="baihat.html" title="Bài hát">Bài hát</a>
                    <div class="dropdown_content">
                        <div class="dropdown_column">
                            <a href="baihat.html" title="Mới & Hót">Mới & hot</a>
                            <a href="#" title="Nhạc Trẻ">Nhạc trẻ</a>
                            <a href="#" title="Trữ Tình">Trữ tình</a>
                            <a href="#" title="Cách Mạng">Cách mạng</a>
                            <a href="#" title="Tiền Chiến">Tiền chiến</a>
                            <a href="#" title="Nhạc Trịnh">Nhạc Trịnh</a>
                            <a href="#" title="Không lời">Không lời</a>
                            <a href="#" title="Rap Việt">Rap Việt</a>
                        </div>
                        <div class="dropdown_column">
                            <a href="#" title="Thiếu Nhi">Thiếu nhi</a>
                            <a href="#" title="Nhạc Việt">Nhạc Việt</a>
                            <a href="#" title="Rock Việt">Rock Việt</a>

                            <a href="#" title="Pop">Pop</a>
                            <a href="#" title="Rock">Rock</a>
                            <a href="#" title="Dance">Dance</a>
                        </div>
                        <div class="dropdown_column">
                            <a href="#" title="Blue/Jazz">Blue/Jazz</a>
                            <a href="#" title="Country">Country</a>
                            <a href="#" title="La Tinh">La Tinh</a>
                            <a href="#" title="Indie">Indie</a>
                            <a href="#" title="Hàn Quốc">Hàn Quốc</a>
                            <a href="#" title="Nhạc Hoa">Nhạc Hoa</a>
                            <a href="#" title="Nhạc Nhật">Nhạc Nhật</a>
                        </div>
                    </div>
                </li>

                <!----------- Playlist -->
                <li class="dropdown">
                    <a class="active_dropdown" href="playlist.html" title="Playlist">Playlist</a>
                    <div class="dropdown_content">
                        <div class="dropdown_column">
                            <a href="playlist.html" title="Mới & Hót">Mới & hot</a>
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