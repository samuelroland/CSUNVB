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
                <option value="Saint-Loup">Saint-Loup</option>
                <option value="Payerne">Payerne</option>
                <option value="Yverdon">Yverdon</option>
                <option value="La Valée-de-Joux">La Valée-de-Joux</option>
                <option value="Saite-Croix">Saite-Croix</option>

            </select>
        </th>
    </div>
</table>
<div class="navbar nav-pills">
    <?php
    for ($i = 1; $i < 52; $i++) {
        echo "<div><a href='?action=todolisthome' ><button class='btn btn-info'>Semaine n° $i</button></a></div>";
    }
    ?>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
