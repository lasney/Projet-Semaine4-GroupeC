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

/* article/index.html.twig */
class __TwigTemplate_f3b41514162dd852ca7a0122559a0e1dca0a1c2f675152caa17c59e3d602dc4e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Article index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<style>
\t.table{
\t\tborder: solid;
\t}
\t</style>
\t
\t<div class=\"container\">
    <div class=\"row\"><h1>Article index</h1></div>
    <div class=\"row\">
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-8\">
\t\t
\t\t<table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Content</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
\t\t
\t\t<input id=\"searchinput\" type=\"text\" placeholder=\"Rechercher par ID\"/><button id=\"btn-search\" class=\"btn btn-warning\">Search</button>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "Category", [], "any", false, true, false, 37), "name", [], "any", true, true, false, 37)) {
                // line 38
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "Category", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    ";
            }
            // line 40
            echo "                </td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
\t\t</table>
\t\t
\t\t</div>
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-1\"></div>
    </div>
    <div class=\"row\">
    <a class=\"btn btn-success\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">Create new</a></div>
\t</div>
\t
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t
\tvar btnsearch = document.getElementById(\"btn-search\");
\tbtnsearch.onclick = function() { 
\t\t
\t\tvar searchinput = document.getElementById(\"searchinput\").value;
\t\t
\t\twindow.location.href = \"/article/\" + searchinput;

\t};

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 68,  180 => 67,  167 => 60,  157 => 52,  148 => 48,  139 => 44,  135 => 43,  130 => 41,  127 => 40,  121 => 38,  119 => 37,  114 => 35,  110 => 34,  107 => 33,  102 => 32,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article index{% endblock %}

{% block body %}
\t<style>
\t.table{
\t\tborder: solid;
\t}
\t</style>
\t
\t<div class=\"container\">
    <div class=\"row\"><h1>Article index</h1></div>
    <div class=\"row\">
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-8\">
\t\t
\t\t<table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Content</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
\t\t
\t\t<input id=\"searchinput\" type=\"text\" placeholder=\"Rechercher par ID\"/><button id=\"btn-search\" class=\"btn btn-warning\">Search</button>
        {% for article in articles %}
            <tr>
                <td>{{ article.id }}</td>
                <td>{{ article.title }}</td>
                <td>
                    {% if article.Category.name is defined %}
                        {{ article.Category.name }}
                    {% endif %}
                </td>
                <td>{{ article.content }}</td>
                <td>
                    <a href=\"{{ path('article_show', {'id': article.id}) }}\">show</a>
                    <a href=\"{{ path('article_edit', {'id': article.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
\t\t</table>
\t\t
\t\t</div>
        <div class=\"col-sm-1\"></div>
        <div class=\"col-sm-1\"></div>
    </div>
    <div class=\"row\">
    <a class=\"btn btn-success\" href=\"{{ path('article_new') }}\">Create new</a></div>
\t</div>
\t
    

{% endblock %}

{% block javascripts %}
\t
\tvar btnsearch = document.getElementById(\"btn-search\");
\tbtnsearch.onclick = function() { 
\t\t
\t\tvar searchinput = document.getElementById(\"searchinput\").value;
\t\t
\t\twindow.location.href = \"/article/\" + searchinput;

\t};

{% endblock %}
", "article/index.html.twig", "D:\\wamp\\www\\ue235\\templates\\article\\index.html.twig");
    }
}
