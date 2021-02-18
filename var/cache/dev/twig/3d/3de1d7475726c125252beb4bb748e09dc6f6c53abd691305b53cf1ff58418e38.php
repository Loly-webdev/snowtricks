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

/* email/reset-password.html.twig */
class __TwigTemplate_451f4b56efd824a4558baa1cc521fd25f9d2a14d8598383e1650b28ee242fbdd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/reset-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/reset-password.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
<head>
    <title>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3), "html", null, true);
        echo "</title>
</head>
<body>
<div>
    <p>
        Bonjour ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 8, $this->source); })()), "toName", [], "any", false, false, false, 8), "html", null, true);
        echo ", vous avez oublié votre mot de passe ?.
        <br>Veuillez cliquer sur le lien ci-dessous pour le réinitialiser :
        <br><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 10, $this->source); })())])), "html", null, true);
        echo "\">Réinitialiser mon
            mot de passe.</a>
        <br>Merci et à bientôt sur Snowtricks.
    </p>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/reset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<head>
    <title>{{ email.subject }}</title>
</head>
<body>
<div>
    <p>
        Bonjour {{ email.toName }}, vous avez oublié votre mot de passe ?.
        <br>Veuillez cliquer sur le lien ci-dessous pour le réinitialiser :
        <br><a href=\"{{ absolute_url(path('reset_password', { 'id': user.id , 'token': token})) }}\">Réinitialiser mon
            mot de passe.</a>
        <br>Merci et à bientôt sur Snowtricks.
    </p>
</div>
</body>
</html>
", "email/reset-password.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\email\\reset-password.html.twig");
    }
}
