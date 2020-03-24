<!--
Fichier: Page vue de la zone de sélection d'une feuille (stups par ex.)
Auteur: Samuel Roland
Date: 16.03.2020
-->
<?php

?>
    <form id="weekForm" action="/" method="GET">
        <p>Choix de la base</p>
        <table class=" table table-striped">
            <th>
                <select class="custom-select" id="Sites" name="base">
                    <?php
                    foreach ($bases as $onebase) {
                        if ($onebase['id'] == $_SESSION['user'][3]['id']) { //si la base est celle de la session
                            echo "<option value=\"" . $onebase['id'] . "\" selected>{$onebase['name']}</option>";   //la selectionner par défaut
                        } else {
                            echo "<option value=\"" . $onebase['id'] . "\">{$onebase['name']}</option>";
                        }
                    }
                    ?>
                </select>
            </th>
        </table>
        <input type="hidden" name="action" value="<?= $action ?>">
        <p id="divListFeuilles">Feuilles de la base de <strong><?= $_SESSION['user'][3]['name'] ?></strong></p>
        <div class="col-md-14">
            <?php
            $indexelementinrun = 0; //index de l'élément en cours. pars de zéro et s'incrémente linéairement.
            foreach ($bases as $base) {   //pour toutes les bases
                if ($base['id'] == $_SESSION['user'][3]['id']) {    //seule le bloc de la div actuelle est affiché
                    echo "<div class='divSemaines' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>";   //bloc d'une base en cours étant la base choisie à la connexion
                } else {
                    echo "<div class='divSemaines d-none' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>"; //bloc d'une base en cours
                }
                $indexelementinrun++; //élément suivant pour la prochaine itération
                foreach ($sheets as $onesheet) {    //parcourt toutes les feuilles de la liste
                    $week = $onesheet['week'];  //numéro de semaine format standard
                    $numweek = substr($onesheet['week'], 2);    //extraire le numéro de semaine
                    $year = substr($onesheet['week'], 0, 2) + 2000;    //extraire l'année
                    if ($onesheet['base_id'] == $base['id']) {  //si la feuille correspond à la base en cours
                        if ($onesheet['state'] == "open") {
                            echo "<label data-weeknb='$week' class='btn btn-info btncont bg-grey'> Semaine n° $numweek en $year</label>";    //mettre en gris les taches ouvertes
                        } else {
                            echo "<label data-weeknb='$week' class='btn btn-info btncont bg-lightgreen'> Semaine n° $numweek en $year<img src='/assets/images/taskclose.png' alt='taskclose img' class='imgtaskclose'></label>";   //mettre en vert clair les taches fermées
                        }
                    }
                }
                echo "</div>";
            }
            ?>
        </div>
        <br>
        <input hidden type="number" name="week" id="week">
    </form>