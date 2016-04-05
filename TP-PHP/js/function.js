$(function() {
    $(".like").click(function() {
        var art_id = $(this).attr("id");
        var dataString = 'art_id='+art_id;  
        $('a#'+art_id).removeClass('like');
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: dataString,
            cache: false,
            success: function(data){
                if (data == 0) {
                    alert("Vous pouvez liker qu'une seul fois !");
                } else {
                    $('a#'+art_id).addClass('liked');
                    $('a#'+art_id).html(data);
                }
            }  
        });
        return false;
    });
});