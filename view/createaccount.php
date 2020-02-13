<?php
/**
 * Title: createaccount.php
 * Author: LPO
 * Date: 13.02.2020
 */

ob_start();
$title = "CSU-NVB - createAccount";
?>

<form action ="?action=createAccount" method="post">
    <h1 class="text-center"><strong>Créer un compte</strong></h1>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Entrez un nom d'utilisateur" required/><br>

        <label for="fullname">Nom Complet</label>
        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Entrez votre nom complet" required/><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Entrez un mot de passe" required/><br>

        <label for="password2">Répetez le Password</label>
        <input type="password" id="password2" name="password2" class="form-control" placeholder="Entrez à nouveau le mot de passe" required/><br>
    </div>

    <div class="form-check">
        <input type = "checkbox" id="admin" name="admin" class="form-check-input"/>
        <label for="admin" class="form-check-label">Admin</label><br><br>
    </div>

    <button type="submit" id="btnCreate" class="btn btn-primary">Créer</button>

</form>

<?php

$content = ob_get_clean();
require_once ("gabarit.php");

?>