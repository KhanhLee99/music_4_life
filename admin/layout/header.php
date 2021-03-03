<page language="java" contentType="text/html; charset=utf-8" pageEncoding="UTF-8" %></page>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="title" -->
    <title>Music4Life</title>
    <!-- InstanceEndEditable -->
    <link href="public/Bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/Bootstrap/dist/css/font-awesome.min.css" rel="stylesheet" />
    <link href="public/Bootstrap/dist/css/admin.min.css" rel="stylesheet" type="text/css" />
    <link href="public/Bootstrap/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="public/Bootstrap/glyphicons.css" rel="stylesheet" type="text/css" />
    <link href="public/css/stylenewaddmin.css" rel="stylesheet" type="text/css" />
    <link href="public/css/table.css" rel="stylesheet" type="text/css" />
    <script src="public/Bootstrap/dist/js/jQuery-2.1.4.min.js"></script>
    <script src="public/Bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/Bootstrap/dist/js/app.min.js" type="text/javascript"></script>

    <script src="public/js/app.js" type="text/javascript"></script>
    <!-- <script src="public/js/thu.js" type="text/javascript"></script> -->

</head>

<body class="skin-green sidebar-mini">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"> <span class="logo-mini"><b>DB</b></span> <span class="logo-lg">Music4Life</span> </a>
        <nav class="navbar navbar-static-top" role="navigation"> <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="public/images/admin.jpg" class="user-image" alt="User Image" /> <span class="hidden-xs">Hello, <?php echo user_login() ?></span> </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header"> <img src="public/images/admin.jpg" class="img-circle" alt="User Image" />
                                <p><?php echo user_login() ?></p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left"> <a href="?mod=users&action=update" class="btn btn-default btn-flat">Chỉnh sửa hông tin</a> </div>
                                <div class="pull-right"> <a href="?mod=users&action=logout" class="btn btn-default btn-flat">Đăng xuất</a> </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </header>