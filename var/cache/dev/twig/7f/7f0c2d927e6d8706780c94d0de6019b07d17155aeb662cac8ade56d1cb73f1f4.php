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

/* employees/view.html.twig */
class __TwigTemplate_20368bdb1bda57f3d3ba159d82d436cc319a7fc8c36d0cd111c420b7a6d43204 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "employees/view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/view.html.twig"));

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

        echo "Détails de l'employé ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 3, $this->source); })()), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 3, $this->source); })()), "lastName", []), "html", null, true);
        
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
        <h1><i class=\"fa fa-users\"></i>&nbsp;Suivi de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 9, $this->source); })()), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 9, $this->source); })()), "lastName", []), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 9, $this->source); })()), "isArchived", []) == true)) {
            echo "<i>(Employé archivé)</i>";
        }
        echo "</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeesList");
        echo "\">Employés</a>
        </li>
        <li class=\"breadcrumb-item\">Suivi de ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 18, $this->source); })()), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 18, $this->source); })()), "lastName", []), "html", null, true);
        echo "</li>
      </ul>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"tile\">
          <table class=\"table table-striped table-bordered table-sm\">
            <tbody>
            <tr>
              <th>Prénom</th>
              <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 28, $this->source); })()), "firstName", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              <th>Nom</th>
              <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 32, $this->source); })()), "lastName", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 36, $this->source); })()), "email", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              <th>Métier</th>
              <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 40, $this->source); })()), "job", []), "name", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              <th>Coût journalier</th>
              <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 44, $this->source); })()), "dailyCost", []), "html", null, true);
        echo " €</td>
            </tr>
            <tr>
              <th>Date d'embauche</th>
              <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 48, $this->source); })()), "hiringDate", []), "none", "none", null, null, "d MMMM Y"), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
          </table>
          <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editEmployee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 52, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i>Modifier</a>
          <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archiveEmployee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 53, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i>Archiver</a>
        </div>
        ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 55, $this->source); })()), "isArchived", []) == false)) {
            // line 56
            echo "        <div class=\"tile\">
          <h3 class=\"title-title mb-4\">Ajouter un temps</h3>
          <div class=\"form-horizontal\">

            ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start');
            echo "
            <div class=\"form-group row\">
              ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "project", []), 'errors');
            echo "
              <label for=\"select-projects\" class=\"control-label col-md-6\">
                ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "project", []), 'label');
            echo "
              </label>
              <div class=\"col-md-6\">
                ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "project", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "time", []), 'errors');
            echo "
              <label for=\"days-count\" class=\"control-label col-md-6\">
                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "time", []), 'label');
            echo "
              </label>
              <div class=\"col-md-6\">
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "time", []), 'widget', ["attr" => ["class" => "form-control", "min" => 0]]);
            echo "
              </div>
            </div>
            <div class=\"row\">
              <div class=\"offset-md-6 col-md-8\">
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i>Ajouter</button>
              </div>
            </div>

            ";
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
            echo "

          </div>
        </div>
        ";
        }
        // line 91
        echo "      </div>
      <div class=\"col-md-8\">
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["flash_type"] => $context["messages"]) {
            // line 94
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 95
                echo "            <div class=\"alert alert-dismissible alert-";
                echo twig_escape_filter($this->env, $context["flash_type"], "html", null, true);
                echo " my-4\" role=\"alert\">
              <button class=\"close\" type=\"button\" data-dismiss=\"alert\">×</button>";
                // line 96
                echo $context["message"];
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        <div class=\"tile pb-5\">
          <h3 class=\"tile-title\">Historique des temps de production</h3>
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover table-sm\">
              <thead>
              <tr>
                <th>Projet</th>
                <th>Temps</th>
                <th>Date de saisie</th>
                <th>Coût total</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              ";
        // line 114
        if ( !twig_test_empty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 114, $this->source); })()))) {
            // line 115
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prodTime"]) {
                // line 116
                echo "                <tr>
                  <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prodTime"], "project", []), "title", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodTime"], "time", []), "html", null, true);
                echo " jours</td>
                  <td>";
                // line 119
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodTime"], "createdAt", []), "d-m-Y"), "html", null, true);
                echo "</td>
                  <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodTime"], "cost", []), "html", null, true);
                echo " €</td>
                  <td>
                    <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeProdTime", ["id" => twig_get_attribute($this->env, $this->source, $context["prodTime"], "id", [])]), "html", null, true);
                echo "\" onclick=\"confirm('Confirmer la suppression de ce temps de production ?')\" class=\"btn btn-danger btn-sm\">
                      <i class=\"fa fa-trash-o mr-0\"></i>
                    </a>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodTime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "              ";
        } else {
            // line 129
            echo "                Aucun historique trouvé.
              ";
        }
        // line 131
        echo "              </tbody>
            </table>
          </div>
          <hr/>
          <nav class=\"float-right\">
            <div class=\"navigation\">
              ";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()));
        echo "
            </div>
          </nav>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employees/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 137,  340 => 131,  336 => 129,  333 => 128,  321 => 122,  316 => 120,  312 => 119,  308 => 118,  304 => 117,  301 => 116,  296 => 115,  294 => 114,  278 => 100,  272 => 99,  263 => 96,  258 => 95,  253 => 94,  249 => 93,  245 => 91,  237 => 86,  225 => 77,  219 => 74,  214 => 72,  206 => 67,  200 => 64,  195 => 62,  190 => 60,  184 => 56,  182 => 55,  177 => 53,  173 => 52,  166 => 48,  159 => 44,  152 => 40,  145 => 36,  138 => 32,  131 => 28,  116 => 18,  111 => 16,  105 => 13,  92 => 9,  87 => 6,  78 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Détails de l'employé {{ employee.firstName }} {{ employee.lastName }}{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-users\"></i>&nbsp;Suivi de {{ employee.firstName }} {{ employee.lastName }} {% if employee.isArchived == true %}<i>(Employé archivé)</i>{% endif %}</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('home') }}\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('employeesList') }}\">Employés</a>
        </li>
        <li class=\"breadcrumb-item\">Suivi de {{ employee.firstName }} {{ employee.lastName }}</li>
      </ul>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"tile\">
          <table class=\"table table-striped table-bordered table-sm\">
            <tbody>
            <tr>
              <th>Prénom</th>
              <td>{{ employee.firstName }}</td>
            </tr>
            <tr>
              <th>Nom</th>
              <td>{{ employee.lastName }}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{ employee.email }}</td>
            </tr>
            <tr>
              <th>Métier</th>
              <td>{{ employee.job.name }}</td>
            </tr>
            <tr>
              <th>Coût journalier</th>
              <td>{{ employee.dailyCost }} €</td>
            </tr>
            <tr>
              <th>Date d'embauche</th>
              <td>{{ employee.hiringDate|localizeddate('none', 'none', null, null, 'd MMMM Y') }}</td>
            </tr>
            </tbody>
          </table>
          <a href=\"{{ path('editEmployee', {'id': employee.id }) }}\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i>Modifier</a>
          <a href=\"{{ path('archiveEmployee', {'id': employee.id }) }}\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i>Archiver</a>
        </div>
        {% if employee.isArchived == false %}
        <div class=\"tile\">
          <h3 class=\"title-title mb-4\">Ajouter un temps</h3>
          <div class=\"form-horizontal\">

            {{ form_start(form) }}
            <div class=\"form-group row\">
              {{ form_errors(form.project) }}
              <label for=\"select-projects\" class=\"control-label col-md-6\">
                {{ form_label(form.project) }}
              </label>
              <div class=\"col-md-6\">
                {{ form_widget(form.project, {'attr': {'class': 'form-control'} }) }}
              </div>
            </div>

            <div class=\"form-group row\">
              {{ form_errors(form.time) }}
              <label for=\"days-count\" class=\"control-label col-md-6\">
                {{ form_label(form.time) }}
              </label>
              <div class=\"col-md-6\">
                {{ form_widget(form.time, {'attr': {'class': 'form-control', 'min':0 } }) }}
              </div>
            </div>
            <div class=\"row\">
              <div class=\"offset-md-6 col-md-8\">
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i>Ajouter</button>
              </div>
            </div>

            {{ form_end(form) }}

          </div>
        </div>
        {% endif %}
      </div>
      <div class=\"col-md-8\">
        {% for flash_type, messages in app.flashes %}
          {% for message in messages %}
            <div class=\"alert alert-dismissible alert-{{ flash_type }} my-4\" role=\"alert\">
              <button class=\"close\" type=\"button\" data-dismiss=\"alert\">×</button>{{ message|raw }}
            </div>
          {% endfor %}
        {% endfor %}
        <div class=\"tile pb-5\">
          <h3 class=\"tile-title\">Historique des temps de production</h3>
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover table-sm\">
              <thead>
              <tr>
                <th>Projet</th>
                <th>Temps</th>
                <th>Date de saisie</th>
                <th>Coût total</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              {% if pagination is not empty %}
                {% for prodTime in pagination %}
                <tr>
                  <td>{{ prodTime.project.title }}</td>
                  <td>{{ prodTime.time }} jours</td>
                  <td>{{ prodTime.createdAt|date('d-m-Y') }}</td>
                  <td>{{ prodTime.cost }} €</td>
                  <td>
                    <a href=\"{{ path('removeProdTime', {'id': prodTime.id }) }}\" onclick=\"confirm('Confirmer la suppression de ce temps de production ?')\" class=\"btn btn-danger btn-sm\">
                      <i class=\"fa fa-trash-o mr-0\"></i>
                    </a>
                  </td>
                </tr>
                {% endfor %}
              {% else %}
                Aucun historique trouvé.
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
      </div>
    </div>
  </main>
{% endblock %}", "employees/view.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/employees/view.html.twig");
    }
}
