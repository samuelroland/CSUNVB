<?php
ob_start();
$title = "CSU-NVB - Secouriste";
$users = readAdminItems();
?><h1 style="text-align: center">Secouriste</h1>
<table class="table table-bordered" style="text-align: center">

    <tr>
        <th>Nom d'utilisateur</th>
        <th>Nom complet</th>
        <th>Status</th>
        <th>Admin</th>


    </tr>

    <?php
    foreach ($users as $user) {
        echo "<tr><td>" . $user['username'] . "</td><td>" . $user['name'] . "</td>"; ?>

        <?php if ($user['admin'] == true) {
            $user["admin"] = "oui";
            $_GET['checkbox'] == true;
        } else {
            $user["admin"] = "non";
            $_GET['checkbox'] == false;
        }
        echo "<td>" . $user['status'] . "</td><td><a href=\"?action=tryLogin\" class=\"btn btn-primary m-1 pull-right\"style=\"bt-align: center\" >" . $user['admin'] . "</a></td> </tr>";
        if ($_GET['checkbox'] == true) {
            $user['admin'] = true;
        } else {
            $user['admin'] = false;
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
