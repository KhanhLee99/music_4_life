<?php
function get_list_song()
{
    return db_fetch_array("SELECT * FROM `tbl_songs` ORDER BY `id` DESC");
}

function get_list_artist()
{
    return db_fetch_array("SELECT * FROM `tbl_artists`");
}

function get_list_song_cat()
{
    return db_fetch_array("SELECT * FROM `tbl_song_cat` ORDER BY `id` DESC");
}

function get_list_user()
{
    return db_fetch_array("SELECT * FROM `tbl_users`");
}

function get_user_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    }
    return false;
}

function get_cat_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_song_cat` WHERE `id` = {$id}");
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

function get_list_song_by_artist_id($id)
{
    if ($id == 0) {
        return db_fetch_array("SELECT * FROM `tbl_songs`");
    }
    return db_fetch_array("SELECT * FROM `tbl_songs` WHERE `artist_id` = {$id}");
}

function get_song_cat_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_song_cat` WHERE `id` = {$id}");
    }
    return false;
}

function get_list_song_by_song_cat_id($song_cat_id)
{
    if ($song_cat_id == 0) return db_fetch_array("SELECT * FROM `tbl_songs`");
    return db_fetch_array("SELECT * FROM `tbl_songs` WHERE `song_cat_id` = {$song_cat_id}");
}

function delete_music_by_id($id)
{
    return db_delete("`tbl_songs`", "`id` = {$id}");
}

function delete_cat_by_id($id)
{
    return db_delete("`tbl_song_cat`", "`id` = {$id}");
}

function add_cat($data)
{
    return db_insert('tbl_song_cat', $data);
}

function add_song($data)
{
    return db_insert('tbl_songs', $data);
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function add_file_song($data)
{
    return db_insert('tbl_file_musics', $data);
}

function get_song_last()
{
    return db_fetch_row("SELECT * FROM `tbl_songs` ORDER BY `id` DESC LIMIT 1 ");
}

function get_file_song_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_file_musics` WHERE `music_id` = {$id}");
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

function update_song($table, $data, $where)
{
    db_update($table, $data, $where);
}

function update_cat($table, $data, $where)
{
    db_update($table, $data, $where);
}

function check_isset_file_song($id)
{
    $count = db_num_rows("SELECT * FROM `tbl_file_musics` WHERE `music_id` = {$id}");
    if($count > 0) return true;
    return false;
}

function delete_file_song_by_song_id($id){
    return db_delete("`tbl_file_musics`", "`music_id` = {$id}");
}

function search_info($search_info){
    return db_fetch_array("SELECT * FROM `tbl_songs` WHERE `name` LIKE '%{$search_info}%'");
}

function add_file_song_iamge($data)
{
    return db_insert('tbl_file_song_image', $data);
}

function check_isset_file_song_image($id)
{
    $count = db_num_rows("SELECT * FROM `tbl_file_song_image` WHERE `music_id` = {$id}");
    if($count > 0) return true;
    return false;
}

function get_file_song_image_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_file_song_image` WHERE `music_id` = {$id}");
    }
    return false;
}

function delete_file_song_image_by_song_id($id){
    return db_delete("`tbl_file_song_image`", "`music_id` = {$id}");
}

function delete_songs_form_album_by_song_id($id){
    return db_delete("`tbl_album_song`", "`song_id` = {$id}");
}