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
    global $error, $error2, $name_song, $artist_id, $cat_id, $search_info;
    if (isset($_POST['btn-add'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = 'Vui lòng nhập tên bài hát';
        } else {
            $name_song = $_POST['name'];
        }

        if (empty($_POST['artist-id'])) {
            $error['artist-id'] = 'Vui lòng chọn tên ca sĩ';
        } else {
            $artist_id = $_POST['artist-id'];
        }

        if (!empty($_POST['cat-id'])) {
            $cat_id = $_POST['cat-id'];
        }

        if (!empty($_POST['description'])) {
            $description = $_POST['description'];
        }else{
            $description = "Đang cập nhật";
        }
        $date = date('Y-m-d h:i:s');

        if (!empty($_POST['lyric'])) {
            $lyric = $_POST['lyric'];
        }
        
        if (empty($error)) {
            $data = array(
                'name' => $name_song,
                'lyric' => $lyric,
                'artist_id' => $artist_id,
                'song_cat_id' => $cat_id,
                'user_id' => $user['id'],
                'description' => $description,
                'created_at' => $date
            );
            add_song($data);
            $error['success'] = "Đã thêm bài hát thành công";
        }
    }
    if (isset($_POST['btn-search'])) {
        if (empty($_POST['search-info'])) {
            $error2['search-info'] = "Vui lòng nhập vào thông tin cần tìm kiếm";
        } else {
            $search_info = $_POST['search-info'];
        }

        if (empty($error2)) {
            $song_search = search_info($search_info);
            $data['song_search'] = $song_search;
        }
    }
    if (isset($_POST['btn-delete'])) {
        if (empty($_POST['song-id'])) {
            $error2['song-id'] = 'Chọn bài hát cần xóa';
        }

        if (empty($error2)) {
            foreach ($_POST['song-id'] as $song_id) {
                $file_song = get_file_song_by_song_id($song_id);
                @unlink($file_song['file']);
                delete_file_song_by_song_id($song_id);
                delete_songs_form_album_by_song_id($song_id);
                delete_music_by_id($song_id);
            }
            $error2['delete-success'] = "Xóa bài hát thành công";
        }
    }
    $list_song = get_list_song();
    $list_artist = get_list_artist();
    $list_song_cat = get_list_song_cat();
    $data['list_song'] = $list_song;
    $data['list_artist'] = $list_artist;
    $data['list_song_cat'] = $list_song_cat;
    load_view('index', $data);
}

function deleteAction()
{
    $id = $_GET['id'];
    $file_song = get_file_song_by_song_id($id);
    @unlink($file_song['file']);
    delete_file_song_by_song_id($id);
    delete_songs_form_album_by_song_id($id);
    delete_music_by_id($id);
    redirect('?mod=musics');
}

function updateSongAction()
{
    $id = $_GET['id'];
    $user = get_user_by_username(user_login());
    global $error, $error2, $name_song, $file, $artist_id, $cat_id;
    if (isset($_POST['btn-update'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống";
        } else {
            $name_song = $_POST['name'];
        }

        if (empty($_POST['artist-id'])) {
            $error['artist-id'] = "Hãy chọn ca sĩ";
        } else {
            $artist_id = $_POST['artist-id'];
        }

        if (!empty($_POST['cat-id'])) {
            $cat_id = $_POST['cat-id'];
        }

        if (!empty($_POST['description'])) {
            $description = $_POST['description'];
        }else{
            $description = "Đang cập nhật";
        }
        $date = date('Y-m-d h:i:s');
        if (!empty($_POST['lyric'])) {
            $lyric = $_POST['lyric'];
        }
        if (empty($error)) {
            $data_update = array(
                'name' => $name_song,
                'lyric' => $lyric,
                'artist_id' => $artist_id,
                'song_cat_id' => $cat_id,
                'description' => $description,
                'updated_at' => $date
            );
            update_song("tbl_songs", $data_update, "`id` = {$id}");
            $error['success'] = "Đã cập nhật bài hát thành công";
        }
    }
    //
    if (isset($_POST['btn-upload'])) {
        $error2 = array();
        $upload_dir = 'public/uploads/images/';
        $upload_file = trim($upload_dir . basename($_FILES['file']['name']));
        $upload_file = implode('', explode(' ', $upload_file));
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error2['type'] = "File phai co duoi la png, jpg, gif, jpeg";
        } elseif ($_FILES['file']['size'] > 29000000) {
            $error2['size'] = "Size qua tai";
        } elseif (file_exists($upload_file)) {
            $error2['file_exits'] = "File da ton tai tren he thong";
        }

        if (empty($error2)) {
            $dir = $upload_file;
            if (check_isset_file_song_image($id)) {
                $file_song_image = get_file_song_image_by_song_id($id);
                @unlink($file_song_image['file']);
                delete_file_song_image_by_song_id($id);
            }
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $data_file = array(
                    'file' => $dir,
                    'music_id' => $id,
                    'user_id' => $user['id'],
                );
                add_file_song_iamge($data_file);
                $error2['success'] = "Đã upload ảnh bài hát thành công";
            }
        }
    }

    $song = get_song_by_id($id);
    $list_song = get_list_song();
    $list_artist = get_list_artist();
    $list_song_cat = get_list_song_cat();
    $song_image = get_file_song_image_by_song_id($id);
    $data = array(
        'song' => $song,
        'list_song' =>  $list_song,
        'list_artist' => $list_artist,
        'list_song_cat' => $list_song_cat,
        'song_image' => $song_image,
    );
    load_view('updateSong', $data);
}

function uploadSongAction()
{
    $id = $_GET['id'];
    $user = get_user_by_username(user_login());
    global $error;
    if (isset($_POST['btn-upload'])) {
        $error = array();
        $upload_dir = 'public/mp3/';
        $upload_file = trim($upload_dir . basename($_FILES['file']['name']));
        $upload_file = implode('', explode(' ', $upload_file));
        $type_allow = array('mp3');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['type'] = "File phai co duoi la mp3";
        } elseif ($_FILES['file']['size'] > 29000000) {
            $error['size'] = "Size qua tai";
        } elseif (file_exists($upload_file)) {
            $error['file_exits'] = "File da ton tai tren he thong";
        }

        if (empty($error)) {
            $dir = $upload_file;
            if (check_isset_file_song($id)) {
                $file_song = get_file_song_by_song_id($id);
                @unlink($file_song['file']);
                delete_file_song_by_song_id($id);
            }
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $data_file = array(
                    'file' => $dir,
                    'music_id' => $id,
                    'user_id' => $user['id'],
                );
                add_file_song($data_file);
                $error['success'] = "Đã upload bài hát thành công";
            }
        }
    }

    $song = get_song_by_id($id);
    $data = array(
        'song' => $song,
    );
    load_view('uploadSong', $data);
}

function deleteFileSongAction()
{
    $id = $_GET['id'];
    if (check_isset_file_song($id)) {
        $file_song = get_file_song_by_song_id($id);
        @unlink($file_song['file']);
        delete_file_song_by_song_id($id);
        redirect('?mod=musics');
    }
}

function ajax_artist_songAction()
{
    $artist_id = $_POST['artist_id'];
    $list_song = get_list_song_by_artist_id($artist_id);
    $name_artists = [];
    foreach ($list_song as $song) {
        $name_artists[$song['id']]['artist'] = get_artist_by_id($song['artist_id'])['name'];
        $name_artists[$song['id']]['user'] = get_user_by_id($song['user_id'])['username'];
        $name_artists[$song['id']]['cat'] = get_song_cat_by_id($song['song_cat_id'])['name'];
        $name_artists[$song['id']]['file'] = get_file_song_by_song_id($song['id'])['file'];
    }
    $result = array(
        'list_song' => $list_song,
        'name_artists' => $name_artists
    );
    echo json_encode($result);
}

function ajax_cat_songAction()
{
    $song_cat_id = $_POST['song_cat_id'];
    $list_song = get_list_song_by_song_cat_id($song_cat_id);

    foreach ($list_song as $song) {
        $name_artists[$song['id']]['artist'] = get_artist_by_id($song['artist_id'])['name'];
        $name_artists[$song['id']]['user'] = get_user_by_id($song['user_id'])['username'];
        $name_artists[$song['id']]['cat'] = get_song_cat_by_id($song['song_cat_id'])['name'];
        $name_artists[$song['id']]['file'] = get_file_song_by_song_id($song['id'])['file'];
    }
    $result_cat = array(
        'list_song' => $list_song,
        'name_artists' => $name_artists
    );
    echo json_encode($result_cat);
}

function catAction()
{
    global $error, $name;
    if (isset($_POST['btn-add'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống";
        } else {
            $name = $_POST['name'];
        }
        $date = date('Y-m-d h:i:s');
        
        if (empty($error)) {
            $data_add = array(
                'name' => $name,
                'created_at' => $date
            );
            add_cat($data_add);
            $error['success'] = "Đã thêm thành công";
            // show_array($_POST);
        }
    }
    $list_cat = get_list_song_cat();
    $data['list_cat'] = $list_cat;
    load_view('cat', $data);
}

function updateCatAction()
{
    global $error, $name;
    $id = (int)$_GET['id'];
    if (isset($_POST['btn-update'])) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống";
        } else {
            $name = $_POST['name'];
        }
        $date = date('Y-m-d h:i:s');
        
        if (empty($error)) {
            $data_update = array(
                'name' => $name,
                'created_at' => $date
            );
            update_cat("tbl_song_cat", $data_update, "`id` = {$id}");
            $error['success'] = "Đã thêm thành công";
        }
    }
    $cat = get_cat_by_id($id);
    $data['cat'] = $cat;
    load_view('updateCat', $data);
}

function deleteCatAction()
{
    $id = $_GET['id'];
    delete_cat_by_id($id);
    redirect('?mod=musics&action=cat');
}
