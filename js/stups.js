/**
 * Le fichier stups.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des stupéfiants
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

document.addEventListener('DOMContentLoaded', function () {
    var els= document.getElementsByClassName("clickable");
    Array.prototype.forEach.call(els, function (el) {
        el.addEventListener('click', function(evt) {
            window.location = evt.target.getAttribute('data-href')
        })
    })
})