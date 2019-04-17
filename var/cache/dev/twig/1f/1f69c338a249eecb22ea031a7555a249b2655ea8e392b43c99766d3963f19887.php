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

/* dashboard/search.html.twig */
class __TwigTemplate_0ac7ba477bf8293181604ca3f0ea46f38ea79c5c57e28a6edce1593438aa21e8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/search.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-search\"></i>&nbsp;Résultat de la recherche</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Recherche</li>
      </ul>
    </div>

    <div class=\"tile pb-5\">
      <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProject");
        echo "\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un projet</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Intitulé</th>
            <th>Description</th>
            <th>Type</th>
            <th>Est livré</th>
            <th>Date de création</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 32
        if ( !twig_test_empty((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
                // line 34
                echo "              <tr>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "title", []), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "description", []), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "type", []), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["search"], "isDelivered", []) == 1)) {
                    echo "Oui";
                } else {
                    echo "Non";
                }
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "createdAt", []), "none", "none", null, null, "d MMMM Y"), "html", null, true);
                echo "</td>
                <td>
                  <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editProject", ["id" => twig_get_attribute($this->env, $this->source, $context["search"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeProject", ["id" => twig_get_attribute($this->env, $this->source, $context["search"], "id", [])]), "html", null, true);
                echo "\" onclick=\"confirm('Confirmer la suppression de ce projet ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          ";
        } else {
            // line 51
            echo "            <p>Aucun projet trouvé.</p>
          ";
        }
        // line 53
        echo "

          </tbody>
        </table>
      </div>
      <hr/>
      ";
        // line 64
        echo "
    </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 64,  158 => 53,  154 => 51,  151 => 50,  139 => 44,  133 => 41,  128 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  105 => 34,  100 => 33,  98 => 32,  81 => 18,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-search\"></i>&nbsp;Résultat de la recherche</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Recherche</li>
      </ul>
    </div>

    <div class=\"tile pb-5\">
      <a href=\"{{ path('addProject') }}\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un projet</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Intitulé</th>
            <th>Description</th>
            <th>Type</th>
            <th>Est livré</th>
            <th>Date de création</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          {% if searchResult is not empty %}
            {% for search in searchResult %}
              <tr>
                <td>{{ search.title }}</td>
                <td>{{ search.description }}</td>
                <td>{{ search.type }}</td>
                <td>{% if search.isDelivered == 1 %}Oui{% else %}Non{% endif %}</td>
                <td>{{ search.createdAt|localizeddate('none', 'none', null, null, 'd MMMM Y') }}</td>
                <td>
                  <a href=\"{{ path('editProject', {'id': search.id }) }}\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"{{ path('removeProject', {'id': search.id }) }}\" onclick=\"confirm('Confirmer la suppression de ce projet ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                </td>
              </tr>
            {% endfor %}
          {% else %}
            <p>Aucun projet trouvé.</p>
          {% endif %}


          </tbody>
        </table>
      </div>
      <hr/>
      {#<nav class=\"float-right\">
        <div class=\"navigation\">
          {{ knp_pagination_render(pagination) }}
        </div>
      </nav>#}

    </div>
  </main>
{% endblock %}", "dashboard/search.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/dashboard/search.html.twig");
    }
}
