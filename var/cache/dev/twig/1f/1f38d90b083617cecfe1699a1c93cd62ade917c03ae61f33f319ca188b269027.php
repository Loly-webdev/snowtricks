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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"about\">
        <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#tricks\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cover.jpg"), "html", null, true);
        echo "\" alt=\"cover\">
        </a>
        <div class=\"about-title\">
            <div class=\"h1 text-center\">Bienvenue sur le</div>
            <h1 class=\"text-center\">Site communautaire Snowtricks des tricks de snowboard</h1>
        </div>
        ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"about-content\">
                <p>Les figures de snowboard sont des sauts ou des manœuvres exécutées sur des snowboards pour le plaisir
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
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a>
                    </button>
                    <p class=\"about-content-p\">Déjà inscrit ?</p>
                    <button class=\"btn\" type=\"button\">
                        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a>
                    </button>
                </div>
            </div>
        ";
        } else {
            // line 37
            echo "            <div class=\"about-content\">
                <p>Vous êtes membre de la communauté Snowtricks.
                    <br>
                    Partagez vos connaissances et collaborer à l'apprentissage des figures de snowboard.</br>
                    <br>
                    Vous pouvez ajouter des nouvelles figures.
                </p>
                <button class=\"btn\" type=\"button\">
                    <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_new");
            echo "\">Ajouter</a>
                </button>
                <p>Vous pouvez également modifier les tricks de votre choix en ajoutant ou en supprimmant le descriptif,
                    des photos ou des vidéos.</p>
                <p class=\"about-content-p\">Se déconnecter ?</p>
                <button class=\"btn\" type=\"button\">
                    <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se déconnecter</a>
                </button>
            </div>
        ";
        }
        // line 55
        echo "    </section>
    <section class=\"tricks\" id=\"tricks\">
        <div class=\"tricks-title\">
            <h1>Tricks</h1>
        </div>
        <div class=\"tricks-content\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 62
            echo "                ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 62)]);
            // line 63
            echo "                ";
            $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 63)]);
            // line 64
            echo "                ";
            $context["delete_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 64)]);
            // line 65
            echo "                <div class=\"tricks-content-card\">
                    <div class=\"tricks-content-card-img\">
                        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", true, true, false, 67)) {
                // line 68
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", false, false, false, 68));
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
                    // line 69
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "                                    <figure class=\"tricks-content-card-img-figure\">
                                        <a href=\"";
                        // line 71
                        echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 71, $this->source); })()), "html", null, true);
                        echo "\"><img
                                                    src=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 72))), "html", null, true);
                        echo "\"></a>
                                    </figure>
                                ";
                    }
                    // line 75
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
                    // line 76
                    echo "                                <figure class=\"tricks-content-card-img-figure\">
                                    <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 77, $this->source); })()), "html", null, true);
                    echo "\"><img
                                                src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                    echo "\"></a>
                                </figure>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                        ";
            }
            // line 82
            echo "                    </div>
                    <div class=\"tricks-content-card-btn\">
                        <button class=\"btn\">
                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</a>
                        </button>
                        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
                // line 88
                echo "                            <div class=\"tricks-content-card-btn-icon\">
                                <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["delete_url"]) || array_key_exists("delete_url", $context) ? $context["delete_url"] : (function () { throw new RuntimeError('Variable "delete_url" does not exist.', 92, $this->source); })()), "html", null, true);
                echo "\" class=\"fas fa-trash-alt\"
                                   onclick=\"return confirm('Etes-vous sûr de vouloir supprimer cette figure ?');\"></a>
                            </div>
                        ";
            }
            // line 96
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </div>
        <div class=\"tricks-content-more\">
            <input type=\"checkbox\" hidden class=\"tricks-content-more-state\" id=\"read-more\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks_more"]) || array_key_exists("tricks_more", $context) ? $context["tricks_more"] : (function () { throw new RuntimeError('Variable "tricks_more" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 103
            echo "                ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 103)]);
            // line 104
            echo "                ";
            $context["edit_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 104)]);
            // line 105
            echo "                <div class=\"tricks-content-more-target tricks-content-card\">
                    <div class=\"tricks-content-card-img\">
                        ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", true, true, false, 107)) {
                // line 108
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trick"], "pictures", [], "any", false, false, false, 108));
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
                    // line 109
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 109)) {
                        // line 110
                        echo "                                    <figure class=\"tricks-content-card-img-figure\">
                                        <a href=\"";
                        // line 111
                        echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 111, $this->source); })()), "html", null, true);
                        echo "\"><img
                                                    src=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "path", [], "any", false, false, false, 112))), "html", null, true);
                        echo "\"
                                                    alt=\"";
                        // line 113
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "caption", [], "any", false, false, false, 113), "html", null, true);
                        echo "\"></a>
                                    </figure>
                                ";
                    }
                    // line 116
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
                    // line 117
                    echo "                                <figure class=\"tricks-content-card-img-figure\">
                                    <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 118, $this->source); })()), "html", null, true);
                    echo "\"><img
                                                src=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/pictures/default-picture.png"), "html", null, true);
                    echo "\"
                                                alt=\"Snowtricks : image par défaut\"></a>
                                </figure>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                        ";
            }
            // line 124
            echo "                    </div>
                    <div class=\"tricks-content-card-btn\">
                        <button class=\"btn\">
                            <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 127), "html", null, true);
            echo "</a>
                        </button>
                        ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129)) {
                // line 130
                echo "                            <div class=\"tricks-content-card-btn-icon\">
                                <a href=\"";
                // line 131
                echo twig_escape_filter($this->env, (isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 131, $this->source); })()), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <form method=\"POST\" action=\"#\">
                                    <input type=\"hidden\" name=\"_method\" value=\"delete\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 136))), "html", null, true);
                echo "\">
                                    <input class=\"fas fa-trash-alt\" type=\"submit\" value=\"&#xf2ed;\"
                                           onclick=\"return confirm('Etes-vous sûr ?');\">
                                </form>
                            </div>
                        ";
            }
            // line 142
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            <label for=\"read-more\" class=\"tricks-content-more-trigger_closed btn\">Voir plus</label>
            <label for=\"read-more\" class=\"tricks-content-more-trigger_opened btn\">Voir Moins</label>
        </div>
        <div class=\"tricks-arrow\">
            <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#tricks\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow-up.png"), "html", null, true);
        echo "\" class=\"arrow\"></a>
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
        return array (  418 => 149,  412 => 145,  404 => 142,  395 => 136,  387 => 131,  384 => 130,  382 => 129,  375 => 127,  370 => 124,  367 => 123,  357 => 119,  353 => 118,  350 => 117,  337 => 116,  331 => 113,  327 => 112,  323 => 111,  320 => 110,  317 => 109,  298 => 108,  296 => 107,  292 => 105,  289 => 104,  286 => 103,  282 => 102,  277 => 99,  269 => 96,  262 => 92,  256 => 89,  253 => 88,  251 => 87,  244 => 85,  239 => 82,  236 => 81,  227 => 78,  223 => 77,  220 => 76,  207 => 75,  201 => 72,  197 => 71,  194 => 70,  191 => 69,  172 => 68,  170 => 67,  166 => 65,  163 => 64,  160 => 63,  157 => 62,  153 => 61,  145 => 55,  138 => 51,  129 => 45,  119 => 37,  111 => 32,  104 => 28,  86 => 12,  84 => 11,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <section class=\"about\">
        <a href=\"{{ path('home') }}#tricks\">
            <img src=\"{{ asset('images/cover.jpg') }}\" alt=\"cover\">
        </a>
        <div class=\"about-title\">
            <div class=\"h1 text-center\">Bienvenue sur le</div>
            <h1 class=\"text-center\">Site communautaire Snowtricks des tricks de snowboard</h1>
        </div>
        {% if not app.user %}
            <div class=\"about-content\">
                <p>Les figures de snowboard sont des sauts ou des manœuvres exécutées sur des snowboards pour le plaisir
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
                <p>Vous êtes membre de la communauté Snowtricks.
                    <br>
                    Partagez vos connaissances et collaborer à l'apprentissage des figures de snowboard.</br>
                    <br>
                    Vous pouvez ajouter des nouvelles figures.
                </p>
                <button class=\"btn\" type=\"button\">
                    <a href=\"{{ path('trick_new') }}\">Ajouter</a>
                </button>
                <p>Vous pouvez également modifier les tricks de votre choix en ajoutant ou en supprimmant le descriptif,
                    des photos ou des vidéos.</p>
                <p class=\"about-content-p\">Se déconnecter ?</p>
                <button class=\"btn\" type=\"button\">
                    <a href=\"{{ path('logout') }}\">Se déconnecter</a>
                </button>
            </div>
        {% endif %}
    </section>
    <section class=\"tricks\" id=\"tricks\">
        <div class=\"tricks-title\">
            <h1>Tricks</h1>
        </div>
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
                                        <a href=\"{{ show_url }}\"><img
                                                    src=\"{{ asset('uploads/pictures/' ~ picture.path) }}\"></a>
                                    </figure>
                                {% endif %}
                            {% else %}
                                <figure class=\"tricks-content-card-img-figure\">
                                    <a href=\"{{ show_url }}\"><img
                                                src=\"{{ asset('uploads/pictures/default-picture.png') }}\"></a>
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
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trick.id) }}\">
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
            <a href=\"{{ path('home') }}#tricks\"><img src=\"{{ asset('build/images/arrow-up.png') }}\" class=\"arrow\"></a>
        </div>
    </section>
{% endblock %}
", "main/index.html.twig", "C:\\wamp64\\www\\snowtricks\\templates\\main\\index.html.twig");
    }
}
