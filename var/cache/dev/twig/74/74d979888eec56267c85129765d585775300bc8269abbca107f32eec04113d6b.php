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

/* home/index.html.twig */
class __TwigTemplate_a6dadc6c62f5314c1d4b0e6018c941d2b40a3819d6056b4f4e93d9124ab8946a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Bienvenue 👋";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }

        .button {
            border: 1px solid transparent;
            padding: 16px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 14px;
        }

        .button:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .add-product {
            background-color: #20c997;
        }
        .change-product {
            background-color: #fcc419;
        }

        .delete-product {
            background-color: #ff6b6b;
        }
        .display-list {
            background-color: #339af0;
            display: block;
            text-align: center;
        }
        .back {
            background-color: #845ef7;
        }
        .wrapper-2 {
            margin-top: 50px;
        }
    </style>

    <div class=\"example-wrapper\">
        ";
        // line 59
        echo "        <h1>Qui se cache dans mes placards ? 🔍</h1>

        <p>Si comme moi, vous êtes tête en l'air et que vous oubliez que vous avez déjà 3 flacons de muscade d'avance,
            alors vous êtes sur la bonne page 👍 🍀</p>

        <a href=\"product/add\" class=\"button add-product\">Ajouter un produit</a>
        <a href=\"product/change\" class=\"button change-product\">Modifier un produit</a>
        <a href=\"product/delete\" class=\"button delete-product\">Supprimer un produit</a>
    </div>

    <div class=\"wrapper-2 example-wrapper\"><a href=\"product\" class=\"button display-list\">Afficher la liste des produits</a></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue 👋{% endblock %}

{% block body %}
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }

        .button {
            border: 1px solid transparent;
            padding: 16px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 14px;
        }

        .button:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .add-product {
            background-color: #20c997;
        }
        .change-product {
            background-color: #fcc419;
        }

        .delete-product {
            background-color: #ff6b6b;
        }
        .display-list {
            background-color: #339af0;
            display: block;
            text-align: center;
        }
        .back {
            background-color: #845ef7;
        }
        .wrapper-2 {
            margin-top: 50px;
        }
    </style>

    <div class=\"example-wrapper\">
        {#    <h1>Hello {{ controller_name }}! ✅</h1>#}
        <h1>Qui se cache dans mes placards ? 🔍</h1>

        <p>Si comme moi, vous êtes tête en l'air et que vous oubliez que vous avez déjà 3 flacons de muscade d'avance,
            alors vous êtes sur la bonne page 👍 🍀</p>

        <a href=\"product/add\" class=\"button add-product\">Ajouter un produit</a>
        <a href=\"product/change\" class=\"button change-product\">Modifier un produit</a>
        <a href=\"product/delete\" class=\"button delete-product\">Supprimer un produit</a>
    </div>

    <div class=\"wrapper-2 example-wrapper\"><a href=\"product\" class=\"button display-list\">Afficher la liste des produits</a></div>
{% endblock %}
", "home/index.html.twig", "/var/www/ecv/templates/home/index.html.twig");
    }
}
