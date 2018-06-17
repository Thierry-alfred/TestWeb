/**
 * Created by mkwen on 17/06/2018.
 */
$(function(){

    //VERIFIE SI N UTILISATEUR EST CONNECTER ET CHARGE LES PARAMETRE DU COMPTE
    if(localStorage.getItem('user') == undefined || localStorage.getItem('user') == null || localStorage.getItem('user') == "null" || localStorage['user'] == 'undefined')
        location.href = '/';
    else
        initval();



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

    ////CHARGE LES PARAMETRE DU COMPTE
    function initval(){
        user = JSON.parse(localStorage.getItem('user'));
        $('#homename').append(user.first_name + ' ' + user.last_name);
        $('#detname').append(user.first_name + ' ' + user.last_name);
        $('#detbirth').append( new Date(user.birth_date).toLocaleString());
        $('#detemail').append(user.email);
    }




    //GESTION ARTICLE

    $('#indexhome #imagesave').click(function(){

    });
});