function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
            tmp = item.split("=");
            if (tmp[0] === parameterName) {
                result = decodeURIComponent(tmp[1]);
            }
        });
    return result;
}

$(document).ready(function(){
    var room_id = findGetParameter('r_id');
    $('#formEditRoom').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("room_id", room_id);
        $.ajax({
            type: 'post',
            url: 'includes/update_room_model.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if(data.updateRoom){
                    $('#erro').addClass("hide");
                    $('#confirmacao').text("Room updated.");
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