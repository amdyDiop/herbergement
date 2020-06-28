$(document).ready(function () {
    let offset = 0;
    const content = $('#content');
    //declararion de la variable chambres pour le printdata ou niveau de l'id chambre
    const chambre = $('#content #tbodyChambre');
    //recupération de la liste des chambre avec ajax
    $.ajax({
        type: "POST",
        url: "http://localhost/hebergement/controllers/ChambreController.php",
        data: {limit: 8, offset: offset},
        dataType: 'json',
        success: function (data) {
            //console.log(data)
            chambre.html('');
            printChambre(data, chambre);
            offset += 8;
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });
    $("#content #suivant").click(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/hebergement/controllers/ChambreController.php",
            data: {limit: 8, offset: offset},
            dataType: 'json',
            success: function (data) {
                if (!$.trim(data)) {
                    offset = 0;
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/hebergement/controllers/ChambreController.php",
                        data: {limit: 8, offset: offset},
                        dataType: 'json',
                        success: function (data) {
                            console.log('success');
                            chambre.html('');
                            printChambre(data, chambre);
                            offset += 8;
                        }, error: function (data) {
                            console.log('erreur');
                            console.log(data);
                        }
                    });
                } else {
                    console.log('success');
                    chambre.html('');
                    printChambre(data, chambre);
                    offset += 8;
                }
            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });
    });
    content.on('click', 'button', function () {
        var tab = $(this).attr('id').split("_")
        var id = tab[1];
        if (tab[0] == "delete") {

            if (confirm("voulez-vous supprimé cette chambre")) {
                // $(this).parents('tr').hide();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/hebergement/controllers/ChambreController.php",
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        if (data == 1) {
                            console.log("supprimer")
                            $(this).parents('tr').hide();
                            $('#content #resultat').addClass(' alert alert-success');
                            $('#content #resultat').html('La cahmbre à été supprimée')
                        }
                        // console.log(data)
                    }, error: function (data) {
                        console.log('erreur');
                        console.log(data);
                    }
                });
            }
        }
        else if(tab[0] == "edit"){
            const modalEdit = $('#modalEdit');
            const typeChambre = $('#type');
            const batiment = $('#batiment');
            const edit = $('#edit');
//recuperation d'un chambre
            $.ajax({
                type: "POST",
                url: "http://localhost/hebergement/controllers/ChambreController.php",
                data: {id: id, edit: "edit"},
                dataType: 'json',
                success: function (data) {
                    //console.log('maa gui si biir');
                    //console.log(data);
                    modalEdit.html('')
                    printModale(data, modalEdit)
                    // console.log(data)
                }, error: function (data) {
                    console.log('erreur');
                    console.log(data);
                }
            });
            //recurpération des type de chambre pour le modal
            $.ajax({
                type: "GET",
                url: "http://localhost/hebergement/controllers/TypeChambreController.php?type=type",
                dataType: 'json',
                success: function (data) {
                    //console.log('maa gui si biir');
                   //console.log(data);
                  //  typeChambre.html('')
                    printTypeChambre(data, typeChambre)
                }, error: function (data) {
                    console.log('erreur');
                    console.log(data);
                }
            });
            //recurpération des  des batiment pour le modal
            $.ajax({
                type: "POST",
                url: "http://localhost/hebergement/controllers/BatimentController.php?batiment=batiment",
                dataType: 'json',
                success: function (data) {
                    //   console.log('maa gui si biir');
                    //console.log(data);
                    //typeChambre.html('')
                   printBatiment(data, batiment)
                }, error: function (data) {
                    console.log('erreur');
                    console.log(data);
                }
            });
            edit.click(function () {
                console.log("beus na ma nag");
                var numero = $('#numero').val();
                var type = $('#type').val();
                var batiment = $('#batiment').val();
              //  console.log(numero ,  type , batiment)
              $.ajax({
                    type: "POST",
                    url: "http://localhost/hebergement/controllers/ChambreController.php",
                    data: {id:tab[1],numero:numero,batiment:batiment,type:type},
                    dataType: 'json',
                    success: function (data) {
                           console.log('modifier');
                        console.log(data);
                    }, error: function (data) {
                        console.log('erreur');
                        console.log(data);
                    }
                });

            })


        }
    })

    function printChambre(data, myChambre) {
        $.each(data, function (indice, chambre) {

            myChambre.append(` 
           <tr role="row" class="odd justity-content-center">
                <td class="sorting_1">${chambre.id}</td>
                <td>${chambre.numero}</td>
                <td>${chambre.type}</td>
                <td>${chambre.batiment}</td>
                <td>
                    <a href="#modalEdit" rel="modal:open"><button id="edit_${chambre.id}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    <button  id="delete_${chambre.id}" type="button" class="btn btn-primary"><i class="fa fa-trash-o"></i> </button>
                </td>
           </tr>
         `);
        });
    }

    function printModale(data, modalEdit) {
        modalEdit.html('')
        $.each(data, function (indice, chambre) {
            modalEdit.append(` 
             <form id="modalForm">
        <div class=" row form-group">
            <div class="col-ms-6">
                <label for="id" class="col-form-label">Id:</label>
                <input type="text" class="form-control mr-2" id="id" name="id"
                       value="${chambre.id}" readonly>
            </div>
            <div class="col-ms-6">
                <label for="numero" class="col-form-label">Numéro Chambre:</label>
                <input type="text" class="form-control" id="numero" name="numero" value="${chambre.numero}">
            </div> 
            <div class="col-ms-6">
                <label for="type" class="col-form-label">Type Chambre:</label>
                <select class="form-control" name="type" id="type">
                    <option value="${chambre.type_chambre_id}">${chambre.type}</option>  
                </select>
            </div>
       
            <div class="col-ms-6">
                <label for="batiment" class="col-form-label">Batiment:</label>
                <select class="form-control" name="batiment" id="batiment">
                    <option value="${chambre.batiment_id}">${chambre.batiment}</option>  
                </select>
            </div>
            
        </div>

        </div>
        <div class=" row form-group">
            <div class="col-ms-6">
                <button type="button" id="edit" class="btn btn-primary mt-5">Modifier changement
                </button>
            </div>
        </div>
    </form>
    <a href="#" rel="modal:close">Fermer</a>
         `);
        });
    }

    function printTypeChambre(data, typechambre) {
        //typechambre.html('')
        $.each(data, function (indice, type) {
            typechambre.html('');
            typechambre.append(` 
            <option value="${type.id}">${type.type}</option>  
         `);
        });
    }
    function printBatiment(data, batiment) {
       // batiment.html('')
        $.each(data, function (indice, bat) {
            batiment.append(` 
            <option value="${bat.id}">${bat.nom}</option>  
         `);
        });
    }
});
