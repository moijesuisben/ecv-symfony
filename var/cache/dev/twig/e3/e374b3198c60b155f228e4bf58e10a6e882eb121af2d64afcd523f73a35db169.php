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

/* display_product/index.html.twig */
class __TwigTemplate_818636151ad2b277b442ce522804024d63b9e67bf3571a5445f00c32c549694f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "display_product/index.html.twig", 1);
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

        echo "Hello DisplayProductController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .wrapper-back {
        display: flex;
        justify-content: center;
    }
    .back {
        background-color: #845ef7;
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
    th {
        padding: 0 25px;
    }
    tbody > tr > * {
        font-weight: 300;
        padding: 10px;
    }
</style>
    <div class=\"wrapper-back example-wrapper\"><a href=\"/home\" class=\"button back\">Retour</a></div>

<div class=\"example-wrapper\">
    <h1>Liste de produits</h1>
";
        // line 43
        echo "
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Famille</th>
            <th>Type</th>
            <th>Date d'expiration</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 57
            echo "            <tr>
                <th>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</th>
                <th>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "family", [], "any", false, false, false, 59), "html", null, true);
            echo "</th>
                <th>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "type", [], "any", false, false, false, 60), "html", null, true);
            echo "</th>
                <th>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "expireAt", [], "any", false, false, false, 61), "m/d/Y"), "html", null, true);
            echo "</th>
                <th><button><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_product", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Modifier</a></button></th>
";
            // line 64
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "display_product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  168 => 64,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  148 => 58,  145 => 57,  141 => 56,  126 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DisplayProductController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .wrapper-back {
        display: flex;
        justify-content: center;
    }
    .back {
        background-color: #845ef7;
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
    th {
        padding: 0 25px;
    }
    tbody > tr > * {
        font-weight: 300;
        padding: 10px;
    }
</style>
    <div class=\"wrapper-back example-wrapper\"><a href=\"/home\" class=\"button back\">Retour</a></div>

<div class=\"example-wrapper\">
    <h1>Liste de produits</h1>
{#    {{ dump(articles) }}#}

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Famille</th>
            <th>Type</th>
            <th>Date d'expiration</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for Product in articles %}
            <tr>
                <th>{{ Product.name }}</th>
                <th>{{ Product.family }}</th>
                <th>{{ Product.type }}</th>
                <th>{{ Product.expireAt|date(\"m/d/Y\") }}</th>
                <th><button><a href=\"{{ path('change_product', {id: Product.id}) }}\">Modifier</a></button></th>
{#                <th>{{ Product.Date_open|date(\"m/d/Y\") }}</th>#}
            </tr>
        {% endfor %}
        </tbody>
    </table>


</div>
{% endblock %}
", "display_product/index.html.twig", "/var/www/ecv/templates/display_product/index.html.twig");
    }
}
