<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
$taches =['Reparer','titi','toto','tete'];
?>
<div class="">
    <h1>Tâches hebdomadaires</h1>

    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
    <th>Semaine 1
        <button class="btn btn-info" >></button>
        <button class="btn btn-info" id="cmdedit" >Ajouter une tache</button>
        <button class="btn btn-info" >Modifier une tache</button>
        <button class="btn btn-info" >Supprimer une tache</button>

    </th>
    </div>
</table>

<div class="week">
    <div class="horizontal"> <span style="font-weight: bold">  JOURNÉE</span> </div>
    <div class="day">

        <div class="dayheader">Lundi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div class="hour" style="height:160px" title="Your text description">Nettoyage centrale et garage</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>
    </div>
    <div class="day">
        <div class="dayheader">Mardi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div  style="height:130px" class="hour" title="Your text description">tâche spécifique</div>
        <div style="height: 100px" class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
    <div class="day">
        <div class="dayheader">Mercredi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div class="hour" style="height:160px" title="Your text description">Désinfection inventaire hebdo NOVA N°:_________</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>
    </div>
    <div class="day">
        <div class="dayheader">Jeudi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div  style="height:55px" class="hour" title="Your text description">Commande mat et commande pharma.</div>
        <div class="hour" style="height:105px" title="Your text description">Désinfection inventaire hebdo NOVA N°:_________</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
    <div class="day">
        <div class="dayheader">Vendredi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div  style="height:45px" class="hour" title="Your text description">Rangement mat</div>
        <div  style="height:45px" class="hour" title="Your text description">Contrôle véhicule</div>
        <div class="hour" style="height:70px" title="Your text description">Nettoyage centrale et garage</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
    <div class="day">
        <div class="dayheader">Samedi</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div class="hour" style="height:160px" title="Your text description">Tâches selon necessité</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
    <div class="day">
        <div class="dayheader">Dimanche</div>
        <div class="hour" style="height:50px" title="Faire le fax 144">Fax 144 Trasmission</div>
        <div class="hour" style="height:50px" title="Controler les communication et si les ambulances sont prtes a partir">Check Ambulance et Comunication</div>
        <div class="hour" style="height:100px" title="Your text description">Contrôle des stupéfiants</div>
        <div class="hour" title="Your text description">Check bibliothèque</div>
        <div  style="height:55px" class="hour" title="Your text description">Changer le bac de nettoyage</div>
        <div class="hour"  style="height:55px" title="Your text description">Envoi feuille STUP hebdo</div>
        <div class="hour" style="height:105px" title="Your text description">Tâches selon necessité</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>



</div>
<div class="week">
    <div class="horizontal nuitcolor"> <span style="font-weight: bold">NUIT</span> </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
        *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>


    </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>


    </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>



    </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>



    </div>
    <div class="day">


        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>



    </div>
    <div class="day">

        <div class="hour" title="Your text description">Check de nuit</div>
        <div class="hour" title="Your text description">Contrôle supédfiants ambulances
            *Morphine X4 *Sintenyl X6 NOVA°_______</div>
        <div class="hour" title="Your text description">tâche spécifique</div>
        <div class="hour" title="Your text description">Formation</div>
        <div class="hour" title="Your text description">Remise locaux ambulances</div>

    </div>
</div>


</div>


<!--
<div class="">
    <div class="week">
        <div class="">
<?php
/*
foreach ($jours as $jour) {
    echo "<span class=' dayheader' >" . $jour . "</span>";
    echo "</div>";
}
echo "</div>";


    foreach ($taches as $tache) {
        echo "<span class=' hour'>" . $tache . "</span>";

    }
*/
?>
</div>-->
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
