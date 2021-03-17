<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="public/css/main.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link href="public/css/videonhactre.css" rel="stylesheet" type="text/css" />
    <title>Music4Life</title>
    <link href="public/SpryAssets_AN/SpryTabbedPanels_VD.css" rel="stylesheet" type="text/css" />
    <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/css/header.css" />
    <link rel="stylesheet" type="text/css" href="public/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="public/css/footer.css" />
    <script src="public/SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>
    <script src="http://vjs.zencdn.net/4.11/video.js"></script>
</head>

<body>
    <!-- Header : Start -->
    <div class="header">
        <div class="logo"> <a href="?"><img src="public/images/logo.png" width="120"></a> </div>
        <div class="language">
            <div>Ngôn ngữ: </div>
            <a href="#" title="Vienamese"><img style="height:20px" ; width="25px" src="public/images/vietnam_texture.gif" alt="vn" /></a> <a href="#" title="English"><img style="height:20px" ; width="25px" src="public/images/en-flag.jpg" alt="en" /></a>
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
            <input class="searchInput" name="textSearch" type="text" placeholder="Tìm bài hát, video, playlist, ca sĩ" />
            <input class="seatchButton" name="buttonSearch" type="button" value="Tìm kiếm" />
        </div>
    </div>
    <!-- Header : End -->
    
    