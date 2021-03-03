$(document).ready(function() {
    var count = 0;
    var Id;
    Id= setInterval(function(){
        count+= 1;
        console.log(count);
        // document.getElementById('dem').innerHTML = count;
        if(count > 10){
            xuly();
            clearInterval(Id);
        }
    }, 1000);
    function xuly(){
        var id = parseInt(document.getElementById("dem").textContent);
        var result = { song_id: id };
        $.ajax({
            url: '?mod=musics&action=ajaxView',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
            },

            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    // $('#setInterval').click(function() {
    //     // setInterval(function() {
    //     var active = 0;
    //     var result = { active: active };
    //     $.ajax({
    //         url: '?mod=users&action=ajax',
    //         method: 'POST',
    //         data: result,
    //         dataType: 'json',
    //         success: function(data) {
    //             alert('OK');
    //             console.log(data.list_users);

    //         },

    //         error: function(xhr, ajaxOptions, thrownError) {
    //             alert(xhr.status);
    //             alert(thrownError);
    //         }
    //     });
    //     // }, 3000);
    // });
});

