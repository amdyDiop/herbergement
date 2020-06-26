<div class="col-sm-12">
    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending"
                aria-label="Rendering engine: activate to sort column descending">ID
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Browser: activate to sort column ascending">Prénom
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Platform(s): activate to sort column ascending">Nom
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Matricule
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Date_naiss
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">chambre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Bourse
            </th>
        </tr>
        </thead>
        <tbody>
        <tr role="row" class="odd">
            <td class="sorting_1">Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
        </tr>
        <tr role="row" class="odd">
            <td class="sorting_1">Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
        </tr>
        <tr role="row" class="odd">
            <td class="sorting_1">Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
        </tr>
        <tr role="row" class="odd">
            <td class="sorting_1">Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
        </tr>
        <tr role="row" class="odd">
            <td class="sorting_1">Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending"
                aria-label="Rendering engine: activate to sort column descending">ID
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Browser: activate to sort column ascending">Prénom
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Platform(s): activate to sort column ascending">Nom
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Matricule
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Date_naiss
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">chambre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Bourse
            </th>
        </tr>
        </tfoot>
    </table>
</div>

<script>
    $(document).ready(function () {
        let offset = 0;
        //var teste = 0;
        $.ajax({
            type: "POST",
            url: "http://localhost/hebergement/controllers/EtudiantController.php",
            data: {limit: 9, offset: offset},
            dataType: 'text',
            success: function (data) {
                console.log('success');
                console.log(data);
              //  produit1.html('');
                //produit2.html('');
                //printData(data, produit1,produit2);
                offset += 9;
            }, error: function (data) {
                console.log('erreur');
                console.log(data);
            }
        });

        //pagination des produit par le bouton suivant
        /*

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

*/



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
</script>