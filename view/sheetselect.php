    <form id="weekForm" action="/?action=detaildrug" method="GET">
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
        <input type="hidden" name="action=<?$action?>:" value="detaildrug">
        <p id="divListFeuilles">Feuilles de la base de <strong><?= $_SESSION['user'][3]['name'] ?></strong></p>
        <div class="col-md-14">
            <?php
            $indexelementinrun = 0;
            foreach ($bases as $base) {   //pour toutes les bases
                if ($base['id'] == $_SESSION['user'][3]['id']) {    //seule le bloc de la div actuelle est affiché
                    echo "<div class='divSemaines' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>";
                } else {
                    echo "<div class='divSemaines d-none' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>";
                }
                $indexelementinrun++;
                foreach ($stupsheets as $onesheet) {    //parcourt toutes les feuilles de stups
                    $numweek = substr($onesheet['week'], 2);
                    if ($onesheet['base_id'] == $base['id']) {  //si la feuille correspond à la base en cours
                        if ($onesheet['state'] == "open") {
                            echo "<label data-weeknb='$numweek' class='btn btn-info btncont bg-grey'> Semaine n° $numweek</label>";    //mettre en gris les taches ouvertes
                        } else {
                            echo "<label data-weeknb='$numweek' class='btn btn-info btncont bg-lightgreen'> Semaine n° $numweek <img src='/assets/images/taskclose.png' alt='taskclose img' class='imgtaskclose'></label>";   //mettre en vert clair les taches fermées
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