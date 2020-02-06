<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle des stupéfiants Hebdomadaire</h3>
<h1>Semaine N 51</h1>
<h2><em>Pour lundi 1 février 2020</em></h2>
<br>
<h3>Jours de la semaine 51</h3>
<div id="divJoursSemaine" class="bg-success">
    <button class="col-1 bg-danger">1.02</button>
    <button class="col-1 bg-danger">2.02</button>
    <button class="col-1 bg-danger">3.02</button>
    <button class="col-1 bg-danger">4.02</button>
    <button class="col-1 bg-danger">5.02</button>
    <button class="col-1 bg-danger">6.02</button>
    <button class="col-1 bg-danger">7.02</button>
</div>
<br>

<!-- Morphine -->
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th colspan="2" rowspan="2"><img src="/model/dataStorage/img/logo-stups.png" alt="" height="80px"></th>
        <th rowspan="2">Pharmacie</th>
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
        <td colspan="2"><strong>Morphine N</strong></td>
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

<!-- Fentanyl -->

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th colspan="2" rowspan="2"><img src="/model/dataStorage/img/logo-stups.png" alt="" height="80px"></th>
        <th rowspan="2">Pharmacie</th>
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
        <th colspan="2" rowspan="2"><img src="/model/dataStorage/img/logo-stups.png" alt="" height="80px"></th>
        <th rowspan="2" style="">Pharmacie</th>
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
