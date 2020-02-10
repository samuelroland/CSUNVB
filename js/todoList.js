/**
 * Le fichier todoList.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des tâches
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

document.addEventListener("DOMContentLoaded", init);


function init() {

    cmdedit.addEventListener("click", taskedit);
    cmdsave.addEventListener("click", tasksave);


    function taskedit() {
        table = div.children
        for (nbrow = 0; nbrow < div.children.length; nbrow++) {
            row = div.children[nbrow]

            for (nbcol = 0; nbcol < row.children.length; nbcol++) {
                div = row.children[nbcol]
                inp = document.createElement('input')
                inp.type = 'text'
                inp.value = div.innerText;
                div.innerText = ''

                div.appendChild(inp)


            }

        }
    }
}
