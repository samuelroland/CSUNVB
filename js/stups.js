/*
Author : Samuel Roland
File : stups.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des stupéfiants
Date : 15.03.2020
*/

//Tous les éléments avec la classe "clickable" ont un data-href pour indiquer ce vers quoi elle redirige.
document.addEventListener('DOMContentLoaded', function () {
    var els= document.getElementsByClassName("clickable");
    Array.prototype.forEach.call(els, function (el) {
        el.addEventListener('click', function(evt) {
            window.location = evt.target.getAttribute('data-href')
        })
    })
})