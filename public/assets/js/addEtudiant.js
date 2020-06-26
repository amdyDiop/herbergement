$(document).ready(function () {
    let offset = 0;
    const content = $('#content');
    //declararion de la variable chambres pour le printdata ou niveau de l'id chambre
    const chambre = $('#content #chambre');
    //declararion de la variable bourses pour le printdata ou niveau de l'id bourses
    const bourse = $('#content #bourse');
    //recupération de la liste des bourses avec ajax
    $.ajax({
        type: "POST",
        url: "http://localhost/hebergement/controllers/BourseController.php",
        data: {bourse: "bourse"},
        dataType: 'json',
        success: function (data) {
            console.log('success for list bourse');
            // console.log(data);
            //myProduit.html('');
            printBouse(data, bourse);
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });

    function printBouse(data, mybourse) {
        $.each(data, function (indice, bourse) {
            mybourse.append(`
                    <option value="${bourse.id}">${bourse.libelle}</option>
         `);
        });
    }

    //recupération de la liste des chambres avec ajax
    $.ajax({
        type: "POST",
        url: "http://localhost/hebergement/controllers/ChambreController.php",
        data: {chambre: "chambre"},
        dataType: 'json',
        success: function (data) {
            console.log('success for list chambre');
            //   console.log(data);
            //myProduit.html('');
            printChambre(data, chambre);
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });

    function printChambre(data, mychambre) {
        $.each(data, function (indice, chambre) {
            mychambre.append(`
                    <option value="${chambre.id}">NumeroChambre; ${chambre.numero}</option>
         `);
        });
    }
        $('#content #enregistrer').click(function () {
            var prenom = $('#prenom').val();
            var nom = $('#content #nom').val();
            var email = $('#content #email').val();
            var telephone = $('#content #telephone').val();
            var date_naiss = $('#content #date_naiss').val();
            var bourse = $('#content #bourse').val();
            var chambre = $('#content #chambre').val();
            var adresse = $('#content #adresse').val();
            // console.log(chambre);
            // console.log(nom);
            if (prenom == "") {
                $("#content #prenom-error").addClass("alert alert-danger").html("Veuillez saisir le  prenom !")
                    .fadeIn().delay(1000).fadeOut();
            }
            else if (nom == "") {
                $("#content #nom-error").addClass("alert alert-danger").html("Veuillez saisir le  nom !")
                    .fadeIn().delay(1000).fadeOut();
            }
            else if (date_naiss == "") {
                $("#content #date_naiss-error").addClass("alert alert-danger").html("Veuillez choisir  la  date de naissance !")
                    .fadeIn().delay(2000).fadeOut();
            }
            else if (email == "") {
                $("#content #email-error").addClass("alert alert-danger").html("Veuillez saisir  l' email !")
                    .fadeIn().delay(1000).fadeOut();
            }
            else if (telephone == "") {
                $("#content #telephone-error").addClass("alert alert-danger").html("Veuillez saisir le numéro de téléphone   !")
                    .fadeIn().delay(2500).fadeOut();
            }
            else if (bourse == 3) {
                if (adresse == "") {
                    $("#content #adresse-error").addClass("alert alert-danger").html("l'étudiant doit avoir un adresse  !")
                        .fadeIn().delay(2500).fadeOut();
                }
                if (chambre != "0") {
                    $("#content #chambre-error").addClass("alert alert-danger").html("l'étudiant ne doit avoir une chambre  !")
                        .fadeIn().delay(2500).fadeOut();
                }
            }
            else if (bourse != 3) {
                if (chambre != 0 && adresse != "") {
                    $("#content #adresse-error").addClass("alert alert-danger").html("l'étudiant est logé  !")
                        .fadeIn().delay(1500).fadeOut();
                }
                else if (chambre == 0 && adresse == "") {
                    $("#content #adresse-error").addClass("alert alert-danger").html("l'étudiant doit avoir une adresse  !")
                        .fadeIn().delay(2000).fadeOut();
                } else {
                    var data = $('form').serialize();
                    //alert(data);
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/hebergement/controllers/EtudiantController.php",
                        data: {prenom: prenom, nom: nom, email: email, telephone: telephone, adresse: adresse, bourse:bourse, date_naiss:date_naiss,chambre:chambre},
                        dataType: 'text',
                        success: function (data) {
                            console.log(data);
                           if (data =="invalid phone"){
                               $("#content #telephone-error").addClass("alert alert-danger").html("Veuillez saisir un numéro de téléphone   valide !")
                                   .fadeIn().delay(2500).fadeOut();
                           }
                           else if (data== "email non valide"){
                                $("#content #email-error").addClass("alert alert-danger").html("Veuillez saisir un email valide !")
                                    .fadeIn().delay(2500).fadeOut();
                            }
                        }, error: function (data) {
                            console.log('erreur');
                            console.log(data);
                        }
                    });
                }
            }


        });
});
