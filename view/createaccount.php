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

    <p>Sélectionnez votre département</p>
    <div class="form-check-inline">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="department" value="1" required/>La Vallée-de-Joux
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="department" value="2"/>Payerne
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="department" value ="3"/>Saint-Loup
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="department" value="4"/>Sainte-Croix
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="department" value="5"/>Yverdon
            </label>
        </div>
    </div><br><br>

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

$content = ob_get_clean();
require_once ("gabarit.php");

?>