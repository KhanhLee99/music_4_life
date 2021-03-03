<?php

function construct()
{
    load('helper', 'validation');
    load('helper', 'url');
    load_model('index');
}

function indexAction()
{
    $role = isset($_GET['role']) ? $_GET['role'] : '';
    $list_users = get_list_users($role);
    $data['list_users'] = $list_users;
    $data['role'] = $role;
    load_view('index', $data);
}

function index_ajaxAction()
{
    $role = $_POST['type_users'];
    $list_users = get_list_users($role);
    $result = array(
        'list_users' => $list_users,
        'is_admin' => is_admin(),
        'is_big_admin' => is_big_admin()
    );
    echo json_encode($result);
}

function deleteAction()
{
    $id = (int)$_GET['id'];
    if (delete_user($id)) {
        redirect('?mod=users');
    }
}

function addAction()
{
}

function resetPassAction()
{
    global $error, $old_password, $new_password, $re_new_password;
    if (isset($_POST['btn-reset'])) {
        $error = array();
        // old-password
        if (empty($_POST['old-password'])) {
            $error['old-password'] = 'Không được để trống';
        } else {
            if (!is_password($_POST['old-password'])) {
                $error['old-password'] = 'Password không đúng định dạng';
            } else {
                $old_password = $_POST['old-password'];
            }
        }

        // new-password
        if (empty($_POST['new-password'])) {
            $error['new-password'] = 'Không được để trống';
        } else {
            if (!is_password($_POST['new-password'])) {
                $error['new-password'] = 'Password không đúng định dạng';
            } else {
                $new_password = $_POST['new-password'];
            }
        }

        // re-new-password
        if (empty($_POST['re-new-password'])) {
            $error['re-new-password'] = 'Không được để trống';
        } else {
            if (!is_password($_POST['re-new-password'])) {
                $error['re-new-password'] = 'Password không đúng định dạng';
            } else {
                $re_new_password = $_POST['re-new-password'];
            }
        }

        if (empty($error)) {
            $user = get_user_by_username(user_login());
            if ($user['password'] == $old_password) {
                if ($new_password == $re_new_password) {
                    $data['password'] = $new_password;
                    update_user("`tbl_users`", $data, "`username` = '" . user_login() . "'");
                    $error['account'] = 'ĐÃ ĐỔI MẬT KHẨU THÀNH CÔNG';
                } else {
                    $error['re-new-password'] = 'Mật khẩu mới không khớp';
                }
            } else {
                $error['old-password'] = 'Mật khẩu hiện tại không đúng';
            }
        }
    }
    load_view('resetPass');
}

function updateAction()
{
    $current_user = get_user_by_username(user_login());
    $id = isset($_GET['id'])? $_GET['id'] : $current_user['id'];
    
    global $error, $name, $phone;
    if (isset($_POST['btn-update'])) {
        $error = array();

        //name
        if (empty($_POST['name'])) {
            $error['name'] = 'Không được để trống TÊN HIỂN THỊ';
        } else {
            $name = $_POST['name'];
        }

        //phone
        if (empty($_POST['phone'])) {
            $error['phone'] = 'Không được để trống SỐ ĐIỆN THOẠI';
        } else {
            if (!is_phone($_POST['phone'])) {
                $error['phone'] = 'SỐ ĐIỆN THOẠI không đúng định dạng';
            } else {
                $phone = $_POST['phone'];
            }
        }

        //address
        $address = $_POST['address'];

        if (empty($error)) {
            $data = array(
                'name' => $name,
                'phone' => $phone,
                'address' => $address
            );
            update_user("`tbl_users`", $data, "`id` = '{$id}'");
            $error['account'] = "ĐÃ CẬP NHẬT THÀNH CÔNG";
        } else {
            $error['account'] = "ERROR";
        }
    }
    $user = get_user_by_id($id);
    $data['user'] = $user;
    load_view('update', $data);
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
                $user = get_user_by_username($username);
                if ($user['role'] != 3) {
                    $_SESSION['is_login'] = true;
                    $_SESSION['username'] = $username;
                    if ($user['role'] == 2) {
                        $_SESSION['is_admin'] = true;
                        $_SESSION['is_big_admin'] = false;
                    } elseif ($user['role'] == 1) {
                        $_SESSION['is_admin'] = true;
                        $_SESSION['is_big_admin'] = true;
                    } else {
                        $_SESSION['is_admin'] = false;
                        $_SESSION['is_big_admin'] = false;
                    }
                    redirect('?');
                } else {
                    $error['account'] = "Tài khoản này không đúng, vui lòng kiểm tra lại";
                }
            } else {
                $error['account'] = "Tài khoản này không đúng, vui lòng kiểm tra lại";
            }
        }
    }
    load_view('login');
}

function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['is_admin']);
    unset($_SESSION['is_big_admin']);
    redirect('?mod=users&action=login');
}
