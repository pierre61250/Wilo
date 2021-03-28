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

/* security/login.html.twig */
class __TwigTemplate_e0dd5f822d7e8e333e3771e4b672b90c3ec4ed3ab781b7381ffac6c32ffc2941 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t<span class=\"closebtn2\">&times;</span>
\t\t</a>
\t</div>

\t";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "\t\t<div class=\"error\">
\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\tErreur : Mot de passe ou Email invalid !
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 23
        echo "
\t<div class=\"center1\">
\t\t<form method=\"post\">

\t\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "\t\t\t\t<div class=\"info\">
\t\t\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\t\t\tVous êtes déja connecté en tant que
\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "pseudo", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t!
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connection</h1>
\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t<input type=\"email\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"champ\" placeholder=\"Email\" required autofocus>
\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"champ\" placeholder=\"Password\" required>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">

\t\t\t\t<button class=\"btn\" type=\"submit\">
\t\t\t\t\tConnection
\t\t\t\t</button>
\t\t\t</form>
\t\t\t<div class=\"mdpPerdu\">
\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            echo "\">
\t\t\t\t\tMot de passe perdu ?
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"mdpPerdu\">
\t\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t\tNous rejoindre !
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 59
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  162 => 53,  154 => 48,  144 => 41,  137 => 37,  133 => 35,  126 => 31,  121 => 28,  119 => 27,  113 => 23,  104 => 16,  102 => 15,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tWilo
{% endblock %}

{% block body %}

\t<div class=\"login\">
\t\t<a href=\"{{ path('home') }}\">
\t\t\t<span class=\"closebtn2\">&times;</span>
\t\t</a>
\t</div>

\t{% if error %}
\t\t<div class=\"error\">
\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\tErreur : Mot de passe ou Email invalid !
\t\t\t</div>
\t\t</div>
\t{% endif %}

\t<div class=\"center1\">
\t\t<form method=\"post\">

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<span class=\"closebtn\" role=\"alert\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
\t\t\t\t\tVous êtes déja connecté en tant que
\t\t\t\t\t{{ app.user.pseudo }}
\t\t\t\t\t!
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Connection</h1>
\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"champ\" placeholder=\"Email\" required autofocus>
\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"champ\" placeholder=\"Password\" required>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t<button class=\"btn\" type=\"submit\">
\t\t\t\t\tConnection
\t\t\t\t</button>
\t\t\t</form>
\t\t\t<div class=\"mdpPerdu\">
\t\t\t\t<a href=\"{{ path('app_forgot_password_request') }}\">
\t\t\t\t\tMot de passe perdu ?
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"mdpPerdu\">
\t\t\t\t<a href=\"{{ path('app_register') }}\">
\t\t\t\t\tNous rejoindre !
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t{% endif %}


{% endblock %}
", "security/login.html.twig", "C:\\Users\\pierr\\Desktop\\wilo\\templates\\security\\login.html.twig");
    }
}
