$(document).ready(function () {
    //charger la page du li  avec on click
    $('#option').on('click', 'li', function () {
        var link = $(this).attr('id');
        if (link == "listeChambre") {
            $("#content").load("template/listeChambre.php");
        } else if (link == "addChambre") {
            $("#content").load("template/addChambre.php");
        } else if (link == "listEtudiant") {
            $("#content").load("template/listEtudiant.php");
        } else if (link == "addEtudiant") {
            $("#content").load("template/addEtudiant.php");
        }
    });
    //recuoération des nombres batiments
    $.ajax({
        type: "GET",
        url: "http://localhost/hebergement/controllers/BatimentController.php?batiment=batiment",
        dataType: 'json',
        success: function (data) {
            $('#nbBatiment').html(data.length)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
    //récupération des nombres etudiants
    $.ajax({
        type: "GET",
        url: "http://localhost/hebergement/controllers/EtudiantController.php?user=user",
        dataType: 'text',
        success: function (data) {
            $('#nbetudiant').html(data)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });

    //récupération des nombres etudiants
    $.ajax({
        type: "GET",
        url: "http://localhost/hebergement/controllers/ChambreController.php?chambre=chambre",
        dataType: 'text',
        success: function (data) {
            $('#nbChambre').html(data)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
});