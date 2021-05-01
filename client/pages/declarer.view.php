<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Suivi mesure IGE - Déclarer</title>
    <meta name="description" content="La page de déclaration de l'outil de suivi de mesure de l'IGE">

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/declarer.css">

    <script src="../js/declarer.js"></script>

    <link rel="shortcut icon" type="image/png" href="../img/commons/favicon.png"/>
</head>
<body>

    <?php include("./components/header.html") ?>

        <!-- Bouton de choix de la catégorie -->
        <div>
            <button onclick="afficher_intervention()">Intervention</button>
            <button onclick="afficher_evenement()">Évènement</button>
            <button onclick="afficher_controle()">Point de contrôle</button>
        </div>
        
        
    <!-- Intervention -->
    <form action="../../controler/declarer.ctrl.php">
        <fieldset id="fieldset_intervention" hidden>

            <?php include("./components/informations_intervenant.html") ?>

            <legend>Intervention</legend>
            
            <!-- Type d'intervention -->
            <label for="type_intervention">Type d'intervention : </label>
            <select name="type_intervention" id="type_intervention" required>
                <option value="" selected disabled hidden>--Choisir--</option>
                <option value="Nettoyage d'un capteur">Nettoyage d'un capteur</option>
                <option value="MAJ programme">MAJ programme</option>
                <option value="Autre">Autre</option>
            </select>
            
            <!-- Commentaire d'intervention -->
            <label for="commentaire_intervention">Commentaire : </label>
            <textarea 
                name="commentaire_intervention" 
                id="commentaire_intervention" 
                cols="30" rows="5" 
                placeholder="Écrivez un potentiel commentaire sur l'intervention ici (200 caractères max)" 
                maxlength="200"></textarea>
        
            <!-- Date & heure de début de l'intervention-->
            <fieldset>
                <legend>Début</legend>
                <label for="date_intervention_debut">Date : </label>
                <input type="date" name="date_intervention_debut" required>
                <label for="heure_intervention_debut">Heure : </label>
                <input type="time" name="heure_intervention_debut" required>

                <label for="approx_intervention_debut">Approximation ?</label>
                <input type="checkbox" name="approx_intervention_debut">
            </fieldset>
            
            <!-- Date & heure de fin de l'intervention-->
            <fieldset>
                <legend>Fin</legend>
                <label for="date_intervention_fin">Date :</label>
                <input type="date" name="date_intervention_fin">
                <label for="heure_intervention_fin">Heure :</label>
                <input type="time" name="heure_intervention_fin">

                <label for="approx_intervention_fin">Approximation ?</label>
                <input type="checkbox" name="approx_intervention_fin">
            </fieldset>

            <input type="reset" value="Reset">
            <input type="submit" value="Envoyer">
        </fieldset>
        
    </form>

    
    <!-- Évènement -->
    <form action="../../controler/declarer.ctrl.php">
        <fieldset id="fieldset_evenement" hidden>

            <?php include("./components/informations_intervenant.html") ?>

            <legend>Évènement</legend>
            
            <!-- Type d'évènement -->
            <label for="type_evt">Type d'évènement : </label>
            <select name="type_evt" id="type_evt" required>
                <option value="" selected disabled hidden>--Choisir--</option>
                <option value="Crue">Crue</option>
                <option value="Pic MES">Pic MES</option>
                <option value="Etiage">Etiage</option>
                <option value="Autre">Autre</option>
            </select>
            
            <!-- Commentaire sur l'évènement -->
            <label for="commentaire_evt">Commentaire : </label>
            <textarea 
                name="commentaire_evt" 
                id="commentaire_evt" 
                cols="30" rows="5" 
                placeholder="Écrivez un potentiel commentaire sur l'évènement ici (200 caractères max)" 
                maxlength="200"></textarea>
        
            <!-- Date & heure de début de l'évènement -->
            <fieldset>
                <legend>Début</legend>
                <label for="date_evt_debut">Date : </label>
                <input type="date" name="date_evt_debut" required>
                <label for="heure_evt_debut">Heure :</label>
                <input type="time" name="heure_evt_debut" required>

                <label for="approx_evt_debut">Approximation ?</label>
                <input type="checkbox" name="approx_evt_debut">
            </fieldset>

            <!-- Date & heure de fin de l'évènement -->
            <fieldset>
                <legend>Fin</legend>
                <label for="date_evt_fin">Date : </label>
                <input type="date" name="date_evt_fin" required>
                <label for="heure_evt_fin">Heure : </label>
                <input type="time" name="heure_evt_fin" required>

                <label for="approx_evt_fin">Approximation ?</label>
                <input type="checkbox" name="approx_evt_fin">
            </fieldset>

            <input type="reset" value="Reset">
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>


    <!-- Point de contrôle -->
    <form action="../../controler/declarer.ctrl.php">
        <fieldset id="fieldset_controle" hidden>
            <legend>Point de contrôle</legend>

            <?php include("./components/informations_intervenant.html") ?>
            
            <!-- Type de mesure -->
            <label for="type_mesure">Mesure : </label>
            <select name="type_mesure" id="type_mesure" require>
                <option value="" selected disabled hidden>--Choisir--</option>
                <option value="HT">Hauteur (m)</option>
                <option value="COND">Conductivité (μS/cm)</option>
            </select>

            <!-- Valeur de la mesure -->
            <label for="valeur_mesure">Valeur : </label>
            <input type="number" name="valeur_mesure" require>
            
            <!-- Commentaire sur la mesure -->
            <label for="commentaire_ptc">Commentaire : </label>
            <textarea 
                name="commentaire_intervention" 
                id="commentaire_intervention" 
                cols="30" rows="5" 
                placeholder="Écrivez un potentiel commentaire sur la mesure ici (200 caractères max)" 
                maxlength="200"></textarea>
        
            <!-- Date & heure de l'évènement -->
            <fieldset>
                <legend>Date & heure</legend>
                <label for="date_mesure">Date de mesure</label>
                <input type="date" name="date_mesure" require>
                <label for="heure_mesure">Heure de mesure</label>
                <input type="time" name="heure_evt_debut" require>

                <label for="approx_evt_debut">Approximation ?</label>
                <input type="checkbox" name="approx_evt_debut">
            </fieldset>

            <input type="reset" value="Reset">
            <input type="submit" value="Envoyer">
        </fieldset>

    </form>

</body>
</html>
