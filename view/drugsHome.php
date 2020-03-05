<?php
ob_start();
$title = "CSU-NVB - Liste Stupéfiants";
?>
    <form action="/?action=detaildrug" method="GET">
        <table class=" table table-striped">
            <div class="navbar nav-pills">
                <th>
                    <select class="custom-select" id="Sites" name="base">
                        <option value="3">Saint-Loup</option>
                        <option value="4">Payerne</option>
                        <option value="1">Yverdon</option>
                        <option value="5">La Vallée-de-Joux</option>
                        <option value="2">Sainte-Croix</option>
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
        <input type="number" name="week" id="week">
        <input type="submit" value="Aller" class="btn btn-success">
    </form>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>