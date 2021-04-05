<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* jeux/morpion.html.twig */
class __TwigTemplate_2c3e3e3af27c4ce831c74020bc95be2d6ef62ce0d4133ee899b8ccaac2f9e233 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/morpion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/morpion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/morpion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWilo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"login\">
\t\t";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t\t\t<div class=\"connectOrNot\" data-user=\"";
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/avatar/avatar2.png"), "html", null, true);
            echo "\" alt=\"Avatar player\">
\t\t\t\t</div>
\t\t\t\t<div class=\"infoCompte\">
\t\t\t\t\t<div class=\"pseudo\">
\t\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "pseudo", [], "any", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jetons\">
\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/coin/coin4.png"), "html", null, true);
            echo "\" alt=\"Icone jeton\">
\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "jetons", [], "any", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"deconnexion\" onclick=\"location.href='";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\">
\t\t\t\t\t\t<p>Déconnexion</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 29
            echo "\t\t\t<div class=\"connexionBtn\">
\t\t\t\t<a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t<button class=\"btn\">Connexion</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "\t</div>

\t<h1 class=\"titreMorpion\">Le jeu du morpion</h1>
\t<div id=\"Jeu\">
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div id=\"StatutJeu\"></div>
\t</div>

\t<script>
\t\tfunction estValide(button) {
return button.innerHTML.length == 0;
}

function setSymbol(btn, symbole) {
btn.innerHTML = symbole;
}

function rechercherVainqueur(pions, joueurs, tour) {
if (pions[0].innerHTML == joueurs[tour] && pions[1].innerHTML == joueurs[tour] && pions[2].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[1].style.backgroundColor = \"#9ACD32\";
pions[2].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[1].style.color = \"white\";
pions[2].style.color = \"white\";
return true;
}

if (pions[3].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[5].innerHTML == joueurs[tour]) {
pions[3].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[5].style.backgroundColor = \"#9ACD32\";
pions[3].style.color = \"white\";
pions[4].style.color = \"white\";
pions[5].style.color = \"white\";
return true;
}

if (pions[6].innerHTML == joueurs[tour] && pions[7].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[6].style.backgroundColor = \"#9ACD32\";
pions[7].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[6].style.color = \"white\";
pions[7].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[0].innerHTML == joueurs[tour] && pions[3].innerHTML == joueurs[tour] && pions[6].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[3].style.backgroundColor = \"#9ACD32\";
pions[6].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[3].style.color = \"white\";
pions[6].style.color = \"white\";
return true;
}

if (pions[1].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[7].innerHTML == joueurs[tour]) {
pions[1].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[7].style.backgroundColor = \"#9ACD32\";
pions[1].style.color = \"white\";
pions[4].style.color = \"white\";
pions[7].style.color = \"white\";
return true;
}

if (pions[2].innerHTML == joueurs[tour] && pions[5].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[2].style.backgroundColor = \"#9ACD32\";
pions[5].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[2].style.color = \"white\";
pions[5].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[0].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[4].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[2].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[6].innerHTML == joueurs[tour]) {
pions[2].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[6].style.backgroundColor = \"#9ACD32\";
pions[2].style.color = \"white\";
pions[4].style.color = \"white\";
pions[6].style.color = \"white\";
return true;
}
}

function matchNul(pions) {
for (var i = 0, len = pions.length; i < len; i++) {
if (pions[i].innerHTML.length == 0) 
return false;



}

return true;
}

var Afficheur = function (element) {
var affichage = element;

function setText(message) {
affichage.innerHTML = message;
}

return {sendMessage: setText};
};

function main() {
var pions = document.querySelectorAll(\"#Jeu button\");
var joueurs = [\"X\", \"O\"];
var tour = 0;
var jeuEstFini = false;
var afficheur = new Afficheur(document.querySelector(\"#StatutJeu\"));
afficheur.sendMessage(\"Le jeu peut commencer ! <br /> Joueur \" + joueurs[tour] + \" c'est votre tour.\");
for (var i = 0, len = pions.length; i < len; i++) {
pions[i].addEventListener(\"click\", function () {
if (jeuEstFini) 
return;



if (! estValide(this)) {
afficheur.sendMessage(\"Case occupée ! <br />Joueur \" + joueurs[tour] + \" c'est toujours à vous !\");
} else {
setSymbol(this, joueurs[tour]);
jeuEstFini = rechercherVainqueur(pions, joueurs, tour);

if (jeuEstFini) {
if (joueurs[tour] == \"X\") {
afficheur.sendMessage('Vous avez gagné ! <br /> <a href=\"      ";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Continuer</a>');
result(\"Gagné\");
} else if (joueurs[tour] == \"O\") {
afficheur.sendMessage('Ordi a gagné ! <br /> <a href=\"      ";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Continuer</a>');
result(\"Perdu\");
}
return;
}

if (matchNul(pions)) {
afficheur.sendMessage('Match Nul ! <br/> <a href=\"      ";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat");
        echo "\">Continuer</a>');
result(\"Egalité\");
return;
}

tour++;
tour = tour % 2;
afficheur.sendMessage(\"Joueur \" + joueurs[tour] + \" c'est à vous !\");
if (tour == 1) {
ordi(pions);
}
}
});
}
}

main();

function ordi(pions) {
var nb = Math.floor(Math.random() * 9);
if (! estValide(pions[nb])) {
ordi(pions);
} else {
pions[nb].click();
}

}

function result(result) {

var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

console.log(result);

document.cookie = `result=` + result;
document.cookie = `id=` + userID;
document.cookie = `mise=` + 100;

}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux/morpion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 202,  309 => 195,  303 => 192,  144 => 35,  136 => 30,  133 => 29,  124 => 23,  119 => 21,  115 => 20,  109 => 17,  102 => 13,  96 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tWilo
{% endblock %}

{% block body %}

\t<div class=\"login\">
\t\t{% if app.user %}
\t\t\t<div class=\"connectOrNot\" data-user=\"{{ app.user.id|json_encode }}\">
\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t<img src=\"{{ asset('icon/avatar/avatar2.png')}}\" alt=\"Avatar player\">
\t\t\t\t</div>
\t\t\t\t<div class=\"infoCompte\">
\t\t\t\t\t<div class=\"pseudo\">
\t\t\t\t\t\t{{ app.user.pseudo }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jetons\">
\t\t\t\t\t\t<img src=\"{{ asset('icon/coin/coin4.png')}}\" alt=\"Icone jeton\">
\t\t\t\t\t\t{{ app.user.jetons }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"deconnexion\" onclick=\"location.href='{{ path('app_logout') }}'\">
\t\t\t\t\t\t<p>Déconnexion</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"connexionBtn\">
\t\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t\t<button class=\"btn\">Connexion</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}
\t</div>

\t<h1 class=\"titreMorpion\">Le jeu du morpion</h1>
\t<div id=\"Jeu\">
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t\t<button class=\"btnMorpion\"></button>
\t\t</div>
\t\t<div id=\"StatutJeu\"></div>
\t</div>

\t<script>
\t\tfunction estValide(button) {
return button.innerHTML.length == 0;
}

function setSymbol(btn, symbole) {
btn.innerHTML = symbole;
}

function rechercherVainqueur(pions, joueurs, tour) {
if (pions[0].innerHTML == joueurs[tour] && pions[1].innerHTML == joueurs[tour] && pions[2].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[1].style.backgroundColor = \"#9ACD32\";
pions[2].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[1].style.color = \"white\";
pions[2].style.color = \"white\";
return true;
}

if (pions[3].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[5].innerHTML == joueurs[tour]) {
pions[3].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[5].style.backgroundColor = \"#9ACD32\";
pions[3].style.color = \"white\";
pions[4].style.color = \"white\";
pions[5].style.color = \"white\";
return true;
}

if (pions[6].innerHTML == joueurs[tour] && pions[7].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[6].style.backgroundColor = \"#9ACD32\";
pions[7].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[6].style.color = \"white\";
pions[7].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[0].innerHTML == joueurs[tour] && pions[3].innerHTML == joueurs[tour] && pions[6].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[3].style.backgroundColor = \"#9ACD32\";
pions[6].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[3].style.color = \"white\";
pions[6].style.color = \"white\";
return true;
}

if (pions[1].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[7].innerHTML == joueurs[tour]) {
pions[1].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[7].style.backgroundColor = \"#9ACD32\";
pions[1].style.color = \"white\";
pions[4].style.color = \"white\";
pions[7].style.color = \"white\";
return true;
}

if (pions[2].innerHTML == joueurs[tour] && pions[5].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[2].style.backgroundColor = \"#9ACD32\";
pions[5].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[2].style.color = \"white\";
pions[5].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[0].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[8].innerHTML == joueurs[tour]) {
pions[0].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[8].style.backgroundColor = \"#9ACD32\";
pions[0].style.color = \"white\";
pions[4].style.color = \"white\";
pions[8].style.color = \"white\";
return true;
}

if (pions[2].innerHTML == joueurs[tour] && pions[4].innerHTML == joueurs[tour] && pions[6].innerHTML == joueurs[tour]) {
pions[2].style.backgroundColor = \"#9ACD32\";
pions[4].style.backgroundColor = \"#9ACD32\";
pions[6].style.backgroundColor = \"#9ACD32\";
pions[2].style.color = \"white\";
pions[4].style.color = \"white\";
pions[6].style.color = \"white\";
return true;
}
}

function matchNul(pions) {
for (var i = 0, len = pions.length; i < len; i++) {
if (pions[i].innerHTML.length == 0) 
return false;



}

return true;
}

var Afficheur = function (element) {
var affichage = element;

function setText(message) {
affichage.innerHTML = message;
}

return {sendMessage: setText};
};

function main() {
var pions = document.querySelectorAll(\"#Jeu button\");
var joueurs = [\"X\", \"O\"];
var tour = 0;
var jeuEstFini = false;
var afficheur = new Afficheur(document.querySelector(\"#StatutJeu\"));
afficheur.sendMessage(\"Le jeu peut commencer ! <br /> Joueur \" + joueurs[tour] + \" c'est votre tour.\");
for (var i = 0, len = pions.length; i < len; i++) {
pions[i].addEventListener(\"click\", function () {
if (jeuEstFini) 
return;



if (! estValide(this)) {
afficheur.sendMessage(\"Case occupée ! <br />Joueur \" + joueurs[tour] + \" c'est toujours à vous !\");
} else {
setSymbol(this, joueurs[tour]);
jeuEstFini = rechercherVainqueur(pions, joueurs, tour);

if (jeuEstFini) {
if (joueurs[tour] == \"X\") {
afficheur.sendMessage('Vous avez gagné ! <br /> <a href=\"      {{ path('resultat') }}\">Continuer</a>');
result(\"Gagné\");
} else if (joueurs[tour] == \"O\") {
afficheur.sendMessage('Ordi a gagné ! <br /> <a href=\"      {{ path('resultat') }}\">Continuer</a>');
result(\"Perdu\");
}
return;
}

if (matchNul(pions)) {
afficheur.sendMessage('Match Nul ! <br/> <a href=\"      {{ path('resultat') }}\">Continuer</a>');
result(\"Egalité\");
return;
}

tour++;
tour = tour % 2;
afficheur.sendMessage(\"Joueur \" + joueurs[tour] + \" c'est à vous !\");
if (tour == 1) {
ordi(pions);
}
}
});
}
}

main();

function ordi(pions) {
var nb = Math.floor(Math.random() * 9);
if (! estValide(pions[nb])) {
ordi(pions);
} else {
pions[nb].click();
}

}

function result(result) {

var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

console.log(result);

document.cookie = `result=` + result;
document.cookie = `id=` + userID;
document.cookie = `mise=` + 100;

}
\t</script>
{% endblock %}
", "jeux/morpion.html.twig", "C:\\Users\\pierr\\Desktop\\wilo\\templates\\jeux\\morpion.html.twig");
    }
}
