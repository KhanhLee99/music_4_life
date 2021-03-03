<?php
function get__song_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_songs` WHERE `id` = {$id}");
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

function get_file_song_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_file_musics` WHERE `music_id` = {$id}");
    }
    return false;
}

function get_user_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    }
    return false;
}

function update_song($table, $data, $where)
{
    db_update($table, $data, $where);
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function get_user_by_user_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = '{$id}'");
    return $item;
}

function add_comment($data)
{
    return db_insert('tbl_comment', $data);
}

function get_comments_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_array("SELECT * FROM `tbl_comment` WHERE `song_id` = {$id}");
    }
    return false;
}

function delete_cmt_by_id($id)
{
    return db_delete("`tbl_comment`", "`id` = {$id}");
}

// function get_list_artist()
// {
//     return db_fetch_array("SELECT * FROM `tbl_artists`");
// }