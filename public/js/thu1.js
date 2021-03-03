document.addEventListener('DOMContentLoaded', function () {
    // var btn = document.getElementById('mybutton');
    // btn.onclick = function(){
    //     var noidungbinhluan = document.getElementsByClassName('noidungbinhluan');
    //     console.log(noidungbinhluan[0].innerHTML);
    // }

    add_comment = (data) => {
        var noidungbinhluan = document.getElementsByClassName('noidungbinhluan');
        noidungbinhluan[0].innerHTML += "<b style='color: black; font-size: 15px'>" + data.username + "</b>"
            + "<span style='color: gray; font-size: 13px; padding-left: 10px;'>" + data.created_at + "</span>"
            + "<p style='color: black; font-size: 15px'>" + data.content + "</p>";
    }

    function delete_comment(data){
        let obj = document.getElementById('comment_'+data.comment_id);
        obj.remove();
    }


    $(document).ready(function () {
        $('button#mybutton').click(function () {
            var text = $('textarea#mytextarea').val();
            if (text !== "") {
                var id = parseInt(document.getElementById("dem").textContent);
                var result = { content: text, song_id: id };
                $.ajax({
                    url: '?mod=musics&action=ajax_cmt',
                    method: 'POST',
                    data: result,
                    dataType: 'json',
                    success: function (data) {
                        add_comment(data);
                    },

                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }
            else {
                alert("ban can phai nhap noi dung");
            }
        });
    });

    $('.delete_comment').click(function () {
        var comment_id = $(this).attr('data-id');
        var result = { comment_id: comment_id };
        $.ajax({
            url: '?mod=musics&action=ajax_delete_cmt',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function (data) {
                delete_comment(data);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $('.edit_comment').click(function () {
        var id = $(this).attr('data-id');
        alert(id);
        // var result = { content: text, song_id: id };
        // $.ajax({
        //     url: '?mod=musics&action=ajax_cmt',
        //     method: 'POST',
        //     data: result,
        //     dataType: 'json',
        //     success: function (data) {
        //         add_comment(data);
        //     },

        //     error: function (xhr, ajaxOptions, thrownError) {
        //         alert(xhr.status);
        //         alert(thrownError);
        //     }
        // });
    });


}, false);