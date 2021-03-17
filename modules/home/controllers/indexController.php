<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $list_song = get_list_song();
    $list_song_cat = get_list_song_cat();
    $list_album = get_list_album();
    $data['list_song'] = $list_song;
    $data['list_song_cat'] = $list_song_cat;
    $data['list_album'] = $list_album;
    load_view('index', $data);
}


