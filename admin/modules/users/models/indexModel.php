<?php

function get_list_users($role)
{
    if (empty($role)) {
        $result = db_fetch_array("SELECT * FROM `tbl_users` ORDER BY `id` DESC");
    } else {
        $result = db_fetch_array("SELECT * FROM `tbl_users` WHERE `role` = '{$role}' ORDER BY `id` DESC");
    }
    return $result;
}

function get_user_by_id($id)
{
    $user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    return $user;
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function check_login($username, $password)
{
    $count = db_num_rows("SELECT * FROM `tbl_users` WHERE `username`='{$username}' AND `password` = '{$password}'");
    if ($count > 0) {
        return true;
    }
    return false;
}

function delete_user($id){
    return db_delete("`tbl_users`", "`id` = {$id}");
}

function update_user($table, $data, $where){
    db_update($table, $data, $where);
}