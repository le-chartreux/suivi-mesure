function afficher_intervention() {
    document.getElementById("fieldset_evenement").hidden = true;
    document.getElementById("fieldset_controle").hidden = true;
    document.getElementById("fieldset_intervention").hidden = false;
}

function afficher_evenement() {
    document.getElementById("fieldset_intervention").hidden = true;
    document.getElementById("fieldset_controle").hidden = true;
    document.getElementById("fieldset_evenement").hidden = false;
    
}

function afficher_controle() {
    document.getElementById("fieldset_evenement").hidden = true;
    document.getElementById("fieldset_intervention").hidden = true;
    document.getElementById("fieldset_controle").hidden = false;
}
