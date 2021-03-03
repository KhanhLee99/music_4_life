<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Đăng ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <script type="text/javascript" src="public/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="public/js/app.js"></script>

</head>

<body>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo span4">
                    <h1><a href="?">Music4Life <span class="red">.</span></a></h1>
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
                    <h2>Sign-up</h2>
                    <?php echo form_error('account') ?>

                    <label for="name">Name</label>
                    <?php echo form_error('name') ?>
                    <input type="text" id="name" name="name" placeholder="Name...">

                    <label for="username">Username</label>
                    <?php echo form_error('username') ?>
                    <input type="text" id="username" name="username" value="<?php echo get_value('username') ?>" placeholder="Username...">

                    <label for="email">Email</label>
                    <?php echo form_error('email') ?>
                    <input type="text" id="email" name="email" value="<?php echo get_value('email') ?>" placeholder="Email...">

                    <label for="password">Password</label>
                    <?php echo form_error('password') ?>
                    <input type="password" id="password" name="password" placeholder="Password...">

                    <label for="re-password">Re-password</label>
                    <?php echo form_error('re-password') ?>
                    <input type="password" id="re-password" name="re-password" placeholder="Re-password...">

                    <input type="submit" name="btn_reg" value="Đăng ký" >
                    <span><a href="?mod=users&action=login">Quay lại</a> để đăng nhập</span>
                </form>
                <button id="setInterval" onclick="myFunction()">setInterval</button>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <!-- <script src="public/assets/js/jquery-1.8.2.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/assets/js/jquery.backstretch.min.js"></script>
    <script src="public/assets/js/scripts.js"></script> -->

    <script>
        function myFunction(){
            setInterval(function(){
                window.location.href='?mod=users&action=delete_not_active';
            }, 10000);
        }
    </script>

</body>

</html>