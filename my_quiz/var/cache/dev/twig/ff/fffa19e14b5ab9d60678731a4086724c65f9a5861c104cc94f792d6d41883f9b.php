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

/* quiz/myquiz.html.twig */
class __TwigTemplate_7cfdc0e84266aa378e7cb0cf8c2b0d7e4e78b982b1654ca20346d5c608d32b85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/myquiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/myquiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/myquiz.html.twig", 1);
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
    <div class=\"card text-secondary bg-info bg-gradient mb-3\">
        <div class=\"card-title text-center\">
            <h2 class=\"text-secondary display-6 mt-4\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizInfos"]) || array_key_exists("quizInfos", $context) ? $context["quizInfos"] : (function () { throw new RuntimeError('Variable "quizInfos" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        </div>

            <form method=\"post\" action=\"\">
                <div class=\"card-body\" style=\"width:70%;margin:auto\">
                    ";
        // line 12
        $context["i"] = 1;
        // line 13
        echo "                    ";
        $context["t"] = 0;
        // line 14
        echo "                    ";
        $context["j"] = 0;
        // line 15
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 16
            echo "                        <div class=\"card text-center border border-3 border-light mb-2\">
                            <div class=\"card-header bg-light bg-gradient fw-light p-2\">
                                <span class=\"text-dark\">Question ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " :</span><br>
                                <span class=\"fw-bolder\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 19, $this->source); })()), (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 19, $this->source); })()), [], "array", false, false, false, 19), "question", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"card-body d-flex fw-light flex-column\">
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["question"]);
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 23
                echo "                                    <div class=\"d-flex justify-content-between\">
                                        <label for=\"";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "reponse", [], "any", false, false, false, 24), "html", null, true);
                echo "</label>
                                        <input id=\"";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "\" type=\"radio\" name=\"answer";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "reponse", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
                                    </div>
                                    ";
                // line 27
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 27, $this->source); })()) + 1);
                // line 28
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            </div>
                        </div>
                        ";
            // line 31
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 31, $this->source); })()) + 1);
            // line 32
            echo "                        ";
            $context["t"] = ((isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 32, $this->source); })()) + 1);
            // line 33
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
                <div class=\"d-flex justify-content-center mb-3\">
                    <button class=\"btn btn-light border border-2 border-secondary text-secondary mb-5\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("score", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quizInfos"]) || array_key_exists("quizInfos", $context) ? $context["quizInfos"] : (function () { throw new RuntimeError('Variable "quizInfos" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">J'ai fini ce quiz ☑️</button>
                </div>
            </form>
        </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/myquiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 36,  153 => 34,  147 => 33,  144 => 32,  142 => 31,  138 => 29,  132 => 28,  130 => 27,  121 => 25,  115 => 24,  112 => 23,  108 => 22,  102 => 19,  98 => 18,  94 => 16,  89 => 15,  86 => 14,  83 => 13,  81 => 12,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"card text-secondary bg-info bg-gradient mb-3\">
        <div class=\"card-title text-center\">
            <h2 class=\"text-secondary display-6 mt-4\">{{ quizInfos.name }}</h2>
        </div>

            <form method=\"post\" action=\"\">
                <div class=\"card-body\" style=\"width:70%;margin:auto\">
                    {% set i = 1 %}
                    {% set t = 0 %}
                    {% set j = 0 %}
                    {% for question in questions %}
                        <div class=\"card text-center border border-3 border-light mb-2\">
                            <div class=\"card-header bg-light bg-gradient fw-light p-2\">
                                <span class=\"text-dark\">Question {{ i }} :</span><br>
                                <span class=\"fw-bolder\">{{ test[t].question }}</span>
                            </div>
                            <div class=\"card-body d-flex fw-light flex-column\">
                                {% for answer in question %}
                                    <div class=\"d-flex justify-content-between\">
                                        <label for=\"{{ j }}\">{{ answer.reponse }}</label>
                                        <input id=\"{{ j }}\" type=\"radio\" name=\"answer{{ i }}\" value=\"{{ answer.reponse }}\">
                                    </div>
                                    {% set j = j+1 %}
                                {% endfor %}
                            </div>
                        </div>
                        {% set i = i+1 %}
                        {% set t = t+1 %}
                    {% endfor %}
                </div>
                <div class=\"d-flex justify-content-center mb-3\">
                    <button class=\"btn btn-light border border-2 border-secondary text-secondary mb-5\" href=\"{{ path('score', {'id': quizInfos.id}) }}\">J'ai fini ce quiz ☑️</button>
                </div>
            </form>
        </div>

  {% endblock %}", "quiz/myquiz.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/myquiz.html.twig");
    }
}
