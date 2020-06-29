<!-- quick email widget -->
<div class="box box-info col-sm-12 justify-content-center">
    <span id="resultat"></span>
    <div class="box-header">
        <i class="fa fa-bed"></i>
        <h3 class="box-title">Modifier Chambre</h3>
    </div>
    <div id="resultat"></div>
    <div class="box-body">
        <form id="editChambre">
            <input type="hidden" class="form-control col-6" id="id" placeholder="id:" value="<?=$_GET['id']?>">
            <div class="col-xs-6">
                <label>id</label>
                <input type="number" class="form-control col-6"  value="<?=$_GET['id']?>" readonly>
            </div>
            <div class="col-xs-6">
                <label>Numéro Chambre</label>
                <span id="num"></span>
            </div>
            <div id="divType" class="col-xs-6">
                <label>Type Chambre</label>
                <select class="form-control" name="type" id="type">

                </select>
            </div>
            <div class="col-xs-6">
                <label>Batiment</label>
                <select class="form-control" name="batiment" id="batiment">

                </select>
            </div>
        </form>
    </div>
    <div class="box-footer clearfix">
        <button type="button" class="pull-right btn btn-default" id="edit">Modifier les changements
            <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</div>
<script src="public/assets/js/editChambre.js"></script>
