<?php
ob_start();
$title = "CSU-NVB - Secouriste";

require_once 'model/adminModel.php';
$users = readAdminItems();
?>
<h1 style="text-align: center">Secouriste</h1>
<a href="?action=createAccount" class="btn btn-primary m-1 pull-right">Créer un Compte</a>
<a href="?action=changePasswordUser" class="btn btn-primary m-1 pull-right">Changer un mot de passe</a>
<table class="table table-bordered" style="text-align: center">

    <tr>

        <th>Initials</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Status</th>
        <th>Admin</th>
    </tr>

    <?php
    foreach ($users as $user) {
        echo "<tr><td>" . $user['initials'] . "</td><td>" . $user['firstname'] . "</td><td>" . $user['lastname'] ."</td>";
        if ($user['firstLogin'] == true)
        {
            echo "<td>Expiré</td>";
        }else
        {
            echo "<td>Valide</td>";
        }
        if ($user['id'] != $_SESSION['user'][0]) {
            if ($user['admin'] == true) {

                echo "</td><td><a href='?action=ChangeAdminState&idPerson=" . $user['id'] . "' class='btn btn-primary m-1 pull-right'>Oui</a></td></tr>";
            } else {

                echo "</td><td><a href='?action=ChangeAdminState&idPerson=" . $user['id'] . "' class='btn btn-secondary m-1 pull-right'>Non</a></td></tr>";
            }
        }else
            {
                echo "<td>Ceci est votre utilisateur</td></tr>";
            }
    }
    ?>


</table>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
