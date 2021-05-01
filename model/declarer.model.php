<?php
function sauvegarder_intervention(
    $nom_utilisateur,
    $nom_site,
    $date_debut,
    $heure_debut,
    $date_fin,
    $heure_fin,
    $type_intervention,
    $commentaire_intervention
){
    // écriture de la première ligne si fichier non existant
    if (! file_exists(__DIR__ . "/../data/interventions.csv") ){
        $fichier_interventions = fopen(__DIR__ . "/../data/interventions.csv", "w");
        fwrite(
            $fichier_interventions, 
            "nom utilisateur,nom site,date heure début,date heure fin,type intervention,commentaire\n"
        );
        fclose($fichier_interventions);
    }

    $fichier_interventions = fopen(__DIR__ . "/../data/interventions.csv", "a");
    fwrite(
        $fichier_interventions, 
        $nom_utilisateur . "," . $nom_site . "," . $date_debut . " " . $heure_debut ."," . $date_fin . " " . $heure_fin . "," . $type_intervention . "," . $commentaire_intervention . "\n"
    );
    fclose($fichier_interventions);
}

?>