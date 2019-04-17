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

/* dashboard/index.html.twig */
class __TwigTemplate_17d6517d9aee19368d6fd9629fb7887049e2d51c86b67d2d229e54b808b63061 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/index.html.twig", 1);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "  <!-- Specific page JS -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js\" integrity=\"sha256-oSgtFCCmHWRPQ/JmR4OoZ3Xke1Pw4v50uh6pLcu+fIc=\" crossorigin=\"anonymous\"></script>
  <script>
    var ratioData = [";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["ratioCapexOpex"]) || array_key_exists("ratioCapexOpex", $context) ? $context["ratioCapexOpex"] : (function () { throw new RuntimeError('Variable "ratioCapexOpex" does not exist.', 7, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ((isset($context["ratioCapexOpex"]) || array_key_exists("ratioCapexOpex", $context) ? $context["ratioCapexOpex"] : (function () { throw new RuntimeError('Variable "ratioCapexOpex" does not exist.', 7, $this->source); })()) - 100), "html", null, true);
        echo "];
    var deliveredData = [";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["totalProjectsDelivered"]) || array_key_exists("totalProjectsDelivered", $context) ? $context["totalProjectsDelivered"] : (function () { throw new RuntimeError('Variable "totalProjectsDelivered" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ((isset($context["totalProjectsDelivered"]) || array_key_exists("totalProjectsDelivered", $context) ? $context["totalProjectsDelivered"] : (function () { throw new RuntimeError('Variable "totalProjectsDelivered" does not exist.', 8, $this->source); })()) - 100), "html", null, true);
        echo "];
  </script>
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "  <main class=\"app-content\">
    <div class=\"row\">
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"widget-small info coloured-icon\">
              <i class=\"icon fa fa-spinner fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Projets en cours</p>
                <p><strong>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["projectsNotDelivered"]) || array_key_exists("projectsNotDelivered", $context) ? $context["projectsNotDelivered"] : (function () { throw new RuntimeError('Variable "projectsNotDelivered" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small warning coloured-icon\">
              <i class=\"icon fa fa-check-square-o fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Projets livrés</p>
                <p><strong>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["projectsDelivered"]) || array_key_exists("projectsDelivered", $context) ? $context["projectsDelivered"] : (function () { throw new RuntimeError('Variable "projectsDelivered" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small primary coloured-icon\">
              <i class=\"icon fa fa-users fa-3x\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Employés</p>
                <p><strong>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small danger coloured-icon\">
              <i class=\"icon fa fa-calendar-check-o fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Jours de production</p>
                <p><strong>";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumProjectTime"]) || array_key_exists("sumProjectTime", $context) ? $context["sumProjectTime"] : (function () { throw new RuntimeError('Variable "sumProjectTime" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sumTime"]) {
            echo twig_escape_filter($this->env, twig_join_filter($context["sumTime"]), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sumTime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"card text-uppercase\">
              <div class=\"card-header text-center\">Rentabilité</div>
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-sm-6 col-xs-6 text-muted\">
                    <p><i class=\"fa fa-database mr-2 text-primary\"></i> ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["ratioCapexOpex"]) || array_key_exists("ratioCapexOpex", $context) ? $context["ratioCapexOpex"] : (function () { throw new RuntimeError('Variable "ratioCapexOpex" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "% CAPEX</p>
                  </div>
                </div>
                <div class=\"embed-responsive embed-responsive-16by9\">
                  <canvas id=\"ratio-chart\" class=\"embed-responsive-item\"></canvas>
                </div>



              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"card text-uppercase\">
              <div class=\"card-header text-center\">Taux de livraison</div>
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-sm-6 col-xs-6 text-muted\">
                    <p><i class=\"fa fa fa-check-square-o mr-2 text-primary\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["totalProjectsDelivered"]) || array_key_exists("totalProjectsDelivered", $context) ? $context["totalProjectsDelivered"] : (function () { throw new RuntimeError('Variable "totalProjectsDelivered" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "% Livrés</p>
                  </div>
                </div>
                <div class=\"embed-responsive embed-responsive-16by9\">
                  <canvas id=\"delivered-chart\" class=\"embed-responsive-item\"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"card\">
              <div class=\"card-header text-center text-uppercase\">Top employé</div>
              <div class=\"card-body\">
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topEmployee"]) || array_key_exists("topEmployee", $context) ? $context["topEmployee"] : (function () { throw new RuntimeError('Variable "topEmployee" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["topEmploy"]) {
            // line 94
            echo "                <div class=\"text-center\">
                  <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
            echo "\" class=\"rounded-circle\" width=\"58\">
                  <p class=\"mt-2\">
                    <strong>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topEmploy"], "employee", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topEmploy"], "employee", []), "lastName", []), "html", null, true);
            echo "</strong>
                  </p>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <p class=\"small mt\">EMPLOYE DEPUIS</p>
                    <p>";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topEmploy"], "employee", []), "hiringDate", []), "Y"), "html", null, true);
            echo "</p>
                  </div>
                  <div class=\"col-md-6\">
                    <p class=\"small mt\">TOTAL DEPENSE</p>
                    <p>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topEmploy"], "cost", []), "html", null, true);
            echo " €</p>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topEmploy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class=\"tile table-responsive\">
          <table class=\"table table-hover table-striped table-sm\">
            <thead>
            <tr>
              <th>Projet</th>
              <th>Type</th>
              <th>Date</th>
              <th>Coût</th>
              <th>Est livré</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 128
        if ( !twig_test_empty((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 128, $this->source); })()))) {
            // line 129
            echo "
                ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 130, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 131
                echo "                <tr>
                  <th>
                    <a href=\"";
                // line 133
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projectsList");
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [])), "html", null, true);
                echo "</a>
                  </th>
                  <th>";
                // line 135
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "type", [])), "html", null, true);
                echo "</th>
                  <th>";
                // line 136
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "createdAt", []), "none", "none", null, null, "d/MM/Y"), "html", null, true);
                echo "</th>
                  <th></th>
                  <th>
                    ";
                // line 139
                if ((twig_get_attribute($this->env, $this->source, $context["project"], "isDelivered", []) == 1)) {
                    echo "<span class=\"badge badge-success\">OUI</span>";
                } else {
                    echo "<span class=\"badge badge-danger\">NON";
                }
                echo "</span>
                  </th>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "
            ";
        } else {
            // line 145
            echo "              <tr>
                Aucun projet trouvé.
              </tr>
            ";
        }
        // line 149
        echo "            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-md-3\">
        <div class=\"tile\">
          <h3 class=\"tile-title text-center\">Temps de production</h3>
          <ul class=\"list-group\">
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prodTimes"]) || array_key_exists("prodTimes", $context) ? $context["prodTimes"] : (function () { throw new RuntimeError('Variable "prodTimes" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prodTime"]) {
            // line 158
            echo "            <li class=\"list-group-item\">
              <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewEmployee", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prodTime"], "employee", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prodTime"], "employee", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prodTime"], "employee", []), "lastName", []), "html", null, true);
            echo "</a> a travaillé sur <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projectsList");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prodTime"], "project", []), "title", []), "html", null, true);
            echo "</a>
              <div class=\"text-muted font-italic text-right\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodTime"], "time", []), "html", null, true);
            echo " jours</div>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodTime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "          </ul>
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
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 163,  353 => 160,  341 => 159,  338 => 158,  334 => 157,  324 => 149,  318 => 145,  314 => 143,  300 => 139,  294 => 136,  290 => 135,  283 => 133,  279 => 131,  275 => 130,  272 => 129,  270 => 128,  251 => 111,  241 => 107,  234 => 103,  223 => 97,  218 => 95,  215 => 94,  211 => 93,  195 => 80,  174 => 62,  152 => 50,  140 => 41,  128 => 32,  116 => 23,  105 => 14,  96 => 13,  84 => 10,  77 => 8,  71 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block javascripts %}
  <!-- Specific page JS -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js\" integrity=\"sha256-oSgtFCCmHWRPQ/JmR4OoZ3Xke1Pw4v50uh6pLcu+fIc=\" crossorigin=\"anonymous\"></script>
  <script>
    var ratioData = [{{ ratioCapexOpex }}, {{ ratioCapexOpex-100 }}];
    var deliveredData = [{{ totalProjectsDelivered }}, {{ totalProjectsDelivered-100 }}];
  </script>
  <script src=\"{{ asset('js/dashboard.js') }}\"></script>
{% endblock %}

{% block content %}
  <main class=\"app-content\">
    <div class=\"row\">
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"widget-small info coloured-icon\">
              <i class=\"icon fa fa-spinner fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Projets en cours</p>
                <p><strong>{{ projectsNotDelivered }}</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small warning coloured-icon\">
              <i class=\"icon fa fa-check-square-o fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Projets livrés</p>
                <p><strong>{{ projectsDelivered }}</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small primary coloured-icon\">
              <i class=\"icon fa fa-users fa-3x\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Employés</p>
                <p><strong>{{ employees }}</strong></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"widget-small danger coloured-icon\">
              <i class=\"icon fa fa-calendar-check-o fa-3x\" aria-hidden=\"true\"></i>
              <div class=\"info\">
                <p class=\"text-muted text-sm text-uppercase\">Jours de production</p>
                <p><strong>{% for sumTime in sumProjectTime %}{{ sumTime|join }}{% endfor %}</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"card text-uppercase\">
              <div class=\"card-header text-center\">Rentabilité</div>
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-sm-6 col-xs-6 text-muted\">
                    <p><i class=\"fa fa-database mr-2 text-primary\"></i> {{ ratioCapexOpex }}% CAPEX</p>
                  </div>
                </div>
                <div class=\"embed-responsive embed-responsive-16by9\">
                  <canvas id=\"ratio-chart\" class=\"embed-responsive-item\"></canvas>
                </div>



              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"card text-uppercase\">
              <div class=\"card-header text-center\">Taux de livraison</div>
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-sm-6 col-xs-6 text-muted\">
                    <p><i class=\"fa fa fa-check-square-o mr-2 text-primary\"></i> {{ totalProjectsDelivered }}% Livrés</p>
                  </div>
                </div>
                <div class=\"embed-responsive embed-responsive-16by9\">
                  <canvas id=\"delivered-chart\" class=\"embed-responsive-item\"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"card\">
              <div class=\"card-header text-center text-uppercase\">Top employé</div>
              <div class=\"card-body\">
                {% for topEmploy in topEmployee %}
                <div class=\"text-center\">
                  <img src=\"{{ asset('img/ui-zac.jpg') }}\" class=\"rounded-circle\" width=\"58\">
                  <p class=\"mt-2\">
                    <strong>{{ topEmploy.employee.firstName }} {{ topEmploy.employee.lastName }}</strong>
                  </p>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <p class=\"small mt\">EMPLOYE DEPUIS</p>
                    <p>{{ topEmploy.employee.hiringDate|date('Y') }}</p>
                  </div>
                  <div class=\"col-md-6\">
                    <p class=\"small mt\">TOTAL DEPENSE</p>
                    <p>{{ topEmploy.cost }} €</p>
                  </div>
                </div>
                {% endfor %}
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class=\"tile table-responsive\">
          <table class=\"table table-hover table-striped table-sm\">
            <thead>
            <tr>
              <th>Projet</th>
              <th>Type</th>
              <th>Date</th>
              <th>Coût</th>
              <th>Est livré</th>
            </tr>
            </thead>
            <tbody>
            {% if projects is not empty %}

                {% for project in projects %}
                <tr>
                  <th>
                    <a href=\"{{ path('projectsList') }}\">{{ project.title|capitalize }}</a>
                  </th>
                  <th>{{ project.type|upper }}</th>
                  <th>{{ project.createdAt|localizeddate('none', 'none', null, null, 'd/MM/Y') }}</th>
                  <th></th>
                  <th>
                    {% if project.isDelivered == 1 %}<span class=\"badge badge-success\">OUI</span>{% else %}<span class=\"badge badge-danger\">NON{% endif %}</span>
                  </th>
                </tr>
              {% endfor %}

            {% else %}
              <tr>
                Aucun projet trouvé.
              </tr>
            {% endif %}
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-md-3\">
        <div class=\"tile\">
          <h3 class=\"tile-title text-center\">Temps de production</h3>
          <ul class=\"list-group\">
            {% for prodTime in prodTimes %}
            <li class=\"list-group-item\">
              <a href=\"{{ path('viewEmployee', {'id':prodTime.employee.id}) }}\">{{ prodTime.employee.firstName }} {{ prodTime.employee.lastName }}</a> a travaillé sur <a href=\"{{ path('projectsList') }}\">{{ prodTime.project.title }}</a>
              <div class=\"text-muted font-italic text-right\">{{ prodTime.time }} jours</div>
            </li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </main>
{% endblock %}
", "dashboard/index.html.twig", "/Applications/MAMP/htdocs/PROCOM/templates/dashboard/index.html.twig");
    }
}
