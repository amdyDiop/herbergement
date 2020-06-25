<!-- quick email widget -->
<div class="box box-info col-sm-12 justify-content-center">
    <span id="resultat" ></span>
    <div class="box-header">

        <i class="fa fa-user-circle"></i>
        <h3 class="box-title">Ajouter Etudiant </h3>
        <!-- tools box -->
        <!-- /. tools -->
    </div>
    <div class="box-body">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="col-xs-6">
                <label>Prénom</label>
                <input type="text" id="prenom" class="form-control col-6" name="prenom" placeholder="Prénom:">
                <span id="prenom-error" class="error"></span>
            </div>
            <div class="col-xs-6">
                <label>Nom</label>
                <input type="text" class="form-control"  id="nom" name="nom" placeholder="Nom:">
                <span id="nom-error" class="error"></span>

            </div>
            <div class="col-xs-6">
                <label>Matricule</label>
                <input type="text" class="form-control"  id="matricule" name="matricule" placeholder="Matricule:">
                <span id="matricule-error" class="error"></span>
            </div>
            <div class="col-xs-6">
                <label>Date de Naissance</label>
                <input type="date" class="form-control"  id="date_naiss" name="date_naiss" placeholder="Date de Naissance:">
                <span id="date_naiss-error" class="error-area"></span>
            </div>
            <div class="col-xs-6">
                <label>Chambre</label>
                <select class="form-control" name="chambre" id="chambre">
                    <option value="1">CHAMBRE 1</option>
                    <option value="1">CHAMBRE 2</option>
                    <option value="1">CHAMBRE 3</option>
                    <option value="1">CHAMBRE 4</option>
                </select>
            </div>
            <div class="col-xs-6">
                <label>BOURSE</label>
                <select class="form-control" name="bourse" id="bourse">
                    <!-- la liste des bourse ici -->
                </select>
            </div>
            <div class="col-xs-6">
                <label>Téléphone</label>
                <input type="tel" class="form-control"  id="telephone" name="telephone" placeholder="Numéro Téléphone:">
                <span id="telephone-error" class="error-area"></span>
            </div>
            <div class="col-xs-6">
                <label>Email</label>
                <input type="email" class="form-control"  id="email" name="email" placeholder="Email:">
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
