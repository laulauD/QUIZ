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

/* quiz/categories.html.twig */
class __TwigTemplate_27771547f60ebd1801577722a7f1414bb97158c774e7fe9750a38adf765049d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/categories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/categories.html.twig", 1);
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

        echo "Les Catégories !";
        
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
    <h2 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\">Les catégories !</h2>

    <div class=\"container mb-4\">
        <div class=\"row\">
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://i.pinimg.com/originals/9e/d8/61/9ed86194c90b60ad5ce0e14fdb1b97d5.png\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Télévision</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://image.flaticon.com/icons/png/512/27/27482.png\" style=\"height:7rem;width:8rem;display:block;margin:auto;margin-top:11px\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Sigles</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://t3.ftcdn.net/jpg/02/35/57/50/360_F_235575047_QRCd7ALWm5PiJYLK86dHF9a4Ki071vtH.jpg\" style=\"height:12rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Vocabulaire</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4 me-5\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://image.flaticon.com/icons/png/512/86/86535.png\" style=\"height:7.5rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Pour les enfants</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4 ms-5\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://je-cuisine-chez-vous.com/wp-content/uploads/2018/11/icon-cooking.png\" style=\"height:8rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Cuisine</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"data:image/png;base64,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\" style=\"height:8rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Informatique</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://i.pinimg.com/736x/d8/5e/6e/d85e6e144de68b0694f216a8b15ae2ca.jpg\" style=\"height:10rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Culture</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
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
        return "quiz/categories.html.twig";
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

{% block title %}Les Catégories !{% endblock %}

{% block body %}

    <h2 class=\"display-5 text-center text-info p-3 mb-5 bg-secondary bg-gradient\">Les catégories !</h2>

    <div class=\"container mb-4\">
        <div class=\"row\">
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://i.pinimg.com/originals/9e/d8/61/9ed86194c90b60ad5ce0e14fdb1b97d5.png\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Télévision</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://image.flaticon.com/icons/png/512/27/27482.png\" style=\"height:7rem;width:8rem;display:block;margin:auto;margin-top:11px\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Sigles</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://t3.ftcdn.net/jpg/02/35/57/50/360_F_235575047_QRCd7ALWm5PiJYLK86dHF9a4Ki071vtH.jpg\" style=\"height:12rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Vocabulaire</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4 me-5\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://image.flaticon.com/icons/png/512/86/86535.png\" style=\"height:7.5rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Pour les enfants</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4 ms-5\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://je-cuisine-chez-vous.com/wp-content/uploads/2018/11/icon-cooking.png\" style=\"height:8rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Cuisine</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"data:image/png;base64,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\" style=\"height:8rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Informatique</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
            <div class=\"col m-4\">
                <div class=\"card text-center border border-3 border-info\" style=\"width: 12rem;height:15rem\">
                    <img src=\"https://i.pinimg.com/736x/d8/5e/6e/d85e6e144de68b0694f216a8b15ae2ca.jpg\" style=\"height:10rem;width:8rem;display:block;margin:auto;\" class=\"card-img-top\" alt=\"quiz\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Culture</h5>
                        <a href=\"/quiz\" class=\"btn btn-info m-2\">Voir les quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "quiz/categories.html.twig", "/Applications/MAMP/htdocs/trySymfo/trySymfo/templates/quiz/categories.html.twig");
    }
}
