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

/* jobs/index.html.twig */
class __TwigTemplate_3a1fabf53af7732c337043514c68156c2036936723074658ac553cb446b887c6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "jobs/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/index.html.twig"));

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

        echo "Liste des métiers";
        
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
        <h1><i class=\"fa fa-book\"></i>&nbsp;Métiers</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Métiers</li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addJob");
        echo "\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un métier</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Intitulé</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
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
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 42
                echo "              <tr>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "name", []), "html", null, true);
                echo "</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editJob", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeJob", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [])]), "html", null, true);
                echo "\" onclick=\"confirm('Confirmer la suppression de ce métier ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ";
        } else {
            // line 59
            echo "            <p>Aucun métier trouvé.</p>
          ";
        }
        // line 61
        echo "

          </tbody>
        </table>
      </div>
      <hr/>
      <nav class=\"float-right\">
        <div class=\"navigation\">
          ";
        // line 69
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 69, $this->source); })()));
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
        return "jobs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  191 => 61,  187 => 59,  184 => 58,  172 => 52,  166 => 49,  157 => 43,  154 => 42,  149 => 41,  147 => 40,  130 => 26,  127 => 25,  121 => 24,  112 => 21,  107 => 20,  102 => 19,  98 => 18,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des métiers{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-book\"></i>&nbsp;Métiers</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Métiers</li>
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
      <a href=\"{{ path('addJob') }}\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un métier</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Intitulé</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          {% if pagination is not empty %}
            {% for job in pagination %}
              <tr>
                <td>{{ job.name }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href=\"{{ path('editJob', {'id': job.id }) }}\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-pencil mr-0\"></i>
                  </a>
                  <a href=\"{{ path('removeJob', {'id': job.id }) }}\" onclick=\"confirm('Confirmer la suppression de ce métier ?')\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fa fa-trash-o mr-0\"></i>
                  </a>
                </td>
              </tr>
            {% endfor %}
          {% else %}
            <p>Aucun métier trouvé.</p>
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
{% endblock %}", "jobs/index.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/jobs/index.html.twig");
    }
}
