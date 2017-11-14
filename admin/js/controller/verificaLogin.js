$(document).ready(function() {
    $.ajax({
        type: 'post',
        url: 'includes/verificaLogin.php',
        dataType: 'json',
        success: function (data) {
            var logado = data.logado;
            if (!logado) {
                window.location.href = 'http://localhost/hotel-giant/admin/login';
            }
            // else {
            //     $('#userImage').attr('src', data.userImage);
            // }

        },
        error: function (data) {
            console.log(data);
            window.location.href = 'http://localhost/hotel-giant/admin/login';
        }
    });
});