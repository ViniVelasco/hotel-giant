$(document).ready(function(){
    $('#formAddEvent').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'post',
            url: 'includes/save_event.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if(data.insertEvent){
                    $('#erro').addClass("hide");
                    $('#confirmacao').text("Event created.");
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