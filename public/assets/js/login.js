//login avec ajax
$(document).ready(function () {
    $("#resultat").hide(1);
    $("#connexion").click(function (e) {
        //alert('magui si biir');
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        if (email === "") {
            $("#email-error").html("Veuillez saisir votre  nom d'utilisateur !")
                .fadeIn().delay(2000).fadeOut();
        } else if (password === "") {
            alert('not mot de pass');
            $("#password-error").html("Veuillez saisir votre  mot de passe !")
                .fadeIn().delay(2000).fadeOut();
        } else {
            $.post(
                'http://localhost/e_commerce/src/controller/loginController.php', // Un script PHP que l'on va créer juste après
                {
                    email: email,  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                    password: password,
                },
                function (data) {
                    console.log(data);
                    if (data === 'client') {
                        $("#resultat").show().html("CONNEXION...");
                        setTimeout(function () {
                            window.location.href = "../../../index.php";
                        }, 1000);
                    } else if (data === 'admin') {
                        $("#resultat").show().html("CONNEXION...");
                        setTimeout(function () {
                            window.location.href = "../admin/admin.php";
                        }, 1000);
                    } else if (data === 'password not found') {
                        //lors ce que le mot de passe ne correspond pas a celle du login
                        $("#password-error").html("mot de passe incorrecte")
                            .fadeIn().delay(2000).fadeOut();
                    } else if (data === 'email not found') {
                        //lors ce quele login ne ce trouve pas dans notre base de donnée
                        $("#email-error").html("Cet utilisateur n'a pas de compte? inscrivez-vous pour se connecter")
                            .fadeIn().delay(2000).fadeOut();
                    }
                },
                'text'
            );
        }
    });

});
