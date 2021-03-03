<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh"); //search: time zone php  

/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://localhost/unitop/BE/PHP/project/music4life/music4life.com/admin/";


$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';












