<?php

function construct()
{
    load('helper', 'url');
    load('helper', 'validation');
    load('lib', 'mail');
    load_model('index');
}

function detailMusicAction(){
    $id = (int)$_GET['id'];
    $song = get__song_by_song_id($id);
    $artist = get_artist_by_id($song['artist_id']);
    $song_file = get_file_song_by_song_id($id);
    $user = get_user_by_id($song['user_id']);
    $comments = get_comments_by_song_id($id);
    $comments_detail = array();
    $idx = 0;
    foreach($comments as $comment){
        $comments_detail[$idx]['id'] = $comment['id'];
        $comments_detail[$idx]['username'] = get_user_by_user_id($comment['user_id'])['username'];
        $comments_detail[$idx]['content'] = $comment['content'];
        $comments_detail[$idx]['created_at'] = $comment['created_at'];
        $idx++;
    }
    // print_r($comments_detail);
    $data = array(
        'song' => $song,
        'artist' => $artist,
        'song_file' => $song_file,
        'user' => $user,
        'comments_detail' => $comments_detail
    );
    load_view('detailMusic', $data);
}

function ajaxViewAction(){
    $song_id = (int)$_POST['song_id'];
    $song = get__song_by_song_id($song_id);
    $view = $song['view'];
    $data_update = array(
        'view' => $view+1
    );
    update_song("tbl_songs", $data_update, "`id` = {$song_id}");
    $result = array(
        'view' => $view+1,
    );
    echo json_encode($result);
}

function ajax_cmtAction(){
    $user = get_user_by_username(user_login());
    $content = $_POST['content'];
    $date = date('Y-m-d h:i:s');
    $song_id = (int)$_POST['song_id'];
    $data = array(
        'user_id' => $user['id'],
        'content' => $content,
        'created_at' => $date,
        'song_id' => $song_id
    );
    add_comment($data);
    $result = array(
        'username' => get_user_by_user_id($user['id'])['username'],
        'content' => $content,
        'created_at' => $date,
    );
    echo json_encode($result);
}

function ajax_delete_cmtAction(){
    $comment_id = (int)$_POST['comment_id'];
    delete_cmt_by_id($comment_id);
    $result = array(
        'comment_id' => $comment_id
    );
    echo json_encode($result);
}