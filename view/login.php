<?php
ob_start();
$title = "CSU-NVB - login";
?>
    <div id="container" >
        <!-- zone de connexion -->

        <form action="index.php?action=tryLogin" method="POST">
            <h1 class="">Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <br>
            <input type="submit" id='submit' value='Connexion' >
            <br>
            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?>
        </form>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>