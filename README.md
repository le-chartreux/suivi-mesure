# suivi-mesure
suivi-mesure est un site web permettant aux membres de l'IGE de consulter et déclarer les interventions, évènements et points de contrôle.


## Avertissement
suivi-mesure est actuellement une simple démonstration d'un possible futur site web. Il n'est hébergé nulle part, et vous ne pouvez que le consulter en local.



## Index
- [Utilisation](#tilisation)
- [Structure](#structure)
- [Crédits](#crédits)
  


## Utilisation
Téléchargez une release depuis [cette page](https://github.com/VMoM/suivi-mesure/releases) (préférez la plus récente) et suivez la consigne indiquée.



## Structure
Le projet est constitué de 4 dossiers :
- `client`, les données envoyées au client
- `controller`, les controleurs (vérifient que les données envoyées par le client sont valides pour assurer la cohérence des données et la sécurité du site)
- `data`, les données d'utilisation
- `model`, les fonctions de logique et d'accès aux données
```
.
├── client
│   ├── css
│   │   ├── accueil.css
│   │   ├── consulter.css
│   │   ├── declarer.css
│   │   └── main.css
│   ├── fonts
│   ├── img
│   │   └── commons
│   │       ├── favicon.png
│   │       └── logo_ige.png
│   ├── js
│   │   └── declarer.js
│   └── pages
│       ├── accueil.view.php
│       ├── components
│       │   ├── header.html
│       │   └── informations_intervenant.html
│       ├── consulter.view.php
│       └── declarer.view.php
├── controller
│   └── declarer.ctrl.php
├── data
├── demarrer_serveur.bat
├── demarrer_serveur.sh
├── index.php
└── model
│   └── declarer.model.php
└── README.md
```


## Crédits
- Nathan Rousseau, créateur du site
- Page GitHub officielle : https://github.com/VMoM/suivi-mesure/
- [php.net](https://www.php.net/), d'où est tirée le dossier `php_interpreter` de la version Windows