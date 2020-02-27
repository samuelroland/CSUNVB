<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle des stupéfiants Hebdomadaire</h3>
<h3>Semaine N 51</h3>



<!-- Morphine -->
<table class="table table-striped table-bordered col-1">
    <thead>
    <tr>
        <th colspan="7">lundi 10 févr 20</th>
    </tr>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                            alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="3">Numéros des véhicules</th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
    </tr>
    <tr>
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

    </tr>
    <tr>
        <td colspan="2" class="">12345</td>
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

    </tr>
    </tbody>

</table>





<!-- Fentanyl -->

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                    alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="8">Numéros des véhicules</th>
    </tr>
    <tr>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>15</th>
        <th>31</th>
        <th>94</th>
        <th>09</th>
        <th>35</th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <td colspan="2"><strong>Fentanyl N</strong></td>
        <td></td>
        <td>3</td>
        <td>7</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">12345</td>
        <td>4</td>
        <td>3</td>
        <td>7</td>
        <td>5</td>
        <td>5</td>
        <td>7</td>
        <td>12</td>
        <td>15</td>
        <td>13</td>
    </tr>
    <tr>
        <td colspan="2">13664</td>
        <td>4</td>
        <td>3</td>
        <td>7</td>
        <td>5</td>
        <td>5</td>
        <td>7</td>
        <td>12</td>
        <td>15</td>
        <td>13</td>
    </tr>
    </tbody>

</table>

<!-- Temesta -->
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                    alt="stups logo" class="imgheadertable"></th>
        <th rowspan="2" class="txtvertical">Pharmacie</th>
        <th colspan="8">Numéros des véhicules</th>
    </tr>
    <tr>
        <th>35</th>
        <th>45</th>
        <th>12</th>
        <th>15</th>
        <th>31</th>
        <th>94</th>
        <th>09</th>
        <th>35</th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <td colspan="2"><strong>Temesta N</strong></td>
        <td></td>
        <td>3</td>
        <td>7</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">12345</td>
        <td>4</td>
        <td>3</td>
        <td>7</td>
        <td>5</td>
        <td>5</td>
        <td>7</td>
        <td>12</td>
        <td>15</td>
        <td>13</td>
    </tr>
    <tr>
        <td colspan="2">13664</td>
        <td>4</td>
        <td>3</td>
        <td>7</td>
        <td>5</td>
        <td>5</td>
        <td>7</td>
        <td>12</td>
        <td>15</td>
        <td>13</td>
    </tr>
    </tbody>

</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
