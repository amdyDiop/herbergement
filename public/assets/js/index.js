$(document).ready(function () {
    let offset = 0;
    //var teste = 0;
    const produit1 = $('#produit1');
    const produit2 = $('#produit2');
    $.ajax({
        type: "POST",
        url: "http://localhost/e_commerce/src/controller/produitController.php",
        data: {limit: 9, offset: offset},
        dataType: 'json',
        success: function (data) {
            console.log('success');
            produit1.html('');
            produit2.html('');

            printData(data, produit1,produit2);
             offset += 9;
        }, error: function (data) {
            console.log('erreur');
            console.log(data);
        }
    });

    //pagination des produit par le bouton suivant
    $("#suivant").click(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/e_commerce/src/controller/produitController.php",
            data: {limit: 9, offset: offset},
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
                            produit1.html('');
                            produit2.html('');
                            printData(data, produit1,produit2);
                            offset += 9;
                        }, error: function (data) {
                            console.log('erreur');
                            console.log(data);
                        }
                    });
                }else {
                    console.log('success');
                    produit1.html('');
                    printData(data, produit1,produit2);
                    offset += 9;
                }
            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });
    });
    $('#select').on('change', function() {
        var trie = this.value ;
        console.log(trie);
        offset = 0;
        $.ajax({
            type: "POST",
            url: "http://localhost/e_commerce/src/controller/produitController.php",
            data: {limit: 10, offset: offset,trie:trie},
            dataType: 'json',
            success: function (data) {
                console.log('success');
                produit1.html('');
                produit2.html('');
                printData(data, produit1,produit2);
                offset += 10;
            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });

    });
   // function pour la seelection des categories
    // a revoire plus tard
    $('#categorie').on('click','li', function() {
        var categorie = $(this).attr('id') ;
        //console.log(categorie);
        offset = 0;
        $.ajax({
            type: "POST",
            url: "http://localhost/e_commerce/src/controller/produitController.php",
            data: {limit: 9, offset: offset,categorie:categorie},
            dataType: 'json',
            success: function (data) {
                console.log('success');
                console.log(data);
                produit1.html('');
                produit2.html('');
                printData(data, produit1,produit2);
                offset += 9;
            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });

    });

    //button affichage du filtre
    var flip = 0;
    $( "#toggle" ).click(function() {

        if (flip++ % 2 !== 0 ){
            $( "#filtre" ).toggle();
            $('#contentFiltre').removeClass().addClass("col-md-9 col-sm-12 col-xs-12")

        }
        else {
            $( "#filtre" ).toggle();
            $('#contentFiltre').removeClass().addClass("col-md-12 col-sm-12 col-xs-12")

        }
    });
//range


        $(function() {
            const produit1 = $('#produit1');
            const produit2 = $('#produit2');
            var minPriceInRupees = 0;
            var maxPriceInRupees =1150;
            var currentMinValue = 0;
            var currentMaxValue = 1200;
            $( "#slider-range" ).slider({
                range: true,
                min: minPriceInRupees,
                max: maxPriceInRupees,
                values: [ currentMinValue, currentMaxValue ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    currentMinValue = ui.values[ 0 ];
                    currentMaxValue = ui.values[ 1 ];
                },
                stop: function( event, ui ) {
                    currentMinValue = ui.values[ 0 ];
                    currentMaxValue = ui.values[ 1 ];
                   // console.log(currentMinValue);
                    //console.log(currentMaxValue);
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/e_commerce/src/controller/produitController.php",
                        data: {min: currentMinValue,max:currentMaxValue,offset: offset},
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                                console.log(data);
                                console.log('successsss');
                                produit1.html('');
                                produit2.html('');
                                printData(data, produit1,produit2);
                                offset += 9;
                        }, error: function (data) {
                            console.log('erreur');
                            console.log(data);

                        }

                    });
                    function printData(data, produit1) {
                        $.each(data, function (indice, produit) {

                            produit1.append(`
             <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="#">
                                                <img class="primary-image" src="assets/img/product/${produit.image}" alt="" style="width: 270px;height: 310px">
                                              
                                            </a>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-price">
                                                <span class="new-price">${produit.prix}€</span>
                                            </div>
                    
                                        </div>
                                        <div class="product-content text-center">
                                            <h3>${produit.libelle}</h3>
                                            <h4><a href="#">voir détaille</a></h4>
                                        </div>
                                        <div class="product-action">
                                            <ul id="addCard">
                                                <li id="${produit.id}" class="add-bag"><a href="#" data-toggle="tooltip" title="Ajouter au Panier">Ajouter</a></li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
              
         `);

                            produit2.append(`
            
              <div class="shop-product-list col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="assets/img/product/${produit.image}" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="new-sale">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>${produit.libelle}</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="shop-product-text">
                                            <h4><a href="#">${produit.libelle}</a></h4>
                                            <div class="price-rating-container">
                                                <div class="price-box "><span>${produit.prix}€</span></div>
                                                <div class="rating-right">
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="availability">Quantité:${produit.quantite} <span> en stock</span></div>
                                            <h5 class="overview">APERÇU:</h5>
                                            <p class="product-desc"> ${produit.description}
                                            </p>
                                            <div class="shop-buttons">
                                                <a class="cart-btn" href=""><span>ajouter au panier</span></a>
                                                <a href=""><i class="fa fa-heart-o"></i></a>
                                                <a href="#"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
         `);
                        });
                    }

                }
            });


        });



//function afichage des données
    function printData(data, produit1) {
        $.each(data, function (indice, produit) {

            produit1.append(`
             <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="#">
                                                <img class="primary-image" src="assets/img/product/${produit.image}" alt="" style="width: 270px;height: 310px">
                                              
                                            </a>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-price">
                                                <span class="new-price">${produit.prix}€</span>
                                            </div>
                    
                                        </div>
                                        <div class="product-content text-center">
                                            <h3>${produit.libelle}</h3>
                                            <h4><a href="#">voir détaille</a></h4>
                                        </div>
                                        <div class="product-action">
                                            <ul id="addCard">
                                                <li id="${produit.id}" class="add-bag"><a href="#" data-toggle="tooltip" title="Ajouter au Panier">Ajouter</a></li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
              
         `);

            produit2.append(`
            
              <div class="shop-product-list col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="assets/img/product/${produit.image}" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="new-sale">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>${produit.libelle}</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="shop-product-text">
                                            <h4><a href="#">${produit.libelle}</a></h4>
                                            <div class="price-rating-container">
                                                <div class="price-box "><span>${produit.prix}€</span></div>
                                                <div class="rating-right">
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="availability">Quantité:${produit.quantite} <span> en stock</span></div>
                                            <h5 class="overview">APERÇU:</h5>
                                            <p class="product-desc"> ${produit.description}
                                            </p>
                                            <div class="shop-buttons">
                                                <a class="cart-btn" href=""><span>ajouter au panier</span></a>
                                                <a href=""><i class="fa fa-heart-o"></i></a>
                                                <a href="#"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
         `);
        });
    }

});
