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
class __TwigTemplate_d717d95345149e731c4548afa2b9503857c429bee179bd052b324c22d71632ad extends Template
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
<div class=\"card text-white bg-primary mb-3 w-100\">
                <div class=\"card-header text-center\">
                    <h3 class=\"text-white\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizInfos"]) || array_key_exists("quizInfos", $context) ? $context["quizInfos"] : (function () { throw new RuntimeError('Variable "quizInfos" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
                </div>
                <form method=\"post\" action=\"\">
                    <div class=\"card-body\">
                        ";
        // line 11
        $context["i"] = 1;
        // line 12
        echo "                        ";
        $context["t"] = 0;
        // line 13
        echo "                        ";
        $context["j"] = 0;
        // line 14
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 15
            echo "                            <div class=\"card border-info mb-3 text-dark\">
                                <div class=\"card-header\">
                                    <span>Question ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</span><br>
                                    <span>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 18, $this->source); })()), (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), "question", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"card-body d-flex flex-column\">
                                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["question"]);
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 22
                echo "                                        <div class=\"d-flex justify-content-between\">
                                            <label for=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "reponse", [], "any", false, false, false, 23), "html", null, true);
                echo "</label>
                                            <input id=\"";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "\" type=\"radio\" name=\"answer";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "reponse", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                                        </div>
                                        ";
                // line 26
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 26, $this->source); })()) + 1);
                // line 27
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                </div>
                            </div>
                            ";
            // line 30
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 30, $this->source); })()) + 1);
            // line 31
            echo "                            ";
            $context["t"] = ((isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 31, $this->source); })()) + 1);
            // line 32
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </div>
                    <div class=\"d-flex justify-content-center mb-3\">
                        <button class=\"btn btn-success\">Submit</button>
                    </div>
                </form>
            </div>
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
        return array (  152 => 33,  146 => 32,  143 => 31,  141 => 30,  137 => 28,  131 => 27,  129 => 26,  120 => 24,  114 => 23,  111 => 22,  107 => 21,  101 => 18,  97 => 17,  93 => 15,  88 => 14,  85 => 13,  82 => 12,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"card text-white bg-primary mb-3 w-100\">
                <div class=\"card-header text-center\">
                    <h3 class=\"text-white\">{{ quizInfos.name }}</h3>
                </div>
                <form method=\"post\" action=\"\">
                    <div class=\"card-body\">
                        {% set i = 1 %}
                        {% set t = 0 %}
                        {% set j = 0 %}
                        {% for question in questions %}
                            <div class=\"card border-info mb-3 text-dark\">
                                <div class=\"card-header\">
                                    <span>Question {{ i }}</span><br>
                                    <span>{{ test[t].question }}</span>
                                </div>
                                <div class=\"card-body d-flex flex-column\">
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
                        <button class=\"btn btn-success\">Submit</button>
                    </div>
                </form>
            </div>
        </div>

  {% endblock %}", "quiz/myquiz.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/myquiz.html.twig");
    }
}
