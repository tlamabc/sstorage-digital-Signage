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

/* dashboard-icon-page.twig */
class __TwigTemplate_e1d62f731f1a8cd317629b395ade9089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dashboard-icon-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-icon-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-icon-page.twig", 27);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 28
        yield "    <div id=\"dashbuttons\">
        ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 29)) {
            // line 30
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/scheduleview.png"], "method", false, false, false, 32), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 33
            echo __("Schedule");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 37
        yield "
        ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 38)) {
            // line 39
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/presentations.png"], "method", false, false, false, 41), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 42
            echo __("Layouts");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 46
        yield "
        ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 47)) {
            // line 48
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/content.png"], "method", false, false, false, 50), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 51
            echo __("Library");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 55
        yield "
        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 56)) {
            // line 57
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/layouts.png"], "method", false, false, false, 59), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 60
            echo __("Templates");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 64
        yield "
        ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 65) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 65)))) {
            // line 66
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/users.png"], "method", false, false, false, 68), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 69
            echo __("Users");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 73
        yield "
        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperUser", [], "method", false, false, false, 74)) {
            // line 75
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/settings.png"], "method", false, false, false, 77), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 78
            echo __("Settings");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 82
        yield "
        <div class=\"dashicons\">
            <a href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("license.view"), "html", null, true);
        yield "\">
                <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/license.png"], "method", false, false, false, 85), "html", null, true);
        yield "\" class=\"dash_button\" />
                <span class=\"dash_text\">";
        // line 86
        echo __("About");
        yield "</span>
            </a>
        </div>

        ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["troubleshooting.fault"], "method", false, false, false, 90)) {
            // line 91
            yield "            <div class=\"dashicons\">
                <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/help.png"], "method", false, false, false, 93), "html", null, true);
            yield "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 94
            echo __("Report Fault");
            yield "</span>
                </a>
            </div>
        ";
        }
        // line 98
        yield "
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard-icon-page.twig";
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
        return array (  242 => 98,  235 => 94,  231 => 93,  227 => 92,  224 => 91,  222 => 90,  215 => 86,  211 => 85,  207 => 84,  203 => 82,  196 => 78,  192 => 77,  188 => 76,  185 => 75,  183 => 74,  180 => 73,  173 => 69,  169 => 68,  165 => 67,  162 => 66,  160 => 65,  157 => 64,  150 => 60,  146 => 59,  142 => 58,  139 => 57,  137 => 56,  134 => 55,  127 => 51,  123 => 50,  119 => 49,  116 => 48,  114 => 47,  111 => 46,  104 => 42,  100 => 41,  96 => 40,  93 => 39,  91 => 38,  88 => 37,  81 => 33,  77 => 32,  73 => 31,  70 => 30,  68 => 29,  65 => 28,  54 => 27,  50 => 26,  45 => 23,  43 => 24,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard-icon-page.twig", "/var/www/cms/views/dashboard-icon-page.twig");
    }
}
