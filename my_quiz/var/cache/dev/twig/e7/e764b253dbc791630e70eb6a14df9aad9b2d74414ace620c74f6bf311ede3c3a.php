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

/* quiz/classement.html.twig */
class __TwigTemplate_34b861b09c6d862ec9a69b2ce7ac097180119030309a83febacf6a329710550b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/classement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/classement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/classement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le classement !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h2 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\">Le classement !</h2>

    <div class=\"container\">

    <table class=\"table text-secondary\">
        <thead class=\"text-info\">
        <tr>
            <th scope=\"col\"></th>
            <th scope=\"col\">Pseudo</th>
            <th scope=\"col\">Meilleur score</th>
            <th scope=\"col\">Niveau</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope=\"row\">1</th>
            <td>Dwight</td>
            <td>10/10</td>
            <td>Imbattable</td>
        </tr>
        <tr>
            <th scope=\"row\">2</th>
            <td>Lyes</td>
            <td>10/10</td>
            <td>Roi du quiz</td>
        </tr>
        <tr>
            <th scope=\"row\">3</th>
            <td>Laulaud</td>
            <td>9/10</td>
            <td>Champion</td>
        </tr>
        <tr>
            <th scope=\"row\">4</th>
            <td>Pam</td>
            <td>9/10</td>
            <td>Champion</td>
        </tr>
        <tr>
            <th scope=\"row\">5</th>
            <td>Kelly02</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">6</th>
            <td>Toto59</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">7</th>
            <td>Malcolm</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">8</th>
            <td>Bart</td>
            <td>7/10</td>
            <td>Chef</td>
        </tr>
        <tr>
            <th scope=\"row\">9</th>
            <td>Jim</td>
            <td>6/10</td>
            <td>Gagnant</td>
        </tr>
        <tr>
            <th scope=\"row\">10</th>
            <td>azerty</td>
            <td>6/10</td>
            <td>Gagnant</td>
        </tr>
        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le classement !{% endblock %}

{% block body %}

    <h2 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\">Le classement !</h2>

    <div class=\"container\">

    <table class=\"table text-secondary\">
        <thead class=\"text-info\">
        <tr>
            <th scope=\"col\"></th>
            <th scope=\"col\">Pseudo</th>
            <th scope=\"col\">Meilleur score</th>
            <th scope=\"col\">Niveau</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope=\"row\">1</th>
            <td>Dwight</td>
            <td>10/10</td>
            <td>Imbattable</td>
        </tr>
        <tr>
            <th scope=\"row\">2</th>
            <td>Lyes</td>
            <td>10/10</td>
            <td>Roi du quiz</td>
        </tr>
        <tr>
            <th scope=\"row\">3</th>
            <td>Laulaud</td>
            <td>9/10</td>
            <td>Champion</td>
        </tr>
        <tr>
            <th scope=\"row\">4</th>
            <td>Pam</td>
            <td>9/10</td>
            <td>Champion</td>
        </tr>
        <tr>
            <th scope=\"row\">5</th>
            <td>Kelly02</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">6</th>
            <td>Toto59</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">7</th>
            <td>Malcolm</td>
            <td>8/10</td>
            <td>Maitre</td>
        </tr>
        <tr>
            <th scope=\"row\">8</th>
            <td>Bart</td>
            <td>7/10</td>
            <td>Chef</td>
        </tr>
        <tr>
            <th scope=\"row\">9</th>
            <td>Jim</td>
            <td>6/10</td>
            <td>Gagnant</td>
        </tr>
        <tr>
            <th scope=\"row\">10</th>
            <td>azerty</td>
            <td>6/10</td>
            <td>Gagnant</td>
        </tr>
        </tbody>
    </table>
    </div>
{% endblock %}
", "quiz/classement.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/classement.html.twig");
    }
}
