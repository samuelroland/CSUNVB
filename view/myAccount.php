<?php
/**
 * Title: myAccount.php
 * Author: Luís Pedro
 * Date: 16.03.2020
 */

ob_start();
$title = "CSU-NVB - myAccount";
?>
    <div id="container" style="margin-top: 10px">
        <h1 class="text-center">Mon Compte</h1>
        <br>
        <!--<img src="/assets/images/login.png" class="center w-25"/><br>-->
        <h3 class="text-left">Infos Personnelles</h3>
        <hr>
        <form action="index.php?action=tryLogin" method="POST" class="form-group">

            <label for="initials"><b>Initials</b></label>
            <input type="text" id="initials" value="<?= $Userlog['initials']?>" disabled><br>

            <label for="firstname"><b>Prénom</b></label>
            <input type="text" id="firstname" value="<?= $Userlog['firstname']?>" disabled><br>

            <label for="lastname"><b>Nom</b></label>
            <input type="text" id="lastname" value="<?= $Userlog['lastname']?>" disabled>

            <br><br><input type="button" id='modify' class="btn btn-primary" value='Modifier'>
        </form>
        <br>
        <h3>Securité</h3><hr>
        <a href="?action=changePersoPassword">Changer votre mot de passe</a>


    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>