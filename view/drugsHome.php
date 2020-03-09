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
            for ($i = 1; $i < 53; $i++) {
                echo " <label data-weeknb='$i' class='btn btn-info btncont'> Semaine n° $i</label>";
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