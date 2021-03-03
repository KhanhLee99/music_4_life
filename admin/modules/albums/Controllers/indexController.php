<?php

function construct()
{
    load('helper', 'validation');
    load('helper', 'url');
    load_model('index');
}

function indexAction()
{
    $user = get_user_by_username(user_login());
    global $error, $error2, $name_album, $search_info;
    if (isset($_POST['btn-add'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = 'Vui lòng nhập tên album';
        } else {
            $name_album = $_POST['name'];
        }
        $date = date('Y-m-d h:i:s');
        
        if (empty($error)) {
            $data = array(
                'name' => $name_album,
                'user_id' => $user['id'],
                'created_at' => $date
            );
            add_album($data);
            $error['success'] = "Đã thêm album thành công";
        }
    }

    if (isset($_POST['btn-search'])) {
        if (empty($_POST['search-info'])) {
            $error2['search-info'] = "Vui lòng nhập vào thông tin cần tìm kiếm";
        } else {
            $search_info = $_POST['search-info'];
        }

        if (empty($error2)) {
            $album_search = search_info($search_info);
            $data['album_search'] = $album_search;
        }
    }

    $list_album = get_list_album();
    $data['list_album'] = $list_album;
    load_view('index', $data);
}

function deleteAction()
{
    $id = $_GET['id'];
    delete_album_by_id($id);
    redirect('?mod=albums');
}

function updateAction()
{
    $id = $_GET['id'];
    global $error, $name_album;
    if (isset($_POST['btn-update'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống";
        } else {
            $name_album = $_POST['name'];
        }
        $date = date('Y-m-d h:i:s');
        
        if (empty($error)) {
            $data_update = array(
                'name' => $name_album,
                'updated_at' => $date
            );
            update_album("tbl_albums", $data_update, "`id` = {$id}");
            $error['success'] = "Đã cập nhật album thành công";
        }
    }

    $album = get_album_by_id($id);

    $data = array(
        'album' => $album,
    );
    load_view('update', $data);
}

function detailAction(){
    $id = $_GET['id'];
    $album = get_album_by_id($id);
    $list_song_album = get_list_song_by_album_id($id);
    $list_all_song = get_list_song();
    
    $list_song = array();
    foreach($list_song_album as $song){
        $list_song[$song['song_id']] = get_song_by_id($song['song_id']);
    }

    $list_song_other = array();
    foreach($list_all_song as $song){
        if(!array_key_exists($song['id'],$list_song)){
            $list_song_other[] = $song; 
        }
    }
    $data['album'] = $album;
    $data['list_song'] = $list_song;
    $data['list_song_other'] = $list_song_other;
    load_view('detail', $data);    
}

function deleteSongAction(){
    $album_id = $_GET['album_id'];
    $song_id = $_GET['song_id'];
    delete_song_form_album($album_id,$song_id);
    redirect("?mod=albums&action=detail&id={$album_id}");
}

function addSongAction(){
    $album_id = $_GET['album_id'];
    $song_id = $_GET['song_id'];
    $data = array(
        'album_id' => $album_id,
        'song_id' => $song_id,
    );
    add_song_to_album($data);
    redirect("?mod=albums&action=detail&id={$album_id}");
}


