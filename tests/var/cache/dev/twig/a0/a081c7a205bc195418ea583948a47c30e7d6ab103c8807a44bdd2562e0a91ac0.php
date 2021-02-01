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

/* deal/index.html.twig */
class __TwigTemplate_c7790aa5bfab71af7b2b2520cdfce49e3fb0a3556f3f374b874af5b6261a5a51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "deal/index.html.twig", 1);
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

        echo "Deals-factory => Tous les deals
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
        echo "\t<style>
\t\t.cat-def {
\t\t\tbackground-color: #f6f7f9;
\t\t\theight: 100px;
\t\t}
\t\t.menu-filtre {
\t\t\tbackground-color: white;
\t\t\theight: 60px;
\t\t}
\t\t.deals-list {
\t\t\tbackground-color: #e9eaed;
\t\t\theight: 100%;
\t\t\tpadding-top: 10px;
\t\t\tpadding-bottom: 10px;
\t\t}
\t\t.deal-item {
\t\t\tmargin-bottom: 10px;
\t\t\tpadding-top: 10px;
\t\t\tpadding-bottom: 10px;
\t\t\tbackground-color: white;
\t\t\tborder-radius: 5px;
\t\t}
\t\t.burn-style{
\t\t\tborder: 1px solid #d1d5db;
\t\t\tborder-radius: 5px;
\t\t\tpadding-top : 5px;
\t\t\tpadding-bottom : 5px;
\t\t\tpadding-left : 20px;
\t\t\tpadding-right : 20px;
\t\t\twidth : 100px;
\t\t\tmargin-top : 10px;
\t\t\tmargin-bottom : 10px;
\t\t}
\t</style>
\t<div class=\"container-fluid cat-def\">
\t\t<div class=\"container\">
\t\t\t<p>Categories deffilantes</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid menu-filtre\">
\t\t<div class=\"container\">
\t\t\t<p>Menu</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid deals-list\">
\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) || array_key_exists("deals", $context) ? $context["deals"] : (function () { throw new RuntimeError('Variable "deals" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 55
            echo "\t\t\t<div class=\"container deal-item\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<a><img class=\"img-fluid\" src=\"https://picsum.photos/250\"></img>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"burn-style\"><span> - 700° +</span></div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>Expire le ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "endDate", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p><span>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "newPrice", [], "any", false, false, false, 71), "html", null, true);
            echo "€</span> <del><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "oldPrice", [], "any", false, false, false, 71), "html", null, true);
            echo "€</span></del> <span>% de reduction</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "description", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deal"], "user", [], "any", false, false, false, 77), "pseudo", [], "any", false, false, false, 77), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deal"], "startDate", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Commentaires</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Voir le deal =></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "</div></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "deal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 89,  180 => 77,  174 => 74,  166 => 71,  160 => 68,  154 => 65,  142 => 55,  138 => 54,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Deals-factory => Tous les deals
{% endblock %}

{% block body %}
\t<style>
\t\t.cat-def {
\t\t\tbackground-color: #f6f7f9;
\t\t\theight: 100px;
\t\t}
\t\t.menu-filtre {
\t\t\tbackground-color: white;
\t\t\theight: 60px;
\t\t}
\t\t.deals-list {
\t\t\tbackground-color: #e9eaed;
\t\t\theight: 100%;
\t\t\tpadding-top: 10px;
\t\t\tpadding-bottom: 10px;
\t\t}
\t\t.deal-item {
\t\t\tmargin-bottom: 10px;
\t\t\tpadding-top: 10px;
\t\t\tpadding-bottom: 10px;
\t\t\tbackground-color: white;
\t\t\tborder-radius: 5px;
\t\t}
\t\t.burn-style{
\t\t\tborder: 1px solid #d1d5db;
\t\t\tborder-radius: 5px;
\t\t\tpadding-top : 5px;
\t\t\tpadding-bottom : 5px;
\t\t\tpadding-left : 20px;
\t\t\tpadding-right : 20px;
\t\t\twidth : 100px;
\t\t\tmargin-top : 10px;
\t\t\tmargin-bottom : 10px;
\t\t}
\t</style>
\t<div class=\"container-fluid cat-def\">
\t\t<div class=\"container\">
\t\t\t<p>Categories deffilantes</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid menu-filtre\">
\t\t<div class=\"container\">
\t\t\t<p>Menu</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid deals-list\">
\t\t{% for deal in deals %}
\t\t\t<div class=\"container deal-item\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<a><img class=\"img-fluid\" src=\"https://picsum.photos/250\"></img>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"burn-style\"><span> - 700° +</span></div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>Expire le {{ deal.endDate | date('d/m/Y') }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>{{ deal.title }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p><span>{{ deal.newPrice }}€</span> <del><span>{{ deal.oldPrice }}€</span></del> <span>% de reduction</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>{{ deal.description }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{{ deal.user.pseudo }} le {{ deal.startDate | date('d/m/Y')  }}
\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Commentaires</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Voir le deal =></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endfor %}
</div></div>

{% endblock %}
", "deal/index.html.twig", "C:\\wamp64\\www\\dealfactory\\templates\\deal\\index.html.twig");
    }
}
