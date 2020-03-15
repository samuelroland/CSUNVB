<?php
/**
 * Title: changePassword.php
 * Author: LPO
 * Date: 12.03.2020
 */

ob_start();
$title = "CSU-NVB - changePassword";
?>
    <div id="container">
        <!-- zone de connexion -->

        <form action="index.php?action=changePasswordUser" method="POST" class="form-group text-center">
            <h1 class="">Changement d'un mot de passe</h1>
            <br>
            <img src="/assets/images/login.png" class="center w-25"/><br>

            <label><b>Initiales</b></label>
            <input type="text" placeholder="Entrer ses initiales" name="initials" required>
            <br>

            <label><b>Nouveau mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>

            <label for="password2"><b>Répetez le mot de passe</b></label>
            <input type="password" id="password2" name="password2" placeholder="Entrez à nouveau le mot de passe" required/><br>




            <?php
            if (isset($_SESSION['erreur'])) {
                echo "<br><p class='alert-warning'>Les données introduites sont incorrects</p>";
                unset($_SESSION['erreur']);
            }
            ?>
            <br>
            <input type="submit" id='submit' value='Connexion'>
            <br>
        </form>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

?>