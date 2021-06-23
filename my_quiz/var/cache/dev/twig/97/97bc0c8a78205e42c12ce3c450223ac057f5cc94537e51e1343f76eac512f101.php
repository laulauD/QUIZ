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

/* quiz/score.html.twig */
class __TwigTemplate_5af5612aec0edf8364c3b5cf1a5fa45841a3dde59c75025197946529b9c85eae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/score.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/score.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/score.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\"> Résultat :</h1>


        <div class=\"card-body\" style=\"width:60%;margin:auto\">
                <div class=\"card text-center border border-3 border-light mb-2\">
                    <div class=\"card-header border-top border-info fw-light p-2\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scored"]) || array_key_exists("scored", $context) ? $context["scored"] : (function () { throw new RuntimeError('Variable "scored" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 12
            echo "                               <h5 class=\"fs-3 fw-light card-title text-center p-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 12), "html", null, true);
            echo " / 10</h5>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </div>

                    <div class=\"card-body m-4 d-flex fw-light fs-4 flex-column\">
                        <p>Pour le quiz \"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizInfos"]) || array_key_exists("quizInfos", $context) ? $context["quizInfos"] : (function () { throw new RuntimeError('Variable "quizInfos" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo " \".</p>
                    </div>
                </div>
        </div>

        <div class=\"d-flex justify-content-center p-2\">
            <a type=\"button\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\" class=\"btn btn-secondary text-info fw-bolder p-2\">Rejouez !</a>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            <a type=\"button\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classement");
        echo "\" class=\"btn btn-secondary text-info p-2\">Voir le classement</a>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  104 => 23,  95 => 17,  90 => 14,  81 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\"> Résultat :</h1>


        <div class=\"card-body\" style=\"width:60%;margin:auto\">
                <div class=\"card text-center border border-3 border-light mb-2\">
                    <div class=\"card-header border-top border-info fw-light p-2\">
                        {% for score in scored %}
                               <h5 class=\"fs-3 fw-light card-title text-center p-2\">{{ score.score }} / 10</h5>
                        {% endfor %}
                    </div>

                    <div class=\"card-body m-4 d-flex fw-light fs-4 flex-column\">
                        <p>Pour le quiz \"{{ quizInfos.name }} \".</p>
                    </div>
                </div>
        </div>

        <div class=\"d-flex justify-content-center p-2\">
            <a type=\"button\" href=\"{{ path('quiz') }}\" class=\"btn btn-secondary text-info fw-bolder p-2\">Rejouez !</a>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            <a type=\"button\" href=\"{{ path('classement') }}\" class=\"btn btn-secondary text-info p-2\">Voir le classement</a>
        </div>

{% endblock %}", "quiz/score.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/score.html.twig");
    }
}
