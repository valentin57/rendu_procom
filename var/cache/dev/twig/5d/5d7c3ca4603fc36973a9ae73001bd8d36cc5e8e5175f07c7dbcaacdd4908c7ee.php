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

/* projects/index.html.twig */
class __TwigTemplate_7d919614ed6499bb55bcda8420d1ff708a567653a1e22832175d9546002e8892 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "projects/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des projets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-laptop\"></i>&nbsp;Projets</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Projets</li>
      </ul>
    </div>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["flash_type"] => $context["messages"]) {
            // line 19
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "        <div class=\"alert alert-dismissible alert-";
                echo twig_escape_filter($this->env, $context["flash_type"], "html", null, true);
                echo " my-4\" role=\"alert\">
          <button class=\"close\" type=\"button\" data-dismiss=\"alert\">×</button>";
                // line 21
                echo $context["message"];
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <div class=\"tile pb-5\">
      <a href=\"";
        // line 26
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
        // line 40
        if ( !twig_test_empty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 42
                echo "              <tr>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", []), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", []), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "type", []), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["project"], "isDelivered", []) == 1)) {
                    echo "Oui";
                } else {
                    echo "Non";
                }
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "createdAt", []), "none", "none", null, null, "d MMMM Y"), "html", null, true);
                echo "</td>
                <td>
                  <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editProject", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeProject", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [])]), "html", null, true);
                echo "\" onclick=\"confirm('Confirmer la suppression de ce projet ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                  <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deliverProject", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [])]), "html", null, true);
                echo "\" onclick=\"confirm('Voulez-vous livrer ce projet ?')\" class=\"btn btn-success btn-sm\">
                    <i class=\"fa fa-check mr-0\"></i>
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          ";
        } else {
            // line 62
            echo "            <p>Aucun projet trouvé.</p>
          ";
        }
        // line 64
        echo "

          </tbody>
        </table>
      </div>
      <hr/>
      <nav class=\"float-right\">
        <div class=\"navigation\">
          ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()));
        echo "
        </div>
      </nav>

    </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projects/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 72,  213 => 64,  209 => 62,  206 => 61,  194 => 55,  188 => 52,  182 => 49,  177 => 47,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  154 => 42,  149 => 41,  147 => 40,  130 => 26,  127 => 25,  121 => 24,  112 => 21,  107 => 20,  102 => 19,  98 => 18,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des projets{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-laptop\"></i>&nbsp;Projets</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Projets</li>
      </ul>
    </div>
    {% for flash_type, messages in app.flashes %}
      {% for message in messages %}
        <div class=\"alert alert-dismissible alert-{{ flash_type }} my-4\" role=\"alert\">
          <button class=\"close\" type=\"button\" data-dismiss=\"alert\">×</button>{{ message|raw }}
        </div>
      {% endfor %}
    {% endfor %}
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
          {% if pagination is not empty %}
            {% for project in pagination %}
              <tr>
                <td>{{ project.title }}</td>
                <td>{{ project.description }}</td>
                <td>{{ project.type }}</td>
                <td>{% if project.isDelivered == 1 %}Oui{% else %}Non{% endif %}</td>
                <td>{{ project.createdAt|localizeddate('none', 'none', null, null, 'd MMMM Y') }}</td>
                <td>
                  <a href=\"{{ path('editProject', {'id': project.id }) }}\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"{{ path('removeProject', {'id': project.id }) }}\" onclick=\"confirm('Confirmer la suppression de ce projet ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                  <a href=\"{{ path('deliverProject', {'id': project.id }) }}\" onclick=\"confirm('Voulez-vous livrer ce projet ?')\" class=\"btn btn-success btn-sm\">
                    <i class=\"fa fa-check mr-0\"></i>
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
      <nav class=\"float-right\">
        <div class=\"navigation\">
          {{ knp_pagination_render(pagination) }}
        </div>
      </nav>

    </div>
  </main>
{% endblock %}", "projects/index.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/projects/index.html.twig");
    }
}
