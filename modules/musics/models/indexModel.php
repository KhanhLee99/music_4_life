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

function get_list_musics_by_cat_id($id)
{
    if (!empty($id)) {
        return db_fetch_array("SELECT `tbl_songs`.`id`, `tbl_songs`.`name`, `tbl_songs`.`view`, `tbl_artists`.`name` AS `name_artist`, `tbl_artists`.`id` AS `id_artist` FROM `tbl_songs` INNER JOIN `tbl_artists` ON `tbl_songs`.`artist_id`=`tbl_artists`.`id` WHERE `tbl_songs`.`song_cat_id` = {$id}");
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

function get_list_song_cat()
{
    return db_fetch_array("SELECT * FROM `tbl_song_cat`");
}
function get_list_album()
{
    return db_fetch_array("SELECT * FROM `tbl_albums`");
}
