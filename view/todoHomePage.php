<?php
ob_start();

?>
<div class="">
    <h1>Tâches hebdomadaires</h1>

    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
        <th>
            <select class="custom-select" id="Sites">
                <option value="3">Saint-Loup</option>
                <option value="4">Payerne</option>
                <option value="1">Yverdon</option>
                <option value="5">La Valée-de-Joux</option>
                <option value="2">Saite-Croix</option>

            </select>
        </th>
    </div>
</table>

<div class="col-md-14">
    <?php
    for ($i = 1; $i < 53; $i++) {
        echo "<a href='?action=todolisthome&semaine=$i' ><button class='btn btn-info btncont'>Semaine n° $i</button></a>";
    }
    ?>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
