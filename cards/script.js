function check_switch_tabs() {
    const buttons = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content');
    console.log(buttons);
    buttons.forEach(button =>
        button.addEventListener('click', () => {
            console.log('Onglet cliqué');
            document.querySelector('.tab-button.active')?.classList.remove('active');
            document.querySelector('.tab-content.active')?.classList.remove('active');

            button.classList.add('active');
            document.getElementById(button.dataset.tab).classList.add('active');
        })
    );
}

function read_liste(listname){
    const fs = require('fs');

    const filePath = './' + listname + '.csv';

    fs.readFile(filePath, 'utf8', (err, data) => {
    if (err) {
        console.error('Erreur de lecture:', err);
        return;
    }

    // Découper par lignes
    const lignes = data.trim().split('\n');

    // Découper chaque ligne par les virgules
    const tableau = lignes.map(ligne => ligne.split(','));

    console.log(tableau);
    });

}

function write_card(listname, recto, verso){
    const fs = require('fs');
    const filePath = './' + listname + '.csv';
    const newLine = '\nrecto,verso';
    fs.appendFile(filePath, newLine, (err) => {
        if (err) {
            console.error('Erreur lors de l\'ajout de la carte:', err);
        } else {
            console.log('Carte ajoutée avec succès !');
        }
    });
}

// Vérifie si l'onglet actif est "create-list"
function handleNewCard() {
  const activeTab = document.querySelector('.tab-content.active');
  if (activeTab && activeTab.id === 'create-list') {
    const newCardEntry = document.getElementById('new-card');
    
    // Écoute l'envoi du formulaire
    newCardEntry.addEventListener('submit', (event) => {
      event.preventDefault(); // empêche la page de recharger
      const recto = document.getElementById('card-input').value;
      console.log(recto);
    });
  }
}

// function input_card(){

// }

// if DOM ready

document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    check_switch_tabs();
    handleNewCard();
});