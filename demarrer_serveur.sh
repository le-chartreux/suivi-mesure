#!/bin/sh
# script de démarrage du serveur pour les ordinateurs sous Unix (macOS et Linux)

# fonctions utilisées
quit_app() {
    echo "Annulation du lancement."
    exit 1
}

# vérification de l'installation correcte de PHP
if ! php --version >/dev/null 2>&1; then
    echo "Erreur : PHP non installé (non accessible avec la commande php)"
    quit_app
fi

# Démarrage du serveur
# 1. Positionnement dans le repertoire racine du projet
cd "$(dirname "$(readlink -f "$0")")/"
# 2. Démarrage du serveur
echo "Serveur démarré. Page accessible à l'adresse localhost:8080 depuis votre navigateur."
php -S localhost:8080
echo "Serveur arrêté."
