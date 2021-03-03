<?php

function get_list_album()
{
    return db_fetch_array("SELECT * FROM `tbl_albums` ORDER BY `id` DESC");
}

function get_user_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    }
    return false;
}

function get_album_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_albums` WHERE `id` = {$id}");
    }
    return false;
}

function delete_album_by_id($id)
{
    return db_delete("`tbl_albums`", "`id` = {$id}");
}

function update_album($table, $data, $where)
{
    db_update($table, $data, $where);
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function add_album($data)
{
    return db_insert('tbl_albums', $data);
}

function search_info($search_info){
    return db_fetch_array("SELECT * FROM `tbl_albums` WHERE `name` LIKE '%{$search_info}%'");
}

function get_list_song_by_album_id($id){
    return db_fetch_array("SELECT * FROM `tbl_album_song` WHERE `album_id` = {$id}");
}

function get_artist_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_artists` WHERE `id` = {$id}");
    }
    return false;
}

function get_song_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_songs` WHERE `id` = {$id}");
    }
    return false;
}

function delete_song_form_album($album_id, $song_id)
{
    return db_delete("`tbl_album_song`", "`album_id` = {$album_id} AND `song_id` = {$song_id}");
}

function get_list_song()
{
    return db_fetch_array("SELECT * FROM `tbl_songs`");
}

function add_song_to_album($data)
{
    return db_insert('tbl_album_song', $data);
}