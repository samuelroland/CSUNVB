<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
$guardsections = readShiftEndGuardSection();
$guardlines = readShiftEndGuardLines();

?>
<?php


    foreach ($guardsections as $guardsection) { ?>

        <table class="table table-bordered table-striped" style="text-align: center">
            <tr>
                <td><?= $guardsection['title']; ?></td>
                <td class="font-weight-bold">JOUR</td>
                <td class="font-weight-bold">NUIT</td>
                <td><span class="font-weight-bold">REMARQUE</span>(APPAREIL MANQUANT, ÉTAT DE CHARGE, DEFECTUOSITÉS)
                </td>
            </tr>
            <?php foreach ($guardlines as $guardline) {
                if ($guardsection['id'] == $guardline['guard_sections_id']) {
                    ?>

                    <tr>
                        <td><?= $guardline['text'] ?></td>
                        <td></td>
                        <td></td>
                        <td><textarea cols=100% rows="1"></textarea></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <?php
    
}
?>

<?php
/*<table class="table table-bordered " style="text-align: center">
        <tr>Matériel & Télécom
<td></td>
            <td class="font-weight-bold">JOUR</td>
            <td class="font-weight-bold">NUIT</td>
            <td><span class="font-weight-bold">REMARQUE</span>(APPAREIL MANQUANT, ÉTAT DE CHARGE, DEFECTUOSITÉS)</td>
        </tr>

        <tr>
            <td>Radios</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Détecteurs CO</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Téléphones</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Gt info avisé</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Annonce 144</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
    </table>
    <table class="table table-bordered " style="text-align: center">
    <tr>Véhicules & Intervention
<td></td>
        <td class="font-weight-bold">JOUR</td>
        <td class="font-weight-bold">NUIT</td>
        <td><span class="font-weight-bold">REMARQUE</span>(APPAREIL MANQUANT, ÉTAT, DEFECTUOSITÉS, RDV MÉCANIQUE, PNEUS)</td>
    </tr>
        <tr>
            <td>Plein essence</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Opérationnel</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Rdv garage</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
        <tr>
            <td>Opérationnel</td>
            <td ></td>
            <td ></td>
            <td><textarea cols=100% rows="1"></textarea></td>
        </tr>
    </table>
*/
$content = ob_get_clean();
require "gabarit.php";
?>