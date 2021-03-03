<?php

function construct()
{
    load('helper', 'url');
    load('helper', 'validation');
    load('lib', 'mail');
    load_model('index');
}

function indexAction()
{

    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function delete_not_activeAction()
{
    // $active = $_POST['active'];
    // $list_users = get_users_active($active);
    // $result = array(
    //     'list_users' => $list_users,
    // );
    // echo json_encode($result);
    delete_user_not_active();
    redirect('?');
}

function editAction()
{
}

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống Username';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống Password';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Password không đúng định dạng';
            } else {
                $password = $_POST['password'];
            }
        }

        if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                redirect('?');
            } else {
                $error['account'] = "Tài khoản này không đúng, vui lòng kiểm tra lại";
            }
        }
    }
    load_view('login');
}

function registerAction()
{
    global $error, $username, $email, $password, $re_password, $name;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        //name
        if (empty($_POST['name'])) {
            $error['name'] = 'Không được để trống';
        } else {
            $name = $_POST['name'];
        }
        //username
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống Username';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }
        //password
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống Password';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Password không đúng định dạng';
            } else {
                $password = $_POST['password'];
            }
        }
        //re-password
        if (empty($_POST['re-password'])) {
            $error['re-password'] = 'Không được để trống Password';
        } else {
            if (!is_password($_POST['re-password'])) {
                $error['re-password'] = 'Password không đúng định dạng';
            } else {
                $re_password = $_POST['re-password'];
            }
        }
        //email
        if (empty($_POST['email'])) {
            $error['email'] = 'Không được để trống Email';
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = 'Email không đúng định dạng';
            } else {
                $email = $_POST['email'];
            }
        }

        if (empty($error)) {
            if (!user_exits($username, $email)) {
                if ($password != $re_password) {
                    $error['re-password'] = "Mật khẩu không khớp";
                } 
                else {
                    $active_token = md5($username . time());
                    $data = array(
                        'name' => $name,
                        'username' => $username,
                        'email' => $email,
                        'password' => $password,
                        'active_token' => $active_token,
                    );
                    add_user($data);
                    $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                    $content = "Kích <a href='{$link_active}'>vào đây <a> để xác thực tài khoản";
                    echo send_mail("vkhang542@gmail.com", $name, "Xac thuc tai khoan", $content);
                }
            }
            else{
                $error['account'] = "Email hoặc Username đã được sử dụng";
            }
        }
    }
    load_view('register');
}

function activeAction()
{
    $active_token = $_GET['active_token'];
    $link_login = base_url("?mod=users&action=login");
    if (check_active_token($active_token)) {
        active_user($active_token);
        echo "<p>Kích hoạt thành công. <a href='{$link_login}'>Đăng nhập</a></p>";
    } else {
        echo "Xác thực không hợp lệ hoặc đã kích hoạt <a href='{$link_login}'>Đăng nhập</a>";
    }
}

function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    redirect("?mod=users&action=login");
}
