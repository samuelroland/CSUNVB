<?php
ob_start();
$title = "CSU-NVB - login";
?>
    <div id="container" >
        <!-- zone de connexion -->

        <form action="index.php?action=tryLogin" method="POST" class="form-group text-center">
            <h1 class="">Connexion</h1>
            <img src="/assets/images/login.png" class="center"/><br>
            <label><b>Initials</b></label>
            <input type="text" placeholder="Entrer vos initiales" name="initials" required>
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <?php
            if(isset($_SESSION['erreur'])){
                echo "<br><p class='alert-warning'>Les données introduites sont incorrects</p>";
                unset($_SESSION['erreur']);
            }
            ?>
            <br>
            <input type="submit" id='submit' value='Connexion' >
            <br>
        </form>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>