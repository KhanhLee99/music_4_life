<?php

function get_list_artist()
{
    return db_fetch_array("SELECT * FROM `tbl_artists` ORDER BY `id` DESC");
}

function get_user_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    }
    return false;
}

function get_artist_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_artists` WHERE `id` = {$id}");
    }
    return false;
}

function delete_artist_by_id($id)
{
    return db_delete("`tbl_artists`", "`id` = {$id}");
}

function update_artist($table, $data, $where)
{
    db_update($table, $data, $where);
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function add_artist($data)
{
    return db_insert('tbl_artists', $data);
}

function search_info($search_info){
    return db_fetch_array("SELECT * FROM `tbl_artists` WHERE `name` LIKE '%{$search_info}%'");
}
