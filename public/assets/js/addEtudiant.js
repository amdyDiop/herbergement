$(document).ready(function () {
    let offset = 0;
    const  content = $('#content');
    const bourse = $('#content #bourse');
    //var teste = 0;
    //declararion de la variable chambres pour le printdata ou niveau de l'id chambre
    const chambres = $('#chambres');
    //declararion de la variable bourses pour le printdata ou niveau de l'id bourses
    const bourses = $('#bourses');

    $.ajax({
        type: "POST",
        url: "http://localhost/hebergement/controllers/BourseController.php",
        data: {bourse:"bourse"},
        dataType: 'json',
        success: function (data) {
            console.log('success');
            console.log(data);
            //myProduit.html('');
           // printData(data, myProduit);
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });


    function printData(data, bourse) {
        $.each(data, function (indice, produit) {
            myProduit.append(`
            
             <tr>
                <td>${produit.id}</td>
                <td>${produit.libelle}</td>
                <td>${produit.prix}</td>
                <td><span class="label label-success">${produit.quantite}</span></td>
                <td>${produit.description}</td>
            </tr>
              
         `);


        });
    }

});
