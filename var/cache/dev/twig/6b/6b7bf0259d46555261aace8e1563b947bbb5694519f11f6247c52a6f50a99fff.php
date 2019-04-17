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

/* employees/add.html.twig */
class __TwigTemplate_63887dcf5cba097ba68b981e757acd1ca5aebfe819072952d0feb4d8105cdc5a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "employees/add.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/add.html.twig"));

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

        echo "Ajout d'un employé";
        
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
        <h1><i class=\"fa fa-users\"></i>&nbsp;Ajout d'un employé</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">
          <a href=\"#\">Employés</a>
        </li>
        <li class=\"breadcrumb-item\">Ajout d'un employé</li>
      </ul>
    </div>
    <div class=\"tile\">
      <div class=\"form-horizontal\">
        <section>
          <h3>Informations générales</h3>
          <div class=\"row mt-4\">
            <div class=\"col-md-8\">

              ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
              <div class=\"form-group row\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "firstName", []), 'errors');
        echo "
                <label class=\"control-label col-md-3\">
                  ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "lastName", []), 'errors');
        echo "
                <label class=\"control-label col-md-3\">
                  ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "lastName", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", []), 'errors');
        echo "
                <label class=\"control-label col-md-3\">
                  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr/>
        <section>
          <h3>Production</h3>
          <div class=\"row mt-4\">
            <div class=\"col-md-8\">
              <div class=\"form-group row\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "job", []), 'errors');
        echo "
                <label for=\"select-job\" class=\"control-label col-md-3\">
                  ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "job", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "job", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "dailyCost", []), 'errors');
        echo "
                <label class=\"control-label col-md-3\">
                  ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "dailyCost", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "dailyCost", []), 'widget', ["attr" => ["class" => "form-control", "min" => 0]]);
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "hiringDate", []), 'errors');
        echo "
                <label class=\"control-label col-md-3\">
                  ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "hiringDate", []), 'label');
        echo "
                </label>
                <div class=\"col-md-9\">
                  ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "hiringDate", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr/>
        <div class=\"row\">
          <div class=\"col-md-6\">
            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter</button>
          </div>
        </div>

          ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employees/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 103,  224 => 90,  218 => 87,  213 => 85,  206 => 81,  200 => 78,  195 => 76,  188 => 72,  182 => 69,  177 => 67,  162 => 55,  156 => 52,  151 => 50,  143 => 45,  137 => 42,  132 => 40,  124 => 35,  118 => 32,  113 => 30,  108 => 28,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Ajout d'un employé{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"app-title\">
      <div>
        <h1><i class=\"fa fa-users\"></i>&nbsp;Ajout d'un employé</h1>
      </div>
      <ul class=\"app-breadcrumb breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"#\"><i class=\"fa fa-home fa-lg\"></i></a>
        </li>
        <li class=\"breadcrumb-item\">
          <a href=\"#\">Employés</a>
        </li>
        <li class=\"breadcrumb-item\">Ajout d'un employé</li>
      </ul>
    </div>
    <div class=\"tile\">
      <div class=\"form-horizontal\">
        <section>
          <h3>Informations générales</h3>
          <div class=\"row mt-4\">
            <div class=\"col-md-8\">

              {{ form_start(form) }}
              <div class=\"form-group row\">
                {{ form_errors(form.firstName) }}
                <label class=\"control-label col-md-3\">
                  {{ form_label(form.firstName) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.firstName, {'attr': {'class': 'form-control'} }) }}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ form_errors(form.lastName) }}
                <label class=\"control-label col-md-3\">
                  {{ form_label(form.lastName) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.lastName, {'attr': {'class': 'form-control'} }) }}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ form_errors(form.email) }}
                <label class=\"control-label col-md-3\">
                  {{ form_label(form.email) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.email, {'attr': {'class': 'form-control'} }) }}
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr/>
        <section>
          <h3>Production</h3>
          <div class=\"row mt-4\">
            <div class=\"col-md-8\">
              <div class=\"form-group row\">
                {{ form_errors(form.job) }}
                <label for=\"select-job\" class=\"control-label col-md-3\">
                  {{ form_label(form.job) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.job, {'attr': {'class': 'form-control'} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ form_errors(form.dailyCost) }}
                <label class=\"control-label col-md-3\">
                  {{ form_label(form.dailyCost) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.dailyCost, {'attr': {'class': 'form-control', 'min': 0} }) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ form_errors(form.hiringDate) }}
                <label class=\"control-label col-md-3\">
                  {{ form_label(form.hiringDate) }}
                </label>
                <div class=\"col-md-9\">
                  {{ form_widget(form.hiringDate, {'attr': {'class': 'form-control'} }) }}
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr/>
        <div class=\"row\">
          <div class=\"col-md-6\">
            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter</button>
          </div>
        </div>

          {{ form_end(form) }}

        </div>
    </div>
  </main>
{% endblock %}", "employees/add.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/employees/add.html.twig");
    }
}
