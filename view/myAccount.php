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
        <?php if ($option == 1) { ?>
            <form action="index.php?action=myaccount&option=3" method="POST" class="form-group">

                <label for="initials"><b>Initials</b></label>
                <input type="text" id="initials" value="<?= $Userlog['initials']?>"disabled> <br>

                <label for="firstname"><b>Prénom</b></label>
                <input type="text" name="firstname" id="firstname" value="<?= $Userlog['firstname']?>"  required> <br>

                <label for="lastname"><b>Nom</b></label>
                <input type="text" name="lastname" id="lastname" value="<?= $Userlog['lastname']?>" required>

                <br><br><input type="submit" id='save' class="btn btn-success" value='Sauvegarder'>
                <a href="?action=myaccount&option=0"><input type="button" id='cancel' class="btn btn-danger" value='Annuler'></a>

            </form>
        <?php } else { ?>
            <label for="initials"><b>Initials</b></label>
            <input type="text" id="initials" value="<?= $Userlog['initials'] ?>" disabled><br>

            <label for="firstname"><b>Prénom</b></label>
            <input type="text" id="firstname" value="<?= $Userlog['firstname'] ?>" disabled><br>

            <label for="lastname"><b>Nom</b></label>
            <input type="text" id="lastname" value="<?= $Userlog['lastname'] ?>" disabled>


            <br><br><a href="?action=myaccount&option=1"><input type="button" id='modify' class="btn btn-primary" value='Modifier'></a>
            <?php } ?>

        <br>
        <h3>Securité</h3>
        <hr>
        <a href="?action=changePassword">Changer votre mot de passe</a>


    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>