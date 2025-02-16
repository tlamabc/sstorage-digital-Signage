<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* authed.twig */
class __TwigTemplate_a5be628f66c829ac51a4f6b72a3e6859 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageFooter' => [$this, 'block_pageFooter'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "authed.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        $context["horizontalNav"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["navigationMenuPosition", CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 26)], "method", false, false, false, 26) == "horizontal");
        // line 27
        yield "
    ";
        // line 28
        if ( !($context["hideNavigation"] ?? null)) {
            // line 29
            yield "        ";
            $context["hideNavigation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["hideNavigation", "0"], "method", false, false, false, 29);
            // line 30
            yield "    ";
        }
        // line 31
        yield "
    <div ";
        // line 32
        if ((((($context["hideNavigation"] ?? null) == "0") &&  !($context["horizontalNav"] ?? null)) &&  !($context["forceHide"] ?? null))) {
            yield "id=\"page-wrapper\"";
        }
        yield " class=\"active\">

        ";
        // line 34
        if (((($context["hideNavigation"] ?? null) == "0") &&  !($context["forceHide"] ?? null))) {
            // line 35
            yield "            ";
            if (($context["horizontalNav"] ?? null)) {
                // line 36
                yield "                <nav class=\"navbar navbar-default navbar-expand-lg\">
                    <a class=\"navbar-brand xibo-logo-container\" href=\"#\">
                        <img class=\"xibo-logo\" src=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 38), "html", null, true);
                yield "\">
                    </a>

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                        <span class=\"fa fa-bars\"></span>
                    </button>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"navbar-collapse collapse justify-content-between\" id=\"navbar-collapse-1\">
                        ";
                // line 48
                yield from                 $this->loadTemplate("authed-topbar.twig", "authed.twig", 48)->unwrap()->yield($context);
                // line 49
                yield "
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
                // line 51
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 51);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    yield from $__internal_compile_0->unwrap()->yield($context);
                }
                // line 52
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["drawer"], "method", false, false, false, 52)) {
                    // line 53
                    yield "                                ";
                    yield from                     $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 53)->unwrap()->yield($context);
                    // line 54
                    yield "                            ";
                }
                // line 55
                yield "                            ";
                yield from                 $this->loadTemplate("authed-user-menu.twig", "authed.twig", 55)->unwrap()->yield($context);
                // line 56
                yield "                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            ";
            } else {
                // line 60
                yield "                <div class=\"navbar-collapse navbar-collapse-side collapse\" id=\"navbar-collapse-1\">
                    ";
                // line 61
                yield from                 $this->loadTemplate("authed-sidebar.twig", "authed.twig", 61)->unwrap()->yield($context);
                // line 62
                yield "                </div>
            ";
            }
            // line 64
            yield "        ";
        }
        // line 65
        yield "
        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                ";
        // line 68
        if ((( !($context["horizontalNav"] ?? null) || (($context["hideNavigation"] ?? null) == "1")) || ($context["forceHide"] ?? null))) {
            // line 69
            yield "                <div class=\"row header header-side\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left xibo-logo-container\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 72), "html", null, true);
            yield "\"></div>
                        </div>
                        ";
            // line 74
            if ( !($context["forceHide"] ?? null)) {
                // line 75
                yield "                            ";
                if (( !($context["hideNavigation"] ?? null) == "1")) {
                    // line 76
                    yield "                                <button type=\"button\" class=\"pull-right navbar-toggler navbar-toggler-side\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                                    <span class=\"fa fa-bars\"></span>
                                </button>
                            ";
                }
                // line 80
                yield "                            <div class=\"user pull-right\">
                                ";
                // line 81
                yield from                 $this->loadTemplate("authed-user-menu.twig", "authed.twig", 81)->unwrap()->yield($context);
                // line 82
                yield "                            </div>
                            ";
                // line 83
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["drawer"], "method", false, false, false, 83)) {
                    // line 84
                    yield "                            <div class=\"user user-notif pull-right\">
                                ";
                    // line 85
                    yield from                     $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 85)->unwrap()->yield($context);
                    // line 86
                    yield "                            </div>
                            ";
                }
                // line 88
                yield "                            ";
                $__internal_compile_1 = null;
                try {
                    $__internal_compile_1 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 88);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_1) {
                    yield from $__internal_compile_1->unwrap()->yield($context);
                }
                // line 89
                yield "                        ";
            }
            // line 90
            yield "                    </div>
                </div>
                ";
        }
        // line 93
        yield "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 95
        yield from $this->unwrap()->yieldBlock('actionMenu', $context, $blocks);
        // line 96
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('pageContent', $context, $blocks);
        // line 97
        yield "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 101
        yield from $this->unwrap()->yieldBlock('pageFooter', $context, $blocks);
        // line 102
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 108
        $context["helpLinks"] = CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLinksForPage", [($context["route"] ?? null)], "method", false, false, false, 108);
        // line 109
        yield "    ";
        $context["isXiboThemed"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 109) == "Xibo");
        // line 110
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["helpLinks"] ?? null)) > 0)) {
            // line 111
            yield "        ";
            // line 112
            yield "        <div id=\"help-pane\" class=\"d-none d-md-block help-pane\">
            <div class=\"card help-pane-card border-dark\" style=\"display: none;\">
                <div class=\"card-header\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield " <i class=\"close-icon fa fa-times\"></i></div>
                <ul class=\"list-group list-group-flush\">
                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["helpLinks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 117
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "isAllowWhiteLabel", [], "any", false, false, false, 117) || ($context["isXiboThemed"] ?? null))) {
                    // line 118
                    yield "                            <li class=\"list-group-item\">
                                <a href=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 119), "html", null, true);
                    yield "\" target=\"_blank\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 119), "html", null, true);
                    yield "</a>
                                ";
                    // line 120
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "summary", [], "any", false, false, false, 120)) {
                        // line 121
                        yield "                                    <br/>
                                    ";
                        // line 122
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "summary", [], "any", false, false, false, 122);
                        yield "
                                ";
                    }
                    // line 124
                    yield "                            </li>
                        ";
                }
                // line 126
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                </ul>
                <div class=\"card-footer\">
                    <a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "method", false, false, false, 129), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Visit the user manual"), "html", null, true);
            yield "</a>
                </div>
            </div>
            <div class=\"help-pane-icon\">
                <i class=\"fa fa-question-circle\"></i>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 95
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 96
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 101
    public function block_pageFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 139
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        yield "    ";
        // line 141
        yield "    ";
        yield from         $this->loadTemplate("include-file-upload.twig", "authed.twig", 141)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  340 => 141,  338 => 140,  334 => 139,  327 => 101,  320 => 96,  313 => 95,  297 => 129,  293 => 127,  287 => 126,  283 => 124,  278 => 122,  275 => 121,  273 => 120,  267 => 119,  264 => 118,  261 => 117,  257 => 116,  252 => 114,  248 => 112,  246 => 111,  243 => 110,  240 => 109,  238 => 108,  230 => 102,  228 => 101,  222 => 97,  219 => 96,  217 => 95,  213 => 93,  208 => 90,  205 => 89,  194 => 88,  190 => 86,  188 => 85,  185 => 84,  183 => 83,  180 => 82,  178 => 81,  175 => 80,  169 => 76,  166 => 75,  164 => 74,  159 => 72,  154 => 69,  152 => 68,  147 => 65,  144 => 64,  140 => 62,  138 => 61,  135 => 60,  129 => 56,  126 => 55,  123 => 54,  120 => 53,  117 => 52,  107 => 51,  103 => 49,  101 => 48,  88 => 38,  84 => 36,  81 => 35,  79 => 34,  72 => 32,  69 => 31,  66 => 30,  63 => 29,  61 => 28,  58 => 27,  55 => 26,  51 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed.twig", "/var/www/cms/views/authed.twig");
    }
}
