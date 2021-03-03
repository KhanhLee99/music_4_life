<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $list_song = get_list_song();
    $data['list_song'] = $list_song;
    load_view('index', $data);
}


