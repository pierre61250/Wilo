/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import './styles/pfc.css';
import './styles/login.css';

// start the Stimulus application
import './bootstrap';

var userRating = document.querySelector('.connectOrNot');
var user = userRating.dataset.user;
console.log(user);

const buttons = document.querySelectorAll("button");
// const resultat = document.querySelector(".resultat");

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function () {
        const joueur = buttons[i].innerHTML;
        const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
        let resultat = "";
        // resultat.innerHTML = joueur + "       " + robot;
        if (joueur === robot) {
            resultat = "Egalité";
        }
        else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Ciseaux" && robot === "Feuilles") || (joueur === "Feuilles") && (robot === "Pierre")) {
            resultat = "Gagné";
        }
        else {
            resultat = "Perdu";
        }
        document.querySelector(".resultat").innerHTML = `
            Vous : ${joueur} </br>
            Ordi : ${robot} <br/>
            Résultat : ${resultat}`;
    });
}