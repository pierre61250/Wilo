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

/* main/index.html.twig */
class __TwigTemplate_8aa2da3879c09c3b7b5ea2eeddc773e5daeb00b6c9eb413fd7726e341bf67e37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Wilo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"menu\">
\t\t<ul id=\"navigation\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" title=\"Accueil\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux");
        echo "\" title=\"Jeux\">Jeux</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"login\">
\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t\t<div class=\"connectOrNot\" data-user=\"";
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "jetons", [], "any", false, false, false, 19)), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/avatar/avatar2.png"), "html", null, true);
            echo "\" alt=\"Avatar player\">
\t\t\t\t</div>
\t\t\t\t<div class=\"infoCompte\">
\t\t\t\t\t<div class=\"pseudo\">
\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "pseudo", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jetons\">
\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/coin/coin4.png"), "html", null, true);
            echo "\" alt=\"Icone jeton\">
\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "jetons", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"deconnexion\" onclick=\"location.href='";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\">
\t\t\t\t\t\t<p>Déconnexion</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 37
            echo "\t\t\t<div class=\"connexionBtn\">
\t\t\t\t<a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t<button class=\"btn\">Connexion</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t</div>
\t<div class=\"nousRejoindre\">
\t\t<p>Venez vous inscrire, pour nous rejoindre !</p>
\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t<button class=\"btn\">Nous Rejoindre</button>
\t\t</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 46,  158 => 43,  150 => 38,  147 => 37,  138 => 31,  133 => 29,  129 => 28,  123 => 25,  116 => 21,  110 => 19,  108 => 18,  100 => 13,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wilo
{% endblock %}

{% block body %}
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
\t<div class=\"login\">
\t\t{% if app.user %}
\t\t\t<div class=\"connectOrNot\" data-user=\"{{ app.user.jetons|json_encode }}\">
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
\t<div class=\"nousRejoindre\">
\t\t<p>Venez vous inscrire, pour nous rejoindre !</p>
\t\t<a href=\"{{ path('app_register') }}\">
\t\t\t<button class=\"btn\">Nous Rejoindre</button>
\t\t</a>
\t</div>
{% endblock %}
", "main/index.html.twig", "C:\\Users\\pierr\\Desktop\\wilo\\templates\\main\\index.html.twig");
    }
}
