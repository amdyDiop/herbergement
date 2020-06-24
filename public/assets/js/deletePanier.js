$(document).ready(function () {
    $("table").on('click', 'button', function () {
        if (confirm('Êtes-vous sûr?')) {
            $(this).parents('tr').hide();
            var id = $(this).attr("id");
            // alert(id);
            $.ajax({
                type: "POST",
                url: "http://localhost/e_commerce/src/controller/deleteController.php",
                data: {id: id},
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    // alert('produit supprimé');
                    $('.cart p').html(data.length);
                    $('#resultat').addClass(' alert alert-success');
                    $('#resultat').html('le produit a été enlevé de votre panier')
                        .fadeIn().delay(2000).fadeOut();
                    console.log(data);
                    let total=0;
                    $.each(data, function (indice,produit) {
                        total= total+ Number(produit[0].prix);
                    });

                   $('#total').html('TOTAL: '+total+' €');
                },
                error: function () {
                    console.log('erreur lors de l\'enlèvement du produit');
                }
            });
        }
    });
});
