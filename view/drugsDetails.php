<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
$base = $bases[$_GET["base"]];
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle des stupéfiants Hebdomadaire</h3>
<button class="btn btn-info" ><</button><h3>Semaine N <?= $_GET["week"]; ?> - Feuille fermée</h3><button class="btn btn-info" >></button>
<h3>Sur le site de <?= $base["name"]; ?></h3>

<!-- Morphine -->
<table class="table table-striped table-bordered col-1 aligncenter">
    <thead>
    <tr>
        <th colspan="2"></th>
        <th colspan="5">lundi 10 févr 20</th>
        <th colspan="5">mardi 11 févr 20</th>
        <th colspan="5">mercredi 12 févr 20</th>
        <th colspan="5">jeudi 13 févr 20</th>
        <th colspan="5">vendredi 14 févr 20</th>
        <th colspan="5">samedi 15 févr 20</th>
        <th colspan="5">dimanche 15 févr 20</th>
    </tr>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                            alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
    </tr>
    <tr>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2" class=""><strong>Morphine N</strong></td>
        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

    </tr>
    <tr>
        <td colspan="2" class="">12345</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

    </tr>
    <tr>
        <td colspan="2" class="">13664</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>


        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

    </tr>
    </tbody>

</table>


<!-- Fentanyl -->
<table class="table table-striped table-bordered col-1 aligncenter">
    <thead>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                    alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
    </tr>
    <tr>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2" class=""><strong>Fentanyl N</strong></td>
        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

    </tr>
    <tr>
        <td colspan="2" class="">12345</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

    </tr>
    <tr>
        <td colspan="2" class="">13664</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>


        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

    </tr>
    </tbody>

</table>

<!-- Temesta -->
<table class="table table-striped table-bordered col-1 aligncenter">
    <thead>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                    alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
    </tr>
    <tr>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>35</th>
        <th>45</th>
        <th>12</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2" class=""><strong>Temesta N</strong></td>
        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

        <td>X</td>
        <td>3-3</td>
        <td>7-7</td>
        <td>3-3</td>
        <td>X</td>

    </tr>
    <tr>
        <td colspan="2" class="">12345</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>3</td>

    </tr>
    <tr>
        <td colspan="2" class="">13664</td>
        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>


        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

        <td>4</td>
        <td></td>
        <td></td>
        <td>2</td>
        <td>2</td>

    </tr>
    </tbody>

</table>




<?php
$content = ob_get_clean();
require "gabarit.php";
?>
