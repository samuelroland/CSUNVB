<?php
/**
 * Title: Login.php
 * Author: DMI
 * Date: 04.02.2020
 */

ob_start();
$title = "CSU-NVB - login";
?>
    <div id="container">
        <!-- zone de connexion -->

        <form action="index.php?action=tryLogin" method="POST" class="form-group text-center">
            <h1 class="">Connexion</h1>
            <img src="/assets/images/login.png" class="center w-25"/><br>
            <label><b>Initials</b></label>
            <input type="text" placeholder="Entrer vos initiales" name="initials" required>
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>

            <p>Sélectionnez votre département</p>
            <div class="form-check-inline">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="department" value="1" required/>La
                        Vallée-de-Joux
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="department" value="2"/>Payerne
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="department" value="3"/>Saint-Loup
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
            </div>
            <br><br>

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