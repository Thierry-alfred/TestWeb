/**
 * Created by mkwen on 17/06/2018.
 */
$(function(){


    //VERIFIE SI LUTISATEUR EST CONNECTE
    //if(localStorage.getItem('user') != undefined || localStorage.getItem('user') != null || localStorage['user'] != 'undefined')
    //    location.href = '/home';


    function showError(val){

        $('#login #alert').append('<div class="alert alert-danger" role="alert">'+val+'</div>');
    }

    $('#login #btnlogin').click(function (){
        paramlogin = {
            email: $("#login #email").val(),
            password: $('#login #password').val()
        };
        $('#login #alert').append('');
        //console.log(paramlogin);

        $.ajax({
            method: "POST",
            url:"http://127.0.0.1:8000/api/v1/login",
            data: paramlogin,
            dataType: "json"
        })
        .done(function(data) {
            if(data.status_code == 200){
                localStorage.setItem('user', JSON.stringify(data.user));
                //console.log(data);
                location.href = '/home';
            }else{
                showError('Error : ' + data.status_code + ' , ' + data.message);
            }
        })
        .fail(function(data) {
            console.log(data);
                showError('VERIFEZ VOTRE CONNEXION INTERNET OU RECHARCHER LA PAGE');
        });
    });

});