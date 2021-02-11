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

/* partial/_head.html.twig */
class __TwigTemplate_814ea8097d4cc3ffa65321913ace0253429ce283d0453c3a01eb28ecc3c0c81a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_head.html.twig"));

        // line 1
        echo "<meta charset=\"UTF-8\">
<!-- Viewport responsive-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Meta description -->
<meta name=\"description\" content=\"Site communautaire Snowtricks\">
<meta name=\"author\" content=\"Eloïse RUIZ-RODRIGUEZ\">
<!-- Open Graph data / Facebook -->
<meta property=\"og:title\" content=\"Snowtricks | Site communautaire Snowtricks\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:url\" content=\"http://loly-webdev.fr/\"/>
<meta property=\"og:image\" content=\"images/logo.png\"/>
<meta property=\"og:description\" content=\"Site communautaire Snowtricks\"/>
<!-- Favicon -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_blanc.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\"/>
<!-- Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap|Roboto|Open+Sans\" rel=\"stylesheet\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<!-- Viewport responsive-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Meta description -->
<meta name=\"description\" content=\"Site communautaire Snowtricks\">
<meta name=\"author\" content=\"Eloïse RUIZ-RODRIGUEZ\">
<!-- Open Graph data / Facebook -->
<meta property=\"og:title\" content=\"Snowtricks | Site communautaire Snowtricks\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:url\" content=\"http://loly-webdev.fr/\"/>
<meta property=\"og:image\" content=\"images/logo.png\"/>
<meta property=\"og:description\" content=\"Site communautaire Snowtricks\"/>
<!-- Favicon -->
<link href=\"{{ asset('images/logo_blanc.png') }}\" rel=\"icon\" type=\"image/png\"/>
<!-- Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap|Roboto|Open+Sans\" rel=\"stylesheet\">
", "partial/_head.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\partial\\_head.html.twig");
    }
}
