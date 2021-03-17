<?php
function get_list_song()
{
    return db_fetch_array("SELECT * FROM `tbl_songs`");
}

function get_artist_by_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_artists` WHERE `id` = {$id}");
    }
    return false;
}

function get_file_song_image_by_song_id($id)
{
    if (!empty($id)) {
        return db_fetch_row("SELECT * FROM `tbl_file_song_image` WHERE `music_id` = {$id}");
    }
    return false;
}

function get_list_song_cat()
{
    return db_fetch_array("SELECT * FROM `tbl_song_cat`");
}
function get_list_album()
{
    return db_fetch_array("SELECT * FROM `tbl_albums`");
}

