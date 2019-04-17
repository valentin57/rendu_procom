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

/* layout.html.twig */
class __TwigTemplate_f39dae83deadfad0b21ae68e2d28d72f595116bd59f4ea936701b9f7c99a7d03 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <!-- Navbar -->
  <header class=\"app-header\"><a class=\"app-header__logo\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Procom</a>
    <a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
    <!-- Navbar Right Menu-->
    <ul class=\"app-nav\">
      <li class=\"app-search\">
        <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" type=\"get\">
          <input class=\"app-search__input\" type=\"search\" name=\"search\" placeholder=\"Recherche\">
          <button type=\"submit\" class=\"app-search__button\"><i class=\"fa fa-search\"></i></button>
        </form>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
  <aside class=\"app-sidebar\">
    <div class=\"app-sidebar__user\">
      <img class=\"app-sidebar__user-avatar\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"User Image\">
      <div>
        <p class=\"app-sidebar__user-name\">John Doe</p>
        <p class=\"app-sidebar__user-designation\">Directeur</p>
      </div>
    </div>
    <ul class=\"app-menu\">
      <li>
        <a class=\"app-menu__item ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "home")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
          <i class=\"app-menu__icon fa fa-dashboard\"></i>
          <span class=\"app-menu__label\">Tableau de bord</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item ";
        // line 39
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "projectsList") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "addProject")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "editProject"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projectsList");
        echo "\">
          <i class=\"app-menu__icon fa fa-laptop\"></i>
          <span class=\"app-menu__label\">Projets</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item ";
        // line 45
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "employeesList") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "addEmployee")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "editEmployee")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "viewEmployee"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeesList");
        echo "\">
          <i class=\"app-menu__icon fa fa-users\"></i>
          <span class=\"app-menu__label\">Employés</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item ";
        // line 51
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "jobsList") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "addJob")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "editJob"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jobsList");
        echo "\">
          <i class=\"app-menu__icon fa fa-book\"></i>
          <span class=\"app-menu__label\">Métiers </span>
        </a>
      </li>
    </ul>
  </aside>

  ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "    ";
        // line 63
        echo "
  <footer class=\"main-footer\">
    &copy; 2019 - PROCOM
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 70,  218 => 69,  207 => 60,  198 => 59,  184 => 63,  182 => 62,  180 => 59,  165 => 51,  152 => 45,  139 => 39,  126 => 33,  115 => 25,  101 => 14,  93 => 9,  90 => 8,  81 => 7,  68 => 4,  59 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block body %}
  <!-- Navbar -->
  <header class=\"app-header\"><a class=\"app-header__logo\" href=\"{{ path('home') }}\">Procom</a>
    <a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
    <!-- Navbar Right Menu-->
    <ul class=\"app-nav\">
      <li class=\"app-search\">
        <form action=\"{{ path('search') }}\" type=\"get\">
          <input class=\"app-search__input\" type=\"search\" name=\"search\" placeholder=\"Recherche\">
          <button type=\"submit\" class=\"app-search__button\"><i class=\"fa fa-search\"></i></button>
        </form>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
  <aside class=\"app-sidebar\">
    <div class=\"app-sidebar__user\">
      <img class=\"app-sidebar__user-avatar\" src=\"{{ asset('img/user.jpg') }}\" alt=\"User Image\">
      <div>
        <p class=\"app-sidebar__user-name\">John Doe</p>
        <p class=\"app-sidebar__user-designation\">Directeur</p>
      </div>
    </div>
    <ul class=\"app-menu\">
      <li>
        <a class=\"app-menu__item {% if app.request.get('_route') == \"home\" %}active{% endif %}\" href=\"{{ path('home') }}\">
          <i class=\"app-menu__icon fa fa-dashboard\"></i>
          <span class=\"app-menu__label\">Tableau de bord</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item {% if app.request.get('_route') == \"projectsList\" or app.request.get('_route') == \"addProject\" or app.request.get('_route') == \"editProject\" %}active{% endif %}\" href=\"{{ path('projectsList') }}\">
          <i class=\"app-menu__icon fa fa-laptop\"></i>
          <span class=\"app-menu__label\">Projets</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item {% if app.request.get('_route') == \"employeesList\" or app.request.get('_route') == \"addEmployee\" or app.request.get('_route') == \"editEmployee\" or app.request.get('_route') == \"viewEmployee\" %}active{% endif %}\" href=\"{{ path('employeesList') }}\">
          <i class=\"app-menu__icon fa fa-users\"></i>
          <span class=\"app-menu__label\">Employés</span>
        </a>
      </li>
      <li>
        <a class=\"app-menu__item {% if app.request.get('_route') == \"jobsList\" or app.request.get('_route') == \"addJob\" or app.request.get('_route') == \"editJob\"  %}active{% endif %}\" href=\"{{ path('jobsList') }}\">
          <i class=\"app-menu__icon fa fa-book\"></i>
          <span class=\"app-menu__label\">Métiers </span>
        </a>
      </li>
    </ul>
  </aside>

  {% block content %}

  {% endblock %}
    {##}

  <footer class=\"main-footer\">
    &copy; 2019 - PROCOM
  </footer>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}", "layout.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/layout.html.twig");
    }
}
