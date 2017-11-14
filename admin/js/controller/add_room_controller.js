$(document).ready(function(){
    $('#formAddRoom').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'post',
            url: 'includes/save_room.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if(data.insertRoom){
                    $('#erro').addClass("hide");
                    $('#confirmacao').text("Room created.");
                    $('#confirmacao').removeClass("hide");
                }
            },
            error: function(data) {
                $("#confirmacao").addClass('hide');
                $('#erro').text(data.responseText);
                $('#erro').removeClass("hide");
            }
        });
    });
});