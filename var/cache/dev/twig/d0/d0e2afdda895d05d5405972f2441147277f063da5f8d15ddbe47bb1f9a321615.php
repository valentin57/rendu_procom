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

/* employees/index.html.twig */
class __TwigTemplate_f232af9d5cd9a217b3bc7b30f0b9ec651a3456fbd464e42de9b8d967872d85a9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "employees/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/index.html.twig"));

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

        echo "Liste des employés";
        
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
        <h1><i class=\"fa fa-users\"></i>&nbsp;Employés</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Employés</li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addEmployee");
        echo "\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un employé</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Métier</th>
            <th>Coût journalier</th>
            <th>Date d'embauche</th>
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
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 42
                echo "            <tr>
              <td><span ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["employee"], "isArchived", []) == true)) {
                    echo "class=\"isArchived\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "lastName", []), "html", null, true);
                echo "</span></td>
              <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", []), "html", null, true);
                echo "</td>
              <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employee"], "job", []), "name", []), "html", null, true);
                echo "</td>
              <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "dailyCost", []), "html", null, true);
                echo " €</td>
              <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "hiringDate", []), "none", "none", null, null, "MMMM Y")), "html", null, true);
                echo "</td>
              <td>
                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewEmployee", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\">
                  <i class=\"fa fa-eye mr-0\"></i>
                </a>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editEmployee", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
                  <i class=\"fa fa-pencil mr-0\"></i>
                </a>
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archiveEmployee", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                  <i class=\"fa fa-trash-o mr-0\"></i>
                </a>
              </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          ";
        } else {
            // line 62
            echo "            <p>Aucun employé trouvé.</p>
          ";
        }
        // line 64
        echo "          </tbody>
        </table>
      </div>
      <hr/>
      <nav class=\"float-right\">
        <div class=\"navigation\">
          ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 70, $this->source); })()));
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
        return "employees/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 70,  215 => 64,  211 => 62,  208 => 61,  196 => 55,  190 => 52,  184 => 49,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  157 => 43,  154 => 42,  149 => 41,  147 => 40,  130 => 26,  127 => 25,  121 => 24,  112 => 21,  107 => 20,  102 => 19,  98 => 18,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des employés{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-users\"></i>&nbsp;Employés</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">Employés</li>
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
      <a href=\"{{ path('addEmployee') }}\" class=\"btn btn-primary float-right mb-4\"><i class=\"fa fa-plus-circle mr-2\"></i>Ajouter un employé</a>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
          <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Métier</th>
            <th>Coût journalier</th>
            <th>Date d'embauche</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          {% if pagination is not empty %}
            {% for employee in pagination %}
            <tr>
              <td><span {% if employee.isArchived == true %}class=\"isArchived\"{% endif %}>{{ employee.firstName }} {{ employee.lastName }}</span></td>
              <td>{{ employee.email }}</td>
              <td>{{ employee.job.name }}</td>
              <td>{{ employee.dailyCost }} €</td>
              <td>{{ employee.hiringDate|localizeddate('none', 'none', null, null, 'MMMM Y')|capitalize }}</td>
              <td>
                <a href=\"{{ path('viewEmployee', {'id': employee.id }) }}\" class=\"btn btn-primary btn-sm\">
                  <i class=\"fa fa-eye mr-0\"></i>
                </a>
                <a href=\"{{ path('editEmployee', {'id': employee.id }) }}\" class=\"btn btn-info btn-sm\">
                  <i class=\"fa fa-pencil mr-0\"></i>
                </a>
                <a href=\"{{ path('archiveEmployee', {'id': employee.id }) }}\" class=\"btn btn-danger btn-sm\">
                  <i class=\"fa fa-trash-o mr-0\"></i>
                </a>
              </td>
            </tr>
            {% endfor %}
          {% else %}
            <p>Aucun employé trouvé.</p>
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
{% endblock %}", "employees/index.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/employees/index.html.twig");
    }
}
