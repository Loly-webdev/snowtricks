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

/* partial/_nav.html.twig */
class __TwigTemplate_2b9516bfa996768c5701746d40260ebdf309acbe2016696fbb547fdf3c161369 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_nav.html.twig"));

        // line 1
        echo "<nav id=\"navigation\" class=\"p-3 navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"/\">
        <img class=\"d-inline-block align-top\" alt=\"logo du blog Eloïse\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_blanc.png"), "html", null, true);
        echo "\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end text-uppercase\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
            <li id=\"home\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/\">
                    <span class=\"fas fa-home\"></span>
                    Accueil
                </a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            <li id=\"profile\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/profil\">
                    <span class=\"fas fa-user\"></span>
                    Profil
                </a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            <li id=\"tricks\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/tricks\">
                    <span class=\"fas fa-user\"></span>
                    Tricks
                </a>
            </li>
        </ul>
        <div class=\"text-center m-1\">
            <a id=\"register\" href=\"/inscription\" class=\"btn btn-outline-primary\">
                <span class=\"fas fa-file-signature\"></span>
                Inscription
            </a>
        </div>
        <div class=\"text-center m-1\">
            <a id=\"authentication\" href=\"/login\" class=\"btn btn-outline-success\">
                <span class=\"fas fa-sign-in-alt\"></span>
                Connection
            </a>
        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"navigation\" class=\"p-3 navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"/\">
        <img class=\"d-inline-block align-top\" alt=\"logo du blog Eloïse\" src=\"{{ asset('images/logo_blanc.png') }}\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end text-uppercase\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
            <li id=\"home\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/\">
                    <span class=\"fas fa-home\"></span>
                    Accueil
                </a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            <li id=\"profile\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/profil\">
                    <span class=\"fas fa-user\"></span>
                    Profil
                </a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            <li id=\"tricks\" class=\"active nav-item\">
                <a class=\"nav-link\" href=\"/tricks\">
                    <span class=\"fas fa-user\"></span>
                    Tricks
                </a>
            </li>
        </ul>
        <div class=\"text-center m-1\">
            <a id=\"register\" href=\"/inscription\" class=\"btn btn-outline-primary\">
                <span class=\"fas fa-file-signature\"></span>
                Inscription
            </a>
        </div>
        <div class=\"text-center m-1\">
            <a id=\"authentication\" href=\"/login\" class=\"btn btn-outline-success\">
                <span class=\"fas fa-sign-in-alt\"></span>
                Connection
            </a>
        </div>
    </div>
</nav>
", "partial/_nav.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\partial\\_nav.html.twig");
    }
}
