$(document).ready(function(){
       $('#formLogin').on('submit', function(e){
        e.preventDefault();
        var email = $( "input[name='email']" ).val();
        var password = $( "input[name='password']" ).val();
        console.log(email);
        $.ajax({
            type: 'post',
            url: 'includes/login.php',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success: function (data) {
                var login  = data.login;
                if(login){
                    window.location.href = 'http://localhost/hotel-giant/admin';
                } else {
                    alert("Usuário ou senha incorretos");
                }
            }
        });
    });
});