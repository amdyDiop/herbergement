$(document).ready(function () {
    const editChambre = $('#editChambre');
    const typeChambre =$('#type');
    const numero =$('#num');
    const batiment = $('#batiment');
    const edit = $('#edit');
    const id = $('#id').val();
    const  base = "http://localhost/hebergement/";
    edit.click(function (e) {
        console.log("beus na ma nag");
        var numero = $('#num  #numero').val();
        var type = $('#type').val();
        var batiment = $('#batiment').val();
        console.log("numero:"+numero ,  "type:"+type ,"batiment:"+ batiment, "id:"+id )
         $.ajax({
             type: "POST",
             url:  base+"controllers/ChambreController.php",
             data: {id:id,numero:numero,batiment:batiment,type:type ,modifier:"modifier"},
             dataType: 'json',
             success: function (data) {
                 if (data==1){
                     console.log(data);
                     $('#resultat').addClass('alert alert-success').html(" chambre modidié")
                     .fadeIn().delay(2000).fadeOut();
                     setTimeout(function(){
                         $("#content").load("template/listeChambre.php");
                     }, 2000);

                 }
                 else
                     $('#resultat').addClass('alert alert-danger').html(" erreur lors de la  modification")
             .fadeIn().delay(3000).fadeOut();

             }, error: function (data) {
                 console.log('erreur');
               alert(data);
             }
         });
        return false;
    });

    //recuperation numero chambre
    $.ajax({
        type: "POST",
        url:  base+"controllers/ChambreController.php",
        data: {id: id, numero: "numero"},
        dataType: 'json',
        success: function (data) {
           // console.log("numero ");
            //console.log(data);
            printNumero(data, numero)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
    //recurpération des type de chambre
    $.ajax({
        type: "GET",
        url:  base+"controllers/TypeChambreController.php?type=type",
        dataType: 'json',
        success: function (data) {
           printTypeChambre(data, typeChambre)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
    //recurpération des  des batiment pour le modal
    $.ajax({
        type: "POST",
        url:  base+"controllers/BatimentController.php?batiment=batiment",
        dataType: 'json',
        success: function (data) {
           printBatiment(data, batiment)
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });


/*
function printChambre(data, editChambre) {
    $.each(data, function (indice, chambre) {
        editChambre.append(` 
           
         `);
    });
}
*/

function printTypeChambre(data, typeChambre) {
    typeChambre.html('')
    $.each(data, function (indice, type) {
        typeChambre.append(` 
            <option value="${type.id}">${type.type}</option>  
         `);
    });
}

function printBatiment(data, batiment) {
        batiment.html('')
        $.each(data, function (indice, bat) {
            batiment.append(` 
            <option value="${bat.id}">${bat.nom}</option>  
         `);
        });
    }
function printNumero(data, numero) {
    numero.html('')
        $.each(data, function (indice, data) {
            numero.append(` 
                   <input type="text" class="form-control" id="numero" name="numero" value="${data.numero}">

         `);
        });
    }


});