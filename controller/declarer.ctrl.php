<?php
    // inclusion du modèle
    include_once(__DIR__."/../model/declarer.model.php");

    // récupération de tout ce qui est necessaire
    $nom_utilisateur = $_GET["nom_intervenant"];
    if (is_null($nom_utilisateur)) {
        print("Erreur : nom d'utilisateur non renseigné.");
        return 1;
    } else {
        $nom_utilisateur = htmlentities($nom_utilisateur);
    }
    
    $nom_site = $_GET["nom_site"];
    if (is_null($nom_site)) {
        print("Erreur : nom de site non renseigné.");
        return 1;
    } else {
        $nom_site = htmlentities($nom_site);
    }

    // est-ce une intervention ?
    $type_intervention = $_GET["type_intervention"];
    if (! is_null($type_intervention)) {
        // on vérifie le reste des données
        $commentaire_intervention = $_GET["commentaire_intervention"];
        if (! is_null($commentaire_intervention)){
            $commentaire_intervention = htmlentities($commentaire_intervention);
        }

        $heure_debut = $_GET["heure_intervention_debut"];
        if (is_null($heure_debut)) {
            print("Erreur : heure de début non renseigné.");
            return 1;
        } else {
            $heure_debut = htmlentities($heure_debut);
        }

        $heure_fin = $_GET["heure_intervention_debut"];
        if (! is_null($heure_fin)){
            $heure_fin = htmlentities($heure_fin);
        }
        
        $date_debut = $_GET["date_intervention_debut"];
        if (is_null($date_debut)) {
            print("Erreur : date de début non renseignée.");
            return 1;
        } else {
            $date_debut = htmlentities($date_debut);
        }

        $date_fin = $_GET["date_intervention_fin"];
        if (! is_null($date_fin)){
            $date_fin = htmlentities($date_fin);
            if (strcmp($date_fin, $date_debut) < 0){
                print("Erreur : début de mesure après sa fin !");
                return 1;
            } elseif (strcmp($date_fin, $date_debut) == 0 && ! is_null($heure_fin) && strcmp($date_fin, $date_debut) < 0){
                print("Erreur : début de mesure après sa fin !");
                return 1;
            }
        }

        // on sauvegarde tout puisque c'était valide
        print("Intervention sauvegardée");
        sauvegarder_intervention(
            $nom_utilisateur,
            $nom_site,
            $date_debut,
            $heure_debut,
            $date_fin,
            $heure_fin,
            $type_intervention,
            $commentaire_intervention
        );
    }

    $type_evt = $_GET["type_evt"];
    if (! is_null($type_evt)) {
        print("Evenement sauvegardé");
        // gerer le reste de l'évènement
    }

    $type_mesure = $_GET["type_mesure"];
    if (! is_null($type_mesure)) {
        print("Mesure sauvegardée");
        // gerer le reste de la mesure
    }


?>