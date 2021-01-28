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

/* security/profile.html.twig */
class __TwigTemplate_e74b3a8a56ec5d7fb3dec8207263563ef719925fce82e3076e7ec34e988838ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"default\">
        <div class=\"default-title\">
            <h2>Mon compte</h2>
        </div>
        <figure class=\"default-img\">
            ";
        // line 8
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "profile_picture", [], "any", false, false, false, 9), "html", null, true);
            echo "\" alt=\"picture-profile\">
            ";
        } else {
            // line 11
            echo "                <img src=\"uploads/profilePictures/profile-picture-default.png\" alt=\"picture-profile\">
            ";
        }
        // line 13
        echo "        </figure>
        <h3 class=\"mb-5 text-uppercase\">
            <span class=\"far fa-address-card\"></span>
            Mon profil :
        </h3>
        <div class=\"container mb-5\">
            <div class=\"mb-5 p-4 rounded bg-blue shadow\">
                <p class=\"h3 p-2 my-2 mx-auto text-info font-weight-bold\">
                    Salutation ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), "html", null, true);
        echo " !
                </p>
                <div class=\"h5 px-2 py-4 mt-3 text-secondary bg-light text-dark rounded\">
                    <div class=\"form-group\">
                        <span class=\"font-weight-bold\">Date de création du compte : </span>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "m/d/Y"), "html", null, true);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <span class=\"font-weight-bold\">mon adresse mail : </span>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"p-3 mt-4 mb-5 mx-auto w-50 border-top border-bottom border-info\">
            <a href=\"/home\" class=\"m-2 p-2 btn btn-primary\">
                <span class=\"fas fa-angle-double-left\"></span>
                Retour à l'accueil
            </a>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  104 => 25,  97 => 21,  87 => 13,  83 => 11,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}
{% block content %}
    <section class=\"default\">
        <div class=\"default-title\">
            <h2>Mon compte</h2>
        </div>
        <figure class=\"default-img\">
            {% if user %}
                <img src=\"{{ user.profile_picture }}\" alt=\"picture-profile\">
            {% else %}
                <img src=\"uploads/profilePictures/profile-picture-default.png\" alt=\"picture-profile\">
            {% endif %}
        </figure>
        <h3 class=\"mb-5 text-uppercase\">
            <span class=\"far fa-address-card\"></span>
            Mon profil :
        </h3>
        <div class=\"container mb-5\">
            <div class=\"mb-5 p-4 rounded bg-blue shadow\">
                <p class=\"h3 p-2 my-2 mx-auto text-info font-weight-bold\">
                    Salutation {{ user.username }} !
                </p>
                <div class=\"h5 px-2 py-4 mt-3 text-secondary bg-light text-dark rounded\">
                    <div class=\"form-group\">
                        <span class=\"font-weight-bold\">Date de création du compte : </span>{{ user.createdAt|date(\"m/d/Y\") }}
                    </div>
                    <div class=\"form-group\">
                        <span class=\"font-weight-bold\">mon adresse mail : </span>{{ user.email }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"p-3 mt-4 mb-5 mx-auto w-50 border-top border-bottom border-info\">
            <a href=\"/home\" class=\"m-2 p-2 btn btn-primary\">
                <span class=\"fas fa-angle-double-left\"></span>
                Retour à l'accueil
            </a>
        </div>
    </section>
{% endblock %}
", "security/profile.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\security\\profile.html.twig");
    }
}
