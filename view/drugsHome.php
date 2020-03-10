<?php
ob_start();
$title = "CSU-NVB - Liste Stupéfiants";
?>
    <form id="weekForm" action="/?action=detaildrug" method="GET">
        <table class=" table table-striped">
            <div class="navbar nav-pills">
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
            </div>

        </table>
        <input type="hidden" name="action" value="detaildrug">

        <div class="col-md-14">
            <?php
            $indexelementinrun = 0;
            foreach ($bases as $base) {   //pour toutes les bases

                if ($base['id'] == $_SESSION['user'][3]['id']) {
                    echo "<div class='divSemaines' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>Site de " . $base['name'];
                } else {
                    echo "<div class='divSemaines d-none' id='divBase" . $indexelementinrun . "' style='border: 1px black dashed'>Site de " . $base['name'];
                }
                $indexelementinrun++;
                foreach ($stupsheets as $onesheet) {    //parcourt toutes les feuilles de stups
                    $numweek = substr($onesheet['week'], 2);
                    if ($onesheet['base_id'] == $base['id']) {  //si la feuille correspond à la base en cours
                        echo " <label data-weeknb='$numweek' class='btn btn-info btncont'> Semaine n° $numweek</label>";
                    }
                }
                echo "</div>";
            }
            ?>
        </div>
        <br>
        <input hidden type="number" name="week" id="week">
    </form>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>