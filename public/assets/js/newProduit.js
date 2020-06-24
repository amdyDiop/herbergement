$("#enregistrer").click(function (e) {
    $("#resultat").hide(1);
    e.preventDefault();
    var libelle = $('#libelle').val();
    var description = $('#description').val();
    var prix = $('#prix').val();
    var marque = $('#marque').val();
    var quantite = $('#quantite').val();
    var categorie = $('#categorie').val();
    var genre = $('#genre').val();
    var file_data = $('#file').prop('files')[0];    //Fetch the file
    var form_data = new FormData();
    form_data.append("file",file_data);
    form_data.append("libelle",libelle);
    form_data.append("prix",prix);
    form_data.append("marque",marque);
    form_data.append("quantite",quantite);
    form_data.append("categorie",categorie);
    form_data.append("genre",genre);
    form_data.append("description",description);
    if (libelle==""){
    $("#libelle-error").html("Veuillez saisir le  nom de la  produit !")
        .fadeIn().delay(2000).fadeOut();

}else if (description==""){
    $("#description-error").html("Veuillez saisir la description de la  produit  !")
        .fadeIn().delay(2000).fadeOut();
}
else if (prix==""){
    $("#prix-error").html("Veuillez saisir le prix de la produit  !")
        .fadeIn().delay(2000).fadeOut();

}else if (quantite==""){
    $("#quantite-error").html("Veuillez saisir la quantite de la  produit  !")
        .fadeIn().delay(2000).fadeOut();

}else if ($('#file').val()==""){
    $("#file-error").html("Veuillez choisir l'image de la produit !")
        .fadeIn().delay(2000).fadeOut();
}
else{
    //Ajax to send file to upload
    $.ajax({
        url:'http://localhost/e_commerce/src/controller/newProduitController.php',
        type: "POST",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            console.log(data);
            if (data == 1) {
                $("#resultat").addClass("alert alert-success");
                $("#resultat").html("le produit a été enregistré à la base de donnée!")
                    .fadeIn().delay(2000).fadeOut();
                setTimeout(function () {
                    window.location.href = "admin.php";
                }, 2000);
            }
            else if (data == 0)
            {
                $("#resultat").html("erreur lors de upload file  !")
                    .fadeIn().delay(2000).fadeOut();
                console.log(data);
            }
        }
    });
}
});
