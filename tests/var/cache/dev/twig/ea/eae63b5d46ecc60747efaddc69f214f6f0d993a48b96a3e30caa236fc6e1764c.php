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

/* base.html.twig */
class __TwigTemplate_5cacfaf256a3721c8f5f7b53fcab757c11c01165f847ee5f48d5cfe9e42fe473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"css/base.css\">
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deal_index");
        echo "\">Deals-Factory</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Bons plans
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Codes promo</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Gratuit</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Discutions</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\">
\t\t\t\t\t\t<!-- <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Go</button> -->
\t\t\t\t\t</form>
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout-user");
            echo "\" type=\"button\" class=\"btn btn-secondary\">Deconnexion</a>\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-deal");
            echo "\" type=\"button\" class=\"btn btn-info\">+ Poster ...</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-user");
            echo "\" type=\"button\" class=\"btn btn-secondary\">Connexion</a>\t
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login-user");
            echo "\" type=\"button\" class=\"btn btn-info\">+ Poster ...</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Deals-Factory
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "\t\t
\t\t<!-- Modal -->
\t\t\t
\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 73,  222 => 72,  187 => 9,  167 => 6,  151 => 78,  149 => 72,  142 => 67,  136 => 65,  130 => 62,  127 => 61,  121 => 58,  115 => 55,  112 => 54,  110 => 53,  69 => 15,  62 => 10,  59 => 9,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Deals-Factory
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> {% block stylesheets %}{% endblock %}{% block javascripts %}{% endblock %}
\t\t<link rel=\"stylesheet\" href=\"css/base.css\">
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('deal_index') }}\">Deals-Factory</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Bons plans
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Codes promo</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Gratuit</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Discutions</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\">
\t\t\t\t\t\t<!-- <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Go</button> -->
\t\t\t\t\t</form>
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout-user') }}\" type=\"button\" class=\"btn btn-secondary\">Deconnexion</a>\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('add-deal')}}\" type=\"button\" class=\"btn btn-info\">+ Poster ...</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('add-user') }}\" type=\"button\" class=\"btn btn-secondary\">Connexion</a>\t
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('login-user') }}\" type=\"button\" class=\"btn btn-info\">+ Poster ...</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t{% block body %}
\t\t
\t\t<!-- Modal -->
\t\t\t
\t\t
\t\t{% endblock %}

\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\dealfactory\\templates\\base.html.twig");
    }
}
