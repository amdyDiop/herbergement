<!-- quick email widget -->
<div class="box box-info col-sm-12 justify-content-center">
    <span id="resultat"></span>
    <div class="box-header">

        <i class="fa fa-user-circle"></i>
        <h3 class="box-title">Ajouter Etudiant </h3>
        <!-- tools box -->
        <!-- /. tools -->
    </div>
    <div id="resultat"></div>
    <div class="box-body">
        <form action="#" method="post" id="myForm">
            <div class="col-xs-6">
                <label>Prénom</label>
                <input type="text" class="form-control col-6" id="prenom" name="prenom" placeholder="Prénom:">
                <span id="prenom-error" class="error"></span>
            </div>
            <div class="col-xs-6">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom:">
                <span id="nom-error" class="error"></span>

            </div>
            <div class="col-xs-6">
                <label>Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse:">
                <span id="adresse-error" class="error"></span>
            </div>
            <div class="col-xs-6">
                <label>Date de Naissance</label>
                <input type="date" class="form-control" id="date_naiss" name="date_naiss"
                       placeholder="Date de Naissance:">
                <span id="date_naiss-error" class="error-area"></span>
            </div>
            <div class="col-xs-6">
                <label>Chambre</label>
                <select class="form-control" name="chambre" id="chambre">
                    <option value=0>Pas De Chambre</option>
                </select>
                <span id="chambre-error" class="error"></span>

            </div>
            <div class="col-xs-6">
                <label>BOURSE</label>
                <select class="form-control" name="bourse" id="bourse">
                </select>
                <span id="bourse-error" class="error"></span>

            </div>
            <div class="col-xs-6">
                <label>Téléphone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Numéro Téléphone:">
                <span id="telephone-error" class="error-area"></span>
            </div>
            <div class="col-xs-6">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email:">
                <span id="email-error" class="error-area"></span>
            </div>

        </form>
    </div>
    <div class="box-footer clearfix">
        <button type="button" class="pull-right btn btn-default" id="enregistrer">Enregistrer
            <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</div>
<script src="public/assets/js/addEtudiant.js"></script>
