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

        <label for="initials">Initiales (max. 3 caractères)</label>
        <input type="text" id="initials" name="initials" class="form-control" placeholder="Entrez vos initiales" maxlength="3" required/><br>

        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Entrez votre prénom" required/><br>

        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Entrez votre nom" required/><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Entrez un mot de passe" required/><br>

        <label for="password2">Répetez le Password</label>
        <input type="password" id="password2" name="password2" class="form-control" placeholder="Entrez à nouveau le mot de passe" required/><br>
    </div>

    <div class="form-check">
        <input type = "checkbox" id="admin" name="admin" class="form-check-input"/>
        <label for="admin" class="form-check-label">Admin</label><br><br>
    </div>


    <?php
    if(isset($_SESSION['erreur'])){
        if ($_SESSION['erreur'] = 1)
        {
            echo "<br><p class='alert-warning'>Les mots de passe introduits ne se correspondent pas</p>";
        }
        if ($_SESSION["erreur"] = 2)
        {
            echo "<br><p class='alert-warning'>Les initiales introduites sont déjà existantes</p>";
        }

        unset($_SESSION['erreur']);
    }
    ?>

    <button type="submit" id="btnCreate" class="btn btn-primary">Créer</button>

</form>

<?php
if ($_SESSION['user'][2] == true) {
    $content = ob_get_clean();
} else {
    ob_get_clean();
    $content = "Vous n'êtes pas admin !";
}
require "gabarit.php";
?>