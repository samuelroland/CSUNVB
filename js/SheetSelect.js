/**
 * Le fichier stups.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des stupéfiants
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

//Pour tous les labels, on doit récuperer la valeur de l'attribut "data-sheetid" avant d'envoyer le formulaire
$(document).ready(function () {
    $("label").on("click", function (lbl) { //si on clique sur un label
        inpsheetid.value = $(lbl.target).data("sheetid");  //on sauve la valeur de sheetid dans l'input hidden inpsheetid
        document.getElementById("sheetForm").submit();   //on envoit le formulaire "sheetForm"
    })
})

//une fois les éléments du DOM chargé on lance init pour déclarer les événements
document.addEventListener("DOMContentLoaded", init)

function init() {   //déclaration des événements et opération après le chargement du DOM
    document.getElementById("Sites").addEventListener("change", changestupssheets)
    changestupssheets() //pour être sur que la liste de la bonne base est affichée
}

//changer l'affichage des blocs divBasex. tous les cacher sauf celui qui correspond à celui sélectionné dans sheetForm
function changestupssheets() {
    //Changer le texte "Feuilles de la base xx" avec la base sélectionnée au dessus:
    divListFeuilles.innerHTML = "Feuilles de la base de <strong>" + Sites.options[Sites.selectedIndex].text + "</strong>";

    //INFO: les bases sont numérotés à partir de 0 (jusqu'à nombre de bases -1) et ces numéros ne sont pas en relation avec les id des bases. ce qui permet de simplifier l'affichage des blocs des bases.
    //INFO: chaque base a un bloc div qui contient la liste des feuilles. chaque bloc est nommé divBasex où x est un nombre décrit au dessus.
    baseid = Sites.selectedIndex    //prendre le numéro de la base sélectionnée

    bloctodisplay = document.getElementById("divBase" + baseid)     //prendre le bloc de la base sélectionnée

    //Cacher tous les blocs
    for (i = 0; i < Sites.options.length; i++) {
        document.getElementById("divBase" + i).classList.add("d-none")
    }

    //Afficher le bloc de la base sélectionnée
    bloctodisplay.classList.remove("d-none")
}