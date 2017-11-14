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
    var event_id = findGetParameter('e_id');
    $('#formEditEvent').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("event_id", event_id);
        $.ajax({
            type: 'post',
            url: 'includes/update_event_model.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if(data.updateEvent){
                    $('#erro').addClass("hide");
                    $('#confirmacao').text("Event updated.");
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