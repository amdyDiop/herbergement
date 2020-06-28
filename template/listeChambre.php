<div class="col-sm-12">
    <div class="box-tools">
        <div class="input-group input-group-xl" style="width: 250px;">
            <div class="input-group-btn-lg">
                <button id="suivant" type="submit" class="btn btn-primary"><i
                            class="fa fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>
    <div id="resultat"></div>
    <table class="table table-bordered table-hover dataTable" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending"
                aria-label="Rendering engine: activate to sort column descending">ID
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Browser: activate to sort column ascending">Numéro Chambre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Platform(s): activate to sort column ascending">Type de Cahmbre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Batiment
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Actions
            </th>
        </tr>
        </thead>
        <tbody id="tbodyChambre">

        <!--le contenue ici -->

        </tbody>
        <tfoot>
        <tr>
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending"
                aria-label="Rendering engine: activate to sort column descending">ID
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Browser: activate to sort column ascending">Numéro Chambre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Platform(s): activate to sort column ascending">Type de Cahmbre
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Batiment
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="Engine version: activate to sort column ascending">Actions
            </th>
        </tr>
        </tfoot>
    </table>
</div>
<!-- Modal HTML embedded directly into document -->
<div id="modalEdit" class="modal">
</div>
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

<script src="public/assets/js/listChambre.js"></script>
