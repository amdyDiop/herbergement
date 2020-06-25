<!-- quick email widget -->
<div class="box box-info col-sm-12 justify-content-center">
    <span id="resultat" ></span>
    <div class="box-header">

        <i class="fa fa-shopping-cart"></i>
        <h3 class="box-title">Nouvelle Produit</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove"
                    data-toggle="tooltip"
                    title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
    </div>
    <div class="box-body">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="col-xs-6">
                <label>Libelle</label>
                <input type="text" id="libelle" class="form-control col-6" name="libelle" placeholder="Libelle:">
                <span id="libelle-error" class="error-area"></span>
            </div>
            <div class="col-xs-6">
                <label>Description</label>
                <input type="text" class="form-control"  id="description" name="description" placeholder="description:">
                <span id="description-error" class="error-area"></span>

            </div>
            <div class="col-xs-6">
                <label>Prix</label>
                <input type="number" class="form-control"  id="prix" name="prix" placeholder="Prix:">
                <span id="prix-error" class="error-area"></span>

            </div>
            <div class="col-xs-6">
                <label>Quantite</label>
                <input type="number" class="form-control"  id="quantite" name="quantite" placeholder="quantite:">
                <span id="quantite-error" class="error-area"></span>

            </div>
            <div class="col-xs-6">
                <label>Categorie</label>
                <select class="form-control" name="categorie" id="categorie">
                    <option value="1"> T-Shirts</option>
                    <option value="2">PULL</option>
                    <option value="3">MONTRE</option>
                    <option value="4">CHEMISE</option>
                    <option value="5">PANTALON</option>
                </select>
            </div>
            <div class="col-xs-6">
                <label>genre</label>
                <select class="form-control" name="genre" id="genre">
                    <option value="1">HOMME</option>
                    <option value="2">FEMME</option>
                    <option value="3">ENFANT</option>
                </select>
            </div>
            <div class="col-xs-6">
                <label>Marque</label>
                <select class="form-control" name="marque" id="marque">
                    <option value="1">ZARA</option>
                    <option value="2">VANS</option>
                    <option value="5">LAFUMA</option>
                    <option value="6">ROXY</option>
                    <option VALUE="7">CELIO </option>
                    <option value="8">LEE</option>
                    <option value="9">MORGAN </option>
                </select>
            </div>
            <div class="col-xs-6">
                <label for="exampleInputFile">Image</label>
                <input type="file" name="file" id="file">
                <p class="help-block">image du produit</p>
                <span id="file-error" class="error-area"></span>

            </div>
        </form>
    </div>
    <div class="box-footer clearfix">
        <button type="button" class="pull-right btn btn-default" id="enregistrer">Enregistrer
            <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</div>
<script src="../../../assets/js/addEtudiant.js"></script>
