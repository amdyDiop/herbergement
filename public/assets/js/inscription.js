$("#inscription").click(function (e) {
    e.preventDefault();
    var email = $('#email').val();
    var prenom = $('#prenom').val();
    var nom = $('#nom').val();
    var password = $('#password').val();
   var cPassword= $("#cPassword").val();
    if ($("#email").val() === "") {
        $("#email-error").html("Veuillez saisir votre  email !")
            .fadeIn().delay(2000).fadeOut();
        //console.log(data);

    }
    else if ($("#prenom").val() === "") {
        $("#prenom-error").html("Veuillez saisir votre  prénom  !")
            .fadeIn().delay(2000).fadeOut();
        //  console.log(data);
    }
    else if ($("#nom").val() === "") {
        $("#nom-error").html("Veuillez saisir votre  nom  !")
            .fadeIn().delay(2000).fadeOut();
        // console.log(data);
    }

    else if ($("#password").val() === "") {
        $("#password-error").html("Veuillez saisir votre  mot de passe  !")
            .fadeIn().delay(2000).fadeOut();
        // console.log(data);
    }
    else if ($("#cPassword").val() !== $("#password").val() || cPassword=="" ) {
        $("#cPassword-error").html("mot de passe non identique!")
            .fadeIn().delay(2000).fadeOut();
        //  console.log(data);
    }
    else {
        var form_data = new FormData();
        form_data.append("email", email);
        form_data.append("prenom", prenom);
        form_data.append("nom", nom);
        form_data.append("password", password);

        //Ajax to send file to upload
            $.post(
                'http://localhost/e_commerce/src/controller/inscriptionController.php',
                {
                        email: email,  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                        password: password,
                        prenom: prenom,
                        nom: nom,

                },
                    function (data) {
                        console.log(data);
                        if (data == 1) {
                                window.location.href = "../../../index.php";
                        }
                        else if(data =="login existe"){
                            $("#email-error").html("cette email exite déja!")
                                .fadeIn().delay(2000).fadeOut();
                            //  console.log(data);
                        }
                    },
                    'text'
                );
    }

});
