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
import './styles/jeux.css';
import './styles/morpion.css';
import './styles/nbMystere.css';

// start the Stimulus application
import './bootstrap';

// js
import './controllers/pfc.js';

var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;