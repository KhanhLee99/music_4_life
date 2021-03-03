<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo span4">
                    <h1><a href="">Music4Life <span class="red">.</span></a></h1>
                </div>
                <div class="links span8">
                    <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                    <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="register-container container">
        <div class="row">
            <div class="iphone span5">
                <img src="public/assets/img/iphone.png" alt="">
            </div>
            <div class="register span6">
                <form action="" method="post">
                    <h2>Sign-in</h2>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?php echo get_value('username') ?>" placeholder="Username...">
                    <?php echo form_error('username') ?>
            
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password...">
                      <?php echo form_error('password') ?>

                    <input type="submit" name="btn_login" value="Đăng nhập">
                    <?php echo form_error('account') ?>
                    
                    <!-- <span>Click <a href="?mod=users&action=register">vào đây</a> để tạo tài khoản mới</span> -->
                    <!-- <span><a href="#"> << Quên mật khẩu>> </a></span> -->
                </form>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <!-- <script src="public/assets/js/jquery-1.8.2.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/assets/js/jquery.backstretch.min.js"></script>
    <script src="public/assets/js/scripts.js"></script> -->
</body>

</html>