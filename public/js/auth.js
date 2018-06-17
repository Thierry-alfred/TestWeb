/**
 * Created by mkwen on 17/06/2018.
 */
$(function(){


    paramlogin = {
        email: $('#login #email'),
        password: $('#login #password')
    };

    $('#login #btnlogin').click(function (){
        console.log("ok");
        //$.post("http://127.0.0.1:8000/api/v1/login",paramlogin,function(data, status)
        //{
        //        console.log("Data: " + data + "\nStatus: " + status);
        //});

        $.ajax({
            url: "http://127.0.0.1:8000/api/v1/login",
            data: paramlogin,
            success: function( result ) {
               console.log(result);
            }
        });
    });

});