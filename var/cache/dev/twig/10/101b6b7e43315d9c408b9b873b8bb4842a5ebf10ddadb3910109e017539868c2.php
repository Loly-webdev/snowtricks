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

/* trick/show.html.twig */
class __TwigTemplate_3bf733a4a721a1cdaca30d29e1b88a0e415ac637414a22b086283952e09ccea5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'form_row' => [$this, 'block_form_row'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/show.html.twig", 1);
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
        echo "    <section class=\"trick\">
        ";
        // line 4
        $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)]);
        // line 5
        echo "        ";
        $context["delete_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)]);
        // line 6
        echo "        <div class=\"trick-title\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "                <div class=\"trick-title-icon\">
                    <a class=\"fas fa-pencil-alt\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\"></a>
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["delete_url"]) || array_key_exists("delete_url", $context) ? $context["delete_url"] : (function () { throw new RuntimeError('Variable "delete_url" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" class=\"fas fa-trash-alt\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                </div>
            ";
        }
        // line 14
        echo "        </div>
        <div class=\"trick-content\">

            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["trick"] ?? null), "pictures", [], "any", true, true, false, 17)) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 18, $this->source); })()), "pictures", [], "any", false, false, false, 18));
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
                // line 19
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                        <div class=\"trick-content-img\">
                            <figure class=\"trick-content-img-figure\">
                                <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 22))), "html", null, true);
                    echo "\">
                            </figure>
                        </div>
                    ";
                }
                // line 26
                echo "                ";
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
                // line 27
                echo "                    <div class=\"trick-content-img\">
                        <figure class=\"tricks-content-card-img-figure\">
                            <a><img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                echo "\"></a>
                        </figure>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        // line 34
        echo "
            <div class=\"trick-content-more\">
                <input type=\"checkbox\" hidden class=\"trick-content-more-state\" id=\"read-more\">
                <div class=\"trick-content-more-target\">
                    <div class=\"trick-content-title-img\">
                        <h3>Photos</h3>
                    </div>
                    <div class=\"trick-content-thumbnail\">
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 42, $this->source); })()), "pictures", [], "any", false, false, false, 42));
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
            // line 43
            echo "                            ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                <figure class=\"trick-content-thumbnail-figure\">
                                    <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 45))), "html", null, true);
                echo "\">
                                </figure>
                            ";
            }
            // line 48
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </div>
                    <div class=\"trick-content-title-videos\">
                        <h3>Vidéos</h3>
                    </div>
                    <div class=\"trick-content-videos\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 54, $this->source); })()), "videos", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 55
            echo "                            <iframe src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 55), "html", null, true);
            echo "\" width=\"50%\" frameborder=\"100\" width=\"1920\" height=\"1080\" allowfullscreen></iframe>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>
                </div>
                <label for=\"read-more\" class=\"trick-content-more-trigger_closed btn\">Voir plus</label>
                <label for=\"read-more\" class=\"trick-content-more-trigger_opened btn\">Voir Moins</label>
            </div>
            <div class=\"trick-content-description\">
                <p>";
        // line 63
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), "html", null, true));
        echo "</p>
            </div>
            <div class=\"trick-content-details\">
                <ul class=\"trick-content-details-list\">
                    <li>Date de création :
                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 68, $this->source); })()), "createdAt", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        echo "</li>
                    ";
        // line 69
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 69, $this->source); })()), "updatedAt", [], "any", false, false, false, 69))) {
            // line 70
            echo "                        <li>Date de modification :
                            ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 71, $this->source); })()), "updatedAt", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</li>
                    ";
        }
        // line 73
        echo "                    <li>Catégorie :
                        ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 74, $this->source); })()), "category", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    </section>
    <section class=\"trick-comment\" id=\"comment\">
        <div class=\"trick-comment-title\">
            <h2>Commentaires</h2>
        </div>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 83, $this->source); })()), "data", [], "any", false, false, false, 83));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 84
            echo "            <div class=\"trick-comment-content\">
                <div class=\"trick-comment-content-user\">
                    <img class=\"trick-comment-profile-picture\" src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 86), "profilePicture", [], "any", false, false, false, 86))), "html", null, true);
            echo "\">
                    <h3>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 87), "username", [], "any", false, false, false, 87), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"trick-comment-content-text\">
                    <h4>Le
                        ";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 91), "d/m/Y \\à H:i:s", "Europe/Paris"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 92), "html", null, true);
            echo "</p>
                </div>
                <hr>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "            <div class=\"trick-comment-content\">
                <p>Il n'y a pas encore de commentaire sur cette figure.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "            <div class=\"trick-comment-add\">
                <div class=\"trick-comment-add-user\">
                    <img class=\"trick-comment-profile-picture\" src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "profilePicture", [], "any", false, false, false, 104))), "html", null, true);
            echo "\">
                    <h3>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "username", [], "any", false, false, false, 105), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"trick-comment-add-form\">
                    ";
            // line 108
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
            echo "
                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "content", [], "any", false, false, false, 109), 'row');
            echo "
                    <input type=\"submit\" class=\"btn\" value=\"Valider\">
                    ";
            // line 111
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        ";
        }
        // line 115
        echo "        ";
        $this->loadTemplate("partial/pagination.html.twig", "trick/show.html.twig", 115)->display(twig_array_merge($context, ["route" => "trick_show"]));
        // line 116
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 119
        echo "    <div class=\"trick-comment-add-form-row\">
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'widget');
        echo "
        <div class=\"trick-comment-add-form-row-error\">
            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'errors');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 122,  390 => 120,  387 => 119,  377 => 118,  366 => 116,  363 => 115,  356 => 111,  351 => 109,  347 => 108,  341 => 105,  337 => 104,  333 => 102,  330 => 101,  321 => 97,  311 => 92,  307 => 91,  300 => 87,  296 => 86,  292 => 84,  287 => 83,  275 => 74,  272 => 73,  267 => 71,  264 => 70,  262 => 69,  258 => 68,  250 => 63,  242 => 57,  233 => 55,  229 => 54,  222 => 49,  208 => 48,  202 => 45,  199 => 44,  196 => 43,  179 => 42,  169 => 34,  166 => 33,  156 => 29,  152 => 27,  139 => 26,  132 => 22,  128 => 20,  125 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 11,  89 => 10,  86 => 9,  84 => 8,  80 => 7,  77 => 6,  74 => 5,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <section class=\"trick\">
        {% set edit_url = path('trick_edit', {'slug':trick.slug}) %}
        {% set delete_url = path('trick_delete', {'slug':trick.slug}) %}
        <div class=\"trick-title\">
            <h1>{{ trick.name }}</h1>
            {% if app.user %}
                <div class=\"trick-title-icon\">
                    <a class=\"fas fa-pencil-alt\" href=\"{{ edit_url }}\"></a>
                    <a href=\"{{ delete_url }}\" class=\"fas fa-trash-alt\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                </div>
            {% endif %}
        </div>
        <div class=\"trick-content\">

            {% if trick.pictures is defined %}
                {% for picture in trick.pictures %}
                    {% if loop.first %}
                        <div class=\"trick-content-img\">
                            <figure class=\"trick-content-img-figure\">
                                <img src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\">
                            </figure>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"trick-content-img\">
                        <figure class=\"tricks-content-card-img-figure\">
                            <a><img src=\"{{ asset('uploads/pictures/default-picture.png') }}\"></a>
                        </figure>
                    </div>
                {% endfor %}
            {% endif %}

            <div class=\"trick-content-more\">
                <input type=\"checkbox\" hidden class=\"trick-content-more-state\" id=\"read-more\">
                <div class=\"trick-content-more-target\">
                    <div class=\"trick-content-title-img\">
                        <h3>Photos</h3>
                    </div>
                    <div class=\"trick-content-thumbnail\">
                        {% for picture in trick.pictures %}
                            {% if not loop.first %}
                                <figure class=\"trick-content-thumbnail-figure\">
                                    <img src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\">
                                </figure>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"trick-content-title-videos\">
                        <h3>Vidéos</h3>
                    </div>
                    <div class=\"trick-content-videos\">
                        {% for video in trick.videos %}
                            <iframe src=\"{{ video.url }}\" width=\"50%\" frameborder=\"100\" width=\"1920\" height=\"1080\" allowfullscreen></iframe>
                        {% endfor %}
                    </div>
                </div>
                <label for=\"read-more\" class=\"trick-content-more-trigger_closed btn\">Voir plus</label>
                <label for=\"read-more\" class=\"trick-content-more-trigger_opened btn\">Voir Moins</label>
            </div>
            <div class=\"trick-content-description\">
                <p>{{ trick.description|nl2br }}</p>
            </div>
            <div class=\"trick-content-details\">
                <ul class=\"trick-content-details-list\">
                    <li>Date de création :
                        {{ trick.createdAt|date(\"d/m/Y\") }}</li>
                    {% if trick.updatedAt is not empty %}
                        <li>Date de modification :
                            {{ trick.updatedAt|date(\"d/m/Y\")}}</li>
                    {% endif %}
                    <li>Catégorie :
                        {{ trick.category.name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class=\"trick-comment\" id=\"comment\">
        <div class=\"trick-comment-title\">
            <h2>Commentaires</h2>
        </div>
        {% for comment in paginator.data %}
            <div class=\"trick-comment-content\">
                <div class=\"trick-comment-content-user\">
                    <img class=\"trick-comment-profile-picture\" src=\"{{ asset('uploads/profilePictures/'~ comment.user.profilePicture) }}\">
                    <h3>{{ comment.user.username }}</h3>
                </div>
                <div class=\"trick-comment-content-text\">
                    <h4>Le
                        {{ comment.createdAt|date(\"d/m/Y \\\\à H:i:s\",\"Europe/Paris\") }}</h4>
                    <p>{{ comment.content }}</p>
                </div>
                <hr>
            </div>
        {% else %}
            <div class=\"trick-comment-content\">
                <p>Il n'y a pas encore de commentaire sur cette figure.</p>
            </div>
        {% endfor %}
        {% if app.user %}
            <div class=\"trick-comment-add\">
                <div class=\"trick-comment-add-user\">
                    <img class=\"trick-comment-profile-picture\" src=\"{{ asset('uploads/profilePictures/'~ user.profilePicture) }}\">
                    <h3>{{ user.username }}</h3>
                </div>
                <div class=\"trick-comment-add-form\">
                    {{ form_start(form) }}
                    {{ form_row(form.content) }}
                    <input type=\"submit\" class=\"btn\" value=\"Valider\">
                    {{ form_end(form) }}
                </div>
            </div>
        {% endif %}
        {% include 'partial/pagination.html.twig' with {'route': 'trick_show'} %}
    </section>
{% endblock %}
{% block form_row %}
    <div class=\"trick-comment-add-form-row\">
        {{ form_widget(form) }}
        <div class=\"trick-comment-add-form-row-error\">
            {{ form_errors(form) }}
        </div>
    </div>
{% endblock %}
", "trick/show.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\trick\\show.html.twig");
    }
}
