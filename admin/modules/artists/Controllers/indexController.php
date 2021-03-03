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
    global $error, $error2, $name_artist, $search_info;
    if (isset($_POST['btn-add'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = 'Vui lòng nhập tên ca sĩ';
        } else {
            $name_artist = $_POST['name'];
        }

        if (!empty($_POST['description'])) {
            $description = $_POST['description'];
        }else{
            $description = "Đang cập nhật";
        }
        $date = date('Y-m-d h:i:s');
    
        if (empty($error)) {
            $data = array(
                'name' => $name_artist,
                'user_id' => $user['id'],
                'description' => $description,
                'created_at' => $date
            );
            add_artist($data);
            $error['success'] = "Đã thêm ca sĩ thành công";
        }
    }

    if (isset($_POST['btn-search'])) {
        if (empty($_POST['search-info'])) {
            $error2['search-info'] = "Vui lòng nhập vào thông tin cần tìm kiếm";
        } else {
            $search_info = $_POST['search-info'];
        }

        if (empty($error2)) {
            $artist_search = search_info($search_info);
            $data['artist_search'] = $artist_search;
        }
    }

    $list_artist = get_list_artist();
    $data['list_artist'] = $list_artist;
    load_view('index', $data);
}

function deleteAction()
{
    $id = $_GET['id'];
    delete_artist_by_id($id);
    redirect('?mod=artists');
}

function updateAction()
{
    $id = $_GET['id'];
    global $error, $name_artist;
    if (isset($_POST['btn-update'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống";
        } else {
            $name_artist = $_POST['name'];
        }

        if (!empty($_POST['description'])) {
            $description = $_POST['description'];
        }else{
            $description = "Đang cập nhật";
        }
        $date = date('Y-m-d h:i:s');
        
        if (empty($error)) {
            $data_update = array(
                'name' => $name_artist,
                'description' => $description,
                'updated_at' => $date
            );
            update_artist("tbl_artists", $data_update, "`id` = {$id}");
            $error['success'] = "Đã cập nhật ca sĩ thành công";
        }
    }

    $artist = get_artist_by_id($id);

    $data = array(
        'artist' => $artist,
    );
    load_view('update', $data);
}
