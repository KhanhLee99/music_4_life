/* <td id="" style="text-align:right"></td>
<td>
    <?php if (!empty(get_file_song_by_song_id($song['id']))) {
    ?>
        <audio controls style='width: 160px; height: 25px;'>
            <source src="++" type='audio/mpeg'>
        </audio>
        <a href='?mod=musics&action=uploadSong&id="++"'><span class='glyphicon glyphicon-refresh'></span></a>
    <?php
    } else {
    ?>
        <a href='?mod=musics&action=uploadSong&id=<?php echo $song['id'] ?>'><span class='glyphicon glyphicon-plus'></span></a>
    <?php
    } ?>
</td>
<td>
    <a href="?mod=musics&action=delete&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
    <a href="?mod=musics&action=updateSong&id=<?php echo $song['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
</td> 
                             */

$(document).ready(function() {
    function render_users(container, list_users, is_admin, is_big_admin) {
        var htmlItems = list_users.map(function(item) {
            if ((is_admin === true && item.role == 3) || (is_big_admin === true && (item.role == 2 || item.role == 3))) {
                return "<tr><td>" + "<input type='checkbox' class='checkbox' />" + "</td>" +
                    " <td>" + item.id + "</td>" +
                    " <td>" + item.name + "</td>" +
                    " <td>" + item.username + "</td>" +
                    " <td>" + item.email + "</td>" +
                    " <td>" + item.created_at + "</td>" +
                    " <td>" + "<a href='#'><span class='glyphicon glyphicon-ok'></span></a>" + "</td>" +
                    "<td>" +
                    "<a href='?mod=users&action=delete&id=" + item.id + "'><span class='glyphicon glyphicon-trash'></span></a>" +
                    "<a href='?mod=users&action=update&id=" + item.id + "'><span class='glyphicon glyphicon-pencil'></span></a>" +
                    "</tr>";
            }
            return "<tr><td>" + "<input type='checkbox' class='checkbox' />" + "</td>" +
                " <td>" + item.id + "</td>" +
                " <td>" + item.name + "</td>" +
                " <td>" + item.username + "</td>" +
                " <td>" + item.email + "</td>" +
                " <td>" + item.created_at + "</td>" +
                " <td>" + "<a href='#'><span class='glyphicon glyphicon-ok'></span></a>" + "</td>" +
                "<td>" +
                // "<a href=''><span class='glyphicon glyphicon-trash'></span></a>" + "<a href=''><span class='glyphicon glyphicon-pencil'></span></a>" + 
                "</tr>";
        });
        var html = htmlItems.join('');
        container.html(html);
    }

    function render(container, list_song, name_artists) {
        var htmlItems = list_song.map(function(item) {
            if (name_artists[item['id']]['file'] !== null) {
                return "<tr><td>" + "<input type='checkbox' class='checkbox' />" + "</td>" +
                    "<td id='song-id'>" + item.id + "</td>" +
                    // "<td id='song-name' style='text-align:left'>" + item.name + "</td>" +
                    "<td id='song-artist' style='text-align:left'>" + name_artists[item.id]['artist'] + "</td>" +
                    "<td id='' style='text-align:left'>" + name_artists[item.id]['cat'] + "</td>" +
                    "<td id='' style='text-align:left'>" + name_artists[item.id]['user'] + "</td>" +
                    // "<td id='' style='text-align:left'>" + "view" + "</td>" +
                    "<td>" +
                    "<a style='color: blue;' href='?mod=musics&action=uploadSong&id=" + item.id + "'><span class='glyphicon glyphicon-refresh'></span></a>" +
                    " <audio controls loop style='width: 160px; height: 25px;'><source src=" + name_artists[item['id']]['file'] + " type='audio/mpeg'></audio>" +
                    "<a style='color: red;' href='?mod=musics&action=deleteFileSong&id=" + item.id + "'><span class='glyphicon glyphicon-remove'></span></a>" +
                    "</td>" +
                    "<td>" + "<a style='color: green;' href='?mod=musics&action=delete&id=" + item.id + "'><span class='glyphicon glyphicon-trash'></span></a>" +
                    "<a style='color: black;' href='?mod=musics&action=updateSong&id=" + item.id + "'><span class='glyphicon glyphicon-pencil'></span></a>" + "</tr>";
            }
            return "<tr><td>" + "<input type='checkbox' class='checkbox' />" + "</td>" +
                "<td id='song-id'>" + item.id + "</td>" +
                // "<td id='song-name' style='text-align:left'>" + item.name + "</td>" +
                "<td id='song-artist' style='text-align:left'>" + name_artists[item.id]['artist'] + "</td>" +
                "<td id='' style='text-align:left'>" + name_artists[item.id]['cat'] + "</td>" +
                "<td id='' style='text-align:left'>" + name_artists[item.id]['user'] + "</td>" +
                // "<td>" + "ivew" + "</td>" +
                "<td>" + "<a href='?mod=musics&action=uploadSong&id=" + item.id + "'><span class='glyphicon glyphicon-plus'></span></a>" + "</td>" +
                "<td>" + "<a style='color: green;' href='?mod=musics&action=delete&id=" + item.id + "'><span class='glyphicon glyphicon-trash'></span></a>" +
                "<a style='color: black;' href='?mod=musics&action=updateSong&id=" + item.id + "'><span class='glyphicon glyphicon-pencil'></span></a>" + "</tr>";
        });
        var html = htmlItems.join('');
        container.html(html);
    }

    var list_song = $('#list-song');
    var list_users = $('#list-users');

    $('#list-artist').change(function() {
        var artist_id = $(this).val();
        var result = { artist_id: artist_id };
        $.ajax({
            url: '?mod=musics&action=ajax_artist_song',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
                render(list_song, data.list_song, data.name_artists);
                // console.log(data.name_artists);
            },

            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $('#list-cat').change(function() {
        var song_cat_id = $(this).val();
        var result = { song_cat_id: song_cat_id };
        $.ajax({
            url: '?mod=musics&action=ajax_cat_song',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
                render(list_song, data.list_song, data.name_artists);
                // console.log(data.list_song);
            },

            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $('#type-users').change(function() {
        var type_users = $(this).val();
        var result = { type_users: type_users };
        // alert(type_users);
        $.ajax({
            url: '?mod=users&action=index_ajax',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
                render_users(list_users, data.list_users, data.is_admin, data.is_big_admin);
                // console.log(data.is_admin, data.is_big_admin);
            },

            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    
});