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

/* jeux/nbMystere.html.twig */
class __TwigTemplate_387c0031fc66cd6018be6e8801d1fd5b852a5a408305970334f7dfab65da9199 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/nbMystere.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/nbMystere.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/nbMystere.html.twig", 1);
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

\t<div class=\"menu\">
\t\t<ul id=\"navigation\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" title=\"Accueil\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux");
        echo "\" title=\"Jeux\">Jeux</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"panelJeu\">
\t\t<div class=\"titreJeu\">
\t\t\t<h3>Nombre Mystère</h3>
\t\t</div>
\t\t<div class=\"enonceJeu\">
\t\t\t<p>Trouver le nombre mystère tiré au sort entre 0 et 100 en moins de 10 coups pour remporter la partie !</p>
\t\t</div>
\t\t<div class=\"indicationJeu\">
\t\t\t<h4 id=\"indication\"></h4>
\t\t</div>
\t\t<div class=\"inputJeu\">
\t\t\t<input type=\"number\" size=\"2\" id=\"inputNbMystere\" min=\"0\" max=\"100\" value=\"0\"></div>
\t\t<div class=\"btnJeu\">
\t\t\t<button class=\"btn\" onclick=\"proposer()\" id=\"btnNbMystere\">Proposer</button>
\t\t</div>
\t</div>

\t<script>
\t\tvar nbMystere = Math.floor(Math.random() * 100);
var nbCoups = 0;

function proposer() {
nbCoups++;
if (document.getElementById(\"inputNbMystere\").value == nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Vous avez trouvé ! | Coups : ' + nbCoups;
document.getElementById(\"btnNbMystere\").disabled = true;
document.getElementById(\"btnNbMystere\").style.background = \"grey\";
nbMystere = Math.floor(Math.random() * 101);
nbCoups = 0;
result(\"Gagné\");
} else if (document.getElementById(\"inputNbMystere\").value > nbMystere && nbCoups == 10) {
result(\"Perdu\");
} else if (document.getElementById(\"inputNbMystere\").value<nbMystere && nbCoups == 10) {
result(\"Perdu\");
} else if (document.getElementById(\"inputNbMystere\").value>nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Plus petit | Coups :' + nbCoups;
} else if (document.getElementById(\"inputNbMystere\").value < nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Plus grand | Coups :' + nbCoups;
}
}

function result(result) {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

console.log(result);

document.cookie = `result=` + result + `; expires=\${expires}`;
document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/resultat\";

}
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux/nbMystere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  151 => 40,  144 => 35,  136 => 30,  133 => 29,  124 => 23,  119 => 21,  115 => 20,  109 => 17,  102 => 13,  96 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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

\t<div class=\"menu\">
\t\t<ul id=\"navigation\">
\t\t\t<li>
\t\t\t\t<a href=\"{{path('home')}}\" title=\"Accueil\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('jeux')}}\" title=\"Jeux\">Jeux</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"panelJeu\">
\t\t<div class=\"titreJeu\">
\t\t\t<h3>Nombre Mystère</h3>
\t\t</div>
\t\t<div class=\"enonceJeu\">
\t\t\t<p>Trouver le nombre mystère tiré au sort entre 0 et 100 en moins de 10 coups pour remporter la partie !</p>
\t\t</div>
\t\t<div class=\"indicationJeu\">
\t\t\t<h4 id=\"indication\"></h4>
\t\t</div>
\t\t<div class=\"inputJeu\">
\t\t\t<input type=\"number\" size=\"2\" id=\"inputNbMystere\" min=\"0\" max=\"100\" value=\"0\"></div>
\t\t<div class=\"btnJeu\">
\t\t\t<button class=\"btn\" onclick=\"proposer()\" id=\"btnNbMystere\">Proposer</button>
\t\t</div>
\t</div>

\t<script>
\t\tvar nbMystere = Math.floor(Math.random() * 100);
var nbCoups = 0;

function proposer() {
nbCoups++;
if (document.getElementById(\"inputNbMystere\").value == nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Vous avez trouvé ! | Coups : ' + nbCoups;
document.getElementById(\"btnNbMystere\").disabled = true;
document.getElementById(\"btnNbMystere\").style.background = \"grey\";
nbMystere = Math.floor(Math.random() * 101);
nbCoups = 0;
result(\"Gagné\");
} else if (document.getElementById(\"inputNbMystere\").value > nbMystere && nbCoups == 10) {
result(\"Perdu\");
} else if (document.getElementById(\"inputNbMystere\").value<nbMystere && nbCoups == 10) {
result(\"Perdu\");
} else if (document.getElementById(\"inputNbMystere\").value>nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Plus petit | Coups :' + nbCoups;
} else if (document.getElementById(\"inputNbMystere\").value < nbMystere) {
document.getElementById(\"indication\").innerHTML = 'Plus grand | Coups :' + nbCoups;
}
}

function result(result) {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

console.log(result);

document.cookie = `result=` + result + `; expires=\${expires}`;
document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/resultat\";

}
\t</script>

{% endblock %}
", "jeux/nbMystere.html.twig", "C:\\Users\\pierr\\Desktop\\wilo\\templates\\jeux\\nbMystere.html.twig");
    }
}
