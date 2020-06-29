$(document).ready(function () {
    let offset = 0;
    //var teste = 0;
    base = "http://localhost/hebergement/";
    $.ajax({
        type: "POST",
        url: base+"controllers/EtudiantController.php",
        data: {limit: 9, offset: offset},
        dataType: 'text',
        success: function (data) {
            console.log('success');
            console.log(data);
            //printData(data, produit1,produit2);
            offset += 9;
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });

});