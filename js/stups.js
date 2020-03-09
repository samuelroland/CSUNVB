/**
 * Le fichier stups.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des stupéfiants
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

$(document).ready(function () {
    $("label").on("click", function(lbl){
        console.log(lbl)
        numwek = $(lbl.target).data("weeknb");
        week.value = numwek
        document.getElementById("weekForm").submit();
    })
})