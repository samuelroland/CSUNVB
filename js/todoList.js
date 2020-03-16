/**
 * Le fichier todoList.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des tâches
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

$(document).ready(function () {
    $("label").on("click", function (lbl) {
        console.log(lbl)
        numwek = $(lbl.target).data("weeknb");
        week.value = numwek
        document.getElementById("weekForm").submit();
    })
})

document.addEventListener("DOMContentLoaded", init)

function init() {
    document.getElementById("Sites").addEventListener("change", changestupssheets)
}

function changestupssheets() {
    //Changer le texte "Feuilles de la base xx" avec la base sélectionnée au dessus:
    divListFeuilles.innerHTML = "Feuilles de la base de <strong>" + Sites.options[Sites.selectedIndex].text + "</strong>";

    baseid = Sites.selectedIndex

    bloctodisplay = document.getElementById("divBase" + baseid)

    //Cacher tous les blocs
    for (i = 0; i < Sites.options.length; i++) {
        document.getElementById("divBase" + i).classList.add("d-none")
    }

    //Afficher le bloc du site
    bloctodisplay.classList.remove("d-none")
}

