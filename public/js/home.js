/**
 * Created by mkwen on 17/06/2018.
 */
$(function(){

    //VERIFIE SI N UTILISATEUR EST CONNECTER ET CHARGE LES PARAMETRE DU COMPTE
    if(localStorage.getItem('user') == undefined || localStorage.getItem('user') == null || localStorage.getItem('user') == "null" || localStorage['user'] == 'undefined')
        location.href = '/';
    else{
        getAllArticle();
        initval();
    }




    //BOUTN DECONNECTION
    $('#btnlogout').click(function(){
       if(localStorage.getItem('user') != undefined){
           user = JSON.parse(localStorage.getItem('user'));
           url = "http://127.0.0.1:8000/api/v1/logout/"+user.api_token;
           console.log(url);
           $.ajax({
               method: "GET",
               url:url,
               dataType: "text"
           })
               .done(function(data) {

                   localStorage.removeItem('user');

                   location.href = '/';
               })
               .fail(function(data) {
                   console.log(data);
                   //showError('VERIFEZ VOTRE CONNEXION INTERNET OU RECHARCHER LA PAGE');
               });
       }
       else
        location.href = '/';
   });

    $('#fileprofile').click(function(){
        $('#file').click();
        });

    $('#file').change(function(){
        loadImg(document.getElementById('file').files, 'fileprofile');

   });

     $('#saveimg').click(function(){
        //user = JSON.parse(localStorage.getItem('user'));
        //paramdata = {
        //    user : user,
        //    file: document.getElementById('file').files[0]
        //};
        //console.log(paramdata);
        // $.ajax({
        //     method: "POST",
        //     data: paramdata,
        //     url:"http://127.0.0.1:8000/api/v1/changeIMG",
        //     // enctype: 'multipart/form-data',
        //     dataType: "JSON"
        // }).done(function(data) {
        //     console.log(data);
        // }).fail(function(data) {
        //     console.log(data);
        //     //showError('VERIFEZ VOTRE CONNEXION INTERNET OU RECHARCHER LA PAGE');
        // });
   });




    ////CHARGE LES PARAMETRE DU COMPTE
    function initval(){
        user = JSON.parse(localStorage.getItem('user'));
        $('#homename').append(user.first_name + ' ' + user.last_name);
        $('#detname').append(user.first_name + ' ' + user.last_name);
        $('#detbirth').append( new Date(user.birth_date).toLocaleString());
        $('#detemail').append(user.email);
    }


    function loadImg(file, id) {
        if (file.length > 0) {
             img = '';
             reader = new FileReader();
            reader.onload = function (e) {
                img = e.target.result;
                document.getElementById(id).src = img;
            }
            reader.readAsDataURL(file[0]);
        }
    }


    //GESTION ARTICLE


    function loaddata(data){

    }

    function getAllArticle(){
        $.ajax({
            method: "GET",
            url:"http://127.0.0.1:8000/api/v1/article/user/"+ JSON.parse(localStorage.getItem('user')).id,
            dataType: "JSON"
        }).done(function(data) {
            console.log(data);
            $('#articlelist').html('');
            for(var i = 0; i < data.length; i++){
                article = data[i];
               $('#articlelist').append(' <tr><th scope="row">'+article.id+'</th>'
                    +'<td>'+article.titre+'</td><td>'+article.description+'<td>'+JSON.parse(localStorage.getItem('user')).first_name+'</td>'
                +'<td> <a href="#"><i class="fas fa-pencil-alt"></i></a>'
                +'<a href="#" class="red-text"><i class="fas fa-trash"></i></a> </td></tr>')
            }
        }).fail(function(data) {
            console.log(data);
            //showError('VERIFEZ VOTRE CONNEXION INTERNET OU RECHARCHER LA PAGE');
        });
    }



    $('#indexhome #imagesave').click(function(){
        $('#indexhome #fileimg').click();
    });

    $('#indexhome #fileimg').change(function(){
        loadImg(document.getElementById('fileimg').files, 'imagesave');
    });

    $('#indexhome #btnsavearticle').click(function(){
        paramdata = {
            description : $('#indexhome #description').val(),
            titre : $('#indexhome #titre').val(),
            user_id : JSON.parse(localStorage.getItem('user')).id
        }

        $.ajax({
             method: "POST",
             data: paramdata,
             url:"http://127.0.0.1:8000/api/v1/article",
             dataType: "JSON"
         }).done(function(data) {
            $('#indexhome #description').val('');
            $('#indexhome #titre').val('');
            document.getElementById('imagesave').src = 'http://dev.testweb/img/blank.png';
            getAllArticle();
         }).fail(function(data) {
             console.log(data);
             //showError('VERIFEZ VOTRE CONNEXION INTERNET OU RECHARCHER LA PAGE');
         });
    })


});