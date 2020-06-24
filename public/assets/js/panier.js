$(document).ready(function () {
    $('#apaiement').click(function () {
//alert('beusna ma nag');
       window.location.href="payment.php";
    });
    var panier = $('#card');
    $('#produit1').on('click', 'li', function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "http://localhost/e_commerce/src/controller/panierController.php",
            data: {id: id},
            dataType: 'json',
            success: function (data) {
                    $('.cart p').html(data.length);

                    console.log(data);
                   // printData(data, panier);

            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });

    });
/*
    function printData(data, produit1) {
        $.each(data, function (indice, produit) {

            produit1.append(`
                     <li class="single-cart-item clearfix">
                                                    <span class="cart-img">
                                                        <a href="#"><img src="../../assets/img/menu/4.jpg" alt=""></a>
                                                    </span>
                                            <span class="cart-info">
                                                        <a href="#">${produit.libelle}</a>
                                                        <span>2 x $${produit.prix}</span>
                                                        <a class="trash" href="#"><i class="fa fa-trash"></i></a>
                                                    </span>
                                        </li>
                                        <li>
                                                    <span class="sub-total-cart text-center">
                                                        SubTotal <span>$620</span>
                                                        <a href="" class="view-cart">Checkout</a>
                                                    </span>
                                        </li>
         `);
//return indice === data.length-2;
        });
    }
*/
});
