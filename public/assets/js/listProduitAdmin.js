$(document).ready(function () {
    let offset = 0;
    //var teste = 0;
    const myProduit = $('#myProduit');

    $.ajax({
        type: "POST",
        url: "http://localhost/e_commerce/src/controller/produitController.php",
        data: {limit: 10, offset: offset},
        dataType: 'json',
        success: function (data) {
            console.log('success');
            myProduit.html('');
            printData(data, myProduit);
            offset += 10;
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
    $("#suivant").click(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/e_commerce/src/controller/produitController.php",
            data: {limit: 10, offset: offset},
            dataType: 'json',
            success: function (data) {
                if (!$.trim(data)){
                    offset=0;
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/e_commerce/src/controller/produitController.php",
                        data: {limit: 5, offset: offset},
                        dataType: 'json',
                        success: function (data) {
                            console.log('success');
                            myProduit.html('');

                            printData(data, myProduit);
                            offset += 10;
                        }, error: function (data) {
                            console.log('erreur');
                            console.log(data);
                        }
                    });
                }else {
                    console.log('success');
                    myProduit.html('');
                    printData(data, myProduit);
                    offset += 10;
                }
            }, error: function (data) {
                console.log('erreur');
                console.log(data);

            }

        });
    });

    function printData(data, myProduit) {
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
