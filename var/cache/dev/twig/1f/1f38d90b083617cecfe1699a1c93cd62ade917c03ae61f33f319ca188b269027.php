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

/* main/index.html.twig */
class __TwigTemplate_16353560740cfd4f55a76ff0c1ef59a1fc946fc148ee16991882c2d38ebb70d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section>
        <img class=\"mt-3 shadow img-fluid\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cover.jpg"), "html", null, true);
        echo "\" alt=\"cover\">
        <div class=\"text-center text-primary\">
            <div class=\"h1 mt-5\">Bienvenue sur le</div>
            <h1>Site communautaire Snowtricks</h1>
            <div class=\"h1 mb-5\">des tricks de snowboard</div>
        </div>
        ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"about-content\">
                <p>
                    Les figures de snowboard sont des sauts ou des manœuvres exécutées sur des snowboards pour le
                    plaisir
                    ou lors de compétitions. Le plus souvent, ces manœuvres sont effectuées sur des obstacles tels que
                    des sauts, des halfpipes , des quarterpipes , des hanches, des mains courantes, des funbox ou des
                    rebords, ou à la surface de la neige. Beaucoup ont leurs origines dans des sports de glisse plus
                    anciens comme le skateboard et le surf.
                    <br>
                    « J'ai un bon pop sur les frontside nose-roll nollies parce que je les fais à partir d’un carve ».
                    Si
                    vous ne comprenez rien à cette phrase, ce site est fait pour vous.
                    <br>
                    Ce site a été créé pour faire découvrir et partager les figures de snowboard. Inscrivez-vous pour
                    devenir membre de la communauté et collaborer à l'apprentissage des figures de snowboard.
                </p>
                <div class=\"about-content-btn\">
                    <button class=\"btn\" type=\"button\">
                        <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a>
                    </button>
                    <p class=\"about-content-p\">Déjà inscrit ?</p>
                    <button class=\"btn\" type=\"button\">
                        <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a>
                    </button>
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div class=\"about-content\">
                <p>
                    Vous êtes membre de la communauté Snowtricks.
                    <br>
                    Partagez vos connaissances et collaborer à l'apprentissage des figures de snowboard.</br>
                    <br>
                    Vous pouvez ajouter des nouvelles figures.
                </p>
                <button class=\"mt-1 mb-3 btn-round-shadow btn btn-primary\" type=\"button\">
                    <a class=\"text-light\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_new");
            echo "\">
                        <span class=\"fas fa-snowboarding\"></span>
                        Nouvelle trick
                    </a>
                </button>
                <p>
                    Vous pouvez également modifier les tricks de votre choix en ajoutant ou en supprimmant le
                    descriptif,
                    des photos ou des vidéos.</p>
            </div>
        ";
        }
        // line 59
        echo "    </section>
    <section class=\"mt-5\" id=\"tricks\">
        <h2 class=\"h1 my-3 text-center\">Tricks</h2>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 64
            echo "                ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 64)]);
            // line 65
            echo "                ";
            $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 65)]);
            // line 66
            echo "                ";
            $context["delete_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 66)]);
            // line 67
            echo "                <div class=\"col my-2\">
                    <div class=\"card h-100\">
                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", true, true, false, 69)) {
                // line 70
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", false, false, false, 70));
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
                    // line 71
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 71)) {
                        // line 72
                        echo "                                    <figure class=\"card-img-top text-center\">
                                        <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 73, $this->source); })()), "html", null, true);
                        echo "\">
                                            <img class=\"img-fluid\" src=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 74))), "html", null, true);
                        echo "\"
                                                 alt=\"\">
                                        </a>
                                    </figure>
                                ";
                    }
                    // line 79
                    echo "                            ";
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
                    // line 80
                    echo "                                <figure class=\"card-img-top text-center\">
                                    <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo "\">
                                        <img class=\"img-fluid\" src=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                    echo "\"
                                             alt=\"\">
                                    </a>
                                </figure>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                        ";
            }
            // line 88
            echo "                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</a>
                            </h5>
                        </div>
                        <div class=\"card-footer\">
                            ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) {
                // line 95
                echo "                                <div class=\"tricks-content-card-btn-icon\">
                                    <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 96, $this->source); })()), "html", null, true);
                echo "\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["delete_url"]) || array_key_exists("delete_url", $context) ? $context["delete_url"] : (function () { throw new RuntimeError('Variable "delete_url" does not exist.', 99, $this->source); })()), "html", null, true);
                echo "\" class=\"fas fa-trash-alt\"
                                       onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                                </div>
                            ";
            }
            // line 103
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            <div class=\"tricks-content-more\">
                <input type=\"checkbox\" hidden class=\"tricks-content-more-state\" id=\"read-more\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks_more"]) || array_key_exists("tricks_more", $context) ? $context["tricks_more"] : (function () { throw new RuntimeError('Variable "tricks_more" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 110
            echo "                    ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 110)]);
            // line 111
            echo "                    ";
            $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 111)]);
            // line 112
            echo "                    <div class=\"tricks-content-more-target tricks-content-card\">
                        <div class=\"tricks-content-card-img\">
                            ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", true, true, false, 114)) {
                // line 115
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", false, false, false, 115));
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
                    // line 116
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "                                        <figure class=\"tricks-content-card-img-figure\">
                                            <a href=\"";
                        // line 118
                        echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 118, $this->source); })()), "html", null, true);
                        echo "\"><img
                                                        src=\"";
                        // line 119
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 119))), "html", null, true);
                        echo "\"
                                                        alt=\"";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "caption", [], "any", false, false, false, 120), "html", null, true);
                        echo "\"></a>
                                        </figure>
                                    ";
                    }
                    // line 123
                    echo "                                ";
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
                    // line 124
                    echo "                                    <figure class=\"tricks-content-card-img-figure\">
                                        <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 125, $this->source); })()), "html", null, true);
                    echo "\"><img
                                                    src=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                    echo "\"
                                                    alt=\"Snowtricks : image par défaut\"></a>
                                    </figure>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                            ";
            }
            // line 131
            echo "                        </div>
                        <div class=\"tricks-content-card-btn\">
                            <button class=\"btn\">
                                <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</a>
                            </button>
                            ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136)) {
                // line 137
                echo "                                <div class=\"tricks-content-card-btn-icon\">
                                    <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 138, $this->source); })()), "html", null, true);
                echo "\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <form method=\"POST\" action=\"#\">
                                        <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 144))), "html", null, true);
                echo "\">
                                        <input class=\"fas fa-trash-alt\" type=\"submit\" value=\"&#xf2ed;\"
                                               onclick=\"return confirm('Etes-vous sûr ?');\">
                                    </form>
                                </div>
                            ";
            }
            // line 150
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                <label for=\"read-more\" class=\"tricks-content-more-trigger_closed btn\">Voir plus</label>
                <label for=\"read-more\" class=\"tricks-content-more-trigger_opened btn\">Voir Moins</label>
            </div>
            <div class=\"tricks-arrow\">
                <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#tricks\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow-up.png"), "html", null, true);
        echo "\"
                                                         class=\"arrow\"></a>
            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 157,  433 => 153,  425 => 150,  416 => 144,  407 => 138,  404 => 137,  402 => 136,  395 => 134,  390 => 131,  387 => 130,  377 => 126,  373 => 125,  370 => 124,  357 => 123,  351 => 120,  347 => 119,  343 => 118,  340 => 117,  337 => 116,  318 => 115,  316 => 114,  312 => 112,  309 => 111,  306 => 110,  302 => 109,  298 => 107,  289 => 103,  282 => 99,  276 => 96,  273 => 95,  271 => 94,  262 => 90,  258 => 88,  255 => 87,  244 => 82,  240 => 81,  237 => 80,  224 => 79,  216 => 74,  212 => 73,  209 => 72,  206 => 71,  187 => 70,  185 => 69,  181 => 67,  178 => 66,  175 => 65,  172 => 64,  168 => 63,  162 => 59,  148 => 48,  137 => 39,  129 => 34,  122 => 30,  102 => 12,  100 => 11,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}
{% block content %}
    <section>
        <img class=\"mt-3 shadow img-fluid\" src=\"{{ asset('images/cover.jpg') }}\" alt=\"cover\">
        <div class=\"text-center text-primary\">
            <div class=\"h1 mt-5\">Bienvenue sur le</div>
            <h1>Site communautaire Snowtricks</h1>
            <div class=\"h1 mb-5\">des tricks de snowboard</div>
        </div>
        {% if not app.user %}
            <div class=\"about-content\">
                <p>
                    Les figures de snowboard sont des sauts ou des manœuvres exécutées sur des snowboards pour le
                    plaisir
                    ou lors de compétitions. Le plus souvent, ces manœuvres sont effectuées sur des obstacles tels que
                    des sauts, des halfpipes , des quarterpipes , des hanches, des mains courantes, des funbox ou des
                    rebords, ou à la surface de la neige. Beaucoup ont leurs origines dans des sports de glisse plus
                    anciens comme le skateboard et le surf.
                    <br>
                    « J'ai un bon pop sur les frontside nose-roll nollies parce que je les fais à partir d’un carve ».
                    Si
                    vous ne comprenez rien à cette phrase, ce site est fait pour vous.
                    <br>
                    Ce site a été créé pour faire découvrir et partager les figures de snowboard. Inscrivez-vous pour
                    devenir membre de la communauté et collaborer à l'apprentissage des figures de snowboard.
                </p>
                <div class=\"about-content-btn\">
                    <button class=\"btn\" type=\"button\">
                        <a href=\"{{ path('register') }}\">S'inscrire</a>
                    </button>
                    <p class=\"about-content-p\">Déjà inscrit ?</p>
                    <button class=\"btn\" type=\"button\">
                        <a href=\"{{ path('login') }}\">Se connecter</a>
                    </button>
                </div>
            </div>
        {% else %}
            <div class=\"about-content\">
                <p>
                    Vous êtes membre de la communauté Snowtricks.
                    <br>
                    Partagez vos connaissances et collaborer à l'apprentissage des figures de snowboard.</br>
                    <br>
                    Vous pouvez ajouter des nouvelles figures.
                </p>
                <button class=\"mt-1 mb-3 btn-round-shadow btn btn-primary\" type=\"button\">
                    <a class=\"text-light\" href=\"{{ path('trick_new') }}\">
                        <span class=\"fas fa-snowboarding\"></span>
                        Nouvelle trick
                    </a>
                </button>
                <p>
                    Vous pouvez également modifier les tricks de votre choix en ajoutant ou en supprimmant le
                    descriptif,
                    des photos ou des vidéos.</p>
            </div>
        {% endif %}
    </section>
    <section class=\"mt-5\" id=\"tricks\">
        <h2 class=\"h1 my-3 text-center\">Tricks</h2>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            {% for trick in tricks %}
                {% set show_url = path('trick_show', {'slug':trick.slug}) %}
                {% set edit_url = path('trick_edit', {'slug':trick.slug}) %}
                {% set delete_url = path('trick_delete', {'slug':trick.slug}) %}
                <div class=\"col my-2\">
                    <div class=\"card h-100\">
                        {% if trick.pictures is defined %}
                            {% for picture in trick.pictures %}
                                {% if loop.first %}
                                    <figure class=\"card-img-top text-center\">
                                        <a href=\"{{ show_url }}\">
                                            <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\"
                                                 alt=\"\">
                                        </a>
                                    </figure>
                                {% endif %}
                            {% else %}
                                <figure class=\"card-img-top text-center\">
                                    <a href=\"{{ show_url }}\">
                                        <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/default-picture.png') }}\"
                                             alt=\"\">
                                    </a>
                                </figure>
                            {% endfor %}
                        {% endif %}
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <a href=\"{{ show_url }}\">{{ trick.name }}</a>
                            </h5>
                        </div>
                        <div class=\"card-footer\">
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
                </div>
            {% endfor %}
            <div class=\"tricks-content-more\">
                <input type=\"checkbox\" hidden class=\"tricks-content-more-state\" id=\"read-more\">
                {% for trick in tricks_more %}
                    {% set show_url = path('trick_show', {'slug':trick.slug}) %}
                    {% set edit_url = path('trick_edit', {'slug':trick.slug}) %}
                    <div class=\"tricks-content-more-target tricks-content-card\">
                        <div class=\"tricks-content-card-img\">
                            {% if trick.pictures is defined %}
                                {% for picture in trick.pictures %}
                                    {% if loop.first %}
                                        <figure class=\"tricks-content-card-img-figure\">
                                            <a href=\"{{ show_url }}\"><img
                                                        src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\"
                                                        alt=\"{{ picture.caption }}\"></a>
                                        </figure>
                                    {% endif %}
                                {% else %}
                                    <figure class=\"tricks-content-card-img-figure\">
                                        <a href=\"{{ show_url }}\"><img
                                                    src=\"{{ asset('uploads/pictures/default-picture.png') }}\"
                                                    alt=\"Snowtricks : image par défaut\"></a>
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
                                    <form method=\"POST\" action=\"#\">
                                        <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('delete' ~ trick.id) }}\">
                                        <input class=\"fas fa-trash-alt\" type=\"submit\" value=\"&#xf2ed;\"
                                               onclick=\"return confirm('Etes-vous sûr ?');\">
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
                <label for=\"read-more\" class=\"tricks-content-more-trigger_closed btn\">Voir plus</label>
                <label for=\"read-more\" class=\"tricks-content-more-trigger_opened btn\">Voir Moins</label>
            </div>
            <div class=\"tricks-arrow\">
                <a href=\"{{ path('home') }}#tricks\"><img src=\"{{ asset('build/images/arrow-up.png') }}\"
                                                         class=\"arrow\"></a>
            </div>
    </section>
{% endblock %}
", "main/index.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\main\\index.html.twig");
    }
}
