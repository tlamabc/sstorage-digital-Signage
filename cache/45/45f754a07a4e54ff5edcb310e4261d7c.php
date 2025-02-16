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

/* campaign-preview.twig */
class __TwigTemplate_bb4360bbc89878844fd7079c53a1c471 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "campaign-preview.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "campaign-preview.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">
            ";
        // line 29
        $context["campaignName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 29);
        // line 30
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "isLayoutSpecific", [], "any", false, false, false, 30)) {
            // line 31
            yield "                ";
            /* xgettext:no-php-format */            echo strtr(__("Layout Preview for %campaignName%"), array("%campaignName%" => ($context["campaignName"] ?? null), ));
            // line 32
            yield "            ";
        } else {
            // line 33
            yield "                ";
            /* xgettext:no-php-format */            echo strtr(__("Campaign Preview for %campaignName%"), array("%campaignName%" => ($context["campaignName"] ?? null), ));
            // line 34
            yield "            ";
        }
        // line 35
        yield "        </div>
        <div class=\"widget-body\">
            <p><b>";
        // line 37
        echo __("total duration");
        yield "</b> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\DateFormatTwigExtension']->dateFormat(($context["duration"] ?? null)), "html", null, true);
        yield " <i>(";
        echo __("hours:min:sec");
        yield ")</i></p>
            <p><b>";
        // line 38
        echo __("number of layouts");
        yield "</b> : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["campaign"] ?? null), "numberLayouts", [], "any", false, false, false, 38), "html", null, true);
        yield " </p>
            <div class=\"row clearfix\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extendedLayouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extendedLayout"]) {
            // line 41
            yield "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"embed-responsive embed-responsive-4by3\">
                                    <div class=\"embed-responsive-item preview-container\"
                                         data-url=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 46), "layoutId", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">
                                        <div id=\"preview_canvas_container_";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 47), "layoutId", [], "any", false, false, false, 47), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <small>";
            // line 54
            echo __("id");
            yield ":</small> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 54), "layoutId", [], "any", false, false, false, 54), "html", null, true);
            yield "<br/>
                                <small>";
            // line 55
            echo __("name");
            yield ":</small> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 55), "layout", [], "any", false, false, false, 55), "html", null, true);
            yield "<br/>
                                <small>";
            // line 56
            echo __("duration");
            yield ":</small> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Xibo\Twig\DateFormatTwigExtension']->dateFormat(CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "duration", [], "any", false, false, false, 56)), "html", null, true);
            yield "<br/>
                            </div>
                            <div class=\"col-sm-4\">
                                <a class=\"btn btn-white\" href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 59), "layoutId", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" target=\"_blank\">
                                    ";
            // line 60
            echo __("Open full screen");
            // line 61
            yield "                                    <span class=\"fa fa-tablet\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extendedLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 72
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 73), "html", null, true);
        yield "dist/preview.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 74), "html", null, true);
        yield "dist/vendor/html5preloader/html5Preloader.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        var previewTranslations = {};
        // Translations we want always available
        ";
        // line 79
        yield "            previewTranslations.actionControllerTitle = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Webhook Controller"), "js", null, true);
        yield "\";
            previewTranslations.navigateToLayout = \"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to layout with code [layoutTag]?"), "js", null, true);
        yield "\";
            previewTranslations.emptyRegionMessage = \"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty region!"), "js", null, true);
        yield "\";
            previewTranslations.nextItem = \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Item"), "js", null, true);
        yield "\";
            previewTranslations.previousItem = \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Item"), "js", null, true);
        yield "\";
            previewTranslations.navWidget = \"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Widget"), "js", null, true);
        yield "\";
            previewTranslations.navLayout = \"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Layout"), "js", null, true);
        yield "\";
            previewTranslations.widgetId = \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget ID"), "js", null, true);
        yield "\";
            previewTranslations.layoutCode = \"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Code"), "js", null, true);
        yield "\";
            previewTranslations.target = \"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Target"), "js", null, true);
        yield "\";
        ";
        // line 90
        yield "
        (function(\$){
          \$(document).ready(function(){
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extendedLayouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extendedLayout"]) {
            // line 94
            yield "                var iframe = \$('<iframe>', {
                    src: '";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 95), "layoutId", [], "any", false, false, false, 95)]), "html", null, true);
            yield "', // URL to load in the iframe
                    id: 'player_frame_";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 96), "layoutId", [], "any", false, false, false, 96), "html", null, true);
            yield "',
                    frameborder: 0,
                    css: {
                        position: 'absolute',
                        'pointer-events': 'unset',
                        top: 0,
                        left: 0
                    }
                });

                // Append the iframe to the container
                \$('#preview_canvas_container_";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 107), "layoutId", [], "any", false, false, false, 107), "html", null, true);
            yield "').append(iframe);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extendedLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "          });
        }(jQuery));
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "campaign-preview.twig";
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
        return array (  275 => 109,  267 => 107,  253 => 96,  249 => 95,  246 => 94,  242 => 93,  237 => 90,  233 => 88,  229 => 87,  225 => 86,  221 => 85,  217 => 84,  213 => 83,  209 => 82,  205 => 81,  201 => 80,  196 => 79,  190 => 75,  180 => 74,  169 => 73,  165 => 72,  157 => 67,  146 => 61,  144 => 60,  140 => 59,  132 => 56,  126 => 55,  120 => 54,  110 => 47,  106 => 46,  99 => 41,  95 => 40,  88 => 38,  80 => 37,  76 => 35,  73 => 34,  70 => 33,  67 => 32,  64 => 31,  61 => 30,  59 => 29,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-preview.twig", "/var/www/cms/views/campaign-preview.twig");
    }
}
