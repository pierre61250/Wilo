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

/* jeux/index.html.twig */
class __TwigTemplate_f3501409f0082d507a8fef85477663b666cce9c9a58a9d86dfa069469d42f0bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/index.html.twig", 1);
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

\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "\t\t<div class=\"deckCarte\">
\t\t\t<div class=\"carte\">
\t\t\t\t<div class=\"carteImg\">
\t\t\t\t\t<img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/pfc/illustration.png"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carteTitre\">
\t\t\t\t\t<p>Pierre</p>
\t\t\t\t\t<p>Feuille</p>
\t\t\t\t\t<p>Ciseaux</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carteMise\">
\t\t\t\t\t<p>Mise :  100</p>
\t\t\t\t\t<img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/coin/coin4.png"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"cartePlay\" onclick=\"playPFC()\">
\t\t\t\t\t<p>Jouer</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carte\">
\t\t\t\t<div class=\"carteImg\">
\t\t\t\t\t<img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/morpion/morpion.png"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carteTitre\">
\t\t\t\t\t<p>Morpion</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carteMise\">
\t\t\t\t\t<p>Mise :  100</p>
\t\t\t\t\t<img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/coin/coin4.png"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"cartePlay\" onclick=\"playMorpion()\">
\t\t\t\t\t<p>Jouer</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 84
            echo "\t\t<div class=\"info\">
\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\tConnectez vous pour jouer !
\t\t</div>
\t";
        }
        // line 89
        echo "\t<script>
\t\tfunction playPFC() {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/pfc\";

}

function playMorpion() {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/morpion\";

}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  216 => 84,  205 => 76,  195 => 69,  184 => 61,  172 => 52,  167 => 49,  165 => 48,  157 => 43,  151 => 40,  144 => 35,  136 => 30,  133 => 29,  124 => 23,  119 => 21,  115 => 20,  109 => 17,  102 => 13,  96 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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

\t{% if app.user %}
\t\t<div class=\"deckCarte\">
\t\t\t<div class=\"carte\">
\t\t\t\t<div class=\"carteImg\">
\t\t\t\t\t<img src=\"{{ asset('icon/pfc/illustration.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carteTitre\">
\t\t\t\t\t<p>Pierre</p>
\t\t\t\t\t<p>Feuille</p>
\t\t\t\t\t<p>Ciseaux</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carteMise\">
\t\t\t\t\t<p>Mise :  100</p>
\t\t\t\t\t<img src=\"{{ asset('icon/coin/coin4.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"cartePlay\" onclick=\"playPFC()\">
\t\t\t\t\t<p>Jouer</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carte\">
\t\t\t\t<div class=\"carteImg\">
\t\t\t\t\t<img src=\"{{ asset('icon/morpion/morpion.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carteTitre\">
\t\t\t\t\t<p>Morpion</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carteMise\">
\t\t\t\t\t<p>Mise :  100</p>
\t\t\t\t\t<img src=\"{{ asset('icon/coin/coin4.png')}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"cartePlay\" onclick=\"playMorpion()\">
\t\t\t\t\t<p>Jouer</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t<div class=\"info\">
\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\tConnectez vous pour jouer !
\t\t</div>
\t{% endif %}
\t<script>
\t\tfunction playPFC() {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/pfc\";

}

function playMorpion() {

const expires = new Date(Date.now() + 1000).toUTCString();
var userData = document.querySelector('.connectOrNot');
var userID = userData.dataset.user;

document.cookie = `id=` + userID + `; expires=\${expires}`;
document.cookie = `mise=` + 100 + `; expires=\${expires}`;
location.href = \"/morpion\";

}
\t</script>
{% endblock %}
", "jeux/index.html.twig", "C:\\Users\\pierr\\Desktop\\wilo\\templates\\jeux\\index.html.twig");
    }
}
