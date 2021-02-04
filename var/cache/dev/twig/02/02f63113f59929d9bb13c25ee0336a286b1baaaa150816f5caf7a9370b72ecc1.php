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

/* trick/tricks.html.twig */
class __TwigTemplate_5dc9c1337171766c3afa675e5249dd861c0dcd8080cdde7fdf6f6f3fd040abff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/tricks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/tricks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/tricks.html.twig", 1);
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
        echo "    <h1>Tricks</h1>
    <div class=\"tricks-content\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 6
            echo "            ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 6)]);
            // line 7
            echo "            ";
            $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 7)]);
            // line 8
            echo "            ";
            $context["delete_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 8)]);
            // line 9
            echo "            <div class=\"tricks-content-card\">
                <div class=\"tricks-content-card-img\">
                    ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", true, true, false, 11)) {
                // line 12
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", false, false, false, 12));
                $context['_iterated'] = false;
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 13
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                        // line 14
                        echo "                                <figure class=\"tricks-content-card-img-figure\">
                                    <a href=\"";
                        // line 15
                        echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 15, $this->source); })()), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 15))), "html", null, true);
                        echo "\"></a>
                                </figure>
                            ";
                    }
                    // line 18
                    echo "                        ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 19
                    echo "                            <figure class=\"tricks-content-card-img-figure\">
                                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 20, $this->source); })()), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                    echo "\"></a>
                            </figure>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    ";
            }
            // line 24
            echo "                </div>
                <div class=\"tricks-content-card-btn\">
                    <button class=\"btn\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                    </button>
                    ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
                // line 30
                echo "                        <div class=\"tricks-content-card-btn-icon\">
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["delete_url"]) || array_key_exists("delete_url", $context) ? $context["delete_url"] : (function () { throw new RuntimeError('Variable "delete_url" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\" class=\"fas fa-trash-alt\"
                               onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                        </div>
                    ";
            }
            // line 38
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/tricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 41,  184 => 38,  177 => 34,  171 => 31,  168 => 30,  166 => 29,  159 => 27,  154 => 24,  151 => 23,  140 => 20,  137 => 19,  124 => 18,  116 => 15,  113 => 14,  110 => 13,  91 => 12,  89 => 11,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <h1>Tricks</h1>
    <div class=\"tricks-content\">
        {% for trick in tricks %}
            {% set show_url = path('trick_show', {'slug':trick.slug}) %}
            {% set edit_url = path('trick_edit', {'slug':trick.slug}) %}
            {% set delete_url = path('trick_delete', {'slug':trick.slug}) %}
            <div class=\"tricks-content-card\">
                <div class=\"tricks-content-card-img\">
                    {% if trick.pictures is defined %}
                        {% for picture in trick.pictures %}
                            {% if loop.first %}
                                <figure class=\"tricks-content-card-img-figure\">
                                    <a href=\"{{ show_url }}\"><img src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\"></a>
                                </figure>
                            {% endif %}
                        {% else %}
                            <figure class=\"tricks-content-card-img-figure\">
                                <a href=\"{{ show_url }}\"><img src=\"{{ asset('uploads/pictures/default-picture.png') }}\"></a>
                            </figure>
                        {% endfor %}
                    {% endif %}
                </div>
                <div class=\"tricks-content-card-btn\">
                    <button class=\"btn\">
                        <a href=\"{{ show_url }}\">{{ trick.name }}</a>
                    </button>
                    {% if app.user %}
                        <div class=\"tricks-content-card-btn-icon\">
                            <a href=\"{{ edit_url }}\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                            <a href=\"{{ delete_url }}\" class=\"fas fa-trash-alt\"
                               onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "trick/tricks.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\trick\\tricks.html.twig");
    }
}
