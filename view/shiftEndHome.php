<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<script src="js/shiftEnd.js"></script>
<div class="row m-2">
    <h1>Remises de garde</h1>
</div>
<a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">La Vallée-de-Joux</a>
<a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Payerne</a>
<a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Saint-Loup</a>
<a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Ste-Croix</a>
<a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Yverdon</a>

<div id="divValleDeJoux" class="">

    <table class="table table-bordered" style="text-align: center">

        <tr>Matériel et Télécom
            <td></td>
            <td>JOUR</td>
            <td>NUIT</td>
            <td>REMARQUE(APPAREIL MANQUANT,ÉTAT DE CHARGE, DEFECTUOSITÉS)</td>
        </tr>
        <tr>
            <td>Radios</td>
            <td><input type="checkbox">OK</td>
            <td><input type="checkbox">OK</td>
            <td><textarea cols=100% rows="1"></textarea> </td>
        </tr>
        <tr>
            <td>Détecteurs CO</td>
            <td><input type="checkbox">OK</td>
            <td><input type="checkbox">OK</td>
            <td><textarea cols=100% rows="1"></textarea> </td>
        </tr>
        <tr>
            <td>Téléphones</td>
            <td><input type="checkbox">OK</td>
            <td><input type="checkbox">OK</td>
            <td><textarea cols=100% rows="1"></textarea> </td>
        </tr>
        <tr>
            <td>Gt info avisé</td>
            <td><input type="checkbox">OK</td>
            <td><input type="checkbox">OK</td>
            <td><textarea cols=100% rows="1"></textarea> </td>
        </tr>
        <tr>
            <td>Annonce 144</td>
            <td><input type="checkbox">OK</td>
            <td><input type="checkbox">OK</td>
            <td><textarea cols=100% rows="1"></textarea> </td>
        </tr>


    </table>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
