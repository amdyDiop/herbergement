
$(document).ready(function (e) {
    //charger la page du li  avec on click
    $('#ul').on('click','li',function () {
        var link= $(this).attr('id');
        console.log(link);
        if (link=="listProduit"){
            $("#content").load("listeProduit.php");
        }
        else{
            $("#content").load("newProduit.php");
        }
    });
    $('#userUl').on('click','li',function () {
        console.log($(this).attr('id'));

    });
    $("#enregistrer").click(function (e) {
        e.preventDefault();
        alert("magui si biir");
        var login = $('#login').val();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var password = $('#password').val();
        var role = $('#role').val();
        var file_data = $('#file').prop('files')[0];    //Fetch the file
        var form_data = new FormData();
        form_data.append("file",file_data);
        form_data.append("login",login);
        form_data.append("prenom",prenom);
        form_data.append("nom",nom);
        form_data.append("password",password);
        form_data.append("role",role);
        console.log(form_data);
        //Ajax to send file to upload
        $.ajax({
            url:'http://localhost/e_commerce/src/controller/newProduitController.php',
            type: "POST",
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success:function(data){
                if ($("#login").val() === "") {
                    $("#login-error").html("Veuillez saisir votre  nom d'utilisateur !")
                        .fadeIn().delay(2000).fadeOut();
                    //console.log(data);
                }
                else if (data == 0)
                {
                    $("#resultat").html("erreur lors de upload file  !")
                        .fadeIn().delay(2000).fadeOut();
                    console.log(data);
                }
            }
        });
    });
});

