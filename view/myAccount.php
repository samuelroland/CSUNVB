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


            <p><strong>Initials: </strong><?= $Userlog['initials']?></p>

            <label for="firstname"><b>Prénom</b></label>
            <input type="text" id="firstname" value="<?= $Userlog['firstname']?>"><br>

            <label for="lastname"><b>Nom</b></label>
            <input type="text" id="lastname" value="<?= $Userlog['lastname']?>">

            <br><br><input type="submit" id='submit' class="btn btn-primary" value='Save'>
        </form>
        <h3>Securité</h3>
        <a href="?action=changepersoM">Stupéfiants</a>


    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>