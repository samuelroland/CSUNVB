<?php
ob_start();
$title = "CSU-NVB - Secouriste";
$users = readAdminItems();
?><h1 style="text-align: center">Secouriste</h1>
<table class="table table-bordered" style="text-align: center">

    <tr>
        <th>ID</th>
        <th>Initials</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Admin</th>
    </tr>

    <?php
    foreach ($users as $user) {
        echo "<tr><td>" . $user['id'] . "</td><td>" . $user['initials'] . "</td><td>" . $user['firstname'] . "</td><td>" . $user['lastname'] . "</td>"; ?>

        <?php if ($user['admin'] == true) {

            echo "</td><td><a href='?action=ChangeAdminState&idPerson=".$user['id']. "' class='btn btn-primary m-1 pull-right'style='bt-align: center' >Oui</a></td> </tr>";

        } else {

            echo "</td><td><a href='?action=ChangeAdminState&idPerson=".$user['id']. "' class='btn btn-secondary m-1 pull-right'style='bt-align: center'  >Non</a></td> </tr>";
        }



    }
    ?>


</table>

<?php
foreach ($users as $user)
    ?>


    <?php
$content = ob_get_clean();
require "gabarit.php";
?>
