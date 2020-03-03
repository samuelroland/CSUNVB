/**
 * Le fichier shiftEnd.js contient les fonctionnalités javascript qui ne sont utilisées que pour la remise de garde
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/
document.addEventListener("DOMContentLoaded", init)
function init() { //fontion init pour initialiser les fonctions au moment du chargement de la page
    check_rd_J.addEventListener("click",check_rd_J_click);
    btValDeJoux.addEventListener("click",btValDeJouxClick);
}
function check_rd_J_click(){
    check_rd_N.checked=false;

}
function f_check_rd_J() {
    check_rd_J.checked=true;

}