$('#payer').click(function () {
    //alert('ak si na ');
    $('#resultat').addClass("alert alert-success").html(
        "Merci de votre commande sur notre boutique en ligne. " +
        "Nous avons le palisir de confirmer que nous l'avons prise en compte et quelle est dèjà préte à etre expediée")
        .fadeIn();
    setTimeout(function () {
        window.location.href = "../../../../index.php";
    }, 4000);
});
