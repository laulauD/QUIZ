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

/* quiz/home.html.twig */
class __TwigTemplate_16cdb0108d7f44ff8ca71a6d2cd38f58cfad7ae5399501bc647de49067573bcd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/home.html.twig", 1);
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
<h1 class=\"display-5 text-center text-info p-3 mb-4 bg-secondary bg-gradient\"> Bienvenue sur My Quiz !</h1>

    <div class=\"text-center\">
        <a class=\"btn btn-outline-info text-secondary mb-2\" type=\"button\" href=\"/inscription\">Inscription</a>
        <figcaption class=\"figure-caption text-center mb-4\">Inscris-toi pour faire partie du classement et avoir tes scores.</figcaption>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://image.freepik.com/vecteurs-libre/quiz-dans-style-bande-dessinee-pop-art_175838-505.jpg\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Let's quiz !</h5>
                        <p class=\"card-text\">Découvrez nos quizs et amusez-vous à battre des records.</p>
                        <a href=\"/quiz\" class=\"btn btn-info\">Jouez</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://i.pinimg.com/originals/2b/48/52/2b48529301dd234d1e58748358836e3c.png\" style=\"height: 14rem;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Les catégories</h5>
                        <p class=\"card-text\">De nombreuses categories pour le plaisir varié de tout le monde.</p>
                        <a href=\"/categories\" class=\"btn btn-info\">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://t3.ftcdn.net/jpg/01/36/33/48/360_F_136334865_Z7B8vR9xg1y0oySVvA8gBftnDU4NaPsz.jpg\" style=\"height: 14rem;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Mon classement</h5>
                        <p class=\"card-text\">Jouez et gagnez des places au classement pour arriver numéro 1 !</p>
                        <a href=\"/classement\" class=\"btn btn-info\">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"display-5 text-center text-info p-3 mb-4 bg-secondary bg-gradient\"> Bienvenue sur My Quiz !</h1>

    <div class=\"text-center\">
        <a class=\"btn btn-outline-info text-secondary mb-2\" type=\"button\" href=\"/inscription\">Inscription</a>
        <figcaption class=\"figure-caption text-center mb-4\">Inscris-toi pour faire partie du classement et avoir tes scores.</figcaption>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://image.freepik.com/vecteurs-libre/quiz-dans-style-bande-dessinee-pop-art_175838-505.jpg\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Let's quiz !</h5>
                        <p class=\"card-text\">Découvrez nos quizs et amusez-vous à battre des records.</p>
                        <a href=\"/quiz\" class=\"btn btn-info\">Jouez</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://i.pinimg.com/originals/2b/48/52/2b48529301dd234d1e58748358836e3c.png\" style=\"height: 14rem;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Les catégories</h5>
                        <p class=\"card-text\">De nombreuses categories pour le plaisir varié de tout le monde.</p>
                        <a href=\"/categories\" class=\"btn btn-info\">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-3\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 19rem;\">
                    <img src=\"https://t3.ftcdn.net/jpg/01/36/33/48/360_F_136334865_Z7B8vR9xg1y0oySVvA8gBftnDU4NaPsz.jpg\" style=\"height: 14rem;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Mon classement</h5>
                        <p class=\"card-text\">Jouez et gagnez des places au classement pour arriver numéro 1 !</p>
                        <a href=\"/classement\" class=\"btn btn-info\">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






{% endblock %}", "quiz/home.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/home.html.twig");
    }
}
