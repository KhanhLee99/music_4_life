<?php

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

function check_login($username, $password)
{
    $count = db_num_rows("SELECT * FROM `tbl_users` WHERE `username`='{$username}' AND `password` = '{$password}' AND `is_active` = '1'");
    if ($count > 0) {
        return true;
    }
    return false;
}

function user_exits($username, $email)
{
    $count = db_num_rows("SELECT * FROM `tbl_users` WHERE `username`='{$username}' OR `email` = '{$email}'");
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function add_user($data)
{
    return db_insert('tbl_users', $data);
}

function  active_user($active_token)
{
    return db_update('tbl_users', array('is_active' => 1), "active_token = '{$active_token}'");
}

function check_active_token($active_token)
{
    $count = db_num_rows("SELECT * FROM `tbl_users` WHERE `active_token`='{$active_token}' AND `is_active` = '0'");
    if ($count > 0) {
        return true;
    }
    return false;
}

function get_users_active($active){
    return db_fetch_array("SELECT * FROM `tbl_users` WHERE `is_active` = '{$active}'");
}

function delete_user_not_active(){
    return db_delete("`tbl_users`", "`is_active` = '0'");
}