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

/* partial/pagination.html.twig */
class __TwigTemplate_66bdd728607796a6f5c1b910c51d47798153e207ba369b49a6c3fbd102eef4a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/pagination.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "data", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <nav aria-label=\"pagination\" class=\"pagination\">
        ";
            // line 3
            $context["page"] = twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "currentPage", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["pages"] = twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "pages", [], "any", false, false, false, 4);
            // line 5
            echo "        <ul class=\"pagination-list\">
            <li class=\"pagination-list-item ";
            // line 6
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), 1))) {
                echo "disabled";
            }
            echo "\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7), "page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()) - 1)]), "html", null, true);
            echo "#comment\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow-left.png"), "html", null, true);
            echo "\" class=\"arrow-right\"></a>
            </li>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 9, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "                ";
                $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 10, $this->source); })()), ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10), "page" => $context["i"]]);
                // line 11
                echo "                <li class=\"pagination-list-item ";
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), $context["i"]))) {
                    echo "active";
                }
                echo "\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "#comment\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            <li class=\"pagination-list-item ";
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 15, $this->source); })())))) {
                echo "disabled";
            }
            echo "\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16), "page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()) + 1)]), "html", null, true);
            echo "#comment\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow-right.png"), "html", null, true);
            echo "\" class=\"arrow-left\"></a>
            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  94 => 15,  83 => 12,  76 => 11,  73 => 10,  69 => 9,  62 => 7,  56 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paginator.data is not empty %}
    <nav aria-label=\"pagination\" class=\"pagination\">
        {% set page = paginator.currentPage %}
        {% set pages = paginator.pages %}
        <ul class=\"pagination-list\">
            <li class=\"pagination-list-item {% if page == 1 %}disabled{% endif %}\">
                <a href=\"{{ path(route, {'slug':trick.slug, 'page': page - 1 }) }}#comment\"><img src=\"{{ asset('build/images/arrow-left.png') }}\" class=\"arrow-right\"></a>
            </li>
            {% for i in 1..pages %}
                {% set show_url = path(route, {'slug':trick.slug, 'page': i}) %}
                <li class=\"pagination-list-item {% if page == i %}active{% endif %}\">
                    <a href=\"{{ show_url }}#comment\">{{ i }}</a>
                </li>
            {% endfor %}
            <li class=\"pagination-list-item {% if page == pages %}disabled{% endif %}\">
                <a href=\"{{ path(route, {'slug':trick.slug, 'page': page + 1 }) }}#comment\"><img src=\"{{ asset('build/images/arrow-right.png') }}\" class=\"arrow-left\"></a>
            </li>
        </ul>
    </nav>
{% endif %}
", "partial/pagination.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\partial\\pagination.html.twig");
    }
}
