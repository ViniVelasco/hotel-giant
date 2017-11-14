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
    var id_user = findGetParameter('u_id');
    $('#formEditUser').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("user_id", id_user);
        $.ajax({
            type: 'post',
            url: 'includes/update_user_model.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if(data.updateUser){
                    $('#erro').addClass("hide");
                    $('#confirmacao').text("User updated.");
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