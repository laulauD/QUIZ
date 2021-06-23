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

/* base.html.twig */
class __TwigTemplate_44f40a4087a552e8d6df815ff82b80b53d427030fa306d0b978bb3422bd4a819 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body class=\"bg-light\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand text-info\" href=\"/\">MyQuiz</a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/quiz\">Quiz</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/categories\">Catégories</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/classement\">Classement</a>
                </li>
              </ul>
                <form class=\"d-flex\">
                    ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"/inscription\">Inscription</a>
                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"/connexion\">Connexion</a>
                    ";
        } else {
            // line 32
            echo "                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                    ";
        }
        // line 34
        echo "                </form>
            </div>
          </div>
        </nav>

        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        <footer class=\"fixed-bottom bg-white bg-gradient\">
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">Mentions légales</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">Contact</a>
                    </li>
                </ul>
        </footer>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyQuiz";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        // line 9
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 39,  159 => 9,  157 => 8,  147 => 7,  128 => 5,  101 => 40,  99 => 39,  92 => 34,  86 => 32,  81 => 29,  79 => 28,  59 => 10,  57 => 7,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}MyQuiz{% endblock %}</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}
    </head>
    <body class=\"bg-light\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand text-info\" href=\"/\">MyQuiz</a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/quiz\">Quiz</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/categories\">Catégories</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"/classement\">Classement</a>
                </li>
              </ul>
                <form class=\"d-flex\">
                    {% if not app.user %}
                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"/inscription\">Inscription</a>
                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"/connexion\">Connexion</a>
                    {% else %}
                        <a class=\"btn btn-outline-info me-2\" type=\"button\" href=\"{{ path('logout') }}\">Déconnexion</a>
                    {% endif %}
                </form>
            </div>
          </div>
        </nav>

        {% block body %}{% endblock %}

        <footer class=\"fixed-bottom bg-white bg-gradient\">
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">Mentions légales</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\">Contact</a>
                    </li>
                </ul>
        </footer>

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/base.html.twig");
    }
}
